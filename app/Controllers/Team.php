<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Polyclinics_Ml;

class Team extends BaseController
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
                
                'email' => ['rules' =>  'required','errors' =>  ['required' => 'Email id is required']]
                
            ]);
            if($check)
            {
                $frmdata = mysql_clean($frmdata);
                $update_data = array(
                    'status' => 'D',
                    'insert_time' => date('Y-m-d H:i:s'),
                    'update_time' => date('Y-m-d H:i:s'),
                    'update_by' => $data['session']['user_id'],
                    
                    'email' => $frmdata['email']
                  
                );
                $insert = $this->curd_model->insert('team', $update_data);
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
                
                'edt_email' => ['rules' =>  'required','errors' =>  ['required' => 'Email id is required']]
               
          
            ]);
            if($check)
            {
                $frmdata = mysql_clean($frmdata);
                $update_data = array(
                    'insert_time' => date('Y-m-d H:i:s'),
                    'update_by' => $data['session']['user_id'],
                    
                 
                    'email' => $frmdata['edt_email']
                    
                );
                $insert = $this->curd_model->update_table('team', $update_data, array('id'=>$frmdata['edt_id']));
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
                    'insert_time' => date('Y-m-d H:i:s'),
                    'update_by' =>  $data['session']['user_id'],
                    'status' => (($frmdata['status']=='D')?'A':'D')
                );
                $insert = $this->curd_model->update_table('team', $upload_data, array('id'=>$frmdata['id']));
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
