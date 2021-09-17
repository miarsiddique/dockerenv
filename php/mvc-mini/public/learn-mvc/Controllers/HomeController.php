<?php 


class HomeController
{
	
	
	public function __construct()
	{
		include('Models/UserModel.php');
		$this->model = new UserModel();
	}

	public function home()
	{
		$user = $this->model->user(); 
		include('View/home.php');
	}

	public function about()
	{
		$about = $this->model->about(); 
		include('View/about.php');
	}

	public function contact()
	{
		$contactus = $this->model->contactus(); 
		include('View/contactus.php');
	}
}