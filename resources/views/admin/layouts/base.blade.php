<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="public/assets/css/bootstrap.min.css" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="public/assets/css/nifty.min.css" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="public/assets/css/demo/nifty-demo-icons.min.css" rel="stylesheet">


    <!--=================================================-->



    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="public/assets/plugins/pace/pace.min.css" rel="stylesheet">
    <script src="public/assets/plugins/pace/pace.min.js"></script>


    <!--Demo [ DEMONSTRATION ]-->
    <link href="public/assets/css/demo/nifty-demo.min.css" rel="stylesheet">



    <!--=================================================

    REQUIRED
    You must include this in your project.


    RECOMMENDED
    This category must be included but you may modify which plugins or components which should be included in your project.


    OPTIONAL
    Optional plugins. You may choose whether to include it in your project or not.


    DEMONSTRATION
    This is to be removed, used for demonstration purposes only. This category must not be included in your project.


    SAMPLE
    Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


    Detailed information and more samples can be found in the document.

    =================================================-->

</head>
@include('admin.layouts.header')


<title>@yield('title')</title>

@include('admin.layouts.sidebar')



@yield('content')



@include('admin.layouts.footer')

<!--JAVASCRIPT-->
	<!--=================================================-->

	<!--jQuery [ REQUIRED ]-->
	<script src="public/assets/js/jquery.min.js"></script>


	<!--BootstrapJS [ RECOMMENDED ]-->
	<script src="public/assets/js/bootstrap.min.js"></script>


	<!--NiftyJS [ RECOMMENDED ]-->
	<script src="public/assets/js/nifty.min.js"></script>




	<!--=================================================-->

	<!--Demo script [ DEMONSTRATION ]-->
	<script src="public/assets/js/demo/nifty-demo.min.js"></script>


	<!--Flot Chart [ OPTIONAL ]-->
	<script src="public/assets/plugins/flot-charts/jquery.flot.min.js"></script>
	<script src="public/assets/plugins/flot-charts/jquery.flot.resize.min.js"></script>
	<script src="public/assets/plugins/flot-charts/jquery.flot.tooltip.min.js"></script>


	<!--Sparkline [ OPTIONAL ]-->
	<script src="public/assets/plugins/sparkline/jquery.sparkline.min.js"></script>


	<!--Specify page [ SAMPLE ]-->
	<script src="public/assets/js/demo/dashboard.js"></script>
