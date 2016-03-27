<?php

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
                $this->load->library('tank_auth');
		$this->load->database();
    
	
        }
        
   
      	function do_upload()
	{
     		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']	= '100';
		$config['max_width']  = '750';
		$config['max_height']  = '750';

		

		$this->load->library('upload', $config);
                
                $text_name="userfile";

		$userid=$this->tank_auth->get_user_id();	

		if ( ! $this->upload->do_upload($text_name))
		{
			$error = array('error' => $this->upload->display_errors());
			
			$error['userid']=$userid;
			//$data['userid']=$userid;  
			
			
			$this->load->model('tfor2_model');            
			$error['basic_info']=$this->tfor2_model->get_basic_info_upload($userid);

            		//$data['detail_info']=$this->tfor2_model->get_user_details();
       
			$this->load->view("upload_picture",$error);
		}
		else
		{	
			
						
			$upload_data= $this->upload->data();
                        
			$file_name= $upload_data['file_name'];
				

			$tp = getimagesize($upload_data['full_path']);
			$width=$tp[0];
			$height=$tp[1];

			if($width <175 || $height <175) 
			{
				$error = array('error' => "</br>Image should be atleast of 175x175 size(width:175px,Height:175px)");
				$error['userid']=$userid;
				//$data['userid']=$userid;                       
			
				$this->load->model('tfor2_model');            
				$error['basic_info']=$this->tfor2_model->get_basic_info_upload($userid);
				$this->load->view("upload_picture",$error);

			}
	
			else 
			{
			
				 $this->load->model('tfor2_model');

				 $this->load->helper('url');
   				 $var=$file_name;
    				 $config['image_library'] = 'gd2';
				 $config['source_image'] = '/var/www/tfor2/uploads/'.$var;

				// echo $config['source_image'];

			         $config['create_thumb'] = TRUE;
				 $config['maintain_ratio'] = TRUE;
				 $config['width'] = 100;
				 $config['height'] = 100;

			         $this->load->library('image_lib', $config);

				 $this->image_lib->resize();

				 $file = substr($file_name, 0,strrpos($file_name,'.'));   
    			        // echo $file;	
				
			         $file_extension=substr(strrchr($file_name,'.'),1);
				// echo $file_extension;
							
			
				$thumb_img=$file.'_thumb.'.$file_extension;
			
			

				 $flag=$this->tfor2_model->upload_img_db($userid,$file_name,$thumb_img);
		                
		               if($flag==1)
				{
			
					$data['userid']=$userid;
					$this->load->model('tfor2_model');            
					$data['basic_info']=$this->tfor2_model->get_basic_info_upload($userid);
					$this->load->view("upload_picture",$data);
			
				}
			}
                       
		}
               
	}
};
?>
