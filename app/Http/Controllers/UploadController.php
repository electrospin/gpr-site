<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
class UploadController extends Controller
{
    public function upload(Request $request){
        if($request->hasFile('file')){

            $files = $request->file('file');
            foreach ($files as $file):
                Storage::put($file->getClientOriginalName(), file_get_contents($file));
            endforeach;

           // return $request->file->storeAs('public/upload',$filename);

            //echo '<img src="uploads/'. $file->getClientOriginalName();
            return \Response::json(array('success' => true));
        }

        //print_r($request->all());
    }
}
