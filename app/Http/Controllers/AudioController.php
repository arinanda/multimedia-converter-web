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
        $audio_bitrate = $request->audio_bitrate;
        $audio_frequency = $request->audio_frequency;
        $audio_normalize = $request->audio_normalize;
        

        CloudConvert::file($destinationPath.'/'.$input['input_file'])->to($output_format)->withOptions([
            'audio_bitrate' => $audio_bitrate,
            'audio_channels' => $audio_channels,
            'audio_frequency' => $audio_frequency,
            'audio_normalize' => $audio_normalize
        ]);
        File::delete($destinationPath.'/'. $input['input_file']);
        $input['input_file'] = $videotmp.'.'.$output_format;

        return response()->download($destinationPath.'/'.$input['input_file'])->deleteFileAfterSend(true);
    }
}
