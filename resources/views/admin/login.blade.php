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

</head>


<div id="container" class="cls-container">

    <!-- BACKGROUND IMAGE -->
    <!--===================================================-->
    <div id="bg-overlay"></div>


    <!-- LOGIN FORM -->
    <!--===================================================-->
    @if(Session::has('flash_message_error'))
    <div class="alert alert-sm alert-danger alert-block" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true"></span>
        </button>
        <strong>{!! session('flash_message_error')!!}</strong>
    </div>
        @endif
        @if(Session::has('flash_message_success'))
        <div class="alert alert-sm alert-success alert-block" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true"></span>
            </button>
            <strong>{!! session('flash_message_success')!!}</strong>
        </div>
            @endif
    <div class="cls-content">
        <div class="cls-content-sm panel">
            
            <div class="panel-body">
                
                <div class="mar-ver pad-btm">
                    <h1 class="h3">Account Login</h1>
                    <p>Sign In to your account</p>
                </div>
                <form method="post" action="{{route('login')}}">
                    @csrf
                    <div class="form-group" data-validate="Username is required">
                        <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
                    </div>
                    <div class="form-group" data-validate="password is required">
                        <input type="password" name="pass" class="form-control" placeholder="Password">
                    </div>
                    <div class="checkbox pad-btm text-left">
                        <input id="demo-form-checkbox" class="magic-checkbox" type="checkbox">
                        <label for="demo-form-checkbox">Remember me</label>
                    </div>
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Sign In</button>
                </form>
            </div>


        </div>
    </div>
</div>
<!--===================================================-->
<!-- END OF CONTAINER -->

<!--JAVASCRIPT-->
<!--=================================================-->

<!--jQuery [ REQUIRED ]-->
<script src="public/assets/js/jquery.min.js"></script>


<!--BootstrapJS [ RECOMMENDED ]-->
<script src="public/assets/js/bootstrap.min.js"></script>


<!--NiftyJS [ RECOMMENDED ]-->
<script src="public/assets/js/nifty.min.js"></script>
<script>
    $("document").ready(function(){
    setTimeout(function(){
       $("div.alert").remove();
    }, 3000 ); // 5 secs

});
</script>