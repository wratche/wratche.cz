<?php

declare(strict_types=1);

namespace App\Router;

use Nette;
use Nette\Application\Routers\RouteList;


final class RouterFactory
{
	use Nette\StaticClass;

	public static function createRouter(): RouteList
	{
	    $array = [1,2,3];
		$router = new RouteList;
		$router->addRoute('<presenter>/<action>[/<id>]', 'Homepage:default');
		return $router;
	}
}
