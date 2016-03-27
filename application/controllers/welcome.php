<?php include("/var/www/tfor2/session/Session.php"); ?>

<?php 

class Welcome extends CI_Controller
{

    
	function __construct()
	{
		parent::__construct();

		$this->ci =& get_instance();
		$this->load->library('tank_auth');
                $this->load->helper('url');
                $this->load->library('input');
                $this->load->helper('cookie');
                $this->load->helper('form');
                $this->load->library('form_validation');
                $this->load->database();
                $this->ci->load->library('session');
                	
                $this->load->helper('security');
                $this->load->helper('date');
               
                 $this->load->model('tfor2_model');
                
                $this->load->helper('email');
    
           
	
	}

	function index()
	{
		
                
                
            
                if (!$this->tank_auth->is_logged_in()) {
                        $this->image_gallery();
                        //redirect('/auth/login/');
		} else {
                       
                        
			$data['user_id']= $this->tank_auth->get_user_id();
			$data['username']= $this->tank_auth->get_username();
                        
                        //$_SESSION['userid']=$this->tank_auth->get_user_id();
                        
                         $data['basic_info']=$this->tfor2_model->get_basic_info();
                         $data['detail_info']=$this->tfor2_model->get_user_details();
                         $data['no_of_mails']=$this->tfor2_model->count_mails();
                       //  print_r($data['basic_info'][0]->profile_img);
                         
                      //  print_r($data['detail_info']['height_val']);
                         
			 $this->load->view('my_profile', $data);
		}
                
                
                
	}
        function get_city_name()
        {
            $post_code = $_POST['post_code'];
            $data=$this->tfor2_model->get_city_name_db($post_code);
            echo json_encode($data);          
        }
        
        function own_words()
        {
             $data['basic_info']=$this->tfor2_model->get_basic_info();
             $data['detail_info']=$this->tfor2_model->get_user_details();
             $this->load->view("own_words",$data);
        }

        function others_own_words()
        {
             $id= $this->uri->segment(3);
             $data['basic_info']=$this->tfor2_model->get_basic_info_others($id);
             $this->load->view("other_own_words",$data);
        }
        function save_words()
        {
            $words = $_POST['words'];
            $this->tfor2_model->save_words($words);
            echo json_encode("success"); 
        }
        
        function reset_password()
        {
           $data['user_id']= $this->uri->segment(3);
           $data['new_pass_key']=$this->uri->segment(4);
           $this->load->view("forget_password",$data);
        }
        function goto_profile()
        {
            $id= $this->uri->segment(3);
            $data['basic_info']=$this->tfor2_model->get_basic_info_others($id);
            $data['detail_info']=$this->tfor2_model->get_user_details_others($id); 
           
          
           
            $this->load->view('others_profile',$data);
             
        }
        function registration_success()
        {
            $id= $this->uri->segment(3);
            $data=array('id'=>$id);
            $this->load->view("regi_success",$data);
        }
        
        
        function login_after_regi(){
             $id= $this->uri->segment(3);
             $this->load->model('tfor2_model');
             $data=$this->tfor2_model->get_id_password($id);
            
             $this->ci->session->set_userdata(array(
								'user_id'	=> $data['id'],
								'username'	=> $data['username'],
								'status'	=> ($data['activated'] == 1) ? STATUS_ACTIVATED : STATUS_NOT_ACTIVATED,
						));
               $data['basic_info']=$this->tfor2_model->get_basic_info();
               $data['detail_info']=$this->tfor2_model->get_user_details();
               $data['no_of_mails']=$this->tfor2_model->count_mails();
              
             $this->load->view('my_profile',$data);
        }
        
        function image_gallery()
        {
            
         $gender= $this->uri->segment(3);
       
         
         $this->load->model('tfor2_model');
         $data['random']=$this->tfor2_model->random_profile($gender);
       
         $data['errors']['login']='';
         $data['errors']['password']='';
        
         $this->load->view("home",$data);
        }
        function search(){
            
            if (!$this->tank_auth->is_logged_in()) {
                    
			redirect('welcome/image_gallery/both');
		}else {
            
            $data['basic_info']=$this->tfor2_model->get_basic_info();
            $data['detail_info']=$this->tfor2_model->get_user_details();        
                    
            $this->load->view('search_page',$data);
            
            }
        }
        
