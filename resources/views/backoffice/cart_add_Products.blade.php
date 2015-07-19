<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>RubiCart - Back Office</title>
    <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
    <meta name="description" content="AdminDesigns - SHARED ON THEMELOCK.COM">
    <meta name="author" content="AdminDesigns">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

</head>

<body class="ecommerce-page">

<!-- Start: Theme Preview Pane -->
@include('backoffice.templates.skinbar')
        <!-- End: Theme Preview Pane -->

<!-- Start: Main -->
<div id="main">

    <!-- Start: Header -->
    @include('backoffice.templates.header')
            <!-- End: Header -->

    <!-- Start: Sidebar -->
    <aside id="sidebar_left" class="nano nano-primary">
        <div class="nano-content">

             <!-- Start: Topbar-Dropdown -->
            @include('backoffice.templates.top-dropdown')
                   <!-- End: Topbar-Dropdown -->

            <!-- sidebar menu -->
            @include('backoffice.templates.left-sidebar')

        </div>
    </aside>


    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

        <!-- Start: Topbar -->
        @include('backoffice.templates.top-breadcumb')
                <!-- End: Topbar -->

            <!-- Begin: Content -->
            <section id="content" class="table-layout animated fadeIn">

                <!-- begin: .tray-center -->
                <div class="tray tray-center p25 va-t posr">

                    <!-- create new order panel -->
                    <div class="panel mb25 mt5">
                        <div class="panel-heading">
                            <span class="panel-title"> Add New Product</span>
                            <ul class="nav panel-tabs-border panel-tabs">
                                <li class="active">
                                    <a href="#tab1_1" data-toggle="tab">General</a>
                                </li>
                                <li>
                                    <a href="#tab1_2" data-toggle="tab">Description</a>
                                </li>

                            </ul>
                        </div>
                        {!! Form::open(['url' =>'view']) !!}
                        <div class="panel-body p20 pb10">
                            <div class="tab-content pn br-n admin-form">
                            <div id="tab1_1" class="tab-pane active">

                                <div class="section row mbn">
                                    <div class="col-md-4">
                                            <div clas s="fileupload fileupload-new admin-form" data-provides="fileupload">
                                                <div class="fileupload-preview thumbnail mb20">
                                                    <img id="name1" name="image1" data-src="holder.js/100%x140" alt="holder">
                                                </div>

                                                <div class="row">

                                                    <div class="col-xs-5">
                                                        <span class="button btn-system btn-file btn-block">
                                                            <span class="fileupload-new">Select</span>
                                                        <span class="fileupload-exists">Change</span>
                                                        <input type="file">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 pl15">
                                            <div class="section mb10">
                                                <label for="name2" class="field prepend-icon">
                                                    {!! Form::text('product_name',null,['class' => 'event-name gui-input br-light light','placeholder' => 'Product Name'])  !!}
                                                    <label for="name2" class="field-icon"><i class="fa fa-tag"></i>
                                                    </label>
                                                </label>
                                            </div>
                                            <div class="section mb10">
                                                <label class="field prepend-icon">
                                                {!! Form::textarea('product_description',null,['class' => 'gui-textarea br-light bg-light','placeholder' => 'Product Description']) !!}

                                                <label for="comment" class="field-icon"><i class="fa fa-comments"></i>
                                                </label>
                                                <span class="input-footer">
                                                        <strong>Hint:</strong>Full Description about Item could helpful to your clients</span>
                                            </label>
                                        </div>
                                    </div>
                               </div>


                            </div>
                            <div id="tab1_2" class="tab-pane">

                                <div class="section row">
                                    <div class="col-md-6">
                                        <label for="product-category" class="field select">
                                            <select id="product_category" name="product_category">
                                                <option value="0" selected="selected">Product Category...</option>
                                                @foreach($categories as $category)
                                                <option value="{{$category->category}}">{{$category->category}}</option>
                                                    @endforeach

                                            </select>
                                            <i class="arrow double"></i>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    <div class="col-md-6">
                                        <label class="field select ">
                                            <select id="featured" name="featured">
                                                <option value="No" selected="selected">Select Featured</option>
                                               <option value="Yes">Featured</option>
                                            </select>
                                            <i class="arrow double"></i>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                </div>
                                <!-- end section row section -->

                                <div class="section row">
                                    <div class="col-md-4">
                                        <label for="product-price" class="field prepend-icon">
                                            {!! Form::text('price',null,['class' => 'gui-input','placeholder' => 'Product Price'])  !!}
                                            <label for="product-price" class="field-icon"><i class="fa fa-usd"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    <div class="col-md-4">
                                        <label for="product-vendor" class="field prepend-icon">
                                            {!! Form::text('promo_price',null,['class' => 'gui-input','placeholder' => 'Promotional Price'])  !!}
                                            <label for="product-vendor" class="field-icon"><i class="fa fa-shopping-cart"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->


                                </div>
                                <!-- end section row section -->




                                <hr class="short alt">
                                <div class="col-sm-8">
                                    <label class="field option mt10">
                                        <input type="checkbox" name="info" checked>
                                        <em class="small-text text-muted">- A Random Unique ID will be generated</em>
                                    </label>
                                </div>
                                <div class="section row mbn">
                                    <div class="col-sm-4">
                                        <p class="text-right">
                                            {!! Form::submit('Save Product',['class'=>'btn btn-primary']) !!}

                                        </p>
                                    </div>
                                </div>
                                <!-- end section -->

                            </div>

                        </div>
                    </div>
                    {!! Form::close() !!}
                    </div>



                </div>
                <!-- end: .tray-center -->



            </section>
            <!-- End: Content -->

        </section>


    </div>
    <!-- End: Main -->

    <!-- BEGIN: PAGE SCRIPTS -->


    <style>
        #message-table > tbody > tr.highlight > td {
            background-color: #FFFEF0;
        }
    </style>
    
    <!-- jQuery -->
    <script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- FileUpload JS -->
    <script type="text/javascript" src="vendor/plugins/fileupload/fileupload.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/holder.min.js"></script>

    <!-- Tagmanager JS -->
    <script type="text/javascript" src="vendor/plugins/tagsinput/tagsinput.min.js"></script>

    <!-- Theme Javascript -->
    <script type="text/javascript" src="assets/js/utility/utility.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/demo.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core    
            Core.init();

            // Init Theme Core    
            Demo.init();

            // grant file-upload preview onclick functionality
            $('.fileupload-preview').on('click', function() {
                $('.btn-file > input').click();
            });

            // select dropdowns - placeholder like creation
            var selectList = $('.admin-form select');
            selectList.each(function(i, e) {
                $(e).on('change', function() {
                    if ($(e).val() == "0") $(e).addClass("empty");
                    else $(e).removeClass("empty")
                });
            });
            selectList.each(function(i, e) {
                $(e).change();
            });

            // Init tagsinput plugin
            $("input#tagsinput").tagsinput({
                tagClass: function(item) {
                    return 'label bg-primary light';
                }
            });

        });
    </script>
    <!-- END: PAGE SCRIPTS -->

</body>

</html>
