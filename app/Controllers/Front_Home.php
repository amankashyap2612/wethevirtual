<?php
namespace App\Controllers;
use CodeIgniter\Controller;
class Front_Home extends BaseController
{
    public function index()
    {
        $data['page_info'] = $this->curd_model->get_1("*","web_pages",array('page_url'=>'home'));
    
    $settings = $this->curd_model->get_all('*', 'web_settings', array('status'=>'A'), 'id', 'ASC');
    foreach($settings as $set)
    {
            $data['settings'][$set->name] = $set->value;
    }
    $images = $this->curd_model->get_all('*', 'images', array('status'=>'A'), 'id', 'DESC');
    foreach($images as $img)
    {
            $data['image_detail'][$img->id] = $img->location;
    }
    $data['slider'] = $this->curd_model->get_all('*', 'home_slider', array('status'=>'A'), 'id', 'DESC');
	
	$data['home'] = $this->curd_model->get_all('*', 'home_slider', array('status'=>'A'), 'id', 'DESC');
    $data['news'] = $this->curd_model->get_all('*', 'news', array('status'=>'A'), 'id', 'DESC');
    $data['event_cat'] = $this->curd_model->get_all('*', 'event_cat', array('status'=>'A'), 'id', 'ASC');
    $data['event'] = $this->curd_model->get_all('*','event',array('status'=>'A'),'id','ASC');
    $data['team'] = $this->curd_model->get_all('*', 'team', array('status'=>'A'), 'id', 'ASC');
    $data['testimonial'] = $this->curd_model->get_all('*', 'testimonial', array('status'=>'A'), 'id', 'DESC');
    
    $visitor = $this->curd_model->get_all('*', 'visitor', array(), 'id', 'DESC');
    $data['visitor_count'] = count($visitor);
    return view('home',$data);
        
  }
  
  public function student_login()
  {
    $settings = $this->curd_model->get_all('*', 'web_settings', array('status'=>'A'), 'id', 'ASC');
    foreach($settings as $set)
    {
      $data['settings'][$set->name] = $set->value;
    }
    $images = $this->curd_model->get_all('*', 'images', array('status'=>'A'), 'id', 'DESC');
    foreach($images as $img)
    {
      $data['image_detail'][$img->id] = $img->location;
    }
    
    return view('ajax-load/login-form',$data); 
           
    }
}




?>