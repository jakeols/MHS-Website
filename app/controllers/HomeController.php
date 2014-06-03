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
		return View::make('index');
		return 'Home Page';
	}
	public function showStore()
	{
		$products = Product::paginate(12);
		return View::make('home')->with('products', $products);
	}
	public function showItem($id)
	{

		$products = DB::table('products')->where('id', '=', $id)->get();

		#$products = Product::where('id', $id)->get();
		return View::make('product')->with('products', $products);

	}
	
}
