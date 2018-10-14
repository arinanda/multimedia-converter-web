<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Audio Converter</title>

    <!-- Icons font CSS-->
    <link href="form/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="form/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="form/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="form/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="form/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Audio Converter</h2>
                    <form class="form-horizontal form-pricing" method="post" action="{{url('/audio')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <label class="label">File</label>
                            <input class="" type="file" name="input_file">
                        </div>
                        {{-- <div class="input-group">
                            <label class="label"></label>
                            <div class="p-t-10">
                                <label class="radio-container m-r-45">Compress
                                    <input type="radio" name="compression_method" value="compress">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Decompress
                                    <input type="radio" name="compression_method" value="decompress">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div> --}}
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Output Format</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
										<select name="output_format">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option value="mp3">mp3</option>
                                            <option value="wav">wav</option>
                                            <option value="flac">flac</option>
                                            <option value="aac">aac</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="price-slider col-2">
                                <div class="input-group">
                                    <label class="label">Bitrate</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="audio_bitrate">
                                            <option selected="selected" value="">no change</option>
                                            <option value="32">32 kbps</option>
                                            <option value="64">64 kbps</option>
                                            <option value="128">128 kbps</option>
                                            <option value="256">256 kbps</option>
                                            <option value="320">320 kbps</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="price-slider col-2">
                                <div class="input-group">
                                    <label class="label">Frequency</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="audio_frequency">
                                            <option value="" selected="selected">no change</option>
                                            <option value="8000">8000 Hz</option>
                                            <option value="11025">11025 Hz</option>
                                            <option value="22050">22050 Hz</option>
                                            <option value="24000">24000 Hz</option>
                                            <option value="32000">32000 Hz</option>
                                            <option value="44100">44100 Hz</option>
                                            <option value="48000">48000 Hz</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="price-slider col-2">
                                <div class="input-group">
                                    <label class="label">Normalization</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="audio_normalize">
                                            <option value="-100dB">-100 db</option>
                                            <option value="-90dB">-90 db</option>
                                            <option value="-80dB">-80 db</option>
                                            <option value="-70dB">-70 db</option>
                                            <option value="-60dB">-60 db</option>
                                            <option value="-50dB">-50 db</option>
                                            <option value="-40dB">-40 db</option>
                                            <option value="-30dB">-30 db</option>
                                            <option value="-20dB">-20 db</option>
                                            <option value="-10dB">-10 db</option>
                                            <option value="" selected="selected">no change</option>
                                            <option value="+10dB">+10 db</option>
                                            <option value="+20dB">+20 db</option>
                                            <option value="+30dB">+30 db</option>
                                            <option value="+40dB">+40 db</option>
                                            <option value="+50dB">+50 db</option>
                                            <option value="+60dB">+60 db</option>
                                            <option value="+70dB">+70 db</option>
                                            <option value="+80dB">+80 db</option>
                                            <option value="+90dB">+90 db</option>
                                            <option value="+100dB">+100 db</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="price-slider col-2">
                                <div class="input-group">
                                    <label class="label">Channels</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="audio_channels">
                                            <option value="" selected="selected">no change</option>
                                            <option value="1">mono</option>
                                            <option value="2">stereo</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="input-group">
                            <label class="label">Rotate</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="rotate">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option value="90">90°</option>
                                    <option value="180">180°</option>
                                    <option value="270">270°</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>        
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"></label>
                                    <div class="col-2">
                                        <label class="radio-container">
                                            <input type="checkbox" name="grayscale" value="true">Grayscale<br>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>        
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"></label>
                                    <div class="col-3">
                                        <label class="radio-container">
                                            <input type="checkbox" name="auto_orient" value="true">Auto Orient<br>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>        
                            </div>
                            <div class="row row-space">
                                <div class="col-3">
                                    <div class="input-group">
                                        <label class="label">Resize</label>
                                        <hr>
                                    </div>                                
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Height</label>
                                        <input class="input--style-4" type="text" name="height">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Width</label>
                                        <input class="input--style-4" type="text" name="width">
                                    </div>        
                                </div>
                            </div>
                        </div> --}}
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="form/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="form/vendor/select2/select2.min.js"></script>
    <script src="form/vendor/datepicker/moment.min.js"></script>
    <script src="form/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="form/js/global.js"></script>

</body>
</html>
<!-- end document-->