<?php // include("/var/www/Codeigniter_ez/css/Session.php"); ?>
<?php

class Tfor2_model extends CI_Model {
        
	function __construct()
	{
            
        }
	/*public function registration( $username,$password,$email,$secq,$seca)
	{
            
            $users='ez_users';
		$query = $this->db->query("SELECT * FROM ".$users." WHERE username = '".$username."' ");
	
		 if ($query->num_rows() > 0)
		{			
			$session_array = array(
                         'regi_error'  => 'error');

                        $this->session->set_userdata($session_array);
			 $return_flag=0;
                        return $return_flag;	
			
		}
		else
		{


		 $uuid = array(
				  'time_low'  => 0,
				  'time_mid'  => 0,
				  'time_hi'  => 0,
				  'clock_seq_hi' => 0,
				  'clock_seq_low' => 0,
				  'node'   => array()
				 );

				 $uuid['time_low'] = mt_rand(0, 0xffff) + (mt_rand(0, 0xffff) << 16);
				 $uuid['time_mid'] = mt_rand(0, 0xffff);
				 $uuid['time_hi'] = (4 << 12) | (mt_rand(0, 0x1000));
				 $uuid['clock_seq_hi'] = (1 << 7) | (mt_rand(0, 128));
				 $uuid['clock_seq_low'] = mt_rand(0, 255);

				 for ($i = 0; $i < 6; $i++)
				 {
				  $uuid['node'][$i] = mt_rand(0, 255);
				 }

				 $uuid = sprintf('%08x-%04x-%04x-%02x%02x-%02x%02x%02x%02x%02x%02x',
				  $uuid['time_low'],
				  $uuid['time_mid'],
				  $uuid['time_hi'],
				  $uuid['clock_seq_hi'],
				  $uuid['clock_seq_low'],
				  $uuid['node'][0],
				  $uuid['node'][1],
				  $uuid['node'][2],
				  $uuid['node'][3],
				  $uuid['node'][4],
				  $uuid['node'][5]
				 );

				$temp_guid=$uuid;
	

		$temptime=time();
		
		if($username== 'admin' )
		{	
			
			$templevel=9;
		}
		else
		{
			$templevel=1;
		}
                $date = date( "Y-m-d", time() );
		$data = array(
		   'username' => $username ,
		   'password' => $password ,
		   'userlevel' => $templevel,
		   'email' => $email,
		   'guid'=>$temp_guid,
		   'secq'=>$secq,
		   'seca'=>$seca,
                    'created'=>$date); 
			
		
		
		$this->db->insert($users, $data);
                
               $unset_session = array('regi_error' => '');

               $this->session->unset_userdata($unset_session);

            
		
                $return_flag=1;
		return $return_flag;	
		
	  }	
		
        }
        
   
    public function fetch_search($limit, $start,$cat_name) {
        
        
        $table="ez_products";
       
        $query= $this->db->like('product_name',$cat_name);
        $query=$this->db->get($table,$limit , $start);
        
      
       
            if ($query->num_rows() > 0)
            {
                foreach ($query->result() as $row) 
                {
                    $data[] = $row;
                }
                return $data;
            }
        else
        {
            
            $flag=1;
            return $flag;
        }
        return false;
   }
      
   
   function try_form($id,$data){
       
       if($id)
       {
           $table='address';
           $tp=1;
           $query = $this->db->query("update ".$table." set add1 = '".$add."' where id= '".$tp."' ");
           
       }
       else
       {
          $table='address';
          $this->db->insert($table, $data);
       }
    */
   
   
   /*function search_user($username) {
        
        $table="users";
       
        $query= $this->db->like('username',$username);
        $query=$this->db->get($table);
        
      
       
        if ($query->num_rows() > 0)
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
            $data['flag']=0;
            return $data;
           
        }
        else
        {
            $data['flag']=1;
            
            return $data;
        }
        return false;
   }*/
  
  function get_id_password($user_id)
  {
    
      $table_name='users';
    
      $query = $this->db->query("SELECT * FROM ".$table_name." WHERE id = '".$user_id."' ");
      if ($query->num_rows() > 0)
        {
            foreach ($query->result() as $row) 
            {
                $data['id']=$row->id;
                $data['username']=$row->username;
                $data['password']=$row->password;
                $data['activated']=$row->activated;
            }
        }
        return $data;
  }
        
