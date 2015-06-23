<?php namespace App\Http\Controllers;

use App\location;
use App\art;
use Request;
use Input;


class ContributeController extends Controller {
    

    public function contribute() 
    {
        return View('contribute');
    }
    
    
    public function store()
    {
        if(Request::ajax()) {
            
            $latitude = Request::input('latitude');
            $longitude = Request::input('longitude');
            $name = Request::input('name');
            $image = Request::input('image');
            
            $location = new location();
            $location->latitude = $latitude;
            $location->longitude = $longitude;
            $location->name = $name;
            $location->save();
            $location_id = $location->id;
//            
//            $destinationPath = public_path().'/images/graffiti/';
//            $filename = $image->getClientOriginalName();
//            $image->move($destinationPath, $filename);
            

            $art = new art();
            $art->image = $image; 
            $art->location_id = $location_id;
            $art->view_count = 0;
            $art->approval_status = 1;
            $art->art_status = 1;
            $art->save();
            
        }
        
        
        
        //validation
        
//         $this->validate($request,
//                [
//                  'location' => 'required',
//                   'Image' => 'required', 
//                   'Image' => 'image'
//                ]
//                );
//        
//        $destinationPath = '';
//        $filename = '';
//        
//        
//        if(Input::hasFile('Image'))
//        {
//            $file = Input::file('Image');
//            $destinationPath = public_path().'/images/graffiti/';
//            $filename = $file->getClientOriginalName();
//            $file->move($destinationPath, $filename);
//            
//           // $inputs = $request->all();
//           // Uploads::create($inputs);
//            
////            $upload = new Uploads;
////            $upload->image = $filename;
////            $upload->save();
//
//            return "yess";
//            
//        }
//        else{
//            return "nooooo";
//        }

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
    
    public function submit(){
        return view('submit');
    }

}

