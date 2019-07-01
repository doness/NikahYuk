<?php
    include "db_config.php";
        class user
        {
            public $db;
            public function __construct()
            {
                $this->db=new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
                if(mysqli_connect_errno())
                {
                    echo "Error: Could not connect to database.";
                    exit;
                }
            }
            public function reg_user($name, $username, $password, $email)
            {
                //$password=md5($password);
                $sql="SELECT * FROM admin WHERE uname='$username' OR uemail='$email'";
                $check=$this->db->query($sql);
                $count_row=$check->num_rows;
                if($count_row==0)
                {
                    $sql1="INSERT INTO admin SET uname='$username', upass='$password', fullname='$name', uemail='$email'";
                    $result= mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
                    return $result;
                }
                else
                {
                    return false;
                }
            }
            
            
            public function add_paket($paket_nm, $paket_qty, $facility, $price)
            {
                
                    $available=$paket_qty;
                    $booked=0;
                    
                    $sql="INSERT INTO paket_category SET paket_nm='$paket_nm', available='$available', booked='$booked', paket_qty='$paket_qty',  facility='$facility', price='$price'";
                    $result= mysqli_query($this->db,$sql) or die(mysqli_connect_errno()."Data cannot inserted");
                
                
                    for($i=0;$i<$paket_qty;$i++)
                    {
                        $sql2="INSERT INTO paket SET paket_cat='$paket_nm', book='false'";
                        mysqli_query($this->db,$sql2);
                        
                    }
                
                    return $result;
                

            }
            
            public function check_available($checkin, $checkout)
            {
                
                
                   $sql="SELECT DISTINCT paket_cat FROM paket WHERE paket_id NOT IN (SELECT DISTINCT paket_id
   FROM paket WHERE (checkin <= '$checkin' AND checkout >='$checkout') OR (checkin >= '$checkin' AND checkin <='$checkout') OR (checkin <= '$checkin' AND checkout >='$checkin') )";
                    $check= mysqli_query($this->db,$sql)  or die(mysqli_connect_errno()."Query Doesnt run");;

                
                    return $check;
                

            }
            
            
            
            
            public function booknow($checkin, $checkout, $name, $phone, $paket_nm)
            {
                    
                    $sql="SELECT * FROM paket WHERE paket_cat='$paket_nm' AND (paket_id NOT IN (SELECT DISTINCT paket_id FROM paket WHERE checkin <= '$checkin' AND checkout >='$checkout'))";
                    $check= mysqli_query($this->db,$sql)  or die(mysqli_connect_errno()."Data herecannot inserted");;
					
					//print_r($check);
					//echo $sql;
					
					//echo $checkin;
					//echo $checkout;
					
                    if(mysqli_num_rows($check) > 0)
                    {
                        $row = mysqli_fetch_array($check);
                        $id=$row['paket_id'];
                        
                        $sql2="UPDATE paket SET checkin='$checkin', checkout='$checkout', name='$name', phone='$phone', book='true' WHERE paket_id=$id";
                         $send=mysqli_query($this->db,$sql2);
                        if($send)
                        {
                            $result="Paket anda telah dipesan, Admin akan menghubungi anda.";
                        }
                        else
                        {
                            $result="Maaf, Terjadi Kesalahan";
                        }
                    }
                    else                       
                    {
                        $result = "Item sedang tidak tersedia";
                    }
                    
                    
                
                    return $result;
                

            }
            
            
            
            
             public function edit_all_room($checkin, $checkout, $name, $phone,$id)
            {
                                
                        $sql2="UPDATE paket SET checkin='$checkin', checkout='$checkout', name='$name', phone='$phone', book='true' WHERE paket_id=$id";
                         $send=mysqli_query($this->db,$sql2);
                        if($send)
                        {
                            $result="Paket anda telah dipesan, Admin akan menghubungi anda.";
                        }
                        else
                        {
                            $result="Maaf, Terjadi Kesalahan";
                        }
                    
                
                    return $result;
                

            }
            
            
            
            
            
             public function edit_paket_cat($paket_nm, $paket_qty, $facility,$price,$paket_cat)
            {
                    
                 
                        $sql2="DELETE FROM paket WHERE paket_cat='$paket_cat'";
                        mysqli_query($this->db,$sql2);
                 
                 
                        for($i=0;$i<$paket_qty;$i++)
                        {
                            $sql3="INSERT INTO paket SET paket_cat='$paket_nm', book='false'";
                            mysqli_query($this->db,$sql3);

                        }

                 
                        $available=$paket_qty;
                        $booked=0;
                 
                        $sql="UPDATE paket_category  SET paket_nm='$paket_nm', available='$available', booked='$booked', paket_qty='$paket_qty', facility='$facility', price='$price' WHERE paket_nm='$paket_cat'";
                         $send=mysqli_query($this->db,$sql);
                        if($send)
                        {
                            $result="Updated Successfully!!";
                        }
                        else
                        {
                            $result="Sorry, Internel Error";
                        }
  
                    
                
                    return $result;
                

            }
            
            
            
            
            
            public function check_login($emailusername,$password)
            {
                //$password=md5($password);
                $sql2="SELECT uid from admin WHERE uemail='$emailusername' OR uname='$emailusername' and upass='$password'";
                $result=mysqli_query($this->db,$sql2);
                $user_data=mysqli_fetch_array($result);
                $count_row=$result->num_rows;
                
                if($count_row==1)
                {
                    $_SESSION['login']=true;
                    $_SESSION['uid']=$user_data['uid'];
                    return true;    
                }
                else
                {
                    return false;
                }
            }

            public function get_session()
            {
                return $_SESSION['login'];
            }
            public function user_logout()
            {
                $_SESSION['login']=false;
                session_destroy();
            }
        }

?>