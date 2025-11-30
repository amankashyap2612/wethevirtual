<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Polyclinics_Ml;

class Event_category extends BaseController
{
	public function view()
	{}

	public function action_update($action = null)
	{
		$data['session'] = $this->session->get('adminlogin');
        $error = array('success' => false,'error_token'=>array('cname'=>csrf_token(),'cvalue'=>csrf_hash()), 'message' =>array(),'border'=>true);
        $frmdata = $this->request->getPost();
        if($action == 'add_category')
        {
			$check = $this->validate([
                
                'category' => ['rules' =>  'required','errors' =>  ['required' => 'category required']],
                'title' => ['rules' =>  'required','errors' =>  ['required' => 'title required']],
                'alt' => ['rules' =>  'required','errors' =>  ['required' => 'alt required']],
                //'edt_description' => ['rules' =>  'required','errors' =>  ['required' => 'edt_description is required']],
                'image_id' => ['rules' =>  'required','errors' =>  ['required' => 'image_id is required']],
                
            ]);
            if($check)
            {
                $frmdata = mysql_clean($frmdata);
                $update_data = array(
                    'status' => 'A',
                    'last_update' => date('Y-m-d H:i:s'),
                    'update_by' => $data['session']['user_id'],

                    'img' => $frmdata['image_id'],
                    'title' => $frmdata['title'],
                    'alt' => $frmdata['alt'],
                    'category' =>$frmdata['category'],
                    'description' => $frmdata['description'],
                    
                );
                $insert = $this->curd_model->insert('event_cat', $update_data);
				if($insert)
                {
                    $error['success'] = true;
                }
                else
                {
                    $error['message']['refrence'] = '<p>Error in Update.</p>';
                }
            }
            else
            {
                foreach($_POST as $key =>$value)
                {
                    if ($this->validation->hasError($key)) {
                        $error['message'][$key] = $this->validation->getError($key);
                    }
                }
            }
		}
		else if($action == "update_category")
		{
			$check = $this->validate([
                
                'edt_category' => ['rules' =>  'required','errors' =>  ['required' => 'edt_categoryis required']],
                'edt_title' => ['rules' =>  'required','errors' =>  ['required' => 'edt_title required']],
                'edt_alt' => ['rules' =>  'required','errors' =>  ['required' => 'edt_categoryis required']],
                //'edt_description' => ['rules' =>  'required','errors' =>  ['required' => 'edt_description is required']],
                'edt_image_id' => ['rules' =>  'required','errors' =>  ['required' => 'edt_image_id is required']],
               
          
            ]);
            if($check)
            {
                $frmdata = mysql_clean($frmdata);
                $update_data = array(
                    'last_update' => date('Y-m-d H:i:s'),
                    'update_by' => $data['session']['user_id'],
                    'img' => $frmdata['edt_image_id'],
                    'title' => $frmdata['edt_title'],
                    'alt' => $frmdata['edt_alt'],
                    'category' => $frmdata['edt_category'],
                    'description' => $frmdata['edt_description'],
                    
                );
                $insert = $this->curd_model->update_table('event_cat', $update_data, array('id'=>$frmdata['category_id']));
				if($insert)
                {
                    $error['success'] = true;
                }
                else
                {
                    $error['message']['refrence'] = '<p>Error in Update.</p>';
                }
            }
            else
            {
                foreach($_POST as $key =>$value)
                {
                    if ($this->validation->hasError($key)) {
                        $error['message'][$key] = $this->validation->getError($key);
                    }
                }
            }
		}
        else if($action == "change_category_status")
        {
            $check = $this->validate([
                'id' => ['rules' =>  'required','errors' =>  ['required' => 'Id is required']],
                'status' => ['rules' =>  'required','errors' =>  ['required' => 'Status is required']]
            ]);
            if($check)
            {
                $frmdata = mysql_clean($frmdata);
                $upload_data = array(
                   
                    'update_by' =>  $data['session']['user_id'],
                    'status' => (($frmdata['status']=='D')?'A':'D')
                );
                $insert = $this->curd_model->update_table('event_cat', $upload_data, array('id'=>$frmdata['id']));
				if($insert)
                {
                    $error['success'] = true;
                }
                else
                {
                    $error['message']['refrence'] = '<p>Error in Update.</p>';
                }
            }
            else
            {
                foreach($_POST as $key =>$value)
                {
                    if ($this->validation->hasError($key)) {
                        $error['message'][$key] = $this->validation->getError($key);
                    }
                }
            }
        }
		else if ($action == "upload_category_img")
		{
			$img = $this->request->getFile('category_images');
			if($img->isValid())
			{
				$imgvalidationRule = [
					'category_images' =>[
						'label' =>' Image File',
						'rules'=> 'uploaded[category_images]'
						.'|mime_in[category_images,image/png,image/jpg,image/jpeg]'
						.'|max_size[category_images,1000]'
						.'|max_dims[category_images,370,240]',
					],
				];
				if($this->validate($imgvalidationRule)) {
					if(! $img->hasMoved()){
						$file1 = $img->getRandomName();
						$img->move(ROOTPATH .'images/event_category/', $file1);
						$upload = array(
							'status' => 'A',
							'upload_time' => date('Y-m-d H:i:s'),
							'upload_by' => $data['session']['user_id'],
							'purpose' => 'event_category',
							'location' => 'event_category/' . $file1,
						);
						$sql = $this->curd_model->insert('images', $upload);
							if ($sql) {
								$error['success'] = true;
							} else {
								$error['message']['refrence'] = '<p >Error in storing Image please try again.</p>';
							}
					}
				
				}
			}
		}
	
		echo json_encode($error);
	}
}
?>
