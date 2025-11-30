<?php
namespace App\Controllers;
use CodeIgniter\Controller;
class Pages extends BaseController
{
    public function view($url = "")
    {
        $data['session'] = $this->session->get('loginpage');
        $data = get_menu();
        $url = explode('.',$url);

        if($url[0] == 'team')
    {
      $data['board'] = $this->curd_model->get_all('*', 'team', array('status'=>'A'), 'id', 'ASC');
      $other_page = true;
    }
    else if($url[0] == "testimonial")
    {
	  $images = $this->curd_model->get_all('*', 'images', array('purpose'=>'testimonials'), 'id', 'ASC');
      foreach($images as $img)
      {
        $data['images'][$img->id] = $img;
      }
      $data['testimonial'] = $this->curd_model->get_all('*', 'testimonial', array('status'=>'A'), 'comment_date', 'DESC');
      $other_page = true;
    }
    else if($url[0] == "student-registration")
    {
      //redirect('under-construction');
      $data['school'] = $this->curd_model->get_all('*', 'school', array('status'=>'A'), 'id', 'ASC');
      $other_page = true;
    }
    else if($url[0] == "summer-camp")
    {
      $data['course'] = $this->curd_model->get_all('*','summer_camp_course', array('status'=>'A'), 'id', 'ASC');
      $other_page = true;
    }
    else if($url[0] == "pcti-news")
    {
      $curl_data = array(
        'apikey' => 'PCTILTDNEWS',
        'password' => '789456321'
      );
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL,'https://www.pctiltd.com/marketing_api/news_api.html');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($curl_data));
      $curl_response = json_decode(curl_exec($ch));
      curl_close($ch); // Close the connection
      $data['pctil_news'] = $curl_response->blog;
      $images = $curl_response->images;
      foreach($images as $img)
      {
        $data['image_detail_news'][$img->id] = $img->location;
      }
    //  print_r($data['pctil_news']);
      $other_page = true;
    }
    else if($url[0] == "upskills")
    {
      $curl_data = array(
        'apikey' => 'PCTILTDUPSKILLS',
        'password' => '789456666'
      );
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL,'https://www.pctiltd.com/marketing_api/upskills_api.html');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($curl_data));
      $curl_response = json_decode(curl_exec($ch));
      curl_close($ch); // Close the connection
      $data['upskills'] = $curl_response->skills;
      $images = $curl_response->images;
      foreach($images as $img)
      {
        $data['image_detail_upskills'][$img->id] = $img->location;
      }
      //print_r($data['images']);
    //  print_r($data['pctil_news']);
      $other_page = true;
    }
    else if($url[0] == "create-e-card")
    {
      $other_page = true;
    }
    else if($url[0] == "ptm")
    {
      $data['live'] = $this->curd_model->customquery2('select * from ptm_session where status = "A" AND meeting_time LIKE "'.date('Y-m-d').'%" order by meeting_time ASC');
      $data['history'] = $this->curd_model->customquery2('select * from ptm_session where status = "A" AND meeting_time < "'.date('Y-m-d').' 00:00:00" order by meeting_time ASC');
      $data['upcoming'] = $this->curd_model->customquery2('select * from ptm_session where status = "A" AND meeting_time > "'.date('Y-m-d').' 23:59:59" order by meeting_time ASC');
      $other_page = true;
    }
    
    else if($url[0] == "e-card")
    {
      $email_id = isset($_GET['email_id'])?$_GET['email_id']:'';
      if($email_id != "")
      {
        $data['profile'] = $this->curd_model->get_1('*','business_profile',array('email_address'=>$email_id));
        if(!isset($data['profile']->id))
        {
          show_404();
        }
      }
      else
      {
        show_404();
      }
          $other_page = true;
    }
    else if($url[0] == "update_ecard")
    {
      $data['profile'] = false;
      if(isset($_POST['otp']))
      {
        $data['session'] = $this->session->userdata('otp_verify');
        if($this->session->userdata('otp_verify'))
        {


$data['profile_info'] = $this->curd_model->get_1('*','business_profile',array('email_address'=>$data['session']['email_address']));
          $otps = $this->curd_model->get_all_limit('*','profile_update_otp',array('profile_id'=>$data['profile_info']->id,'status'=>'P'),'id','DESC',0,1);
          if(count($otps) > 0)
          {
            $otp = $otps[0];
            if($otp->otp == $_POST['otp'])
            {
              $profile_img = $this->curd_model->get_1('*','images',array('id'=>$data['profile_info']->profile_image));
              $file = substr($profile_img->location,17,25);
              $without_ext_file = substr($file,0,-4);
              
              $files = glob("images/business_profile_thumb/".$without_ext_file."*");
              $data['thumb_path'] = $files[0];
              $this->curd_model->update('profile_update_otp',array('status'=>'V'),array('id'=>$otp->id));
              $data['profile'] = true;
            }
            else
            {
              $data['error_msg'] = 'Wrong OTP...!';
            }
          }
          else
          {
            $data['error_msg'] = 'OTP not found...!';
          }
          
        }
        else
        {
          redirect('create-e-card');
        }
      }
      else if($this->session->userdata('otp_verify'))
      {
        $data['session'] = $this->session->userdata('otp_verify');
      }
      $spacial = true;
      $other_page = true;
    }
    
    else if($url[0] == "online-classroom")
    {
      $data['class_schedule'] = array();
      $classes = $this->curd_model->customquery2('select * from online_classroom where status = "A" AND class_date IN (CURDATE(), CURDATE() + INTERVAL 1 DAY) order by start_time ASC ');
      
       // $data['classroom'] = $this->curd_model->customquery1('select * from online_classroom where insert_time between ? AND ? order by id DESC',array($data['from_date'],$data['to_date']));
            foreach($classes as $cls)
      {
        $data['class_schedule'][$cls->class_date][$cls->s_class][] = $cls;
      }
      $other_page = true;
    }
    else if($url[0] == "marketing-videos")
    {
      $curl_data = array(
        'organisation' => 'www.cftedu.in',
        'apikey' => 'PCTILTDMARKETINGVIDEO',
        'password' => '456123789'
      );
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL,'https://www.pctiltd.com/marketing_api/marketing_video_api.html');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($curl_data));
      $curl_response = json_decode(curl_exec($ch));
      curl_close($ch); // Close the connection
      $data['mrk_video'] = $curl_response->video;
      $other_page = true;
    }
    else if($url[0] == "gallery")
    {
      $data['image_gallery'] = $this->curd_model->get_all("*","image_gallery",array(),'id','DESC');
      $data['video_gallery'] = $this->curd_model->get_all("*","video_gallery",array(),'id','DESC');
      $other_page = true;
    }
    else if($url[0] == "video")
    {
      $data['video_gallery'] = $this->curd_model->get_all("*","video_gallery",array("status"=>"A"),'id','DESC');
      $other_page = true;
    }
    else if($url[0] == "jiyo-khul-ke")
    {
      $data['country'] = $this->curd_model->get_all("*","country_list",array("status"=>"A"),'name','ASC');
      $data['talent_info'] = $this->session->userdata('talentLogin');
      $other_page = true;
    }
    else if($url[0] == 'login-confirmation')
    {
      $response = isset($_GET['response'])?$_GET['response']:'';
      if($response != "")
      {
        // id|gaurav.gom@gmail.com|9899204201|2021-01-20
        // URL ENC: gaurav.gom%40gmail.com%7C9899204201%7C2021-01-20
        // Z2F1cmF2LmdvbSU0MGdtYWlsLmNvbSU3Qzk4OTkyMDQyMDElN0MyMDIxLTAxLTIw
        $base64_res = base64_decode($response);
        $data_res = urldecode($base64_res);
        $data_res = explode("|",$data_res);

$student = $this->curd_model->get_1("*","talent_student_registration",array('id'=>$data_res[0],'email_id'=>$data_res[1],'contact'=>$data_res[2],'dob'=>$data_res[3]));
        if(isset($student->id) && $student->id > 0)
        {
          if($student->status == "P")
            $data['info'] = $student;
          else
            $data['info'] = array();
        }
        else
        {
          //echo '1';
          show_404();
        }
      }
      else
      {
        //echo '2';
        show_404();
      }
      $other_page = true;
    }
    else if($url[0] == 'namo-solutions')
    {
      $data['slider'] = $this->curd_model->get_all('*', 'home_slider', array('status'=>'A'), 'id', 'DESC');
      $other_page = true;
    }
    else if($url[0] == "fees-status")
    {
      redirect('under-construction');
      $other_page = true;
    }
    else if($url[0] == "contact-us")
    {
      $other_page = true;
    }

    else if($url[0] == "about-us")
    {
      $other_page = true;
    }
    else if($url[0] == "classes-syllabus")
    {
      $other_page = true;
    }


    else if($url[0] == "school-syllabus")
    {
      $other_page = true;
    }

    else if($url[0] == "terms")
    {
      $other_page = true;
    }

    else if($url[0] == "privacy-policy")
    {
      $other_page = true;
    }
	else if($url[0] == "faq")
    {
      $other_page = true;
    }

	else if($url[0] == "event/")
    {
      $other_page = true;
    }

    $data['page_info'] = $this->curd_model->get_1('*', 'web_pages', array('page_url'=>$url[0],'status'=>'A'));
    if(isset($data['page_info'])>0 && $other_page)
    {
      $images = $this->curd_model->get_all('*', 'images', array('status'=>'A'), 'id', 'DESC');
      foreach($images as $img)
      {
        $data['image_detail'][$img->id] = $img->location;
      }
	  
	  
	  
	  
	  $event = $this->curd_model->get_all('*', 'event', array('status'=>'A','event_cat'=> '2' ), 'id', 'DESC');
      foreach($event as $ev)
      {
        $data['event'][$ev->id] = $ev;
		
      }
	  
      $settings = $this->curd_model->get_all('*', 'web_settings', array('status'=>'A'), 'id', 'ASC');
      foreach($settings as $set)
      {
        $data['settings'][$set->name] = $set->value;
      }
      return view($url[0],$data);
    }
    else if(isset($data['page_info'])>0)
    {
      $images = $this->curd_model->get_all('*', 'images', array('status'=>'A'), 'id', 'DESC');
      foreach($images as $img)
      {
        $data['image_detail'][$img->id] = $img->location;
      }
      $settings = $this->curd_model->get_all('*', 'web_settings', array('status'=>'A'), 'id', 'ASC');
      foreach($settings as $set)
      {
        $data['settings'][$set->name] = $set->value;
      }
      return view('default-page',$data);
    }
    else
    {
      show_404();
    }
        
    
    }
}
?>