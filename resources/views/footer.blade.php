    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="w3agile_footer_grids">
                <div class="col-md-3 agileinfo_footer_grid">
                    <div class="agileits_w3layouts_footer_logo">
                        <h2><a href="index.html"><span>G</span>erminate<i>Grow healthy products</i></a></h2>
                    </div>
                </div>
                <div class="col-md-4 agileinfo_footer_grid">
                    <h3>Contact Info</h3>
                    <h4>Call Us <span>+1234 567 891</span></h4>
                    <p>My Company, 875 Jewel Road <span>8907 Ukraine.</span></p>
                    <ul class="agileits_social_list">
                        <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 agileinfo_footer_grid agileinfo_footer_grid1">
                    <h3>Navigation</h3>
                    <ul class="w3layouts_footer_nav">
                        <li><a href="index.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Home</a>
                        </li>
                        <li><a href="icons.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Web
                                Icons</a></li>
                        <li><a href="typography.html"><i class="fa fa-long-arrow-right"
                                    aria-hidden="true"></i>Typography</a></li>
                        <li><a href="contact.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Contact
                                Us</a></li>
                    </ul>
                </div>
                <div class="col-md-3 agileinfo_footer_grid">
                    <h3>Blog Posts</h3>
                    <div class="agileinfo_footer_grid_left">
                        <a href="#" data-toggle="modal" data-target="#myModal"><img src="images/6.jpg"
                                alt=" " class="img-responsive" /></a>
                    </div>
                    <div class="agileinfo_footer_grid_left">
                        <a href="#" data-toggle="modal" data-target="#myModal"><img src="images/2.jpg"
                                alt=" " class="img-responsive" /></a>
                    </div>
                    <div class="agileinfo_footer_grid_left">
                        <a href="#" data-toggle="modal" data-target="#myModal"><img src="images/5.jpg"
                                alt=" " class="img-responsive" /></a>
                    </div>
                    <div class="agileinfo_footer_grid_left">
                        <a href="#" data-toggle="modal" data-target="#myModal"><img src="images/3.jpg"
                                alt=" " class="img-responsive" /></a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="w3_agileits_footer_copy">
            <div class="container">
                <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
            </div>
        </div>
        <!-- //footer -->
        <!-- stats -->
        {{-- <script src="js/jquery.waypoints.min.js"></script> --}}
        <script src="{{ mix('js/jquery.waypoints.min.js') }}" defer></script>


        <!-- //stats -->
        <!-- mislider -->
        {{-- <script src="js/mislider.js" type="text/javascript"></script> --}}
        <script src="{{ mix('js/mislider.js') }}" defer></script>

        <script type="text/javascript">
            jQuery(function($) {
                var slider = $('.mis-stage').miSlider({
                    //  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
                    stageHeight: 380,
                    //  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
                    slidesOnStage: false,
                    //  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
                    slidePosition: 'center',
                    //  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
                    slideStart: 'mid',
                    //  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
                    slideScaling: 150,
                    //  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
                    offsetV: -5,
                    //  Center slide contents vertically - Boolean. Default: false
                    centerV: true,
                    //  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
                    navButtonsOpacity: 1,
                });
            });
        </script>
        <!-- //mislider -->
        <!-- text-effect -->
        <script src="{{ mix('js/jquery.textFx.js') }}" defer></script>
        <script src="{{ mix('js/jquery.transit.js') }}" defer></script>

        {{-- <script type="text/javascript" src="js/jquery.transit.js"></script>
        <script type="text/javascript" src="js/jquery.textFx.js"></script> --}}
        <script type="text/javascript">
            $(document).ready(function() {
                $('.test').textFx({
                    type: 'fadeIn',
                    iChar: 100,
                    iAnim: 1000
                });
            });
        </script>
        <!-- //text-effect -->
        <!-- menu -->
        <script>
            $(function() {

                initDropDowns($("div.shy-menu"));

            });

            function initDropDowns(allMenus) {

                allMenus.children(".shy-menu-hamburger").on("click", function() {

                    var thisTrigger = jQuery(this),
                        thisMenu = thisTrigger.parent(),
                        thisPanel = thisTrigger.next();

                    if (thisMenu.hasClass("is-open")) {

                        thisMenu.removeClass("is-open");

                    } else {

                        allMenus.removeClass("is-open");
                        thisMenu.addClass("is-open");
                        thisPanel.on("click", function(e) {
                            e.stopPropagation();
                        });
                    }

                    return false;
                });
            }
        </script>
        <!-- //menu -->
        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event) {
                    event.preventDefault();
                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 1000);
                });
            });
        </script>
        <!-- start-smoth-scrolling -->
        <!-- for bootstrap working -->
        <script src="js/bootstrap.js"></script>
        <!-- //for bootstrap working -->
        <!-- here stars scrolling icon -->
        <script type="text/javascript">
            $(document).ready(function() {
                /*
                	var defaults = {
                	containerID: 'toTop', // fading element id
                	containerHoverID: 'toTopHover', // fading element hover id
                	scrollSpeed: 1200,
                	easingType: 'linear' 
                	};
                */

                $().UItoTop({
                    easingType: 'easeOutQuart'
                });

            });
        </script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script type="text/javascript">
            AOS.init({
                offset: 60,
                once: false,
                mirror: false,
                anchorPlacement: 'top-bottom',

            });
        </script>
