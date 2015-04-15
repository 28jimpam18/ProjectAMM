<?php
	
	include_once("model/model.php");
	include_once("model/Vision.php");
	class ControllerAdmin
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
				case 'admin':
					$vis->setAdmin();
					break;
				case 'logout': 
					$mod->getlogout();
					break;
				case 'bio':
					$vis -> setBioAdmin();
					break;
				case 'store':
					$vis -> setStoreAdmin();
					break;
				case 'photogallery':
					$vis -> setPhotogalleryAdmin();
					break;				
			}
		}
	}	

?>
