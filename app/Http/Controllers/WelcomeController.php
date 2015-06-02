<?php namespace App\Http\Controllers;

use App\office;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}
        
        public function about()
	{
            $name = "Wilston Dsouza";
            //return view('about');
            //        ->with('name', $name);
            
            return view('about', [
                'name' => 'Wilston',
                'age' => 25
            ]);
            
	}
        
        public function contact()
	{
            $offices = office::all()->toArray();
            dd($offices);
            return view('contactus');   
	}

}
