<?php

class Router
{
	
	private $routes;

	public function __construct()
	{
		$routDir = ROOT.'/config/routes.php';
		$this->routes = include($routDir);
	}

	private function urigeter ()
	{
		if (!empty($_SERVER['REQUEST_URI'])) {
			return trim($_SERVER['REQUEST_URI'], '/');
		}
	}

	public function run()
	{
		$uri = $this->urigeter();
		
		foreach ($this->routes as $keyuri => $path) {
			if (preg_match("~$keyuri~", $uri)) {
				$segments = explode('/', $path);

				$modlNme = ucfirst(array_shift($segments));

				$contNme = lcfirst($modlNme).'Ctrl';

				$actNme = array_shift($segments).'Act';

				$crtlFile = ROOT . '/controlers/' . $contNme . '.php';

				if (file_exists($crtlFile)) {
					include_once ($crtlFile);
				}
				
				$modelFile = ROOT . '/models/' . $modlNme . '.php';

				if (file_exists($modelFile)) {
					include_once ($modelFile);
				}

				$modlObj = new $modlNme;
				
				$contObj = new $contNme;
				$rez = $contObj->$actNme();
				if ($rez != NULL) {
					break;
				}
			}
		}
	}
}

?>