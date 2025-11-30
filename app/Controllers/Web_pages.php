<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Polyclinics_Ml;

class Web_pages extends BaseController
{
   public function view()
  {
      $data['session'] = $this->session->get('adminlogin');
      $error = array('success' => false,'error_token'=>array('cname'=>csrf_token(),'cvalue'=>csrf_hash()), 'message' =>array(),'border'=>true);
	  $data = get_menu();
	  
	  $images = $this->curd_model->get_all('*', 'images', array('purpose'=>'banner'), 'id', 'DESC');
      foreach($images as $img)
      {
        $data['images'][$img->id] = $img;
      }
      //print_r($data['images']);
      return view('admin/add_web_pages',$data);
  }
  
  
   public function update_page($id)
  {
        
      $data['session'] = $this->session->get('adminlogin');
      $data = get_menu();
      
	  $images = $this->curd_model->get_all('*', 'images', array('purpose'=>'banner'), 'id', 'DESC');
      foreach($images as $img)
      {
        $data['images'][$img->id] = $img;
      }

      $data['page_info'] = $this->curd_model->get_1('*','web_pages',array('id'=>$id));
        
      return view('admin/edit_web_pages',$data);

  }
  
  
  

  public function action_update($action = null)
  {
      $data['session'] = $this->session->get('adminlogin');
      $error = array('success' => false,'error_token'=>array('cname'=>csrf_token(),'cvalue'=>csrf_hash()), 'message' =>array(),'border'=>true);
      $frmdata = $this->request->getPost();
      if($action == 'addpage')
      {
      $data = get_menu();
      if(in_array('web_pages',$data['url']))
      {
        $data['other_action'] = explode(" ",$data['action_access']['web_pages']);
        if(in_array('1',$data['other_action']))
        {
           $images = $this->curd_model->get_all('*', 'images', array('purpose'=>'banner','status'=>'A'), 'id', 'DESC');
           foreach($images as $img)
           {
             $data['images'][$img->id] = $img;
           }
           $emp = $this->curd_model->get_all('*', 'login', array(), 'f_name', 'ASC');
           foreach($emp as $em)
           {
             $data['user_info'][$em->id] = $em;
           }
          return view('admin/add_web_pages', $data);
          
        }
        else
        {
          redirect();
        }
        }
        else
        {
          redirect();
          }
      }
      else if($action == "editpage")
      {
        $data = get_menu();
        if(in_array('web_pages',$data['url']))
        {
          $data['other_action'] = explode(" ",$data['action_access']['web_pages']);
          if(in_array('2',$data['other_action']))
          {
            
            $data['page_info'] = $this->curd_model->get_1('*','web_pages',array('status'=>'A'));
            $images = $this->curd_model->get_all('*', 'images', array('purpose'=>'banner','status'=>'A'), 'id', 'DESC');
            foreach($images as $img)
            {
              $data['images'][$img->id] = $img;
            }
            $emp = $this->curd_model->get_all('*', 'login', array(), 'f_name', 'ASC');
            foreach($emp as $em)
            {
              $data['user_info'][$em->id] = $em;
            }
            //$data['session'] = $this->session->get('adminlogin');
            return view('admin/edit_web_pages', $data);
          }
          else
          {
            redirect();
          }
          }
          else
          {
            redirect();
            }
        }
      else if($action == "create_page")
      {
          
          $page = $this->curd_model->get_1('*','web_pages',array('page_url'=>$frmdata['url']));
          if(!isset($page))
          {
            $check = $this->validate([
            'heading' => ['rules' =>  'required','errors' =>  ['required' => ' Heading is required']],
            'keyword' => ['rules' =>  'required','errors' =>  ['required' => 'Keyword is required']],
            'description' => ['rules' =>  'required','errors' =>  ['required' => 'Description is required']],
            'title' => ['rules' =>  'required','errors' =>  ['required' => 'Title is required']],
            'url' => ['rules' =>  'required','errors' =>  ['required' => 'Url is required']],
            'form' => ['rules' =>  'required','errors' =>  ['required' => 'Form is required']],
            'header_script' => ['rules' =>  'required','errors' =>  ['required' => 'Header_script is required']],
            'footer_script' => ['rules' =>  'required','errors' =>  ['required' => 'Footer_script is required']],
			'image_id' => ['rules' =>  'required','errors' =>  ['required' => 'Banner Image is required']],
            'content' => ['rules' =>  'required','errors' =>  ['required' => 'Content is required']],
          ]);
          if($check)
          {
            $frmdata = mysql_clean($frmdata);
            $upload_data = array(
                'status' => 'A',
                'last_update' => date('Y-m-d H:i:s'),
                'update_by' => $data['session']['user_id'],
                'page_heading' => $frmdata['heading'],
                'title' => $frmdata['title'],
                'description' => $frmdata['description'],
                'keyword' => $frmdata['keyword'],
                'page_url' => $frmdata['url'],
                'form' => $frmdata['form'],
                'main_content' => $frmdata['content'],
                'header_text' => $frmdata['header_script'],
                'footer_text' => $frmdata['footer_script'],
                'banner_img' => $frmdata['image_id']
              );
              $sql = $this->curd_model->insert('web_pages', $upload_data);
              if($sql){
                $error['success'] = true;
                $error['message']['refrence'] = '<p style="background-color:green;">Page Successfully created</p>';
              }else{
                $error['message']['refrence'] = '<p>Error in slider create please try again.</p>';
              }
            }else{
              foreach($_POST as $key =>$value)
                { 
                    if ($this->validation->hasError($key)) {
                        $error['message'][$key] = $this->validation->getError($key);
                    }
                }
            }
          }
          else
          {
            $error['message']['refrence'] = '<p>This page URL is already created.</p>';
          }
      }
      else if($action == "update_page")
      {
            $check = $this->validate([
            'heading' => ['rules' =>  'required','errors' =>  ['required' => ' Heading is required']],
            'keyword' => ['rules' =>  'required','errors' =>  ['required' => 'Keyword is required']],
            'description' => ['rules' =>  'required','errors' =>  ['required' => 'Description is required']],
            'title' => ['rules' =>  'required','errors' =>  ['required' => 'Title is required']],
            'url' => ['rules' =>  'required','errors' =>  ['required' => 'Url is required']],
            'form' => ['rules' =>  'required','errors' =>  ['required' => 'Form is required']],
            'header_script' => ['rules' =>  'required','errors' =>  ['required' => 'Header_script is required']],
            'footer_script' => ['rules' =>  'required','errors' =>  ['required' => 'Footer_script is required']],
            'image_id' => ['rules' =>  'required','errors' =>  ['required' => 'Banner Image is required']],
            'content' => ['rules' =>  'required','errors' =>  ['required' => 'Content is required']],
          ]);
          if($check)
          {
            $frmdata = mysql_clean($frmdata);
            $upload_data = array(
                'last_update' => date('Y-m-d H:i:s'),
                'update_by' => $data['session']['user_id'],
                'page_heading' => $frmdata['heading'],
                'title' => $frmdata['title'],
                'description' => $frmdata['description'],
                'keyword' => $frmdata['keyword'],
                'page_url' => $frmdata['url'],
                'form' => $frmdata['form'],
                'main_content' => $frmdata['content'],
                'header_text' => $frmdata['header_script'],
                'footer_text' => $frmdata['footer_script'],
				'banner_img' => $frmdata['image_id']
              );
            $sql = $this->curd_model->update_table('web_pages', $upload_data, array('id'=>$frmdata['page_id']));
            if($sql){
              $error['success'] = true;
            }else{
              $error['message']['refrence'] = '<p>Error in Course update please try again.</p>';
            }
          }
		  else
		  {    foreach($_POST as $key =>$value)
                { 
                    if ($this->validation->hasError($key)) {
                        $error['message'][$key] = $this->validation->getError($key);
                    }
                }
            }
      }
      else if($action == 'change_page_status')
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
                $insert = $this->curd_model->update_table('web_pages', $upload_data, array('id'=>$frmdata['id']));
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
		else if($action == "upload_banner_img")
		{
				//------------------------------
				$doc1 = $this->request->getFile('banner_images');
                if($doc1->isValid())
                {
                    $doc1validationRule = [
                        'banner_images' => [
                            'label' => 'Image File',
                            'rules' => 'uploaded[banner_images]'
                                . '|mime_in[banner_images,image/png,image/jpg,image/jpeg]'
                                . '|max_size[banner_images,1000]'
                                . '|max_dims[banner_images,1920,1080]',
                        ],
                    ];
                    if ($this->validate($doc1validationRule)) {
                        if (! $doc1->hasMoved()) {
                            $file1 = $doc1->getRandomName();
                            $doc1->move(ROOTPATH . 'images/pagebanner/', $file1);
							$upload = array(
								'status' => 'A',
								'upload_time' => date('Y-m-d H:i:s'),
								'upload_by' => $data['session']['user_id'],
								'purpose' => 'banner',
								'location' => 'pagebanner/' . $file1,
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

