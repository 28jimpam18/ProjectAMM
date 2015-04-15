
<?php 

	include_once ("controller/Controller.php");
	include_once ("controller/ControllerUser.php");
	include_once ("controller/ControllerAdmin.php");

	site::request($_REQUEST);
 	
	class site
	{
		public static function request($request)
		{
			session_start();
			switch ($request['page'])
			{
				case 'home':
					$controller = new Controller();
					$controller->invoke($request);
					break;
				case 'user':
					$controller = new ControllerUser();
					$controller->invoke($request);
					break;
				case 'admin':
					$controller = new ControllerAdmin();
					$controller->invoke($request);
					break;
				default:
					break;
				
			}
		}
	}
 	
?>

