<?php 

	$controller = 'HomeController';
	$function = 'home';
	
	if (isset($_GET['controller']) && $_GET['controller'] !='' ) {
		$controller = $_GET['controller'];
	}

	if (isset($_GET['function']) && $_GET['function'] !='') {
		$function = $_GET['function'];
	} 

	if (file_exists('Controllers/'.$controller.'.php')) {
		include('Controllers/'.$controller.'.php');
		$class  = $controller;
		if (method_exists($class, $function)) {
			$obj = new $class();
			$obj->$function();
		}else {
			echo 'Function not found';
		}
	} else {
		echo 'Controller not found';
	}
?>
