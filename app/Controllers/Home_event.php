<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Polyclinics_Ml;

class Home_event extends BaseController
{
    
    public function action_update($category)
    {
		
		$data['page_info'] = $this->curd_model->get_1('*', 'web_pages', array('page_url'=>'event','status'=>'A'));
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
		 
		 $data['event_cat'] = $this->curd_model->get_1('*', 'event_cat', array('category'=>$category,'status'=>'A'));
		
		$data['event'] = $this->curd_model->get_all('*', 'event', array('status'=>'A','event_cat' => $data['event_cat']->id ), 'id', 'DESC');
		
		 return view('event',$data);
          
		
        //echo json_encode($error);

    }
}   
?>

