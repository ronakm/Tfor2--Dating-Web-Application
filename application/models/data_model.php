<?php // include("/var/www/Codeigniter_ez/css/Session.php"); ?>
<?php

class Data_model extends CI_Model {
	
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
  
   function height_update($temp)
    {
       
        $users='user_info';
        $id=17;
	$query = $this->db->query("SELECT * FROM ".$users." WHERE user_id = '".$id."' ");
	
	if ($query->num_rows() > 0)
	{
           $this->db->query("update ".$users." set height = '".$temp."' where user_id= '".$id."' ");
            
            
        }
       else 
        {
            $data = array(
		   'use_id' => $id,
		   'height' => $temp); 
            
	    $this->db->insert($users, $data);
            
        }
       
       
    }
    
    function body_update($temp)
    {
       
        $users='user_info';
        $id=17;
	$query = $this->db->query("SELECT * FROM ".$users." WHERE user_id = '".$id."' ");
	
	if ($query->num_rows() > 0)
	{
           $this->db->query("update ".$users." set body_type = '".$temp."' where user_id= '".$id."' ");
            
            
        }
       else 
        {
            $data = array(
		   'use_id' => $id,
		   'body_type' => $temp); 
            
	    $this->db->insert($users, $data);
            
        }
       
       
    }
    
    function relation_update($temp)
    {
       
        $users='user_info';
        $id=17;
	$query = $this->db->query("SELECT * FROM ".$users." WHERE user_id = '".$id."' ");
	
	if ($query->num_rows() > 0)
	{
           $this->db->query("update ".$users." set relationship_status = '".$temp."' where user_id= '".$id."' ");
            
            
        }
       else 
        {
            $data = array(
		   'use_id' => $id,
		   'relationship_status' => $temp); 
            
	    $this->db->insert($users, $data);
            
        }
       
       
    }
    
    function ethnicity_update($temp)
    {
       
        $users='user_info';
        $id=17;
	$query = $this->db->query("SELECT * FROM ".$users." WHERE user_id = '".$id."' ");
	
	if ($query->num_rows() > 0)
	{
           $this->db->query("update ".$users." set ethinicity = '".$temp."' where user_id= '".$id."' ");
            
            
        }
       else 
        {
            $data = array(
		   'use_id' => $id,
		   'ethinicity' => $temp); 
            
	    $this->db->insert($users, $data);
            
        }
       
       
    }
    
    function smoking_update($temp)
    {
       
        $users='user_info';
        $id=17;
	$query = $this->db->query("SELECT * FROM ".$users." WHERE user_id = '".$id."' ");
	
	if ($query->num_rows() > 0)
	{
           $this->db->query("update ".$users." set smoking = '".$temp."' where user_id= '".$id."' ");
            
            
        }
       else 
        {
            $data = array(
		   'use_id' => $id,
		   'smoking' => $temp); 
            
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

    public function search_user_db($limit,$start,$user) {
        
        
        $table="users";
       
        $query= $this->db->like('username',$user);
        $query=$this->db->get($table,$limit,$start);
        
      
       
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
   
   function upload_img_db($userid,$file_name) {
       
       $table='users';
       
       $query = $this->db->query("update ".$table." set profile_img = '".$file_name."' where id= '".$userid."' ");
       
       return 1;
  
     }
   
        
};

?>