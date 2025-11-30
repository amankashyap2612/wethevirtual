<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Polyclinics_Ml;

class School extends BaseController
{
	public function view()
	{}

	public function action_update($action = null)
	{
		$data['session'] = $this->session->get('adminlogin');
        $error = array('success' => false, 'message' =>array());
        $frmdata = $this->request->getPost();
        if($action == 'add-con')
        {
			$check = $this->validate([
                
                'headline' => ['rules' =>  'required','errors' =>  ['required' => 'headline id is required']],
                'link' => ['rules' =>  'required','errors' =>  ['required' => 'link id is required']]
                
            ]);
            if($check)
            {
                $frmdata = mysql_clean($frmdata);
                $update_data = array(
                    'status' => 'D',
                    'last_update' => date('Y-m-d H:i:s'),
                    'update_by' => $data['session']['user_id'],
                    
                    'headline' => $frmdata['headline'],
                    'link' => $frmdata['link']
                  
                );
                $insert = $this->curd_model->insert('news', $update_data);
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
		else if($action == "update-con")
		{
			$check = $this->validate([
                
                'edt_headline' => ['rules' =>  'required','errors' =>  ['required' => 'headline is required']],
                'edt_link' => ['rules' =>  'required','errors' =>  ['required' => 'link is required']]
               
          
            ]);
            if($check)
            {
                $frmdata = mysql_clean($frmdata);
                $update_data = array(
                    'last_update' => date('Y-m-d H:i:s'),
                    'update_by' => $data['session']['user_id'],
                    
                 
                    'headline' => $frmdata['edt_headline'],
                    'link' => $frmdata['edt_link']
                    
                );
                $insert = $this->curd_model->update_table('news', $update_data, array('id'=>$frmdata['edt_id']));
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
        else if($action == "change-status")
        {
            $check = $this->validate([
                'id' => ['rules' =>  'required','errors' =>  ['required' => 'Id is required']],
                'status' => ['rules' =>  'required','errors' =>  ['required' => 'Status is required']]
            ]);
            if($check)
            {
                $frmdata = mysql_clean($frmdata);
                $upload_data = array(
                    'last_update' => date('Y-m-d H:i:s'),
                    'update_by' =>  $data['session']['user_id'],
                    'status' => (($frmdata['status']=='D')?'A':'D')
                );
                $insert = $this->curd_model->update_table('news', $upload_data, array('id'=>$frmdata['id']));
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
		echo json_encode($error);
	}
}
?>
