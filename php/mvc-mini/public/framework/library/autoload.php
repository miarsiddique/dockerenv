<?php

class autoload
{
	
	public function __construct($class)
	{
		$paths = parse_ini_file('../application/config/paths.ini.php', true);

		foreach ($paths['include_path'] as $key => $path) {
			$class = str_replace('_', '/', $class);
			$file = $path.$class.'.php';
			if (file_exist($file)) {
				include $file;
				return;
			}
		}

		if (strstr($class, 'Controller')) {
			throw new gException('Class'.$class. 'could not be loaded');
		}
 	}
}