<?php

namespace App\Http\Controllers;

use App\location;
use App\art;
use Illuminate\Http\Request;
use Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ContributeController extends Controller {

    public function contribute() {
        return View('contribute');
    }

    public function Location() {

        $latitude = Input::get('latitude');
        $longitude = Input::get('longitude');

        $url = "http://maps.googleapis.com/maps/api/geocode/json?latlng=$latitude,$longitude&sensor=false";

        $curlData = file_get_contents($url);
        $address = json_decode($curlData);
        $a = $address->results[0];
        return explode(",", $a->formatted_address);
    }

    public function submit() {
        return view('submit');
    }

    public function store(Request $request) {

        //validation
         $this->validate($request,
                [
                  'location' => 'required',
                   'Image' => 'required', 
//                   'Image' => 'image'
                ]
                );
        
        $destinationPath = '';
        $filename = '';

        if (Input::hasFile('Image')) {
            $file = Input::file('Image');
            $destinationPath = public_path() . '/images/graffiti/';
            $filename = $file->getClientOriginalName();
            $file->move($destinationPath, $filename);
        } else {
            return "not uploaded";
        }

        $inputs = $request->all();

        return Redirect::to('contribute/save')
                        ->with('location', $inputs['location'])
                        ->with('filename', $filename);
    }

    public function save() {

        $location = Session::get('location');
        $filename = Session::get('filename');
        return View('save')
                        ->with('location', $location)
                        ->with('filename', $filename);
    }

    public function insertdata() {


        $latitude = Input::get('latitude');
        $longitude = Input::get('longitude');
        $name = Input::get('name');
        $image = Input::get('image');


        $location = new location();
        $location->latitude = $latitude;
        $location->longitude = $longitude;
        $location->name = $name;
        $location->save();
        $location_id = $location->id;


        $art = new art();
        $art->image = 'images/graffiti/'.$image;
        $art->location_id = $location_id;
        $art->view_count = 0;
        $art->approval_status = 1;
        $art->art_status = 1;
        $art->save();

        
        return "ok";
    
        
    }

}
