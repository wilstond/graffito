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
        
        $destinationPath = '';
        $filename = '';
        
        
        if(Input::hasFile('Image'))
        {
            $file = Input::file('Image');
            $destinationPath = public_path().'/images/graffiti/';
            $filename = $file->getClientOriginalName();
            $file->move($destinationPath, $filename);
            
           // $inputs = $request->all();
           // Uploads::create($inputs);
            
//            $upload = new Uploads;
//            $upload->image = $filename;
//            $upload->save();

            return "yess";
            
        }
        else{
            return "nooooo";
        }

    }
    
    public function Location(){
        
        $latitude = Input::get('latitude');
        $longitude = Input::get('longitude');
        
        $url = "http://maps.googleapis.com/maps/api/geocode/json?latlng=$latitude,$longitude&sensor=false";

        $curlData=file_get_contents($url);
        $address = json_decode($curlData);
        $a=$address->results[0];
        return explode(",",$a->formatted_address);

    }

}

