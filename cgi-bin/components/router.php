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

				$internalRoute = preg_replace("~$keyuri~", $path, $uri);



				$segments = explode('/', $internalRoute);

				$contNme = lcfirst($modlNme).'Ctrl';

				$actNme = array_shift($segments).'Act';

				$parametr = $segments;

				$crtlFile = ROOT . '/controlers/' . $contNme . '.php';

				if (file_exists($crtlFile)) {
					include_once ($crtlFile);
				}

				$contObj = new $contNme;
				$rez = $contObj->$actNme($parametr);
				if ($rez != NULL) {
					break;
				}
			}
		}
	}
}

?>