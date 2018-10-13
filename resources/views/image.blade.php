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
    <title>Image Converter</title>

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
                    <h2 class="title">Image Converter</h2>
                    <form class="form-horizontal form-pricing" method="post" action="{{url('/image')}}" enctype="multipart/form-data">
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
                                            <option value="bmp">bmp</option>
                                            <option value="eps">eps</option>
                                            <option value="gif">gif</option>
                                            <option value="ico">ico</option>
                                            <option value="jpg">jpg</option>
                                            <option value="odd">odd</option>
                                            <option value="png">png</option>
                                            <option value="ps">ps</option>
                                            <option value="psd">psd</option>
                                            <option value="tiff">tiff</option>
                                            <option value="webp">webp</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="price-slider col-2">
                                <div class="input-group">
                                    <label class="label">Resize Mode</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="resizemode">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option value="">None</option>
                                            <option value="maximum">maximum</option>
                                            <option value="scale">scale</option>
                                            <option value="crop">crop</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
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
                                    <option value="">None</option>
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
                        </div>
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