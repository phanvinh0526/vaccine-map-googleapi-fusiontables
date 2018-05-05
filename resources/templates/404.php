<!-- 404 Page -->
<div class='container middlecon doctors'>
    <div class='container middlecara doctorscara'>
        <div class='row'>
        <div class='col-md-12 heading'>
        404 Page
        <!--<img src='images/banner-trong-1.jpg' class='img-responsive inline'>-->
        </div>
        </div>
    </div>
</div>

<div class='container container404'>
<br>
<div class='row'>
<div class='col-md-9'>
<section>
    <div class="container">
        <div class="row row1">
            <div class="col-md-12">
                <h3 class="center capital f1 wow fadeInLeft animated" data-wow-duration="2s" style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">Something went Wrong!</h3>
                <h1 id="error" class="center wow fadeInRight animated" data-wow-duration="2s" style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">404</h1>
                <p class="center wow bounceIn animated" data-wow-delay="2s" style="visibility: visible;-webkit-animation-delay: 2s; -moz-animation-delay: 2s; animation-delay: 2s;">Page not Found!</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="cflask-holder" class="wow fadeIn animated" data-wow-delay="2800ms" style="visibility: visible;-webkit-animation-delay: 2800ms; -moz-animation-delay: 2800ms; animation-delay: 2800ms;">
                    <span class="wow tada  animated" data-wow-delay="3000ms" style="visibility: visible;-webkit-animation-delay: 3000ms; -moz-animation-delay: 3000ms; animation-delay: 3000ms;"><i class="fa fa-flask fa-5x flask wow flip animated" data-wow-delay="3300ms" style="visibility: visible;-webkit-animation-delay: 3300ms; -moz-animation-delay: 3300ms; animation-delay: 3300ms;"></i> 
                        <i id="b1" class="bubble"></i>
                        <i id="b2" class="bubble"></i>
                        <i id="b3" class="bubble"></i>

                    </span>
                </div>
            </div>
        </div>

        <!--Search Form Start-->
        <!-- <div class="row">
            <div class="col-md-12">     
                <div class="col-md-6 col-md-offset-3 search-form wow fadeInUp animated" data-wow-delay="4000ms" style="visibility: visible;-webkit-animation-delay: 4000ms; -moz-animation-delay: 4000ms; animation-delay: 4000ms;">
                    <form action="http://zooxstudio.com/themes/chemico/#" method="get">
                        <input type="text" placeholder="Search" class="col-md-9 col-xs-12">
                        <input type="submit" value="Search" class="col-md-3 col-xs-12">
                    </form>
                </div>
            </div>
        </div> --> <!--Search Form End-->   


        <div class="row"> <!--Links Start-->
            <div class="col-md-12">
                <div class="links-wrapper col-md-6 col-md-offset-3">
                    <ul class="links col-md-9">
                        <li class="wow fadeInRight animated" data-wow-delay="4400ms" style="visibility: visible;-webkit-animation-delay: 4400ms; -moz-animation-delay: 4400ms; animation-delay: 4400ms;"><a href="http://doctorsatknox.com.au/"><i class="fa fa-home fa-2x"></i></a></li>
                        <li class="wow fadeInRight animated" data-wow-delay="4300ms" style="visibility: visible;-webkit-animation-delay: 4300ms; -moz-animation-delay: 4300ms; animation-delay: 4300ms;"><a href="https://www.facebook.com/doctorsatknox/"><i class="fa fa-facebook fa-2x"></i></a></li>
                        <li class="wow fadeInLeft animated" data-wow-delay="4200ms" style="visibility: visible;-webkit-animation-delay: 4200ms; -moz-animation-delay: 4200ms; animation-delay: 4200ms;"><a href="https://plus.google.com/+DoctorsatknoxAu"><i class="fa fa-google-plus fa-2x"></i></a></li>
                    </ul>

                </div>
            </div>

        </div> <!-- Links End--> 
    </div>
</section>
</div>
</div>
</div>
<!-- Additional Libraries -->
<script type="text/javascript" src="assets/js/countUp.js"></script>
<script type="text/javascript" src="assets/js/wow.js"></script>

<!--Initiating the CountUp Script-->
<script type="text/javascript">
    "use strict";
    var count = new countUp("error", 0, 404, 0, 3);

    window.onload = function() {
        // fire animation
        count.start();
    }
</script>

<!--Initiating the Wow Script-->
<script>  
    "use strict";
    var wow = new WOW(
    {
        animateClass: 'animated',
        offset:       100
    }
);
    wow.init();
</script>