        function me_at_glance(){
             $user_id=$this->uri->segment(3);
             if (!$this->tank_auth->is_logged_in()) {
                    
			redirect('welcome/image_gallery/both');
		}else {
            $data['userid']= $user_id;
            $data['basic_info']=$this->tfor2_model->get_basic_info();
            $data['detail_info']=$this->tfor2_model->get_user_details();
            $data['profile_id_info']=$this->tfor2_model->profile_id_info();
           
          
           // $this->load->view('tp',$data);
            $data['height']=$this->tfor2_model->mas_table_info('tf2_mas_height');
            $data['body_type']=$this->tfor2_model->mas_table_info('tf2_mas_body_type');
            $data['relation_status']=$this->tfor2_model->mas_table_info('tf2_mas_relationship_status');
            $data['ethnicity']=$this->tfor2_model->mas_table_info('tf2_mas_ethnicity');
            $data['smoking']=$this->tfor2_model->mas_table_info('tf2_mas_smoking');
            $data['drink']=$this->tfor2_model->mas_table_info('tf2_mas_drink');
            $data['children']=$this->tfor2_model->mas_table_info('tf2_mas_children');
            $data['education']=$this->tfor2_model->mas_table_info('tf2_mas_education');
            $data['occupation']=$this->tfor2_model->mas_table_info('tf2_mas_occupation');
            $data['diet']=$this->tfor2_model->mas_table_info('tf2_mas_diet');
            $data['eye_color']=$this->tfor2_model->mas_table_info('tf2_mas_eye_color');
            $data['hair_color']=$this->tfor2_model->mas_table_info('tf2_mas_hair_color');
            $data['first_language']=$this->tfor2_model->mas_table_info('tf2_mas_languages');
            $data['religious']=$this->tfor2_model->mas_table_info('tf2_mas_religious_view');
            $data['animals']=$this->tfor2_model->mas_table_info('tf2_mas_animals');
            
            $data['fvrt_color']=$this->tfor2_model->mas_table_info('tf2_mas_color');
            $data['fashion']=$this->tfor2_model->mas_table_info(' tf2_mas_fashion_sense');
            $data['intelligense']=$this->tfor2_model->mas_table_info('tf2_mas_intelligence');
            $data['tv']=$this->tfor2_model->mas_table_info('tf2_mas_tv');
            $data['cinema']=$this->tfor2_model->mas_table_info('tf2_mas_cinema'); 
            
            /* check box */
            
            $data['body_art']=$this->tfor2_model->mas_table_info('tf2_mas_body_art');
            $data['other_lang']=$this->tfor2_model->mas_table_info('tf2_mas_languages');
            $data['music']=$this->tfor2_model->mas_table_info('tf2_mas_music');
            $data['date']=$this->tfor2_model->mas_table_info('tf2_mas_date');
            $data['home']=$this->tfor2_model->mas_table_info('tf2_mas_ideal_home');
            $data['mas_value']=$this->tfor2_model->mas_table_info('tf2_mas_values');
            $data['read_value']=$this->tfor2_model->mas_table_info('tf2_mas_reading_habit');
            $data['mov_value']=$this->tfor2_model->mas_table_info('tf2_mas_movie_taste');
            $data['lei_value']=$this->tfor2_model->mas_table_info('tf2_mas_leisure');
            
            
            $this->load->view('me_at_glance',$data);
            
            }
            
        }
        
        function prev_id()
        {
             $column_name = $_POST['column_name'];
             $data=$this->tfor2_model->get_prev_ids($column_name);
             echo json_encode($data); 
        }
        
         function my_email(){
             $user_id=$this->uri->segment(3);
             if (!$this->tank_auth->is_logged_in()) {
                    
			redirect('welcome/image_gallery/both');
		}else {
            $data['userid']= $user_id;
            $data['basic_info']=$this->tfor2_model->get_basic_info();
            $data['detail_info']=$this->tfor2_model->get_user_details();
            
            $data["mail_info"]=$this->tfor2_model->get_mails();
            
            $this->load->view('my_emails',$data);
            
            }
            
        }
        
