<?php namespace App\Http\Controllers;

use Request;
use App\art;
use DB;

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
		//$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
            
            $trending = DB::table('art')->where('approval_status','=', '2')->orderBy('view_count','desc')->take(9)->get();
            
		return view('welcome')->with('trending', $trending);
                
                
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
        
         public function info()
        {
            return view('info');
        }
        
            public function tour()
        {
            return view('tour');
        }

        public function viewedPost($id)
        {

            if(Request::ajax()){
                $post = art::find($id);
                $post->view_count = $post->view_count + 1;
                $post->save();
                return "OK";
            }
            
        }
        
}
