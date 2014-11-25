<?php
	if (isset($page)){
		$page_view = $page; 
	}
	else{
	 	$page_view = "home";
	}
	$this->load->view('template/header.php');
	$this->load->view($page_view);
	$this->load->view('template/footer.php');
?>