   function get_city_name_db($post)
    {
       
       $table_name=' city_postcode';
       $li=NULL;
       $query = $this->db->query("SELECT * FROM ".$table_name." WHERE post_code = '".$post."' ");
        if ($query->num_rows() > 0)
        {
            foreach ($query->result() as $row) 
            {
                $temp = $row->city;
                $li = $li."<li>".$temp."</li>";
            }
           
            
         return $li;  
        }
        else
        {
            $flag=1;
            return  $flag;
        }
       
    }
    function count_mails() 
    {
        $table_name='tf2_mail';
        $id=$this->tank_auth->get_user_id();
        $user_id=$this->get_userid($id);
        $temp=0;
        $query = $this->db->query("SELECT * FROM ".$table_name." WHERE receiver_id = '".$user_id."' and unread='".$temp."' ");
        $count=0;
        if ($query->num_rows() > 0)
        {
            foreach ($query->result() as $row) 
            {
               $count++;
            }
           
            
            return $count;
        }
        else 
        {
            return $count;
        }
       
        
        
    }
    
   function save_words($words)
    {
        $id=$this->tank_auth->get_user_id();
        $table_name='users';
        $this->db->query("update ".$table_name." set own_words = '".$words."' where id= '".$id."' ");
       
    } 
    
   function get_userid($id)
    
