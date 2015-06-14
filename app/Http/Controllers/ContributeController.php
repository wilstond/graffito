<?php namespace App\Http\Controllers;

use App\Uploads;
use Illuminate\Http\Request;
use Input;


class ContributeController extends Controller {
    

    public function contribute() 
    {
        return View('contribute');
    }
    
    
    public function store(Request $request)
    {
        
        //validation
        
         $this->validate($request,
                [
                  'location' => 'required',
                   'Image' => 'required', 
                   'Image' => 'image'
                ]
                );
      /*  $inputs = $request->all();
        Uploads::create($inputs);*/
        
        
        $destinationPath = '';
        $filename = '';
        
        
        if(Input::hasFile('Image'))
        {
            $file = Input::file('Image');
            $destinationPath = public_path().'/images/graffiti/';
            $filename = $file->getClientOriginalName();
            $file->move($destinationPath, $filename);

            return "done";
            
        }
        else{
            return "nooooo";
        }

    }
 
}

