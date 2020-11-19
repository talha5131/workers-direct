<!DOCTYPE html>

<html>



<head>


    <!-- Font Awesome 4 -->



    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



    <!-- Minimal Rich Text Editor With CSS -->



    <link rel="stylesheet" href="{{ url('public/assets/css/richtext.min.css')}}">


</head>



<body>

    <button id="chat-circle-new" type="button" class="btn btn-success zoom" data-toggle="modal" data-target="#modalPoll-1-new">
        <span style="font-size: 25px; color: white;position:absolute; top: 3px; left: 20px;">ASK US </span>
        <i class="fa fa-question-circle" style="font-size: 25px; color: white;position:absolute; top: 15px; right: 20px;" aria-hidden="true"></i>
    </button>

    <!-- <i class="fa fa-question-circle" style="font-size: 50px; color: white" aria-hidden="true"></i> -->



    <!-- Modal: modalPoll -->

    <div class="modal fade right" id="modalPoll-1-new" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">

        <div id="modalDiv" class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document" style="width: 830px;">

            <div class="modal-content">

                <!--Header-->

                <div class="modal-header">

                    <h3 style="float: left; font-weight: 700; font-size: 20px;">Contact Us</h3>
                    <button class="btn" id="modalCloseBtn" style="float: right; background: #7CC24D; color: #FFFFFF;" data-dismiss="modal"><i style="font-size: 13px;" class="fas fa-times"></i></button>
                </div>



                <!--Body-->

                <div class="modal-body">

                    <div class="text-center">

                        <i class="far fa-file-alt fa-4x mb-3 animated rotateIn" style="color: #7CC24D;"></i>

                        <p>

                            <strong>Your opinion matters</strong>

                        </p>

                        <p>Have some ideas how to improve our product?

                            <strong>Give us your feedback.</strong>

                        </p>

                    </div>



                    <hr>



                    <!-- <form id="askUsForm">

                        <div class="row">

                            <div class="col-md-4">

                                <div class="form-group">

                                    <div class="jp_contact_inputs_wrapper">

                                        <label class="formsLabel" for="name">Name</label>
                                        <i class="fa fa-user" style="position: absolute;z-index: 1;top: 55px;left: 40px;color: #7CC24D;"></i><input type="text" id="name" name="name" placeholder="Name">

                                    </div>
                                </div>

                            </div>

                            <div class="col-md-4">

                                <div class="form-group">
                                    <div class="jp_contact_inputs_wrapper">

                                        <label class="formsLabel" for="email">Email</label>
                                        <i class="fa fa-envelope" style="position: absolute;z-index: 1;top: 55px;left: 40px;color: #7CC24D;"></i><input type="text" id="email" name="email" placeholder="Email">

                                    </div>
                                </div>

                            </div>

                            <div class="col-md-4">

                                <div class="form-group">
                                    <div class="jp_contact_inputs_wrapper">

                                        <label class="formsLabel" for="subject">Subject</label>
                                        <i class="fa fa-envelope" style="position: absolute;z-index: 1;top: 55px;left: 40px;color: #7CC24D;"></i><input type="text" id="subject" name="subject" placeholder="Subject">

                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="form-group">
                            <label class="formsLabel" for="askUsMessage">Message</label>
                            <textarea class="form-control" name="askUsMessage" id="askUsMessage"></textarea>
                            <span class="error" id="askUsMessage-error"></span>
                        </div>


                        <div class="form-group">

                            <div class="row captcha">

                                <div class="col-md-4">

                                    <canvas id="canvas" style="width: 100%;"></canvas>

                                </div>

                                <div class="col-md-4">

                                    <input style="height: 40px;" name="code" class="form-control" placeholder="Enter Code Here...">

                                </div>

                                <div class="col-md-4">

                                    <a role="button" id="valid" class="btn btn-success form-control" style="background-color: #7CC24D; border: 1px solid #7CC24D; height: 40px;font-size:large; color:white;">Submit</a>

                                </div>

                            </div>

                        </div>

                        <div class="modal-footer justify-content-center">

                            <button type="submit" id="send" style="background-color: #7CC24D; border: 1px solid #7CC24D; height: 40px;font-size:large; color:white;" class="btn btn-primary waves-effect waves-light">Send

                                <i class="fa fa-paper-plane ml-1"></i>

                            </button>



                            <button type="button" style="background-color: #7CC24D; border: 1px solid #7CC24D; height: 40px;font-size:large; color:white;" class="btn btn-primary waves-effect" data-dismiss="modal">Cancel</button>


                        </div>

                    </form> -->
                    <div style="max-width: 500px;">
                        <script style="max-width: 500px;" src='https://workersdirectltd.zohoworkerly.eu/workerly/WebFormServeServlet?rid=453cc1b85e261ca88e68834608c13d07gid12b1e89568431b14c7293aa4d69c0f0f&script=$sYG'></script>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Modal: modalPoll -->

    <!-- initialize jQuery Library -->

    <script type="text/javascript" src="{{ url('public/assets/js/jquery.js')}}"></script>

    <!-- minimal Rich Text Editor With jQuery -->



    <script type="text/javascript" src="{{ url('public/assets/js/jquery.richtext.min.js')}}"></script>



    <!-- jQuery Captcha Plugin -->
    <script src="{{ url('public/assets/js/jquery-captcha-lgh.min.js')}}"></script>


    <!-- jQuery Validation -->



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>



    <script type="text/javascript">
        $("#askUsMessage").richText();

        var button = $('#send');
        var captchaStatus = false;
        button.prop('disabled', true);


        //Captcha Code Starts
        //Captcha Initialization
        const captcha = new Captcha($('#canvas'));

        //Enabling the submit button to test if the code user typed is correct.
        $('#valid').on('click', function() {

            const ans = captcha.valid($('input[name="code"]').val());

            if (ans) {

                button.prop('disabled', false);

                $('.captcha').hide();

                captchaStatus = true;
                console.log(captchaStatus);
            } else {

                button.prop('disabled', true);
                captchaStatus = false;
                console.log(captchaStatus);
            }

        })


        //Captcha Plugin API Methods

        // refresh
        captcha.refresh();

        // get the code
        captcha.getCode();

        // test if the code is correct
        captcha.valid("");

        $('#askUsForm').validate({
            rules: {
                name: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true
                },
                subject: {
                    required: true,
                },
            }
        });

        $("#askUsForm").submit(function() {


            if ($("#askUsMessage").val() == "") {
                $("#askUsMessage-error").html("This field is required");
                console.log("button is clicked");
                event.preventDefault();
            }
            if ($("#askUsMessage").val() == "<div><br></div>") {
                $("#askUsMessage-error").html("This field is required");
                event.preventDefault();
            } else if ($("#askUsMessage").val() == "<br>") {
                $("#askUsMessage-error").html("This field is required");
                event.preventDefault();
            } else {
                $("#askUsMessage-error").html("");
            }
        });

        $(document).ready(function() {
            $('#modalCloseBtn').click(function() {
                console.log("WORKING!!!");
                $('#modalDiv').hide();
            });
        });
    </script>

</body>



</html>