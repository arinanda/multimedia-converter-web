<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use CloudConvert;

class VideoController extends Controller
{
    public function post(Request $request) {
        $videotmp = time();
        $file = $request->file('input_file');
        $input['input_file'] = $videotmp.'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/videos');
        $file->move($destinationPath, $input['input_file']);
        $output_format = $request->output_format;
        $video_codec = $request->video_codec;
        $video_crf = $request->video_crf;
        $video_bitrate = $request->video_bitrate;
        $video_ratio = $request->video_ratio;
        $video_resolution = $request->video_resolution;
        $video_fps = $request->video_fps;
        $video_transpose = $request->video_transpose;

        
        CloudConvert::file($destinationPath.'/'.$input['input_file'])->withOptions([
            'video_codec' => $video_codec,
            'video_crf' => $video_crf,
            'video_ratio' => $video_ratio,
            'video_resolution' => $video_resolution,
            'video_fps' => $video_fps,
            'video_transpose' => $video_transpose,
            'video_bitrate' => $video_bitrate
        ])->to($output_format);
        File::delete($destinationPath.'/'. $input['input_file']);
        $input['input_file'] = $videotmp.'.'.$output_format;

        return response()->download($destinationPath.'/'.$input['input_file'])->deleteFileAfterSend(true);
    }
}
