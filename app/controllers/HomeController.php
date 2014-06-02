<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showHome()
	{
		$products = Product::paginate(12);
		return View::make('home')->with('products', $products);
	}
	public function showItem($id)
	{
		$products = Product::where('id','=', $id);
		return View::make('product')->with('products', $products);

	}
	
}
