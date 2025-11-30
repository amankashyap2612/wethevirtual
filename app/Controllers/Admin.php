<?php
namespace App\Controllers;
use CodeIgniter\Controller;
class Admin extends BaseController
{
    public function view($url = "")
    {
        $data['session'] = $this->session->get('adminlogin');
        $data = get_menu();
        $url = explode('.',$url);
			if($url[0] != "dashboard")
			{
				$data['other_action'] = explode(" ",$data['action_access'][$url[0]]);
			}	
			if($url[0] == 'dashboard')
			{
				$data['count']['student'] = 52; 
				$data['count']['join_us'] = 21; 
				//$data['count']['contact'] = $this->curd_model->count_where('frm_contact',array('1'=>1));
				//$data['contact'] = $this->curd_model->select_where_single_like('frm_contact',array('insert_time'=>date('Y-m-d')),'id','DESC',0,20);
				$data['registration'] = array();
			}
			else if($url[0] == "user")
			{
				$data['status'] = isset($_POST['status'])?$_POST['status']:'A';
				$emp = $this->curd_model->get_all('*', 'login', array(), 'f_name', 'ASC');
				foreach($emp as $em)
				{
					$data['user_info'][$em->id] = $em;
				}
				$user_type = $this->curd_model->get_all('*', 'user_type', array(), 'name', 'ASC');
				foreach($user_type as $ut)
				{
					$data['user_type'][$ut->user_key] = $ut;
				}
				$data['emp'] = $this->curd_model->get_all('*', 'login', array('status'=>$data['status']), 'f_name', 'ASC');
			}
			else if($url[0] == "slider")
			{
				$data['status'] = isset($_POST['status'])?$_POST['status']:'A';
				$images = $this->curd_model->get_all('*', 'images', array('purpose'=>'home_slider','status'=>'A'), 'id', 'DESC');
				foreach($images as $img)
				{
					$data['images'][$img->id] = $img;
				}
				$emp = $this->curd_model->get_all('*', 'login', array(), 'f_name', 'ASC');
				foreach($emp as $em)
				{
					$data['user_info'][$em->id] = $em;
				}
				$data['slider'] = $this->curd_model->get_all('*', 'home_slider', array('status'=>$data['status']), 'id', 'DESC');
			}
			else if($url[0] == "view")
			{
				$images = $this->curd_model->get_all('*', 'images', array('purpose'=>'home_slider','status'=>'A'), 'id', 'DESC');
				foreach($images as $img)
				{
					$data['images'][$img->id] = $img;
				}
				$emp = $this->curd_model->get_all('*', 'login', array(), 'f_name', 'ASC');
				foreach($emp as $em)
				{
					$data['user_info'][$em->id] = $em;
				}
				$data['view'] = $this->curd_model->get_all('*', 'home_slider', array(), 'id', 'DESC');
			}
			else if($url[0] == "map" )
			{
				$images = $this->curd_model->get_all('*', 'images', array('purpose'=>'home_slider','status'=>'A'), 'id', 'DESC');
				foreach($images as $img)
				{
					$data['images'][$img->id] = $img;
				}
				$emp = $this->curd_model->get_all('*', 'login', array(), 'f_name', 'ASC');
				foreach($emp as $em)
				{
					$data['user_info'][$em->id] = $em;
				}
				$data['map'] = $this->curd_model->get_all('*', 'home_slider', array(), 'id', 'DESC');
			}
			else if($url[0] == "mobile" )
			{
				$images = $this->curd_model->get_all('*', 'images', array('purpose'=>'home_slider','status'=>'A'), 'id', 'DESC');
				foreach($images as $img)
				{
					$data['images'][$img->id] = $img;
				}
				$emp = $this->curd_model->get_all('*', 'login', array(), 'f_name', 'ASC');
				foreach($emp as $em)
				{
					$data['user_info'][$em->id] = $em;
				}
				$data['mobile'] = $this->curd_model->get_all('*', 'home_slider', array(), 'id', 'DESC');
			}
			else if($url[0] == "news")
			{
				$data['status'] = isset($_POST['status'])?$_POST['status']:'A';
				$emp = $this->curd_model->get_all('*', 'login', array(), 'f_name', 'ASC');
				foreach($emp as $em)
				{
					$data['user_info'][$em->id] = $em;
				}
				$data['news'] = $this->curd_model->get_all('*', 'news', array('status'=>$data['status']), 'id', 'ASC');
			}
			else if($url[0] == "event_category" )
			{
				$data['status'] = isset($_POST['status'])?$_POST['status']:'A';
				$data['images'] = array();
				$images = $this->curd_model->get_all('*', 'images', array('purpose'=>'event_category'), 'id', 'DESC');
				foreach($images as $img)
				{
					$data['images'][$img->id] = $img;
				}
				$emp = $this->curd_model->get_all('*', 'login', array(), 'f_name', 'ASC');
				foreach($emp as $em)
				{
					$data['user_info'][$em->id] = $em;
				}
				$data['category'] = $this->curd_model->get_all('*','event_cat',array('status'=>$data['status']),'id','DESC');
			}
			else if($url[0] == "event")
			{
				$data['status'] = isset($_POST['status'])?$_POST['status']:'A';
				$data['images'] = array();
				$images = $this->curd_model->get_all('*', 'images', array('purpose'=>'event'), 'id', 'DESC');
				foreach($images as $img)
				{
					$data['images'][$img->id] = $img;
				}
				$emp = $this->curd_model->get_all('*', 'login', array(), 'f_name', 'ASC');
				foreach($emp as $em)
				{
					$data['user_info'][$em->id] = $em;
				}
				$event_cat = $this->curd_model->get_all('*', 'event_cat', array(), 'id', 'DESC');
				foreach($event_cat as $cat)
				{
					$data['category'][$cat->id] = $cat->category;
				}
				$data['event'] = $this->curd_model->get_all('*','event',array('status'=>$data['status']),'id','DESC');
			}
			else if($url[0] == "services" )
			{
				$data['status'] = isset($_POST['status'])?$_POST['status']:'A';
				$emp = $this->curd_model->get_all('*', 'login', array(), 'f_name', 'ASC');
				foreach($emp as $em)
				{
					$data['user_info'][$em->id] = $em;
				}
				$data['services'] = $this->curd_model->get_all('*','services',array('status'=>$data['status']),'id','DESC');
			}
			else if($url[0] == "event_request")
			{

				$data['from_date'] = isset($_POST['from_date'])?$_POST['from_date']:date('Y-m-d');
				$data['to_date'] = isset($_POST['to_date'])?$_POST['to_date']:date('Y-m-d');
				
				
				$emp = $this->curd_model->get_all('*', 'login', array(), 'f_name', 'ASC');
				foreach($emp as $obj)
				{
					$data['user_info'][$obj->id] = $obj;
				}
				$query = "select * from `frm_event_registration` where `insert_time` between ? AND ? order by `id` DESC";
				$data['event_request'] = $this->curd_model->customquery1($query,array($data['from_date'].' 00:00:00', $data['to_date'].' 23:59:59'));
				
			}
			else if($url[0] == "testimonial")
			{
				$data['status'] = isset($_POST['status'])?$_POST['status']:'A';
				$data['images'] = array();
				$images = $this->curd_model->get_all('*', 'images', array('purpose'=>'testimonials'), 'id', 'DESC');
				foreach($images as $img)
				{
					$data['images'][$img->id] = $img;
				}
				$emp = $this->curd_model->get_all('*', 'login', array(), 'f_name', 'ASC');
				foreach($emp as $em)
				{
					$data['user_info'][$em->id] = $em;
				}
				$data['testimonial'] = $this->curd_model->get_all('*','testimonial',array('status'=>$data['status']),'id','DESC');
			}
			else if($url[0] == "web_pages" )
			{
				$data['status'] = isset($_POST['status'])?$_POST['status']:'A';
				$data['images'] = array();
				$images = $this->curd_model->get_all('*', 'images', array('purpose'=>'testimonial'), 'id', 'DESC');
				foreach($images as $img)
				{
					$data['images'][$img->id] = $img;
				}
				$emp = $this->curd_model->get_all('*', 'login', array(), 'f_name', 'ASC');
				foreach($emp as $em)
				{
					$data['user_info'][$em->id] = $em;
				}
				$data['pages'] = $this->curd_model->get_all('*','web_pages',array('status'=>$data['status']),'id','DESC');
			}
			else if($url[0] == "promo_code" )
			{
				$data['status'] = isset($_POST['status'])?$_POST['status']:'A';
				$emp = $this->curd_model->get_all('*', 'login', array(), 'f_name', 'ASC');
				foreach($emp as $em)
				{
					$data['user_info'][$em->id] = $em;
				}
				$data['promo_code'] = $this->curd_model->get_all('*','promo_code',array('status'=>$data['status']),'id','DESC');
			}
			else if($url[0] == "payment" )
			{
				$data['payment_type'] = isset($_GET['payment_type'])?$_GET['payment_type']:'';
				$data['status'] = isset($_GET['status'])?$_GET['status']:'P';
				$data['user_id'] = isset($_GET['user_id'])?$_GET['user_id']:$data['session']['user_id'];
				$emp = $this->curd_model->get_all('*', 'login', array('1'=>'1'), 'f_name', 'ASC');
				foreach($emp as $em)
				{
					$data['user_info'][$em->id] = $em;
				}
				if($data['payment_type'] != '')
				{
					$where['payment_mode'] = $data['payment_type'];
				}
				$pay_type = (($data['payment_type']!="")?" and `payment_mode` = '".$data['payment_type']."' ":"");
				$data['payment'] = $this->curd_model->customquery1('select * from `amount_transaction` where `status` = "'.$data['status'].'" '.$pay_type.' order BY `id` DESC ');
				$data['mode'] = $this->curd_model->customquery1("select DISTINCT(`payment_mode`) from `amount_transaction` order by `payment_mode` ASC");
				$data['product_type'] = $this->curd_model->get_all('*','membership_type',array('status'=>'A'),'id','DESC');
			}
			else if($url[0] == "logout")
			{
				session_destroy();
				redirect(base_url());
			}
			
			if(in_array($url[0],$data['url']) || $url[0] == "dashboard")
			{
				return view('admin/'.$url[0], $data);
			}
			else
			{
				show_404();
			}
		}
	}
?>