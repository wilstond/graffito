<?php namespace App\Http\Controllers;

use DB;

class MapController extends Controller {
    
    public function explore(){
        
        $posts = DB::select(DB::raw( '
                            SELECT 
                                l.id AS loc_id,
                                latitude,
                                longitude,
                                l.name AS loc_name,
                                rnd_lat,
                                rnd_long,
                                a.id AS art_id,
                                image
                            FROM 
                                (SELECT 
                                    *,
                                    ROUND(latitude, 2) AS rnd_lat, 
                                    ROUND(longitude, 2) AS rnd_long 
                                FROM 
                                    location) AS l,
                                art AS a
                            WHERE 
                                a.location_id = l.id
                            AND
                                approval_status = 2
                            AND
                                rnd_lat = 43.73 
                            AND 
                                rnd_long = -79.61
                        ' ));
        //return $posts;
        return view('explore')->with('posts', $posts);
    }
    
    
  public function getcoordinates(){
        
        $posts = DB::select(DB::raw( '
                            SELECT 
                                l.id AS loc_id,
                                latitude,
                                longitude,
                                l.name AS loc_name,
                                rnd_lat,
                                rnd_long,
                                a.id AS art_id,
                                image
                            FROM 
                                (SELECT 
                                    *,
                                    ROUND(latitude, 2) AS rnd_lat, 
                                    ROUND(longitude, 2) AS rnd_long 
                                FROM 
                                    location) AS l,
                                art AS a
                            WHERE 
                                a.location_id = l.id
                            AND
                                approval_status = 2
                            AND
                                rnd_lat = 43.73 
                            AND 
                                rnd_long = -79.61
                        ' ));
        //return $posts;
        return $posts;
    }  
}
