<?php

	//Vision. Gestione della View
	
	include_once("model/Vision.php");

	class Vision 
	{

		public function setUser()
		{       
			$content = "view/Utente/content.php";
			$sidebar ="view/Utente/sidebar.php";
			$_SESSION['pagina']='user';
			include ("view/master.php");
		}

		public function setAdmin()
		{	
			$content = "view/Admin/content.php";
			$sidebar ="view/Admin/sidebar.php";
			$_SESSION['pagina']='admin';
			include ("view/master.php");
		}

		public function setLogin()
		{       
			$content = "view/Homepage/content.php";
			$sidebar ="view/Homepage/sidebar.php";			
			$_SESSION['pagina']='home';
			include ("view/master.php");
		}

		public function setBioUser()
		{
			$sidebar ="view/Utente/sidebar.php";
			$content ="view/Pagine/contentbiografia.php";
			$_SESSION['pagina']='bio';
			include ("view/master.php");
		}
		
		public function setStoreUser()
		{     
			$sidebar ="view/Utente/sidebar.php";
			$content ="view/Pagine/contentstore.php";
			$_SESSION['pagina']='store';
			include ("view/master.php");
		}

		public function setPhotogalleryUser(){
			
			$sidebar ="view/Utente/sidebar.php";
			$content ="view/Pagine/contentphotogallery.php";
			$_SESSION['pagina']='photogallery';
			include ("view/master.php");
		}

		public function setBioAdmin()
		{
			$sidebar ="view/Admin/sidebar.php";
			$content ="view/Pagine/contentbiografia.php";
			$_SESSION['pagina']='bio';
			include ("view/master.php");
		}

		public function setStoreAdmin()
		{     
			$sidebar ="view/Admin/sidebar.php";
			$content ="view/Pagine/contentstore.php";
			$_SESSION['pagina']='store';
			include ("view/master.php");
		}
		
		public function setPhotogalleryAdmin(){
			
			$sidebar ="view/Admin/sidebar.php";
			$content ="view/Pagine/contentphotogallery.php";
			$_SESSION['pagina']='photogallery';
			include ("view/master.php");
		}


		
		
		
	}

?>