       function  my_deletemails(){
             //$user_id=$this->uri->segment(3);
             if (!$this->tank_auth->is_logged_in()) {
                    
			redirect('welcome/image_gallery/both');
		}else {
           // $data['userid']= $user_id;
            $data['basic_info']=$this->tfor2_model->get_basic_info();
            $data['detail_info']=$this->tfor2_model->get_user_details();
            
            $data["mail_info"]=$this->tfor2_model->get_deleted_mails();
            $this->load->view('delete_mails',$data);
            
            }
            
        }
        
      function delete_mails()
       {
           $msg_id=$this->uri->segment(3);
           $this->tfor2_model->delete_mails($msg_id);
           $this->my_email();
       }
        
      function back_to_receive()
       {
           $msg_id=$this->uri->segment(3);
           $this->tfor2_model->back_to_receive($msg_id);
           $this-> my_deletemails();
       }
        function send_email()
        {
             if (!$this->tank_auth->is_logged_in()) 
             {
                redirect('welcome/image_gallery/both');
	     }
             else
             {
                    $id=$this->uri->segment(3);

                    $data['basic_info']=$this->tfor2_model->get_basic_info_others($id);
                    $data['detail_info']=$this->tfor2_model->get_user_details_others($id);

                    $this->load->view('send_mail',$data);
            
            }
            
        }
        
      
        function send_mail(){
            
            $receiver_id=$this->uri->segment(3);
            
            $receiver_user_id=$this->tfor2_model->get_userid($receiver_id);
            $sender_id=$this->tank_auth->get_user_id();
            $sender_user_id=$this->tfor2_model->get_userid($sender_id);
          
            
            $subject=$this->input->post('subject');
            $message=$this->input->post('message');
            
            $this->tfor2_model->send_mail($sender_user_id,$receiver_user_id,$subject,$message);
            
            $data['basic_info']=$this->tfor2_model->get_basic_info_others($receiver_id);
            $data['detail_info']=$this->tfor2_model->get_user_details_others($receiver_id);
            
            $this->load->view('send_mail_success',$data);
            
             
        }
        
        
        function upload_img(){
            
             $user_id=$this->uri->segment(3);
             if (!$this->tank_auth->is_logged_in()) {
                    
			redirect('welcome/image_gallery/both');
		}else {
            
            $data['userid']= $user_id;
            
            $data['basic_info']=$this->tfor2_model->get_basic_info();
            $data['detail_info']=$this->tfor2_model->get_user_details();
            $data['error']='';
            
            $this->load->view('upload_picture',$data);
            
            }
        }
        
        function others_upload_img()
        {
              $id=$this->uri->segment(3);
              $data['basic_info']=$this->tfor2_model->get_basic_info_others($id);
              $data['detail_info']=$this->tfor2_model->get_user_details_others($id);
              $this->load->view('others_upload_img',$data);
            
        }
        
         function height_ajax()
        {
                $height_id = $_POST['id_height'];
                $this->tfor2_model->height_update($height_id);
                echo json_encode("success"); 
            
        }
        
        function read_message()
        {
            $id= $_POST['msg_id'];
            $this->tfor2_model->readed_msg($id);
            echo json_encode("success"); 
            
        }
        
        function my_sent_mails()
        {
               
            
               
               
            $data['basic_info']=$this->tfor2_model->get_basic_info();
            $data['detail_info']=$this->tfor2_model->get_user_details();
            
            $data["mail_info"]=$this->tfor2_model->get_sentmails();
            
            $this->load->view('my_sent_mails',$data);
               
               
        }
        
        function body_ajax()
        {
        
            $height_id = $_POST['id_height'];
            //$this->load->model('tfor2_model');
            $this->tfor2_model->body_update($height_id);
            echo json_encode("success"); 
           
        }
        
        function relation_ajax()
        {
        
            $id = $_POST['id_height'];
            
          //  $this->load->model('tfor2_model');
            $this->tfor2_model->relation_update($id);
            
            echo json_encode("success"); 
           
        }
        
