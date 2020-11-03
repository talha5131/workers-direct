<!DOCTYPE html>

<html>



<head>


    <!-- Font Awesome 4 -->



    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



    <!-- Minimal Rich Text Editor With CSS -->



    <link rel="stylesheet" href="{{ url('public/assets/css/richtext.min.css')}}">

    <style>
        .badge-info {
            color: #fff;
            background-color: #ffb100 !important;
            font-size: 13px;
            margin-right: 12px;
        }

        /* .richText-toolbar {
        background: #7CC24D !important;
    } */
        .richText .richText-toolbar ul li a span {
            color: #7CC24D;
        }

        .richText .richText-toolbar ul li a {
            display: block;
            padding: 10px 13px;
            border: none;
            /* border-right: 1px solid #121212 !important; */
            cursor: pointer;
            -webkit-transition: background-color 0.4s;
            -moz-transition: background-color 0.4s;
            transition: background-color 0.4s;
            color: white;
            font-size: 15px;
        }

        .richText-editor {
            background: #fff !important;
            color: black;
            border-left: none !important;
        }

        .richText {
            position: relative;
            background-color: #FAFAFA;
            border: none !important;
            color: #333333;
            width: 100%;
        }
    </style>
</head>



<body>

    <button id="chat-circle-new" type="button" class="btn btn-success zoom" data-toggle="modal" data-target="#modalPoll-1-new">
        <span style="font-size: 25px; color: white">ASK US </span>
        <i class="fa fa-question-circle" style="font-size: 25px; color: white" aria-hidden="true"></i>
    </button>

    <!-- <i class="fa fa-question-circle" style="font-size: 50px; color: white" aria-hidden="true"></i> -->



    <!-- Modal: modalPoll -->

    <div class="modal fade right" id="modalPoll-1-new" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">

        <div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document">

            <div class="modal-content">

                <!--Header-->

                <div class="modal-header">

                    <h3>Contact Us</h3>

                </div>



                <!--Body-->

                <div class="modal-body">

                    <div class="text-center">

                        <i class="far fa-file-alt fa-4x mb-3 animated rotateIn" style="color: #51284f;"></i>

                        <p>

                            <strong>Your opinion matters</strong>

                        </p>

                        <p>Have some ideas how to improve our product?

                            <strong>Give us your feedback.</strong>

                        </p>

                    </div>



                    <hr>



                    <form id="contact-form">

                        <div class="row">

                            <div class="col-md-4">

                                <div class="form-group">

                                    <label>Name</label>

                                    <input class="form-control" name="name" id="name" placeholder="" type="text">

                                </div>

                            </div>

                            <div class="col-md-4">

                                <div class="form-group">

                                    <label>Email</label>

                                    <input class="form-control" name="email" id="email" placeholder="" type="email">

                                </div>

                            </div>

                            <div class="col-md-4">

                                <div class="form-group">

                                    <label>Subject</label>

                                    <input class="form-control" name="subject" id="subject" placeholder="">

                                </div>

                            </div>

                        </div>

                        <div class="form-group">

                            <label>Message</label>

                            <textarea class="form-control content" name="message" id="message" placeholder="" rows="10"></textarea>

                        </div>

                        <!--Footer-->

                        <div class="captcha form-group">

                            <div class="row">

                                <div class="col-md-4">

                                    <!-- <canvas id="canvas" style="width: 100%;"></canvas> -->

                                </div>

                                <div class="col-md-4">

                                    <!-- <input style="height: 40px;" name="code" class="form-control" placeholder="Enter Code Here..."> -->

                                </div>

                                <div class="col-md-4">

                                    <a role="button" id="valid" class="btn btn-success form-control" style="background-color: #51284f; border: 1px solid #51284f; height: 40px;

									font-size:large; color:white;">Submit</a>

                                </div>

                            </div>

                        </div>

                        <div class="modal-footer justify-content-center">

                            <button type="submit" id="send" class="btn btn-primary waves-effect waves-light">Send

                                <i class="fa fa-paper-plane ml-1"></i>

                            </button>



                            <button type="button" class="btn btn-primary waves-effect" data-dismiss="modal">Cancel</button>

                            <!-- <button type="submit" class="btn btn-primary">Save Draft</button> -->

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

    <!-- Modal: modalPoll -->

    <!-- initialize jQuery Library -->

    <script type="text/javascript" src="{{ url('public/assets/js/jquery.js')}}"></script>

    <!-- minimal Rich Text Editor With jQuery -->



    <script type="text/javascript" src="{{ url('public/assets/js/jquery.richtext.min.js')}}"></script>



    <script src="{{ url('public/assets/js/jquery-captcha-lgh.min.js')}}"></script>



    <!-- jQuery Validation -->



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>



    <script type="text/javascript">
        $('.content').richText();



        // Captcha Code Starts

        var button = $('#send');

        button.prop('disabled', true);





        $('#valid').on('click', function() {

            const ans = captcha.valid($('input[name="code"]').val());

            if (ans) {

                button.prop('disabled', false);

                $('.captcha').hide();

            } else {

                button.prop('disabled', true);

            }

        })
    </script>

</body>



</html>