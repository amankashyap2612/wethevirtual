<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Polyclinics_Ml;

class Event extends BaseController
{
    public function view()
    {
    }

    public function action_update($action = null)
    {
        $data['session'] = $this->session->get('adminlogin');
        $error = array('success' => false,'error_token'=>array('cname'=>csrf_token(),'cvalue'=>csrf_hash()), 'message' =>array(),'border'=>true);
        $frmdata = $this->request->getPost();
        if ($action == 'add-event') 
        {
            
            $check = $this->validate([
            
                'name'        => ['rules' =>  'required','errors' =>  ['required' => 'name is required']],
                'category'    => ['rules' =>  'required','errors' =>  ['required' => 'category is required']],
                'title'       => ['rules' =>  'required','errors' =>  ['required' => 'title is required']],
                'alt'         => ['rules' =>  'required','errors' =>  ['required' => 'alt is required']],
                'fixed_price' => ['rules' =>  'required','errors' =>  ['required' => 'fixed_price is required']],
                'addon_price' => ['rules' =>  'required','errors' =>  ['required' => 'addon_price is required']],
                'description' => ['rules' =>  'required','errors' =>  ['required' => 'description is required']],
            ]);


            if($check)
            {
                $frmdata =mysql_clean($frmdata);
                $event = array(
                    'status'       => 'A',
                    'last_update'  => date('Y-m-d H:i:s'),
                    'update_by'    => $data['session']['user_id'],
                    'img'          => $frmdata['image_id'],
                    'event_cat'    => $frmdata['category'],
                    'title'        => $frmdata['title'],
                    'alt'          => $frmdata['alt'],
                    'name'         => $frmdata['name'],
                    'description'  => $frmdata['description'],
                    'fixed_price'  => $frmdata['fixed_price'],
                    'addon_price'  => $frmdata['addon_price']
                );
                   
                $insert = $this->curd_model->insert('event', $event);
                
                if($insert)
                    {
                        $error['success']= true;
                    }
                else 
                    {
                        $error['message']['refrence'] = '<p> Error in Add Data</p>';
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
        } else if ($action == "update-con") {
            $check = $this->validate([

                'edt_headline' => ['rules' => 'required', 'errors' => ['required' => 'headline is required']],
                'edt_link' => ['rules' => 'required', 'errors' => ['required' => 'link is required']]


            ]);
            if ($check) {
                $frmdata = mysql_clean($frmdata);
                $update_data = array(
                    'last_update' => date('Y-m-d H:i:s'),
                    'update_by' => $data['session']['user_id'],


                    'headline' => $frmdata['edt_headline'],
                    'link' => $frmdata['edt_link']

                );
                $insert = $this->curd_model->update_table('event', $update_data, array('id' => $frmdata['edt_id']));
                if ($insert) {
                    $error['success'] = true;
                } else {
                    $error['message']['refrence'] = '<p>Error in Update.</p>';
                }
            } else {
                foreach ($_POST as $key => $value) {
                    if ($this->validation->hasError($key)) {
                        $error['message'][$key] = $this->validation->getError($key);
                    }
                }
            }
        } else if ($action == "change_event_status") {
            $check = $this->validate([
                'id' => ['rules' => 'required', 'errors' => ['required' => 'Id is required']],
                'status' => ['rules' => 'required', 'errors' => ['required' => 'Status is required']]
            ]);
            if ($check) {
                $frmdata = mysql_clean($frmdata);
                $upload_data = array(
                    'last_update' => date('Y-m-d H:i:s'),
                    'update_by' => $data['session']['user_id'],
                    'status' => (($frmdata['status'] == 'D') ? 'A' : 'D')
                );
                $insert = $this->curd_model->update_table('event', $upload_data, array('id' => $frmdata['id']));
                if ($insert) {
                    $error['success'] = true;
                } else {
                    $error['message']['refrence'] = '<p>Error in Update.</p>';
                }
            } else {
                foreach ($_POST as $key => $value) {
                    if ($this->validation->hasError($key)) {
                        $error['message'][$key] = $this->validation->getError($key);
                    }
                }
            }
        } else if ($action == 'update_event') {
            $check = $this->validate([
                'event_id' => ['rules' => 'required', 'errors' => ['required' => 'Event is required']],
                'edt_image_id' => ['rules' => 'required', 'errors' => ['required' => 'Image is required']],
                'edt_name' => ['rules' => 'required', 'errors' => ['required' => 'Event is required']],
                'edt_title' => ['rules' => 'required', 'errors' => ['required' => 'Image Title is required']],
                'edt_alt' => ['rules' => 'required', 'errors' => ['required' => 'Image Alt is required']],
                'edt_fixed_price' => ['rules' => 'required', 'errors' => ['required' => 'Fixed Price is required']],
                'edt_addon_price' => ['rules' => 'required', 'errors' => ['required' => 'Addon Price is required']]
            ]);
            if ($check) {
                
                $frmdata = mysql_clean($frmdata);
                $upload_data = array(

                    'last_update' => date('Y-m-d H:i:s'),
                    'update_by' => $data['session']['user_id'],
                    'event_cat' => $frmdata['edt_category'],
                    'img' => $frmdata['edt_image_id'],
                    'title' => $frmdata['edt_title'],
                    'alt' => $frmdata['edt_alt'],
                    'name' => $frmdata['edt_name'],
                    'fixed_price' => $frmdata['edt_fixed_price'],
                    'addon_price' => $frmdata['edt_addon_price'],
                    'description' => $frmdata['edt_description'],
                    'id' => $frmdata['event_id']
                );
                     $insert = $this->curd_model->update_table('event', $upload_data, array('id'=>$frmdata['event_id']));
                     if($insert)
                     {
                         $error['success'] = true;
                     }
                     else
                     {
                         $error['message']['refrence'] = '<p>Error in Update Data.</p>';
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
		else if($action == "upload_event_img")
		{
				//------------------------------
				$doc1 = $this->request->getFile('images');
                if($doc1->isValid())
                {
                    $doc1validationRule = [
                        'images' => [
                            'label' => 'Image File',
                            'rules' => 'uploaded[images]'
                                . '|mime_in[images,image/png,image/jpg,image/jpeg]'
                                . '|max_size[images,1000]'
                                . '|max_dims[images,1920,1080]',
                        ],
                    ];
                    if ($this->validate($doc1validationRule)) {
                        if (! $doc1->hasMoved()) {
                            $file1 = $doc1->getRandomName();
                            $doc1->move(ROOTPATH . 'images/event/', $file1);
							$upload = array(
								'status' => 'A',
								'upload_time' => date('Y-m-d H:i:s'),
								'upload_by' => $data['session']['user_id'],
								'purpose' => 'event',
								'location' => 'event/' . $file1,
							); 
							$sql = $this->curd_model->insert('images', $upload);
							if ($sql) {
								$error['success'] = true;
							} else {
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
				//---------------------------------


              
            }

        echo json_encode($error);

    }
}   
?>

