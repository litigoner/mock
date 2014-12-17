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

//	public function showWelcome()
//	{
//		return View::make('hello');
//	}
    public function getTest(){
        $data= Array(
                Array('id'=>1,'title'=>'Republican Nepal',),
                Array('id'=>2,'title'=>'Republican Nepal2',),
                Array('id'=>3,'title'=>'Republican Nepal3',),
            
            );
        return Response::json(array('status'=>'success', 'result'=>$data));
    }

}
