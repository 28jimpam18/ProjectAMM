<?php
	
	include_once("model/model.php");
	include_once("model/Vision.php");
	
	class ControllerUser
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
			if(isset($request['com']))
			switch ($request['com'])
			{			
				case 'user':
					$vis->setUser();
					break;
				case 'logout': 
					$mod->getlogout();
					break;
				case 'bio':
					$vis -> setBioUser();
					break;
				case 'store':
					$vis -> setStoreUser();
					break;
				case 'photogallery':
					$vis -> setPhotogalleryUser();
					break;				
			}
		}
	}	

?>
