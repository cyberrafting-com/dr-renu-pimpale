<header id="header-2" class="header ">


    <!-- MOBILE HEADER -->
    <div class="wsmobileheader clearfix">
        <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
         <a href="{{ route('home') }}" >
            <span class="">
            <img src="{{ asset('/resources/assets/images/dr-renu-final-logo.png') }}"alt="mobile-logo" class="mobile-view-logo" style="  ">
            </span>
        </a>
        <a href="{{ route('home') }}" class="callusbtn"><i class="fas fa-phone"></i></a>
    </div>


    <!-- HEADER WIDGETS -->
    <div class="hero-widget clearfix">
        <div class="container">
            <div class="row d-flex align-items-center">


                <!-- LOGO IMAGE -->
                <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 80 pixels) -->
                <div class="col-md-5 col-xl-5">
                    <div class="desktoplogo">
                        <a href="{{ route('home') }}"><img src="{{ asset('/resources/assets/images/dr-renu-pimpale-logo.png') }}"
                                alt="header-logo"></a>
                    </div>
                </div>

                <!-- WIDGETS -->
                <div class="col-md-7 col-xl-7">
                    <div class="row justify-content-end">

                        <!-- Emergency Cases Widget -->
                        <div class="col-md-4">
                            <div class="header-widget icon-xs">
                                <span class="header-icons ">
                                    <i class="fa-solid fa-envelope header1-icon"></i></span>
                                <div class="header-widget-txt">
                                    <a href="mailto:renuapd@gmail.com" class="headers-links">
                                        <p class="txt-400"> renuapd@gmail.com</p>
                                    </a>

                                </div>
                              
                            </div>
                           
                           
                        </div>
                           <div class="col-md-4">
                            
                            <div class="header-widget icon-xs">
                                <span class="header-icons "><i class="fa-solid fa-phone header1-icon"></i></span>
                                <div class="header-widget-txt">
                                    <a href="tel:+919850085979" class="headers-links">
                                        <p class="txt-400"> +91 9850085079</p>
                                    </a>

                                </div>
                            </div>
                           
                        </div>
                        <div class="col-md-4">
                            
                            <div class="header-widget appointment-sec icon-xs">
                                <span class="header-icons blue-color"><i class="fa-solid fa-calendar-check"></i></span>
                                <div class="header-widget-txt">
                                   
                                       <a href="{{ route('contact') }}" class="text-white">Book Appointment</a>
                                    

                                </div>
                            </div>
                           
                        </div>



                       
                        <!-- Working Hours Widget -->
                        <!--<div class="col-md-5">-->
                        <!--    <div class="header-widget icon-xs">-->
                        <!--        <span class="header-icons blue-color"><i class="fa-solid fa-clock"></i></span>-->
                        <!--        <div class="header-widget-txt">-->
                        <!--            <p class="txt-400"> Mon – Sat : - 10:00 AM - 9:00 PM</p>-->
                        <!--            <p class="txt-400"> Sun : - Closed</p>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                         <!-- Location Widget -->
                        <!-- <div class="col-md-3">-->
                        <!--    <div class="header-widget icon-xs">-->
                        <!--        <span class="header-icons blue-color head-icons"><a href="https://www.facebook.com/sharer/sharer.php?u=https://www.drrenupimpale.com"><i class="fab fa-facebook-f"></i></a></span>-->
                        <!--        <span class="header-icons blue-color head-icons"><a  href="https://twitter.com/intent/tweet?text=Check+out+&url=https://www.drrenupimpale.com"><i class="fab fa-twitter"></i></a></span>-->
                        <!--        <span class="header-icons blue-color head-icons"><a href="https://www.linkedin.com/cws/share?url=https://www.drrenupimpale.com"><i class="fab fa-linkedin"></i></a></span>-->
                        <!--        <span class="header-icons blue-color head-icons"><a href="http://pinterest.com/pin/create/button/?url=https://www.drrenupimpale.com"><i class="fa-brands fa-pinterest"></i></a></span>-->
                              
                        <!--    </div>-->
                        <!--</div>-->

                    </div>
                </div>
                <!-- END WIDGETS -->

            </div>
        </div>
    </div>
    <!-- END HEADER WIDGETS -->


    <!-- NAVIGATION MENU -->
    <div class="wsmainfull menu clearfix">
        <div class="wsmainwp clearfix">

            <!-- LOGO IMAGE -->
            <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 80 pixels) -->
            {{-- <div class="desktoplogo">
                <a href="#hero-7"><img src="{{ asset('/resources/assets/images/dr-renu-pimpale-logo.png')}}"  alt="header-logo"></a>
            </div> --}}

            <!-- MAIN MENU -->
            <nav class="wsmenu clearfix">
                <ul class="wsmenu-list">
                    <li class="nl-simple" aria-haspopup="true"><a href="{{ route('home') }}">Home</a></li>
                    <li class="nl-simple" aria-haspopup="true"><a href="{{ route('about') }}">About Doctor</a></li>

                    <!-- PAGES -->
                      <li aria-haspopup="true"><a href="#">Conditions<span class="wsarrow"></span></a>
                        <div class="wsmegamenu clearfix halfmenu">
                            <div class="container-fluid">
                                <div class="row">

                                    <!-- Links -->
                                    <ul class="col-lg-6 col-md-12 col-xs-12 link-list">
                                        <li><a href="{{ route('acute-pain-abdomen') }}">Acute pain in abdomen</a></li>
                                        <li><a href="{{ route('gastritis-acid-reflux-acidity') }}">Gastritis/acidity/acid reflux</a></li>
                                        <li><a href="{{ route('gallstones') }}">Gallstones</a></li>
                                        <li><a href="{{ route('appendicitis') }}">Appendicitis</a></li>
                                        <li><a href="{{ route('hernia') }}">Hernia</a></li>
                                        <li><a href="{{ route('breast-lumps') }}">Breast lumps</a></li>
                                        <li><a href="{{ route('cancer') }}">Cancer </a></li>
                                         <li><a href="{{ route('diabetic-foot') }}">Diabetic foot</a></li>
                                    </ul>

                                    <!-- Links -->
                                    <ul class="col-lg-6 col-md-12 col-xs-12 link-list">
                                        
                                        <li><a href="{{ route('hydrocele') }}">Hydrocele</a></li>
                                        <li><a href="{{ route('ulcers') }}">Ulcers</a></li>
                                        <li><a href="{{ route('nail-infections') }}">Nail infections</a></li>
                                        <li><a href=" {{ route('lipoma') }}">Lipoma</a></li>
                                        <li><a href="{{ route('sebaceous-cyst') }}">Sebaceous cyst </a></li>
                                         <li><a href="{{ route('kidney-stones') }}">Kidney stones</a></li>
                                        <li><a href="{{ route('acute-colitis') }}">Acute colitis</a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </li>
                   
                    <!-- END PAGES -->
                     <!-- PAGES -->
                      <li aria-haspopup="true"><a href="#">Procedures<span class="wsarrow"></span></a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('laparoscopic-cholecystectomy') }}">Laparoscopic cholecystectomy</a></li>
                            <li><a href="{{ route('laparoscopic-appendicectomy') }}">Laparoscopic appendicectomy</a></li>
                            <li><a href="{{ route('laparoscopic-hernia-treatment') }}">Laparoscopic hernia treatment</a></li>
                            <li><a href="{{ route('laparoscopic-fundoplication') }}">Laparoscopic fundoplication</a></li>
                            <li><a href="{{ route('laparoscopic-splenectomy') }}">Laparoscopic splenectomy</a></li>
                            <li><a href="{{ route('laparoscopic-hemicolectomy') }}">Laparoscopic Hemicolectomy</a></li>
                             <li><a href="{{ route('endoscopic-thyroidectomy-open-thyroidectomy') }}">Endoscopic Thyroidectomy / Open Thyroidectomy</a></li>
                            <li><a href="{{ route('laser-piles-treatment') }}">Laser Piles Treatment</a></li>
                        </ul>
                    </li>
                   <!--<li aria-haspopup="true"><a href="#">Procedures<span class="wsarrow"></span></a>-->
                   <!--     <div class="wsmegamenu clearfix">-->
                   <!--         <div class="container">-->
                   <!--             <div class="row">-->

                                    <!-- MEGAMENU LINKS -->
                   <!--                 <ul class="col-lg-3 col-md-12 col-xs-12 link-list">-->
                                    
                   <!--                     <li><a href="{{ route('laparoscopic-cholecystectomy') }}">Laparoscopic cholecystectomy</a></li>-->
                   <!--                     <li><a href="{{ route('laparoscopic-appendicectomy') }}">Laparoscopic appendicectomy</a></li>-->
                   <!--                     <li><a href="{{ route('laparoscopic-hernia-treatment') }}">Laparoscopic hernia treatment</a></li>-->
                   <!--                     <li><a href="#">Laparoscopic fundoplication</a></li>-->
                   <!--                     <li><a href="#">Laparoscopic splenectomy</a></li>-->
                   <!--                     <li><a href="#">Laparoscopic Hemicolectomy</a></li>-->
                   <!--                      <li><a href="#">Endoscopic Thyroidectomy / Open Thyroidectom</a></li>-->
                   <!--                     <li><a href="#">Laser Piles Treatment</a></li>-->
                   <!--                 </ul>-->

                                  
                                   

                   <!--             </div>-->
                                <!-- End row -->
                   <!--         </div>-->
                            <!-- End container -->
                   <!--     </div>-->
                        <!-- End wsmegamenu -->
                   <!-- </li>-->
                    <!-- END PAGES -->
                     <!-- PAGES -->
                       <li aria-haspopup="true"><a href="#">Anorectal Surgeries<span class="wsarrow"></span></a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('hemorrhoids-piles') }}">Hemorrhoids / Piles</a></li>
                            <li><a href="{{ route('anal-fissure') }}">Anal Fissure</a></li>
                            <li><a href="{{ route('anal-fistula') }}">Anal Fistula</a></li>
                            <li><a href="{{ route('pilonidal-sinus') }}">Pilonidal Sinus</a></li>
                        </ul>
                    </li>



                    <!--<li class="nl-simple" aria-haspopup="true"><a href="{{ route('gallery') }}">Gallery</a></li>-->
                    
                     <li class="nl-simple" aria-haspopup="true"><a href="{{ route('testimonial') }}">Testimonials</a></li>


                    <!-- SIMPLE NAVIGATION LINK -->
                    <li class="nl-simple" aria-haspopup="true"><a href="{{ route('contact') }}">Contact us</a></li>



                    <!-- HIDDEN NAVIGATION MENU BUTTON -->
                    <!--{{-- <li class="nl-simple header-btn" aria-haspopup="true"><a class="blue-hover" href="#">Book Appointment</a></li> --}}-->



                </ul>


            </nav>
            <!-- END MAIN MENU -->


            <!-- NAVIGATION MENU BUTTON -->
            <!--<div class="header-button">-->
            <!--    <span class="nl-simple header-btn blue-hover"><a href="{{ route('contact') }}">Book Appointment</a></span>-->
            <!--</div>-->


        </div>
    </div>
    <!-- END NAVIGATION MENU -->



</header>
