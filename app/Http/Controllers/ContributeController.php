<?php namespace App\Http\Controllers;

use Input;
use Validator;
use Redirect;
use Request;
use Session;
//use Illuminate\Http\Request;

class ContributeController extends Controller {
    
    public function contribute() 
    {
        return view('contribute');
    }
    
    public function upload(Request $request)
    {
         // getting all of the post data
         $file = array('image' => Input::file('image'));
         
         // setting up rules
         $rules = array('image' => 'required',); 
         //mimes:jpeg,bmp,png and for max size max:10000
         
         $validator = Validator::make($file, $rules);
         
         if ($validator->fails()) {
             
            // send back to the page with the input data and errors
             return Redirect::to('contribute')->withInput()->withErrors($validator);
           }
           else 
           {
             
            // checking file is valid.
             
            if (Input::file('image')->isValid()) {
               
            $destinationPath = '/public/images/graffiti/'; // upload path
               
            $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
               
            $fileName = rand(11111,99999).'.'.$extension; // re-nameing image
               
            Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
               
            // sending back with message
               
            Session::flash('success', 'Upload successfully'); 
               
            return Redirect::to('contribute');
            
            
            }
            else 
            {
            
            //  sending back with error message.
            Session::flash('error', 'uploaded file is not valid');
            return Redirect::to('contribute');
             
            
            }
        }
    }  
}

