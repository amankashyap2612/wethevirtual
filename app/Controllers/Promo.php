<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Polyclinics_Ml;

class Promo extends BaseController
{
	public function view()
	{}

	public function action_update($action = null)
	{
		$data['session'] = $this->session->get('adminlogin');
        $error = array('success' => false,'error_token'=>array('cname'=>csrf_token(),'cvalue'=>csrf_hash()), 'message' =>array(),'border'=>true);
        $frmdata = $this->request->getPost();
        if($action == 'add-promo')
        {
			$check = $this->validate([
                
                'promo_code' => ['rules' =>  'required','errors' =>  ['required' => 'Promo Code id is required  ']],
                'start_date' => ['rules' =>  'required','errors' =>  ['required' => 'Start Date id is required  ']],
                'expire_date' => ['rules' =>  'required','errors' =>  ['required' => 'Expire Date id is required  ']],
                //'type' => ['rules' =>  'required','errors' =>  ['required' => 'type id is required']],
                'value' => ['rules' =>  'required','errors' =>  ['required' => 'Valueis required  ']]

            ]);
            if($check)
            {
                $frmdata = mysql_clean($frmdata);
                $update_data = array(
                    'status' => 'D',
                    'last_update' => date('Y-m-d H:i:s'),
                    'update_by' => $data['session']['user_id'],  
                    'promo_code' => $frmdata['promo_code'],
                    'start_date' => $frmdata['start_date'],
                    'expire_date' => $frmdata['expire_date'],
                    'type' => $frmdata['type'],
                    'value' => $frmdata['value']
                  
                );
                $insert = $this->curd_model->insert('promo_code', $update_data);
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
		else if($action == "update_promo")
		{
			$check = $this->validate([
                'promo_id' => ['rules' =>  'required','errors' =>  ['required' => 'Id is required']],
                'promo_code' => ['rules' =>  'required','errors' =>  ['required' => 'Promo Code is required']],
                'start_date' => ['rules' =>  'required','errors' =>  ['required' => 'Start Date is required']],
                'expire_date' => ['rules' =>  'required','errors' =>  ['required' => 'Expire Date is required']],
                'value' => ['rules' =>  'required','errors' =>  ['required' => 'Value is required']]
               
  
          
            ]);
            if($check)
            {
                $frmdata = mysql_clean($frmdata);
                $update_data = array(
                    'last_update' => date('Y-m-d H:i:s'),
                    'update_by' => $data['session']['user_id'],
                    'promo_code' => $frmdata['promo_code'],
                    'start_date' => $frmdata['start_date'],
                    'expire_date' => $frmdata['expire_date'],
                    'type' => $frmdata['type'],
                    'value' => $frmdata['value']
              
                    
                );
              //  print_r($update_data);
                $insert = $this->curd_model->update_table('promo_code', $update_data, array('id'=>$frmdata['promo_id']));
                
				if($insert)
                {
                    $error['success'] = true;
                   // print_r($this->db->getLastQuery());
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
        else if($action == "change_promo_status")
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
                $insert = $this->curd_model->update_table('promo_code', $upload_data, array('id'=>$frmdata['id']));
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
