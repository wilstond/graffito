<?php

namespace App\Http\Controllers;

use DB;
use App\art;

class AdminController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Admin Controller
      |--------------------------------------------------------------------------
      |
      | This controller renders your application's "dashboard" for users that
      | are authenticated. Of course, you are free to change or remove the
      | controller as you wish. It is just here to get your app started!
      |
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
        //$this->middleware('guest');
    }

    /**
     * Show the application admin dashboard to the user.
     *
     * @return Response
     */
    public function index() {
        
        $posts = DB::table('art')->where('approval_status','=', '1')->get();
        
        return view('admin.home')->with('posts', $posts);
    }
    
    public function publish($id) {
        
        $post = art::find($id);
        $post->approval_status = 2;
        $post->save();
                
        return redirect('admin');
        
    }
    
    public function delete($id) {
        
        $post = art::find($id);
        $post->delete();
                
        return redirect('admin');
        
    }

}
