<?php
namespace App\Controllers;
use CodeIgniter\Controller;
class Form extends BaseController
{
    public function action_update($action = null)
	{
		$agent = $this->request->getUserAgent();
		$session['session'] = $this->session->get('visitor');
        $error = array('success' => false,'error_token'=>array('cname'=>csrf_token(),'cvalue'=>csrf_hash()), 'message' =>array(),'border'=>true);
        // $supported_image = array('gif','jpg','jpeg','png');
        $frmdata = $this->request->getPost();
        
        if($action == 'contact')
        {
			$check = $this->validate([
                'name' => ['rules' =>  'required','errors' =>  ['required' => 'Name is required']],
                'phone' => ['rules' =>  'required','errors'|'is_natural'|'exact_length[10]' =>  ['required' => 'phone is required']],
                'email_id' => ['rules' =>  'required','errors'|'valid_email' =>  ['required' => 'Email id is required']],
                'purpose' => ['rules' =>  'required','errors' =>  ['required' => 'Event is required']],
                'message' => ['rules' =>  'required','errors' =>  ['required' => 'Message id is required']]
            ]);
            if($check)
            {
                $frmdata = mysql_clean($frmdata);
                $data = array(
                    'ip_address' =>$_SERVER['REMOTE_ADDR'],
                    //'system_info' => $session['session']['system_info'],
                    'insert_time' => date('Y-m-d H:i:s'),
                    'name' => $frmdata['name'],
                    'contact' => $frmdata['phone'],
                    'email_id' => $frmdata['email_id'],
                    'purpose' => $frmdata['purpose'],
                    'message' => $frmdata['message']
                );
                $sql = $this->curd_model->insert('frm_contact', $data);
                if($sql)
				{
                    $error['success'] = true;
                    $error['alert1'] = 'Thank you for registration with us.';
                
                }
				else
				{
                    $error['message']['refrence'] = 'Error in data storing please try again.';
                }
            }else {
                foreach ($_POST as $key => $value) {
                    if ($this->validation->hasError($key)) {
                        $error['message'][$key] = $this->validation->getError($key);
                    }
                }
            }
	    }
        else if($action == 'getquote')
        {
			$check = $this->validate([
                'name' => ['rules' =>  'required','errors' =>  ['required' => 'Name is required']],
                'phone' => ['rules' =>  'required','errors'|'is_natural'|'exact_length[10]' =>  ['required' => 'phone is required']],
                'email_id' => ['rules' =>  'required','errors'|'valid_email' =>  ['required' => 'Email id is required']],
                'message' => ['rules' =>  'required','errors' =>  ['required' => 'Message id is required']],
				'event' => ['rules' =>  'required','errors' =>  ['required' => 'Event id is required']]
               
            ]);
            if($check)
            {
                $frmdata = mysql_clean($frmdata);
                $data = array(
                    'ip_address' => $_SERVER['REMOTE_ADDR'],
                    // 'system_info' => $session['system_info'],
                    'insert_time' => date('Y-m-d H:i:s'),
                    'email_id	' => $frmdata['email_id'],
                    'contact' => $frmdata['phone'],
                    'event	' => $frmdata['event'],
                    'message	' => $frmdata['message'],
                    'name	' => $frmdata['name']
                );
                $sql = $this->curd_model->insert('frm_event_registration', $data);
                if($sql)
				{
                    $error['success'] = true;
                    $error['alert1'] = 'Thank you for Your Query with us.';
                
                }
				else
				{
                    $error['message']['refrence'] = 'Error in data storing please try again.';
                }
            }
			else
			{
                foreach ($_POST as $key => $value) {
                    if ($this->validation->hasError($key)) {
                        $error['message'][$key] = $this->validation->getError($key);
                    }
                }
            }
	    }

		else if($action == 'subscribe')
			{
				$check = $this->validate([
					'email' => ['rules' => 'required','error' =>['required' => 'email is required']]

				]);

				if($check)
					{
						
						$suscribe = array(
							'email' => $frmdata['email'],
							'insert_time' => date('Y-m-d H:i:s'),
							'ip_address' => $_SERVER['REMOTE_ADDR'],
							//'system_info'=> $_SERVER['HTTP_USER_AGENT'],
							'system_info'=> json_encode(array('browser'=>$agent->getBrowser(),'browser_ver'=>$agent->getVersion(),'platform'=>$agent->getPlatform())),
							
								
						);

						$insert = $this->curd_model->insert('frm_subscribe', $suscribe);

						if($insert)
							{
								$error['success'] = true;
								$error['alert1'] = 'Thank you for registration with us.';
							}
							else
							{
								$error['message']['refrence'] ='<p> error in  data submit</p>';
							}

					}
					else
					{
					foreach ($_POST as $key => $value)
						{
							if($this->validation->hasError($key))
							{
								$error['message'][$key] =$this->validation->getError($key);
							}
						}
					}

			}
			
		else if ($action == "testimonial")
		{
			$check = $this->validate([
                'name' => ['rules' =>  'required','errors' =>  ['required' => 'Name is required']],
                'phone' => ['rules' =>  'required','errors'|'is_natural'|'exact_length[10]' =>  ['required' => 'phone is required']],
                'email_id' => ['rules' =>  'required','errors'|'valid_email' =>  ['required' => 'Email id is required']],
                'message' => ['rules' =>  'required','errors' =>  ['required' => 'Message id is required']],
               
            ]);
			if($check)
			{
				$doc1 = $this->request->getFile('profile');
                if($doc1->isValid())
                {
                    $doc1validationRule = [
                        'profile' => [
                            'label' => 'Image File',
                            'rules' => 'uploaded[profile]'
                                . '|mime_in[profile,image/png,image/jpg,image/jpeg]'
                                . '|max_size[profile,1000]'
                                . '|max_dims[profile,900,1040]',
                        ],
                    ];
                    if ($this->validate($doc1validationRule)) {
                        if (! $doc1->hasMoved())
						{
                            $file1 = $doc1->getRandomName();
                            $doc1->move(ROOTPATH . 'images/testimonials/', $file1);
							$upload = array(
								'status' => 'A',
								'upload_time' => date('Y-m-d H:i:s'),
								'purpose' => 'testimonials',
								'location' => 'testimonials/' . $file1,
							); 
							$sql = $this->curd_model->insert('images', $upload);
							if ($sql)
							{
								$frmdata = mysql_clean($frmdata);
								$testimonial = array(
								'ip_address' => $_SERVER['REMOTE_ADDR'],
								'last_update' => date('Y-m-d H:i:s'),
								'comment_date' => date('Y-m-d '),
								'email_id	' => $frmdata['email_id'],
								'phone' => $frmdata['phone'],
								'message	' => $frmdata['message'],
								'name' => $frmdata['name'],
								'img' =>$sql,
								'system_info'=> $_SERVER['HTTP_USER_AGENT'],
								);

								$insert = $this->curd_model->insert('testimonial', $testimonial);

								if($insert)
									{
										$error['success'] = true;
										$error['alert1'] = 'Thanks you for submit testimonial for us, It will be display on website after verified by CFT.';
									}
									else
									{
										$error['message']['refrence'] ='<p> error in  data submit</p>';
									}
							}
							else
							{
								$error['message']['refrence'] = '<p >Error in storing Image please try again.</p>';
							}
                        }
                    }
                    else
                    {
                        $upload_file = false;
                        $error['message']['fileerrors'] = $this->validator->getErrors();
                    }
                }
			}
			else
			{
				foreach ($_POST as $key => $value)
				{
					if($this->validation->hasError($key))
					{
						$error['message'][$key] =$this->validation->getError($key);
					}
				}
			}
			
		}
			echo json_encode($error);
		
		}
}

?>
