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
    <title>Video Converter</title>

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
                    <h2 class="title">Video Converter</h2>
                    <form class="form-horizontal form-pricing" method="post" action="{{url('/video')}}" enctype="multipart/form-data">
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
                                            <option value="3gp">3gp</option>
                                            <option value="avi">avi</option>
                                            <option value="flv">flv</option>
                                            <option value="mkv">mkv</option>
                                            <option value="mov">mov</option>
                                            <option value="mp4">mp4</option>
                                            <option value="mpg">mpg</option>
                                            <option value="mxf">mxf</option>
                                            <option value="ogg">ogg</option>
                                            <option value="rm">rm</option>
                                            <option value="swf">swf</option>
                                            <option value="ts">ts</option>
                                            <option value="vob">vob</option>
                                            <option value="webm">webm</option>
                                            <option value="wmv">wmv</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="price-slider col-2">
                                <div class="input-group">
                                    <label class="label">Codec</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="video_codec">
                                            <option selected="selected" value="">copy video from input file (withour reencoding)</option>
                                            <option value="H264">H264</option>
                                            <option value="H265">H265</option>
                                            <option value="MPEG4">MPEG4</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="price-slider col-2">
                                <div class="input-group">
                                    <label class="label">Bitrate</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="video_bitrate">
                                            <option value="" selected="selected">no change</option>
                                            <option value="250">250 kbps</option>
                                            <option value="2000">2000 kbps</option>
                                            <option value="5000">5000 kbps</option>
                                            <option value="8000">8000 kbps</option>
                                            <option value="16000">16000 kbps</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="price-slider col-2">
                                <div class="input-group">
                                    <label class="label">Aspect Ratio</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="video_ratio">
                                            <option value="" selected="selected">no change</option>
                                            <option value="1:1">1:1</option>
                                            <option value="3:2">3:2</option>
                                            <option value="16:9">16:9</option>
                                            <option value="4:3">4:3</option>
                                            <option value="2.20:1">2.20:1</option>
                                            <option value="2.35:1">2.35:1</option>
                                            <option value="1.85:1">1.85:1</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="price-slider col-2">
                                <div class="input-group">
                                    <label class="label">Resolution</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="video_resolution">
                                            <option value="" selected="selected">no change</option>
                                            <option value="240x160">240x160</option>
                                            <option value="320x240">320x240 (240p)</option>
                                            <option value="480x320">480x320 (320p)</option>
                                            <option value="640x480">640x480 (480p)</option>
                                            <option value="720x480">720x480</option>
                                            <option value="852x480">852x480</option>
                                            <option value="1280x720">1280x720 (720p)</option>
                                            <option value="1920x1080">1920x1080 (1080p)</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                                <div class="price-slider col-2">
                                    <div class="input-group">
                                        <label class="label">FPS</label>
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="video_fps">
                                                <option value="" selected="selected">no change</option>
                                                <option value="1">1fps</option>
                                                <option value="2">2fps</option>
                                                <option value="5">5fps</option>
                                                <option value="10">10fps</option>
                                                <option value="12">12fps</option>
                                                <option value="15">15fps</option>
                                                <option value="20">20fps</option>
                                                <option value="23.976">23.976fps NTSC</option>
                                                <option value="25">25fps PAL</option>
                                                <option value="29.97">29.97fps NTSC</option>
                                                <option value="50">50fps</option>
                                                <option value="59.97">59.97fps</option>
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-slider col-2">
                                    <div class="input-group">
                                        <label class="label">Transpose</label>
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="video_transpose">
                                                <option value="" selected="selected">no change</option>
                                                <option value="clock">Rotate by 90 degrees</option>
                                                <option value="cclock">Rotate by 90 degrees counterclockwise</option>
                                                <option value="clock_flip">Rotate by 90 degrees and vertically flip</option>
                                                <option value="cclock_flip">Rotate by 90 degrees counterclockwise and vertically flip</option>
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {{-- <div class="row row-space">
                            <div class="price-slider col-2">
                                <div class="input-group">
                                    <label class="label">Quality</label>
                                    <input class="input--style-4" type="text" name="quality">
                                </div>
                            </div>
                            <div class="price-slider col-2">
                                <div class="input-group">
                                    <label class="label">Density</label>
                                    <input class="input--style-4" type="text" name="density">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
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