        function ethnicity_ajax()
        {
            $id = $_POST['id_height'];
          //  $this->load->model('tfor2_model');
            $this->tfor2_model->ethnicity_update($id);
            echo json_encode("success"); 
           
        }
        function children_ajax()
        {
            $id = $_POST['id_height'];
          //  $this->load->model('tfor2_model');
            $this->tfor2_model->children_update($id);
            echo json_encode("success"); 
           
        }
        function features_ajax_request()
        {
            $id = $_POST['id_height'];
            $column = $_POST['column_name'];
            
          //  $this->load->model('tfor2_model');
            $this->tfor2_model->features_request_db($id,$column);
            echo json_encode("success"); 
           
        }
        function checkbox_features()
        {
            $id = $_POST['id'];
            $column = $_POST['column_name'];
            
          $this->load->model('tfor2_model');
          $this->tfor2_model->checkbox_features_db($id,$column);
            echo json_encode("success"); 
           
        }
        
        
        
        
        function smoking_ajax()
        {
            $id = $_POST['id_height'];
           
            $this->tfor2_model->smoking_update($id);
            echo json_encode("success"); 
           
        }
        function drink_ajax()
        {
            $id = $_POST['id_height'];
           
            $this->tfor2_model->drink_update($id);
            echo json_encode("success"); 
           
        }
        
        
        
        function search_username(){
            
            if (!$this->tank_auth->is_logged_in()) {
                    
			redirect('welcome/image_gallery/both');
		}else
                    {
            
            $username=$this->input->post('username_search');
           
            $_SESSION['search']=$username;
         
             $this->search_users(); }
            
           // $data=$this->tfor2_model->search_user($username);
           // $this->load->view("search_result",$data);
            
        }
        
        
   
    
    function search_users()
    {
        
     
        $config = array();
        //$this->load->helper('url');
	//$this->load->library('input');
	
	//$this->load->helper('form');
	
	//$this->load->database();
        
        $this->load->library("pagination");
       //  $this->load->model('tfor2_model');
        $config["base_url"] = base_url() . "welcome/search_users/";
        $config["total_rows"] = $this->tfor2_model->record_search($_SESSION['search']);
        $config["per_page"] = 6;
        $config["uri_segment"] = 3;

        $config['next_link'] = '&Iota; &nbsp; &nbsp; Next';
        $config['next_tag_open'] = '<div id="next_link">';
        $config['next_tag_close'] = '</div>'; 
        
        $config['prev_tag_open'] = '<div id="prev_link">';
        $config['prev_tag_close'] = '</div>';
        $config['prev_link'] = 'Previous &nbsp; &nbsp;';
        
        $config['display_pages'] = FALSE;
        $config['last_link'] = FALSE;
         $config['first_link'] = FALSE;
        $this->pagination->initialize($config);
      
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        
        $data["results"] = $this->tfor2_model->search_user_db($config["per_page"],$page,$_SESSION['search'],$config["total_rows"]);
        $data["links"] = $this->pagination->create_links();
       
        
        
        $image_mani=array();
        $i=0;
        $data['basic_info']=$this->tfor2_model->get_basic_info();
        $data['detail_info']=$this->tfor2_model->get_user_details();
        $this->load->view("search_result", $data);
    
    }
        
        function home()
        {
               
                $this->load->view("home");
        }
        
        
        function my_profile(){
            
           
            
            $this->load->view("my_profile");
            
            
        }

        function thumb()
        {
            $this->load->helper('url');
   $var='brooding-175x175_(copy).jpg';
    $config['image_library'] = 'gd2';
$config['source_image'] = '/var/www/codeigniter_tank_tfor2/uploads/'.$var;

echo $config['source_image'];

$config['create_thumb'] = TRUE;
$config['maintain_ratio'] = TRUE;
$config['width'] = 30;
$config['height'] = 30;

$this->load->library('image_lib', $config);

$this->image_lib->resize();


$temp=  base_url().'uploads/logot_thumb.gif';
echo $temp;

//$this->load->view("tp");

 }

};



/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>