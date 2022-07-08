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
                    <h3>معلومات الاتصال</h3>
                    <h4>اتصل بنا <span>0778867192</span></h4>
                    <p>My Company, 875 Jewel Road <span>8907 El oued.</span></p>
                    <ul class="agileits_social_list">
                        <li><a href="#" class="w3_agile_facebook"><i class="fa-brands fa-facebook-f"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="#" class="agile_twitter"><i class="fa-brands fa-twitter"
                                    aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#" class="w3_agile_dribble"><i class="fa-brands fa-instagram"
                                    aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-2 agileinfo_footer_grid agileinfo_footer_grid1">
                    <h3>روابط</h3>
                    <ul class="w3layouts_footer_nav">
                        <li><a href="/">الرئيسية</a></li>
                        <li><a href="/products">المنتجات</a></li>
                        <li><a href="/contact">اتصل بنا</a></li>
                    </ul>
                </div>
                <div class="col-md-3 agileinfo_footer_grid">
                    {{-- <h3>معلومات الاتصال</h3> --}}
                    <div class="agileinfo_footer_grid_left">
                        <a href="#" data-toggle="modal" data-target="#myModal"><img src="/images/6.jpg"
                                alt=" " class="img-responsive" /></a>
                    </div>
                    <div class="agileinfo_footer_grid_left">
                        <a href="#" data-toggle="modal" data-target="#myModal"><img src="/images/2.jpg"
                                alt=" " class="img-responsive" /></a>
                    </div>
                    <div class="agileinfo_footer_grid_left">
                        <a href="#" data-toggle="modal" data-target="#myModal"><img src="/images/5.jpg"
                                alt=" " class="img-responsive" /></a>
                    </div>
                    <div class="agileinfo_footer_grid_left">
                        <a href="#" data-toggle="modal" data-target="#myModal"><img src="/images/3.jpg"
                                alt=" " class="img-responsive" /></a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="w3_agileits_footer_copy">
            <div class="container">
                <p>&#169;
                    <script type='text/javascript'>
                        document.write(new Date().getFullYear());
                    </script> جميع الحقوق محفوظة
                </p>
            </div>
        </div>

        <script src="{{ mix('js/jquery.waypoints.min.js') }}" defer></script>
        <script src="{{ mix('js/mislider.js') }}" defer></script>

        <script type="text/javascript">
            jQuery(function($) {
                var slider = $('.mis-stage').miSlider({
                    stageHeight: 380,
                    slidesOnStage: false,
                    slidePosition: 'center',
                    slideStart: 'mid',
                    slideScaling: 150,
                    offsetV: -5,
                    centerV: true,
                    navButtonsOpacity: 1,
                });
            });
        </script>

        <script src="{{ mix('js/jquery.textFx.js') }}" defer></script>
        <script src="{{ mix('js/jquery.transit.js') }}" defer></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('.test').textFx({
                    type: 'fadeIn',
                    iChar: 100,
                    iAnim: 1000
                });
            });
        </script>

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
