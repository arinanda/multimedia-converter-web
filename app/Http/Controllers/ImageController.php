<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use CloudConvert;

// use Symfony\Component\Process\Process;
// use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function post(Request $request) {
        $videotmp = time();
        $file = $request->file('input_file');
        $input['input_file'] = $videotmp.'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/videos');
        $file->move($destinationPath, $input['input_file']);
        $output_format = $request->output_format;
        // $quality = $request->quality;
        $resizemode = $request->resizemode;
        $density = $request->density;
        $rotate = $request->rotate;
        $grayscale = $request->grayscale;
        $auto_orient = $request->auto_orient;
        if (!empty($request->height)&&!empty($request->width)) {
            $height = $request->height;
            $width = $request->width;
            $resize = $width.'x'.$height; 
        }else {
            $resize='';
        }
        
        // dd($request->input());

        CloudConvert::file($destinationPath.'/'.$input['input_file'])->withOptions([
            'resize' => $resize,
            'resizemode' => $resizemode,
            'grayscale' => $grayscale,
            'density' => $density,
            'rotate' => $rotate
        ])->to($output_format);
        File::delete($destinationPath.'/'. $input['input_file']);
        $input['input_file'] = $videotmp.'.'.$output_format;

        return response()->download($destinationPath.'/'.$input['input_file'])->deleteFileAfterSend(true);
    }
}