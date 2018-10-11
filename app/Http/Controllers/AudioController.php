<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use CloudConvert;

class AudioController extends Controller
{
    public function post(Request $request) {
        $videotmp = time();
        $file = $request->file('input_file');
        $input['input_file'] = $videotmp.'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/videos');
        $file->move($destinationPath, $input['input_file']);
        $output_format = $request->output_format;
        $quality = $request->quality;
        $density = $request->density;
        $rotate = $request->rotate;
        $grayscale = $request->grayscale;
        $auto_orient = $request->auto_orient;
        $height = $request->height;
        $width = $request->width;
        

        CloudConvert::file($destinationPath.'/'.$input['input_file'])->to($output_format);
        File::delete($destinationPath.'/'. $input['input_file']);
        $input['input_file'] = $videotmp.'.'.$output_format;

        return response()->download($destinationPath.'/'.$input['input_file'])->deleteFileAfterSend(true);
    }
}
