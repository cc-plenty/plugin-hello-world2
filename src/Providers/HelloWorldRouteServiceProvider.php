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
        $router->get('helloNEW', 'HelloWorld\Controllers\ContentController@sayHello');
        $router->get('h-NEW2', 'HelloWorld\Controllers\ContentController@sayHello');
        $router->get('h3x', 'HelloWorld\Controllers\ContentController@sayHello');
        $router->get('h4x', 'HelloWorld\Controllers\ContentController@sayHello');
        $router->get('h5x', 'HelloWorld\Controllers\ContentController@sayHello');
        $router->get('h6x', 'HelloWorld\Controllers\ContentController@sayHello');
        $router->get('h7x', 'HelloWorld\Controllers\ContentController@sayHello');


    }

}
