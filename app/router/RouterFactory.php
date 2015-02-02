<?php

use Nette\Application\Routers\RouteList,
	Nette\Application\Routers\Route,
	Nette\Application\Routers\SimpleRouter;


/**
 * Router factory.
 */
class RouterFactory
{

	/**
	 * @return Nette\Application\IRouter
	 */
	public function createRouter()
	{
		$router = new RouteList();

		$router[] = new Route('admin/<presenter>/<action>[/<id>]', array(
				'module'	=> 'Admin',
				'presenter' => 'Homepage',
				'action'    => 'default'
			)
		);

        $router[] = new Route('texty/<id>', array(
            'module'	=> 'Front',
            'presenter' => 'Display',
            'action'    => 'default'
        ));

		$router[] = new Route('<presenter>/<action>[/<id>]', array(
			'module'	=> 'Front',
			'presenter' => 'Display',
			'action'    => 'default'
		));

		return $router;
	}

}
