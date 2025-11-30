<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Model\CurdModel;

class Testimonial extends BaseController
{
	public function view()
	{}

	public function action_update($action = null)
	{
		$data['session'] = $this->session->get('adminlogin');
        $error = array('success' => false,'error_token'=>array('cname'=>csrf_token(),'cvalue'=>csrf_hash()), 'message' =>array(),'border'=>true);
        $frmdata = $this->request->getPost();
        if($action == 'add_testimonial')
        {
			$check = $this->validate([
                
				'name' => ['rules' =>  'required','errors' =>  ['required' => 'Name is required']],
				'comment_date' => ['rules' =>  'required','errors' =>  ['required' => 'Date is required']],
                'message' => ['rules' =>  'required','errors' =>  ['required' => 'Message is required']]
				

                
            ]);
            if($check)
            {
                $frmdata = mysql_clean($frmdata);
                $update_data = array(
                    'status' => 'D',
                    'last_update' => date('Y-m-d H:i:s'),
                    'update_by' => $data['session']['user_id'],
					'name' => $frmdata['name'],
                    'comment_date' => $frmdata['comment_date'],
                    'message' => $frmdata['message']
                  
                );
                $insert = $this->curd_model->insert('testimonial', $update_data);
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
		else if($action == "update_testimonial")
		{
			$check = $this->validate([
                'test_id' => ['rules' =>  'required','errors' =>  ['required' => 'Name is required']],
				'name' => ['rules' =>  'required','errors' =>  ['required' => 'Name is required ']],
				'comment_date' => ['rules' =>  'required','errors' =>  ['required' => 'Date is required ']],
                'message' => ['rules' =>  'required','errors' =>  ['required' => 'Message is required ']]
               
          
            ]);
            if($check)
            {
                $frmdata = mysql_clean($frmdata);
                $update_data = array(
                    'last_update' => date('Y-m-d H:i:s'),
                    'update_by' => $data['session']['user_id'],
                 
					'name' => $frmdata['name'],
					'comment_date' => $frmdata['comment_date'],
                    'message' => $frmdata['message']
                  
                    
                );
                $insert = $this->curd_model->update_table('testimonial', $update_data, array('id'=>$frmdata['test_id']));
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
        else if($action == "change_testimonial_status")
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
                $insert = $this->curd_model->update_table('testimonial', $upload_data, array('id'=>$frmdata['id']));
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
