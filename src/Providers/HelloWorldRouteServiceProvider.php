<?php
namespace HelloWorld\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class HelloWorldRouteServiceProvider
 * @package HelloWorld\Providers
 */
class HelloWorldRouteServiceProvider extends RouteServiceProvider
{
	/**
	 * @param Router $router
	 */
	public function map(Router $router)
	{
		$router->get('hello', 'HelloWorld\Controllers\ContentController@sayHello');
        $router->get('helloDouble', 'HelloWorld\Controllers\ContentController@sayHello');
        $router->get('h16', 'HelloWorld\Controllers\ContentController@sayHello');


    }

}