   {
        $table_name='users';
       
	$query = $this->db->query("SELECT * FROM ".$table_name." WHERE id = '".$id."' ");
        if ($query->num_rows() > 0)
        {
            foreach ($query->result() as $row) 
            {
                $username = $row->username;
            }
           
            return $username;
           
        }
       
   }
   
   
        
        
   function get_basic_info()
   {
       
       $users='users';
        $id=$this->tank_auth->get_user_id();
	$query = $this->db->query("SELECT * FROM ".$users." WHERE id = '".$id."' ");
        if ($query->num_rows() > 0)
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
            $data['flag']=0;
            return $data;
           
        }
   }
   
   function get_mails()
   {
        $id=$this->tank_auth->get_user_id();
        
        $user_id=$this->get_userid($id);
       
        
        $table_name="tf2_mail";
        $temp=0;
        $query = $this->db->query("SELECT * FROM ".$table_name." WHERE receiver_id = '".$user_id."' and delete_mail ='".$temp."' ");
        if ($query->num_rows() > 0)
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
            
            return $data;
           
        }
        else 
        {
            
            return ;
        }
        
        
   }
   
   
   function get_deleted_mails()
   {
        $id=$this->tank_auth->get_user_id();
        
        $user_id=$this->get_userid($id);
       
        
        $table_name="tf2_mail";
        $temp=1;
        $query = $this->db->query("SELECT * FROM ".$table_name." WHERE receiver_id = '".$user_id."' and delete_mail ='".$temp."' ");
        if ($query->num_rows() > 0)
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
            
            return $data;
           
        }
        else 
        {
            
            return ;
        }
        
        
   }
   
   
   
   function get_sentmails() 
   {
       $id=$this->tank_auth->get_user_id();
        
        $user_id=$this->get_userid($id);
       
        
        $table_name="tf2_mail";
        $query = $this->db->query("SELECT * FROM ".$table_name." WHERE sender_id = '".$user_id."' ");
        if ($query->num_rows() > 0)
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
            
            return $data;
           
        }
        else 
        {
            
            return ;
        }
   }
   function readed_msg($id)
   {
       $table_name="tf2_mail"; 
       $temp=1;
       $this->db->query("update ".$table_name." set unread = '".$temp."' where mail_id= '".$id."' ");
   }
   
   function send_mail($sender_id,$receiver_id,$subject,$message)
   {
        $table_name='tf2_mail';    
        $data = array(
		   'sender_id' => $sender_id,
		   'receiver_id' => $receiver_id,
                   'subject' =>$subject,
                   'message' =>$message); 
            
	    $this->db->insert($table_name, $data);
            return;
   }
   
   function delete_mails($id)
   {
        $table_name='tf2_mail';
        $temp=1;
        $this->db->query("update ".$table_name." set delete_mail = '".$temp."' where mail_id= '".$id."' ");
       
        
        
   }
   function back_to_receive($id) 
   {
        $table_name='tf2_mail';
        $temp=0;
        $this->db->query("update ".$table_name." set delete_mail = '".$temp."' where mail_id= '".$id."' ");
   }
   
   function get_basic_info_others($id)
   {
       
       $users='users';
       
	$query = $this->db->query("SELECT * FROM ".$users." WHERE id = '".$id."' ");
        if ($query->num_rows() > 0)
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
            $data['flag']=0;
            return $data;
           
        }
   }
   
   
   function get_user_details_others($id) 
   {
      
        $users='user_info';
        
	$query = $this->db->query("SELECT * FROM ".$users." WHERE user_id = '".$id."' ");
        if ($query->num_rows() > 0)
        {   
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
           
            //return $data;
           
        
         $temp_value=$data[0]->height;
         if($temp_value=='' || $temp_value=='0')
         {
             $data['height_val']='Ask me later';
         }
         else
         {
             $table_name='tf2_mas_height';
             $query = $this->db->query("SELECT * FROM ".$table_name." WHERE idheight = '". $temp_value."' ");
             if ($query->num_rows() > 0)
            {
                
                foreach ($query->result() as $row) 
                {
                    $temp = $row->name;
                }
                $data['height_val']=$temp;
           
            }
            else
            {
                $data['height_val']=$temp_value;
            }
             
         }
         /* body type */
         
         $temp_value=$data[0]->body_type;
         if($temp_value=='' || $temp_value=='0')
         {
             $data['bodytype_val']='Ask me later';
         }
         else
         {   $id_name="id_body_type";
             $table_name='tf2_mas_body_type';
             //$query = $this->db->query("SELECT * FROM ".$table_name." WHERE '".$id_name."' = '". $temp_value."' ");
            // $query=  $this->db->get_where(array(''=>),)
             $query = $this->db->get_where($table_name,array($id_name => $temp_value));
             if ($query->num_rows() > 0)
            {
               
                foreach ($query->result() as $row) 
                {
                    $temp = $row->name;
                }
                $data['bodytype_val']=$temp;
           
            }
            else
            {
                $data['bodytype_val']=$temp_value;
            }
             
         }
        
         /* other_lang */
         
         $temp_value=$data[0]->other_lang;
         $table_name='tf2_mas_languages';
         $id_name="id_first_language";
         $data['other_lang_value']=$this->get_checkbox_details($temp_value,$table_name,$id_name);
         
         
         /* .........music ............. */
         $temp_value=$data[0]->music;
         $table_name='tf2_mas_music';
         $id_name="id_music";
         $data['music_value']=$this->get_checkbox_details($temp_value,$table_name,$id_name);
         
         /* ............body _art ........*/
        
         $temp_value=$data[0]->body_art;
         $table_name='tf2_mas_body_art';
         $id_name="id_body_art";
         $data['body_art_value']=$this->get_checkbox_details($temp_value,$table_name,$id_name);
         
        
         /* date */
         $temp_value=$data[0]->mas_date;
         $table_name='tf2_mas_date';
         $id_name="id_date";
         $data['date_value']=$this->get_checkbox_details($temp_value,$table_name,$id_name);
         
         /* ideal home */
          $temp_value=$data[0]->ideal_home;
         $table_name='tf2_mas_ideal_home';
         $id_name="id_ideal_home";
         $data['home_value']=$this->get_checkbox_details($temp_value,$table_name,$id_name);
         
         /* mas value */
         $temp_value=$data[0]->mas_values;
         $table_name='tf2_mas_values';
         $id_name="id_values";
         $data['mas_value_value']=$this->get_checkbox_details($temp_value,$table_name,$id_name);
         
         /*.......reading */
         $temp_value=$data[0]->reading_habit;
         $table_name='tf2_mas_reading_habit';
         $id_name="id_reading_habit";
         $data['reading_value']=$this->get_checkbox_details($temp_value,$table_name,$id_name);
         
         
         /*........... movie *..........*/
         $temp_value=$data[0]->movie_taste;
         $table_name='tf2_mas_movie_taste';
         $id_name="id_movie_taste";
         $data['movie_value']=$this->get_checkbox_details($temp_value,$table_name,$id_name);
         
         
         /*......... leisure ........*/
         $temp_value=$data[0]->mas_leisure;
         $table_name='tf2_mas_leisure';
         $id_name="id_leisure";
         $data['leisure_value']=$this->get_checkbox_details($temp_value,$table_name,$id_name);
         
         
         /* relationship */
         $temp_value=$data[0]->relationship_status;
         $table_name='tf2_mas_relationship_status';
         $id_name="id_relationship_status";
         $data['relation_value']=$this->get_details($temp_value,$table_name,$id_name);
         
         
         /* .........ethnicity........ */
         $temp_value=$data[0]->ethinicity;
         $table_name='tf2_mas_ethnicity';
         $id_name="id_ethnicity";
         $data['ethnicity_value']=$this->get_details($temp_value,$table_name,$id_name);
         
         
         /* .......smoking......... */
         
         $temp_value=$data[0]->smoking;
         $table_name='tf2_mas_smoking';
         $id_name="id_smoking";
         $data['smoking_value']=$this->get_details($temp_value,$table_name,$id_name);
         
         /* .......drink .............*/
         $temp_value=$data[0]->mas_drink;
         $table_name='tf2_mas_drink';
         $id_name="id_drink";
         $data['drink_value']=$this->get_details($temp_value,$table_name,$id_name);
         
         /*.... children .............. */
         $temp_value=$data[0]->mas_children;
         $table_name='tf2_mas_children';
         $id_name="id_children";
         $data['children_value']=$this->get_details($temp_value,$table_name,$id_name);
         
         /* .......... education ...........*/
         $temp_value=$data[0]->education;
         $table_name='tf2_mas_education';
         $id_name="id_education";
         $data['education_value']=$this->get_details($temp_value,$table_name,$id_name);
         
         /*....occumptio ............*/
         $temp_value=$data[0]->occupation;
         $table_name='tf2_mas_occupation';
         $id_name="id";
         $data['occupation_value']=$this->get_details($temp_value,$table_name,$id_name);
         
          /*....diet ............*/
         $temp_value=$data[0]->mas_diet;
         $table_name='tf2_mas_diet';
         $id_name="id_diet";
         $data['diet_value']=$this->get_details($temp_value,$table_name,$id_name);
         
          /*....eye_color ............*/
         $temp_value=$data[0]->eye_color;
         $table_name='tf2_mas_eye_color';
         $id_name="id_eye_color";
         $data['eye_color_value']=$this->get_details($temp_value,$table_name,$id_name);
         
          /*....hair color ............*/
         $temp_value=$data[0]->hair_color;
         $table_name='tf2_mas_hair_color';
         $id_name="id_hair_color";
         $data['hair_color_value']=$this->get_details($temp_value,$table_name,$id_name);
         
         
           /*....political ............*/
         $temp_value=$data[0]->political_learning;
         $table_name='tf2_mas_political_learning';
         $id_name="id_political_learning";
         $data['political_learning_value']=$this->get_details($temp_value,$table_name,$id_name);
         
          /*....religious ............*/
         $temp_value=$data[0]->religious_views;
         $table_name='tf2_mas_religious_view';
         $id_name="id_religious_view";
         $data['religious_views_value']=$this->get_details($temp_value,$table_name,$id_name);
         
          /*....first_lag ............*/
         $temp_value=$data[0]->first_language;
         $table_name='tf2_mas_languages';
         $id_name="id_first_language";
         $data['first_lang_value']=$this->get_details($temp_value,$table_name,$id_name);
         
        
          
          /*....animals............*/
         $temp_value=$data[0]->mas_aninmals;
         $table_name=' tf2_mas_animals';
         $id_name="id_animals";
         $data['animals_value']=$this->get_details($temp_value,$table_name,$id_name);
         
         /*....fvrt color...........*/
         $temp_value=$data[0]->fvrt_color;
         $table_name=' tf2_mas_color';
         $id_name="id_color";
         $data['fvrtcolor_value']=$this->get_details($temp_value,$table_name,$id_name);
         
         
         /* fashion sense ......*/
         $temp_value=$data[0]->fashion_sense;
         $table_name=' tf2_mas_fashion_sense';
         $id_name="id_fashion_sense";
         $data['fashion_sense_value']=$this->get_details($temp_value,$table_name,$id_name);
         
         
         /* inttleginse ......*/
         $temp_value=$data[0]->intelligence;
         $table_name=' tf2_mas_intelligence';
         $id_name="id_intelligence";
         $data['intelligence_sense_value']=$this->get_details($temp_value,$table_name,$id_name);
         
          /* tv......*/
         $temp_value=$data[0]->tv;
         $table_name='tf2_mas_tv';
         $id_name="id_tv";
         $data['tv_value']=$this->get_details($temp_value,$table_name,$id_name);
         
         
         /* cinema......*/
         $temp_value=$data[0]->cinema;
         $table_name='tf2_mas_cinema';
         $id_name="id_cinema";
         $data['cinema_value']=$this->get_details($temp_value,$table_name,$id_name);
         
         return $data;
       
        }  
        else
        {
             
              return;
        }
      
   }
   
   function get_basic_info_upload($userid)
   {
       
       $users='users';
       $id=$userid;
	$query = $this->db->query("SELECT * FROM ".$users." WHERE id = '".$id."' ");
        if ($query->num_rows() > 0)
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
            $data['flag']=0;
            return $data;
           
        }
   }
   
   function profile_id_info()
   {
        $users='user_info';
        $id=$this->tank_auth->get_user_id();
        
	$query = $this->db->query("SELECT * FROM ".$users." WHERE user_id = '".$id."' ");
        if ($query->num_rows() > 0)
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
            
        }
        else
        {
            $data="empty";
        }
       return $data;
   }
   
   function mas_table_info($table_name) 
   {
        $query = $this->db->query("SELECT * FROM ".$table_name);
        if ($query->num_rows() > 0)
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
            
        }
       return $data;
   }
   
   
   function get_user_details() 
   {
      
        $users='user_info';
        $id=$this->tank_auth->get_user_id();
	$query = $this->db->query("SELECT * FROM ".$users." WHERE user_id = '".$id."' ");
        if ($query->num_rows() > 0)
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
           
            //return $data;
           
        
         $temp_value=$data[0]->height;
         if($temp_value=='' || $temp_value=='0')
         {
             $data['height_val']='Ask me later';
         }
         else
         {
             $table_name='tf2_mas_height';
             $query = $this->db->query("SELECT * FROM ".$table_name." WHERE idheight = '". $temp_value."' ");
             if ($query->num_rows() > 0)
            {
                
                foreach ($query->result() as $row) 
                {
                    $temp = $row->name;
                }
                $data['height_val']=$temp;
           
            }
            else
            {
                $data['height_val']=$temp_value;
            }
             
         }
         /* body atr */
         
         $temp_value=$data[0]->body_type;
         if($temp_value=='' || $temp_value=='0')
         {
             $data['bodytype_val']='Ask me later';
         }
         else
         {   $id_name="id_body_type";
             $table_name='tf2_mas_body_type';
             //$query = $this->db->query("SELECT * FROM ".$table_name." WHERE '".$id_name."' = '". $temp_value."' ");
            // $query=  $this->db->get_where(array(''=>),)
             $query = $this->db->get_where($table_name,array($id_name => $temp_value));
             if ($query->num_rows() > 0)
            {
               
                foreach ($query->result() as $row) 
                {
                    $temp = $row->name;
                }
                $data['bodytype_val']=$temp;
           
            }
            else
            {
                $data['bodytype_val']=$temp_value;
            }
             
         }
        
         /* other_lang */
         
         $temp_value=$data[0]->other_lang;
         $table_name='tf2_mas_languages';
         $id_name="id_first_language";
         $data['other_lang_value']=$this->get_checkbox_details($temp_value,$table_name,$id_name);
         
         /* music */ 
         $temp_value=$data[0]->music;
         $table_name='tf2_mas_music';
         $id_name="id_music";
         $data['music_value']=$this->get_checkbox_details($temp_value,$table_name,$id_name);
         
         /* date */
         $temp_value=$data[0]->mas_date;
         $table_name='tf2_mas_date';
         $id_name="id_date";
         $data['date_value']=$this->get_checkbox_details($temp_value,$table_name,$id_name);
         
         /* ideal home */
          $temp_value=$data[0]->ideal_home;
         $table_name='tf2_mas_ideal_home';
         $id_name="id_ideal_home";
         $data['home_value']=$this->get_checkbox_details($temp_value,$table_name,$id_name);
         
         /* mas value */
         $temp_value=$data[0]->mas_values;
         $table_name='tf2_mas_values';
         $id_name="id_values";
         $data['mas_value_value']=$this->get_checkbox_details($temp_value,$table_name,$id_name);
         
         /*.......reading */
         $temp_value=$data[0]->reading_habit;
         $table_name='tf2_mas_reading_habit';
         $id_name="id_reading_habit";
         $data['reading_value']=$this->get_checkbox_details($temp_value,$table_name,$id_name);
         
         
         /*........... movie *..........*/
         $temp_value=$data[0]->movie_taste;
         $table_name='tf2_mas_movie_taste';
         $id_name="id_movie_taste";
         $data['movie_value']=$this->get_checkbox_details($temp_value,$table_name,$id_name);
         
         
         /*......... leisure ........*/
         $temp_value=$data[0]->mas_leisure;
         $table_name='tf2_mas_leisure';
         $id_name="id_leisure";
         $data['leisure_value']=$this->get_checkbox_details($temp_value,$table_name,$id_name);
         
          /* ............body _art ........*/
        
         $temp_value=$data[0]->body_art;
         $table_name='tf2_mas_body_art';
         $id_name="id_body_art";
         $data['body_art_value']=$this->get_checkbox_details($temp_value,$table_name,$id_name);
         
         
         /* relationship */
         $temp_value=$data[0]->relationship_status;
         $table_name='tf2_mas_relationship_status';
         $id_name="id_relationship_status";
         $data['relation_value']=$this->get_details($temp_value,$table_name,$id_name);
         
         
         /* .........ethnicity........ */
         $temp_value=$data[0]->ethinicity;
         $table_name='tf2_mas_ethnicity';
         $id_name="id_ethnicity";
         $data['ethnicity_value']=$this->get_details($temp_value,$table_name,$id_name);
         
         
         /* .......smoking......... */
         
         $temp_value=$data[0]->smoking;
         $table_name='tf2_mas_smoking';
         $id_name="id_smoking";
         $data['smoking_value']=$this->get_details($temp_value,$table_name,$id_name);
         
         /* .......drink .............*/
         $temp_value=$data[0]->mas_drink;
         $table_name='tf2_mas_drink';
         $id_name="id_drink";
         $data['drink_value']=$this->get_details($temp_value,$table_name,$id_name);
         
         /*.... children .............. */
         $temp_value=$data[0]->mas_children;
         $table_name='tf2_mas_children';
         $id_name="id_children";
         $data['children_value']=$this->get_details($temp_value,$table_name,$id_name);
         
         /* .......... education ...........*/
         $temp_value=$data[0]->education;
         $table_name='tf2_mas_education';
         $id_name="id_education";
         $data['education_value']=$this->get_details($temp_value,$table_name,$id_name);
         
         /*....occumptio ............*/
         $temp_value=$data[0]->occupation;
         $table_name='tf2_mas_occupation';
         $id_name="id";
         $data['occupation_value']=$this->get_details($temp_value,$table_name,$id_name);
         
          /*....diet ............*/
         $temp_value=$data[0]->mas_diet;
         $table_name='tf2_mas_diet';
         $id_name="id_diet";
         $data['diet_value']=$this->get_details($temp_value,$table_name,$id_name);
         
          /*....eye_color ............*/
         $temp_value=$data[0]->eye_color;
         $table_name='tf2_mas_eye_color';
         $id_name="id_eye_color";
         $data['eye_color_value']=$this->get_details($temp_value,$table_name,$id_name);
         
          /*....hair color ............*/
         $temp_value=$data[0]->hair_color;
         $table_name='tf2_mas_hair_color';
         $id_name="id_hair_color";
         $data['hair_color_value']=$this->get_details($temp_value,$table_name,$id_name);
         
         
           /*....political ............*/
         $temp_value=$data[0]->political_learning;
         $table_name='tf2_mas_political_learning';
         $id_name="id_political_learning";
         $data['political_learning_value']=$this->get_details($temp_value,$table_name,$id_name);
         
          /*....religious ............*/
         $temp_value=$data[0]->religious_views;
         $table_name='tf2_mas_religious_view';
         $id_name="id_religious_view";
         $data['religious_views_value']=$this->get_details($temp_value,$table_name,$id_name);
         
          /*....first_lag ............*/
         $temp_value=$data[0]->first_language;
         $table_name='tf2_mas_languages';
         $id_name="id_first_language";
         $data['first_lang_value']=$this->get_details($temp_value,$table_name,$id_name);
         
        
          
          /*....animals............*/
         $temp_value=$data[0]->mas_aninmals;
         $table_name=' tf2_mas_animals';
         $id_name="id_animals";
         $data['animals_value']=$this->get_details($temp_value,$table_name,$id_name);
         
         /*....fvrt color...........*/
         $temp_value=$data[0]->fvrt_color;
         $table_name=' tf2_mas_color';
         $id_name="id_color";
         $data['fvrtcolor_value']=$this->get_details($temp_value,$table_name,$id_name);
         
         
         /* fashion sense ......*/
         $temp_value=$data[0]->fashion_sense;
         $table_name=' tf2_mas_fashion_sense';
         $id_name="id_fashion_sense";
         $data['fashion_sense_value']=$this->get_details($temp_value,$table_name,$id_name);
         
         
         /* inttleginse ......*/
         $temp_value=$data[0]->intelligence;
         $table_name=' tf2_mas_intelligence';
         $id_name="id_intelligence";
         $data['intelligence_sense_value']=$this->get_details($temp_value,$table_name,$id_name);
         
          /* tv......*/
         $temp_value=$data[0]->tv;
         $table_name='tf2_mas_tv';
         $id_name="id_tv";
         $data['tv_value']=$this->get_details($temp_value,$table_name,$id_name);
         
         
         /* cinema......*/
         $temp_value=$data[0]->cinema;
         $table_name='tf2_mas_cinema';
         $id_name="id_cinema";
         $data['cinema_value']=$this->get_details($temp_value,$table_name,$id_name);
         
         return $data;
       
        }
        else 
        {
            return;
        }
      
   }
   function get_details($temp_value,$table_name,$id_name) 
   {
         $temp_value=$temp_value;
         if($temp_value=='' || $temp_value=='0')
         {
             
             $result='Ask me later';
             return $result;
         }
         else
         {   $id_name=$id_name;
             $table_name=$table_name;
             //$query = $this->db->query("SELECT * FROM ".$table_name." WHERE '".$id_name."' = '". $temp_value."' ");
            // $query=  $this->db->get_where(array(''=>),)
             $query = $this->db->get_where($table_name,array($id_name => $temp_value));
             if ($query->num_rows() > 0)
            {
               
                foreach ($query->result() as $row) 
                {
                    $temp = $row->name;
                }
                return $temp;
           
            }
            else
            {
               return $temp_value;
            }
             
         }
       
   }    
    
   function get_prev_ids($column_name)
   {
    
        $users='user_info';
        $id=$this->tank_auth->get_user_id();
	$query = $this->db->query("SELECT * FROM ".$users." WHERE user_id = '".$id."' ");
	
	if ($query->num_rows() > 0)
	{
           foreach ($query->result() as $row) 
            {
                $data = $row->$column_name;
            }
       }
       return $data;
   }
   function get_checkbox_details($temp_value,$table_name,$id_name)
   {
       $temp_value=$temp_value;
       
       if($temp_value=='' || $temp_value=='0')
        {
             
             $result='Ask me later';
             return $result;
        }
        else {
       $result=explode(",",$temp_value);
       
      $no_of_element= count($result);
      $temp_all='';
       if($no_of_element==1)
       {
           if(strlen($result[0]) > 1)
           {
              
               $temp_value=$result[0];
               
           }
           else
           {    
                $id_name=$id_name;
                $table_name=$table_name;
                //$query = $this->db->query("SELECT * FROM ".$table_name." WHERE '".$id_name."' = '". $temp_value."' ");
               // $query=  $this->db->get_where(array(''=>),)
                $query = $this->db->get_where($table_name,array($id_name => $temp_value));
                if ($query->num_rows() > 0)
               {
                   
                   foreach ($query->result() as $row) 
                   {
                       $temp = $row->name;
                   }
                   
                   return $temp;
                   //echo $temp;
               }
           }
           
       }
       else 
       {
          
           
           for($i=1;$i<$no_of_element;$i++)
           { 
               if(strlen($result[$i]) > 2)
                {
                    $temp_all .=$result[$i];
                    
                }
                else
                {    
                     $id_name=$id_name;
                     $table_name=$table_name; 
                    
                     //$query = $this->db->query("SELECT * FROM ".$table_name." WHERE '".$id_name."' = '". $temp_value."' ");
                    // $query=  $this->db->get_where(array(''=>),)
                     $query = $this->db->get_where($table_name,array($id_name => $result[$i]));
                     if ($query->num_rows() > 0)
                    {
                       
                        foreach ($query->result() as $row) 
                        {
                            
                            $temp_all .=$row->name." ,";
                        }
                         
                        //return $temp;

                    }
                }
               
           }
           return $temp_all;
       }
       
        }
       //return;
       
   }
   function height_update($temp)
    {
       
        $users='user_info';
        $id=$this->tank_auth->get_user_id();
	$query = $this->db->query("SELECT * FROM ".$users." WHERE user_id = '".$id."' ");
	
	if ($query->num_rows() > 0)
	{
           $this->db->query("update ".$users." set height = '".$temp."' where user_id= '".$id."' ");
            
            
        }
       else 
        {
            $data = array(
		   'user_id' => $id,
		   'height' => $temp); 
            
	    $this->db->insert($users, $data);
            
        }
       
       
    }
    function random_profile($gender) 
    {
        
      
        $users='users'; 
        if($gender=="male" || $gender=="female")
        {
             $query = $this->db->query("SELECT * FROM ".$users." WHERE gender = '".$gender."' ORDER BY RAND() LIMIT 12 ");
        }
        else
        {
          $query = $this->db->query("SELECT * FROM ".$users." ORDER BY RAND() LIMIT 12 ");  
        }
        
        
        if ($query->num_rows() > 0)
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
            
            return $data;
           
        }
        
    }
    function body_update($temp)
    {
       
        $users='user_info';
        $id=$this->tank_auth->get_user_id();
	$query = $this->db->query("SELECT * FROM ".$users." WHERE user_id = '".$id."' ");
	
	if ($query->num_rows() > 0)
	{
           $this->db->query("update ".$users." set body_type = '".$temp."' where user_id= '".$id."' ");
            
            
        }
       else 
        {
            $data = array(
		   'user_id' => $id,
		   'body_type' => $temp); 
            
	    $this->db->insert($users, $data);
            
        }
       
       
    }
    
    function relation_update($temp)
    {
       
        $users='user_info';
        $id=$this->tank_auth->get_user_id();
	$query = $this->db->query("SELECT * FROM ".$users." WHERE user_id = '".$id."' ");
	
	if ($query->num_rows() > 0)
	{
           $this->db->query("update ".$users." set relationship_status = '".$temp."' where user_id= '".$id."' ");
            
            
        }
       else 
        {
            $data = array(
		   'user_id' => $id,
		   'relationship_status' => $temp); 
            
	    $this->db->insert($users, $data);
            
        }
       
       
    }
    
    function ethnicity_update($temp)
    {
       
        $users='user_info';
        $id=$this->tank_auth->get_user_id();
	$query = $this->db->query("SELECT * FROM ".$users." WHERE user_id = '".$id."' ");
	
	if ($query->num_rows() > 0)
	{
           $this->db->query("update ".$users." set ethinicity = '".$temp."' where user_id= '".$id."' ");
            
            
        }
       else 
        {
            $data = array(
		   'user_id' => $id,
		   'ethinicity' => $temp); 
            
	    $this->db->insert($users, $data);
            
        }
       
       
    }
    
    function smoking_update($temp)
    {
       
        $users='user_info';
        $id=$this->tank_auth->get_user_id();
	$query = $this->db->query("SELECT * FROM ".$users." WHERE user_id = '".$id."' ");
	
	if ($query->num_rows() > 0)
	{
           $this->db->query("update ".$users." set smoking = '".$temp."' where user_id= '".$id."' ");
            
            
        }
       else 
        {
            $data = array(
		   'user_id' => $id,
		   'smoking' => $temp); 
            
	    $this->db->insert($users, $data);
            
        }
       
       
    }
    
     function drink_update($temp)
    {
       
        $users='user_info';
        $id=$this->tank_auth->get_user_id();
	$query = $this->db->query("SELECT * FROM ".$users." WHERE user_id = '".$id."' ");
	
	if ($query->num_rows() > 0)
	{
           $this->db->query("update ".$users." set mas_drink = '".$temp."' where user_id= '".$id."' ");
            
            
        }
       else 
        {
            $data = array(
		   'user_id' => $id,
		   'mas_drink' => $temp); 
            
	    $this->db->insert($users, $data);
            
        }
       
       
    }
   function children_update($temp)
    {
       
        $users='user_info';
        $id=$this->tank_auth->get_user_id();
	$query = $this->db->query("SELECT * FROM ".$users." WHERE user_id = '".$id."' ");
	
	if ($query->num_rows() > 0)
	{
           $this->db->query("update ".$users." set mas_children= '".$temp."' where user_id= '".$id."' ");
           
            
        }
       else 
        {
            $data = array(
		   'user_id' => $id,
		   'mas_children' => $temp); 
            
	    $this->db->insert($users, $data);
            
        }
       
       
    }
    
    function features_request_db($temp,$column)
    {
       
        $users='user_info';
        $id=$this->tank_auth->get_user_id();
	$query = $this->db->query("SELECT * FROM ".$users." WHERE user_id = '".$id."' ");
	
	if ($query->num_rows() > 0)
	{
           $this->db->query("update ".$users." set ".$column."= '".$temp."' where user_id= '".$id."' ");
           
            
        }
       else 
        {
            $data = array(
		   'user_id' => $id,
		   $column => $temp); 
            
	    $this->db->insert($users, $data);
            
        }
       
       
    }
   
    function checkbox_features_db($temp,$column)
    {
        
        $users='user_info';
        $id=$this->tank_auth->get_user_id();
	$query = $this->db->query("SELECT * FROM ".$users." WHERE user_id = '".$id."' ");
	
	if ($query->num_rows() > 0)
	{
           $this->db->query("update ".$users." set ".$column."= '".$temp."' where user_id= '".$id."' ");
           
            
        }
       else 
        {
            $data = array(
		   'user_id' => $id,
		   $column => $temp); 
            
	    $this->db->insert($users, $data);
            
        }
    }
    
    public function record_search($user) {
            
              $table="users";
              $count=0;
              $query= $this->db->like('username',$user);
              $query=$this->db->get($table);
              

               if ($query->num_rows() > 0)
                {
                       foreach ($query->result() as $row)
                           {
                            $count++;
                           }
           
                }
      
        return $count;
    }

    public function search_user_db($limit,$start,$user,$count) {
        
        
        $table="users";
        
        if($start < $count){
           $query= $this->db->like('username',$user);
        $query=$this->db->get($table,$limit,$start);  
        }
        else 
            {
             $query= $this->db->like('username',$user);
             $query=$this->db->get($table);
            }
        
      
       
        if ($query->num_rows() > 0)
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
                
            }
            return $data;
        }
        else
        {
            
            $flag=1;
            return $flag;
        }
        return false;
   }
   
   function upload_img_db($userid,$file_name,$thumbfile) {
       
       $table='users';
       
        $query = $this->db->query("SELECT * FROM ".$table." WHERE id = '". $userid."' ");
        if ($query->num_rows() > 0)
        {
                
             foreach ($query->result() as $row) 
             {
                  $temp_gallery = $row->profile_gallery;
                  $temp_thumb=$row->thumb_nail;
             }
            
           
        }
       
        if($temp_gallery=='')
        {
           
            $query = $this->db->query("update ".$table." set thumb_nail = '".$thumbfile."' where id= '".$userid."' ");
            $query = $this->db->query("update ".$table." set profile_gallery = '".$file_name."' where id= '".$userid."' ");
        }
        else
        {
           $temp=$temp_gallery.','.$file_name;
           $thumb=$temp_thumb.','.$thumbfile;
           $query = $this->db->query("update ".$table." set profile_gallery = '".$temp."' where id= '".$userid."' ");
           $query = $this->db->query("update ".$table." set thumb_nail = '".$thumb."' where id= '".$userid."' ");
           
        }
       
       
       
       $query = $this->db->query("update ".$table." set profile_img = '".$file_name."' where id= '".$userid."' ");
      // $query = $this->db->query("update ".$table." set profile_gallery = '".$temp."' where id= '".$userid."' ");
       
       return 1;
  
     }
   
        
};

?>