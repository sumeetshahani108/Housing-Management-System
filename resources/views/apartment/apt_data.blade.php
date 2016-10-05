<!doctype html>
<html lang="en">
    <head>
        <title>apartment details</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     
        <link rel="stylesheet" href="<?php echo asset('css/bootstrap.css')?>" type="text/css"> 
        <link rel="stylesheet" href="<?php echo asset('css/themify-iconsmon.css')?>" type="text/css"> 
        <link rel="stylesheet" href="<?php echo asset('css/flexslider.css')?>" type="text/css"> 
        <link rel="stylesheet" href="<?php echo asset('css/lightbox.css')?>" type="text/css"> 
        <link rel="stylesheet" href="<?php echo asset('css/ytplayer.css')?>" type="text/css"> 
        <link rel="stylesheet" href="<?php echo asset('css/theme.css')?>" type="text/css"> 
        <link rel="stylesheet" href="<?php echo asset('css/custom.css')?>" type="text/css"> 
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
    </head>
    <body class="scroll-assist">
        <div class="main-container">
            <section class="page-title page-title-2 image-bg overlay parallax">
                <div class="background-image-holder">
                    <img alt="Background Image" class="background-image" src = "{{ Html::image('img/form_image.jpg') }}">
 >
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="uppercase mb8">Become a host</h2>
                            <p class="lead mb0">Let's get to know each other.</p>
                        </div>                       
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <div class = "container">
            <section>
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <div class="feature boxed bg-secondary">
                        <form class="text-center form-email" data-error="There were errors, please check all required fields and try again" data-success="Thanks for taking the time to complete the planner. We'll be in touch shortly!" action = "apartmentbasic" method = "post">
                            <h4 class="uppercase mt48 mt-xs-0">Create your Apartment</h4>
                            <p class="lead mb64 mb-xs-24">
                                Share a little detail about your apartment so we
                                <br /> can tailor the buyer that's right for you.
                            </p>
                            <ul class = "nav nav-tabs nav-justified">
                                <li class = "active"><a data-toggle="tab" href="#firsttab">Apartment Details</a></li>
                                <li><a data-toggle="tab" href="#secondtab">Rules and Regulations</a></li>
                            </ul><br>
                           
                            <hr>
                            <div class = "tab-content">

                            <!-- first tab -->

                                <div id = "firsttab" class = "tab-pane-active" >
                                    <div class="overflow-hidden">
                                        <h6 class="uppercase">
                                            1. Area details
                                        </h6>
                                        <input type="text" name="locality" id = "locality" class="col-md-6 " placeholder="Your Locality*" />
                                        <input type="text" name="city" id = "city" class="col-md-6 " placeholder="Your City*" />
                                        <hr>
                                    </div>
                                     <div class="overflow-hidden">
                                        <h6 class="uppercase">
                                            2. Apartment Space
                                        </h6>
                                        <input type="text" name="bhk" id = "bhk" class="col-md-6 " placeholder="BHK*" />
                                        <input type="text" name="carpet_area" id = "carpet_area" class="col-md-6 " placeholder="Carpet Area (sq.ft)*" />
                                        <hr>
                                    </div>
                                     <div class="overflow-hidden">
                                        <h6 class="uppercase">
                                            3. Type of apartment
                                        </h6>
                                        <input type="text" name="toa" id = "toa" class="col-md-6 " placeholder="Type of Apartment*" />
                                        <input type="text" name="price" id = "price" class="col-md-6 " placeholder="price Area*" />
                                        <hr>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="uppercase">
                                            4. Start with the elementary
                                        </h6>
                                        <input type="text" name="no_of_bathrooms" id = "no_of_bathrooms" class="col-md-6 " placeholder="No of bathrooms*" />
                                        <input type="text" name="no_of_bedrooms" id = "no_oF_bedrooms" class="col-md-6 " placeholder="No of bedrooms*" />
                                        <hr>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="uppercase">
                                            5. Set the scene
                                        </h6>
                                        <input type="text" name="flooring_type" id = "flooring_type" class="col-md-12 " placeholder="Flooring type*" />
                                        <br>
                                        <textarea rows="4" cols="50" name="apt_condition" id = "apt_condition" class = "col-md-12" placeholder = "Condition of the apartment" form="form"></textarea>
                                        <hr>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="uppercase">
                                            6. About
                                        </h6>
                                        <input type="text" name="owner" id = "owner" class="col-md-6 " placeholder="owner*" />
                                        <input type="text" name="year_of_construction" id = "year_of_construction" class="col-md-6 " placeholder="Construction year*" />
                                        <hr>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="uppercase">
                                            6. About
                                        </h6>
                                        <label for="image">Image (only.jpg)</label>
                                        <input type="file" name="image" class="form-control" id="image">
                                        <hr>
                                    </div>
                                    <div class="overflow-hidden">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <h6 class="uppercase"></h6>
                                            <input type = "hidden" name = "_token" value = "{{ csrf_token() }}">
                                            <button type = "submit" name = "submit" class = "btn-style" id = "submit">Submit</button>
                                        </div>
                                    </div>
                                </div>

                            <!-- second tab -->

                            </div>
                        </form>
                    </div>
                </div>
            </section>

            <footer class="footer-1 bg-dark">

                <a class="btn btn-sm fade-half back-to-top inner-link" href="#top">Top</a>
            </footer>
            </div>
        </div>
        <!--<script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/flickr.js"></script>
        <script src="js/flexslider.min.js"></script>
        <script src="js/lightbox.min.js"></script>
        <script src="js/masonry.min.js"></script>
        <script src="js/twitterfetcher.min.js"></script>
        <script src="js/spectragram.min.js"></script>
        <script src="js/ytplayer.min.js"></script>
        <script src="js/countdown.min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/scripts.js"></script>-->
           <!--js-->

        <!--css-->
    <script>
      window.intercomSettings = {
        app_id: "jrdbn46n"
      };
    </script>

<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/jrdbn46n';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>
</body>
</html>