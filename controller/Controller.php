<?php
	//Gestione MVC
	
	include_once("model/model.php");
	include_once("model/Vision.php");
	class Controller 
	{
 		public $model;	
		public $vision;
			
 		public function __construct()  
    	{  
        	
    	} 
 
 		public function invoke($request)
 		{	
			$mod = new Model();
			$vis = new Vision();
			switch ($request["page"])
  			{
				
				case 'home':
					if(isset($_SESSION['utente']))
						{
							if($_SESSION['utente']=='user')
						      header("Location: index.php?page=user&com=user");						
							else if($_SESSION['user']=='admin')
								header("Location: index.php?page=admin&com=admin");
							else 
							{
								$vis->setLogin();						
								$mod->getLogout();
								break;
							}
						}
					else
					{
						$vis->setLogin();						
						$mod->getLogin();
						break;
					}	
				/*case 'bio':
					$vis -> setBio();
					break;
				case 'store':
					$vis -> setStore();
					break;
				case 'photogallery':
					$vis -> setPhotogallery();
					break;	*/			
			}						
			
		}
	}	

?>
