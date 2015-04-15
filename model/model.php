<?php
	
	
	include_once("model/model.php");
	
	class Model 
	{
		public function getlogin()
 		{
  			if(isset($_REQUEST['user']) && isset($_REQUEST['password'])) 
			{
  				if($_REQUEST['user']=='User' && $_REQUEST['password']=='1234') 
				{
    				$_SESSION['session']="user";
					$_SESSION['user']=$_REQUEST['user'];
					$_SESSION['password']=$_REQUEST['password'];
					header("Location: index.php?page=user&com=user");
   				}
				else
				if($_REQUEST['user']=='Admin' && $_REQUEST['password']=='4321') 
				{
					$_SESSION['session']="admin";
					$_SESSION['user']=$_REQUEST['user'];
					$_SESSION['password']=$_REQUEST['password'];
					header("Location: index.php?page=admin&com=admin");
   				}
  			}
		}
		
		public function getlogout()
		{
			$_SESSION = array();
        	        session_destroy();
			header("Location: index.php?page=home");
		}	

		
		
	}
?>
