@php($title = 'Dr. Renu Pimpale | Top General & Laproscopic Surgeon in Pune')
@section('meta_desc') Dr. Renu Pimpale is one the best female Breast, Hernia, Laparoscopic, Laser Piles Surgeon in Pune, offering expert surgical care with precision and compassion.@endsection

@extends('layouts.default')
@section('content')

    <div id="carouselExampleIndicators" class="carousel slide desktop-view-banner" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="{{ route('about') }}"> <img class="d-block w-100"
                        src="{{ asset('/resources/assets/images/slider/banner2.jpg') }}" alt="First slide"></a>
            </div>
            <div class="carousel-item">
                <a href="{{ route('contact') }}"> <img class="d-block w-100"
                        src="{{ asset('/resources/assets/images/slider/dr-renu-pimpale-banner2.jpg') }}"
                        alt="Second slide"></a>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('/resources/assets/images/slider/dr-renu-pimpale-banner3.jpg') }}"
                    alt="Third slide">
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <a href="{{ route('home') }}"> <img src="{{ asset('/resources/assets/images/mobile-banner1.jpg') }}" alt="" class="mobile-view-banner"></a>







<section class="">
    <!-- END HERO-7 carasoul end -->
    <div class="container top-content1">
        <div class="row">
            <div class="col-lg-5" style="padding-left: 0px;padding-right:0px;">

                <img src="{{ asset('/resources/assets/images/dr-renu-pimpale-top-text-1.png') }}" alt="" class="">

            </div> 
            <div class="col-lg-7 top-txtt1"  >

                <div class="top-txt">
                    <p>For<strong> women</strong> in <strong>Pune</strong> seeking the expertise of a <strong>female
                            surgeon, Dr. Renu Pimpale</strong> offers advanced<strong> minimally invasive surgery
                        </strong>options. Minimally invasive surgery, also known as keyhole surgery, utilizes specialized
                        tools and techniques to perform procedures with smaller incisions compared to traditional surgery.
                    </p>
                    <p>Dr. Renu Pimpale specializes in keyhole surgery for conditions such as <strong>gallstones,
                            appendicitis, hernia repair, fissure/piles/fistula/pilonidal sinus</strong> management, and
                        <strong>breast lump</strong> evaluation and surgical solutions.
                    </p>
                    <p> This approach allows for faster
                    recovery, smaller scars, and reduced post-operative discomfort. With Dr. Pimpale's expertise,
                    patients can undergo these procedures with confidence and peace of mind.
                </p>
                    <p class="top-txt-last">Consult Dr. Renu Pimpale Today!
                        </p>
                        <a href="{{ route('contact') }}" class="btn btn-tra-white white-hover">Book Appointment</a>
                </div>


            </div>
           
        </div>
    </div>
</section>

    <section id="services-3" class=" wide-100 services-section division">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 section-title">
                    <h3 class="h3-md steelblue-color">Conditions Treated</h3>
                    <p class="conn-txt">Dr. Renu offers expertise in the care of a wide range of conditions and has refined
                        her clinical and surgical skills in the following areas.</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mt-20 ">
                        <div class="condistion-sec">
                            <h5>Acute pain in abdomen</h5>
                            <img src="{{ asset('/resources/assets/images/acute-pain-in-abdomen.png') }}" alt="">
                            <p>Acute pain in abdomen</p>
                            <a href="{{ route('acute-pain-abdomen') }}">Know More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 mt-20 ">
                        <div class="condistion-sec">
                            <h5>Gastritis/acidity</h5>
                            <img src="{{ asset('/resources/assets/images/gastritis-acidityacid-reflux.jpg') }}"
                                alt="">
                            <p>Gastritis/acidity</p>
                            <a href="{{ route('gastritis-acid-reflux-acidity') }}">Know More<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 mt-20 ">
                        <div class="condistion-sec">
                            <h5>Gallstones</h5>
                            <img src="{{ asset('/resources/assets/images/gallstones.jpg') }}" alt="">
                            <p>Gallstones</p>
                            <a href="{{ route('gallstones') }}"> Know More<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-md-4 mt-20 ">
                        <div class="condistion-sec">
                            <h5>Appendicitis</h5>
                            <img src="{{ asset('/resources/assets/images/appendicitis.jpg') }}" alt="">
                            <p>Appendicitis</p>
                            <a href="{{ route('appendicitis') }}">Know More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 mt-20 ">
                        <div class="condistion-sec">
                            <h5>Hernia</h5>
                            <img src="{{ asset('/resources/assets/images/hernia.jpg') }}" alt="">
                            <p>Hernia</p>
                            <a href="{{ route('hernia') }}">Know More<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 mt-20 ">
                        <div class="condistion-sec">
                            <h5>Breast lumps</h5>
                            <img src="{{ asset('/resources/assets/images/breast-lumps.jpg') }}" alt="">
                            <p>Breast lumps</p>
                            <a href="{{ route('breast-lumps') }}"> Know More<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>

    <section id="services-6" class="bg-blue wide-50 servicess-section division">
        <div class="container white-color">


            <!-- SECTION TITLE -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1 section-title">

                    <!-- Title 	-->
                    <h3 class="h3-md lapo">Laparoscopic Procedures
                    </h3>

                    <!-- Text -->
                    <p>
                    </p>

                </div>
            </div>


            <div class="row d-flex align-items-center">


                <!-- LEFT SIDE CONTENT -->
                <div class="col-md-6 col-lg-4">

                    <!-- SERVICE BOX #1 -->
                    <div class="sbox-6 pr-30 text-right wow fadeInRight" data-wow-delay="0.4s">

                        <div class="sec-dev">
                            <a href="{{ route('laparoscopic-cholecystectomy') }}"> <img src="{{ asset('/resources/assets/images/gallbladder-icon.png') }}"
                                class="lapro-icons d-sm-block d-md-none d-lg-none d-xl-none" alt="">
                            <!-- Text -->
                           <h5 class="h5-md">Laparoscopic Cholecystectomy</h5>
                            <p class="lapro-p">Advanced surgical technique for gallbladder removal with minimal incisions
                            </p></a>
                        </div>
                        <a href="{{ route('laparoscopic-cholecystectomy') }}"> <img src="{{ asset('/resources/assets/images/gallbladder-icon.png') }}"
                            class="lapro-icons d-none d-xs-none d-sm-none d-md-none d-lg-block d-xl-block"
                            alt=""></a>


                    </div>

                    <!-- SERVICE BOX #2 -->
                    <div class="sbox-6 pr-30 mr-30 text-right wow fadeInRight" data-wow-delay="0.6s">
                        <div class="sec-dev">
                            <a href="{{ route('laparoscopic-appendicectomy') }}"><img src="{{ asset('/resources/assets/images/appendix.png') }}"
                                class="lapro-icons d-sm-block d-md-none d-lg-none d-xl-none" alt="">
                            <!-- Text -->
                            <h5 class="h5-sm">Laparoscopic Appendicectomy</h5>
                            <p class="lapro-p">Surgical procedure to remove the appendix with minimal incisions.

                            </p></a>
                        </div>
                        <a href="{{ route('laparoscopic-appendicectomy') }}"><img src="{{ asset('/resources/assets/images/appendix.png') }}"
                            class="lapro-icons d-none d-xs-none d-sm-none d-md-none d-lg-block d-xl-block"
                            alt=""></a>

                    </div>

                    <!-- SERVICE BOX #2 -->
                    <div class="sbox-6 pr-30 text-right wow fadeInRight" data-wow-delay="0.8s">
                        <a href="{{ route('laparoscopic-hernia-treatment') }}"> <div class="sec-dev">
                            <img src="{{ asset('/resources/assets/images/inguinal-hernia.png') }}"
                                class="lapro-icons d-sm-block d-md-none d-lg-none d-xl-none" alt="">
                            <!-- Text -->
                            <h5 class="h5-md">Laparoscopic Hernia Treatment</h5>
                            <p class="lapro-p"> Repairing hernias with advanced minimally invasive surgical techniques.

                            </p></a>
                        </div>
                        <a href="{{ route('laparoscopic-hernia-treatment') }}"><img src="{{ asset('/resources/assets/images/inguinal-hernia.png') }}"
                            class="lapro-icons d-none d-xs-none d-sm-none d-md-none d-lg-block d-xl-block"
                            alt=""></a>

                    </div>

                </div>


                <!-- SERVICE IMAGE -->
                <div class="col-lg-4 s6-img">
                    <div class="sbox-6-img mb-40 text-center wow fadeInUp" data-wow-delay="0.8s">
                        <a href="{{ route('laparoscopic-cholecystectomy') }}"> <img class="img laproscopic-img-home"
                            src="{{ asset('/resources/assets/images/laproscopic-procedure-2.png') }}"
                            alt="services-image"></a>
                    </div>
                </div>


                <!-- RIGHT SIDE CONTENT -->
                <div class="col-md-6 col-lg-4">


                    <!-- SERVICE BOX #4 -->
                    <div class="sbox-6 pl-30 wow fadeInLeft" data-wow-delay="0.4s">
                        <a href="{{ route('laparoscopic-fundoplication') }}"> <img src="{{ asset('/resources/assets/images/stomach.png') }}" class="lapro-icons"
                            alt="">
                        <div class="sec-dev1">
                            <!-- Text -->
                            <h5 class="h5-md">Laparoscopic Fundoplication</h5>
                            <p class="lapro-p">Advanced surgery to address reflux issues with minimal invasiveness.

                            </p></a>
                        </div>


                    </div>

                    <!-- SERVICE BOX #5 -->
                    <div class="sbox-6 pl-30 ml-30 wow fadeInLeft" data-wow-delay="0.6s">
                        <a href="{{ route('laparoscopic-splenectomy') }}">  <img src="{{ asset('/resources/assets/images/spleen.png') }}" class="lapro-icons"
                            alt="">
                        <div class="sec-dev1">

                            <!-- Text -->
                            <h5 class="h5-md">Laparoscopic Splenectomy</h5>
                            <p class="lapro-p">Removing the spleen using minimally invasive surgical methods

                            </p></a>
                        </div>

                    </div>

                    <!-- SERVICE BOX #6 -->
                    <div class="sbox-6 pl-30 wow fadeInLeft" data-wow-delay="0.8s">
                        <a href="{{ route('laparoscopic-hemicolectomy') }}"> <img src="{{ asset('/resources/assets/images/colon.png') }}" class="lapro-icons" alt="">
                        <div class="sec-dev1">
                            <!-- Text -->
                            <h5 class="h5-md">Laparoscopic Hemicolectomy</h5>
                            <p class="lapro-p">Resecting part of the colon with advanced minimally invasive techniques

                            </p></a>
                        </div>



                    </div>


                </div>
                <!-- End row -->
            </div>
            <!-- End container -->
    </section>
    <!-- END SERVICES-6 -->

    <!-- ABOUT-4
           ============================================= -->
    <section id="info-3" class="">
        <div class="container-fluid">
            <div class="row justify-content-center">


                <!-- INFO IMAGE -->
                <div class="col-md-10 col-lg-5 col-xl-5 col-xxl-5">
                    <div class="info-3-img text-center">
                        <img class="img-fluid"
                            src="{{ asset('/resources/assets/images/dr-renu-pimpale-aboupage-pic1.JPG') }}"
                            alt="dr-renu-pimpale-about-home-pic" />
                    </div>
                </div>


                <!-- INFO TEXT -->
                <div class="col-md-12 col-lg-7 col-xl-7 col-xxl-7 info-section division">
                    <div class="txt-block pc-30 white-color wow fadeInUp" data-wow-delay="0.4s">

                        <!-- Title -->
                        <h3 class="h3-md">Dr. Renu Pimpale</h3>
                        <p class="abt-degree"><span><i class="fa fa-minus"></i></span> MBBS, Ms - General Surgery</p>
                        <p class="abt-degree"><span><i class="fa fa-minus"></i></span> FMAS (MUHS) (Fellowship in Minimal
                            Access Surgery) </p>
                        <p class="abt-degree"><span><i class="fa fa-minus"></i></span> FIAGES (Fellowship of Indian
                            Association Gastrointestinal Endo Surgeons)</p>
                        <p class="abt-degree"><span><i class="fa fa-minus"></i></span> Consultant General & Laparoscopic
                            Surgeon</p>
                        <p class="abt-degree"><span><i class="fa fa-minus"></i></span> Proctologist & Colorectal Surgeon
                        </p>

                        <!-- Text -->
                        <p class="abt-para">Dr. Renu Pimpale is a highly skilled and accomplished surgeon specializing in
                            general surgery and minimal access procedures. With a solid educational background, including an
                            MS in General Surgery from NKP Salve Medical College and Lata Mangeshkar Hospital, Nagpur, and
                            additional fellowships in Minimal Access Surgery and Gastrointestinal Endo Surgeons, Dr. Pimpale
                            brings a wealth of knowledge and expertise to her practice. Over the years, she has honed her
                            skills through extensive hands-on experience, having worked in various capacities in esteemed
                            institutions such as Galaxy CARE Hospital in Pune and Symbiosis Medical College for Women in
                            Pune.
                        </p>



                        <!-- Button -->
                        <a href="{{ route('about') }}" class="btn btn-tra-white white-hover mt-20">Know More</a>

                    </div>
                </div>
                <!-- END CONTENT TEXT -->


            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </section>

    <!-- END ABOUT-4 -->

    <div id="statistic-1" class="bg-scroll statistic-section division">
        <div class="container white-color">
            <div class="row justify-content-center">
                <!-- STATISTIC BLOCK #2 -->
                <div class="col-md-4 col-lg-4">

                    <div class="statistic-block icon-lg wow fadeInUp" data-wow-delay="0.6s"
                        style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">

                        <!-- Icon  -->
                        <span class=""><i class="fa fa-user-md"></i></span>

                        <!-- Text -->
                        <h5 class="statistic-number"><span class="count-element">15</span></h5>
                        <p class="txt-400">Years in Service</p>

                    </div>
                </div>



                <!-- STATISTIC BLOCK #1 -->
                <div class="col-md-4 col-lg-4">

                    <div class="statistic-block icon-lg wow fadeInUp" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">


                        <!-- Icon  -->
                        <span class=""><i class="fa fa-group"></i></span>

                        <!-- Text -->
                        <h5 class="statistic-number"><span class="count-element">3500</span></h5>
                        <p class="txt-400">Happy Patients</p>

                    </div>
                </div>

                <!-- STATISTIC BLOCK #3 -->
                <div class="col-md-4 col-lg-4">
                    <div class="statistic-block icon-lg wow fadeInUp" data-wow-delay="0.8s"
                        style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">

                        <!-- Icon  -->
                        <span class=""><i class="fa-solid fa-hand-holding-medical"></i></span>

                        <!-- Text -->
                        <h5 class="statistic-number"><span class="count-element">2200</span></h5>
                        <p class="txt-400">Successful Surgeries
                        </p>

                    </div>
                </div>





            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </div>


    <section id="info-2" class="hernia-sec ">
        <div class="container-fluid">
            <div class="row d-flex align-items-center">


                <!-- TEXT BLOCK -->
                <div class="col-lg-6">
                    <div class="txt-block pc-30  wow fadeInUp" data-wow-delay="0.4s">

                        <!-- Section ID -->
                        <span class="section-id blue-color"></span>

                        <!-- Title -->
                        <h3 class="h3-md piles-txtt">Every year, lots of people experience <span> PILES </span>discomfort. </h3>

                        <!-- Text -->
                        <p class=" hernia-sec-txt">
                            Piles, also known as <strong> Hemorrhoids</strong> or <strong>Bawasir</strong>, are swollen veins in the rectum and anal canal caused by increased pressure, leading to tissue swelling.

                        </p>
                        <p class=" hernia-sec-txt">
                            This condition spreads rapidly due to factors like <strong>stress, sleep disturbances, constipation,</strong> and the <strong>increasing</strong> reliance on <strong>fast food</strong> in the sedentary lifestyles prevalent among all generations.


                        </p>

                       
                        <p class="mb-10 hernia-sec-txt1">So, let's say <strong> goodbye to discomfort</strong>  and <strong> hello to a pain-free life</strong>  with our advanced Laser Piles Treatment, led by our expert Dr. Renu Pimpale.
                        </p>

                        <p class="mb-30 hernia-sec-txt11"><strong>Here's why laser therapy stands out:
                        </strong>
                        </p>
                         <!-- Options List -->
                         <div class="row">

                            <div class="col-lg-6 col-xl-6">

                                <!-- Option #1 -->
                                <div class="box-list m-top-15">
                                    <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                                    <p class="p-sm">Precision Healing</p>
                                </div>

                                <!-- Option #2 -->
                                <div class="box-list">
                                    <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                                    <p class="p-sm">Reduced Risks</p>
                                </div>
                            </div>
                                <div class="col-lg-6 col-xl-6">

                                <!-- Option #3 -->
                                <div class="box-list">
                                    <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                                    <p class="p-sm">Speedy Recovery
                                    </p>
                                </div>

                                <!-- Option #1 -->
                                <div class="box-list m-top-15">
                                    <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                                    <p class="p-sm">Personalized Care
                                    </p>
                                </div>

                              

                            </div>



                        </div>
                        <!-- End Options List -->
                        <p class="mb-30 hernia-sec-txt1 extr">Don't let piles hold you back any longer. 
                        </p>
                        <p class="hernia-sec-txt-last">Book your consultation now and rediscover the joy of a pain-free life!
                        </p>
                        <a href="{{ route('contact') }}" class="btn btn-tra-white white-hover ">Book Appointment</a>  <a href="tel:+919850085079" class="btn btn-tra-white sec-button" >Call Now</a>
                    </div>
                </div>
                <!-- END TEXT BLOCK -->


                <!-- IMAGE BLOCK -->
                <div class="col-lg-6">
                    <div class="info-2-img wow fadeInUp" data-wow-delay="0.6s">
                        <img class="piles-img1" src="{{ asset('/resources/assets/images/dr-renu-laser-piles-treatment.png') }}" alt="dr-renu-laser-piles-treatment">
                    </div>
                </div>


            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </section>
    {{-- hospital attachments --}}

    <section class="blog-one" style="background-color: #e9dbed">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 section-title">

                    <!-- Title 	-->
                    <h3 class="h3-md const">Hospital Attachments


                    </h3>

                </div>
            </div>
            <div class="row">
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 col-md-4 wow fadeInUp animated animated" data-wow-delay="100ms"
                    style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset('/resources/assets/images/rubyhall-hinjawadi-logo.jpg') }}"
                                alt="">
                        </div>
                        <div class="blog-one__content">
                            <!-- <div class="blog-one__date">
                                        <p>28</p>
                                        <span>july</span>
                                    </div> -->
                            <!-- <ul class="blog-one__meta list-unstyled">
                                        <li>
                                            <a href="#"><i class="far fa-user-circle"></i>Guru Nanak hospital</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="far fa-comments"></i>2 Comments</a>
                                        </li>
                                    </ul> -->
                            <h3 class="blog-one__title">Ruby Hall Clinic, Hinjawadi </h3>
                            <p class="blog-one__text"><b>Address :</b> Rajeev Gandhi Infotech Park, MIDC
                                Phase No 1, Plot No P-33,
                                Hinjawadi, Pune – 411057
                                Maharashtra,</p>
                            {{-- <p class="blog-one__text"><b>Phone : </b>+91 22 4222 7804 ,<br>+91 22 4222 7803</p>
                            <p class="blog-one__text"><b>Timing : </b>10.00 AM to 12.00 PM (Daily)</p> --}}
                            <!-- <div class="blog-one__read-more">
                                        <a href="#">Read more <span class="icon-right-arrow"></span></a>
                                    </div> -->
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 col-md-4 wow fadeInUp animated animated" data-wow-delay="100ms"
                    style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset('/resources/assets/images/Vencer-logo.jpg') }}" alt="">
                        </div>
                        <div class="blog-one__content">
                            <!-- <div class="blog-one__date">
                                        <p>28</p>
                                        <span>july</span>
                                    </div> -->
                            <!-- <ul class="blog-one__meta list-unstyled">
                                        <li>
                                            <a href="#"><i class="far fa-user-circle"></i>Guru Nanak hospital</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="far fa-comments"></i>2 Comments</a>
                                        </li>
                                    </ul> -->
                            <h3 class="blog-one__title">Vencer Hospital, Wakad</h3>
                            <p class="blog-one__text"><b>Address :</b> Savitribai Phule Udyan, chowk, Wakad - Bhosari BRTS
                                Rd, opposite Gyanjyoti, near Jagtap Dairy, Madhuban Colony, Jagtap Dairy, Pimple Nilakh,
                                Pune, Pimpri-Chinchwad, Maharashtra 411027</p>
                            {{-- <p class="blog-one__text"><b>Phone : </b>022 66986666</p>
                            <p class="blog-one__text">(By Appointment only)</p> --}}
                            <!-- <div class="blog-one__read-more">
                                        <a href="#">Read more <span class="icon-right-arrow"></span></a>
                                    </div> -->
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 col-md-4 wow fadeInUp animated animated" data-wow-delay="100ms"
                    style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset('/resources/assets/images/Sanjivani-Hospital-logo.jpg') }}"
                                alt="">
                        </div>
                        <div class="blog-one__content">
                            <!-- <div class="blog-one__date">
                                        <p>28</p>
                                        <span>july</span>
                                    </div> -->
                            <!-- <ul class="blog-one__meta list-unstyled">
                                        <li>
                                            <a href="#"><i class="far fa-user-circle"></i>Guru Nanak hospital</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="far fa-comments"></i>2 Comments</a>
                                        </li>
                                    </ul> -->
                            <h3 class="blog-one__title">Sanjivani Vitalife Hospital</h3>
                            <p class="blog-one__text"><b>Address :</b> B241, 2/1, New DP Rd, Shambhu Vihar Society, Ward
                                No. 8, Aundh, Pune, Maharashtra 411007</p>
                            {{-- <p class="blog-one__text"><b>Phone : </b>+91 83568 83025 </p>
                            <p class="blog-one__text"><b>Timing : </b>5.00 PM to 7.00 PM</p> --}}
                            <!-- <div class="blog-one__read-more">
                                        <a href="#">Read more <span class="icon-right-arrow"></span></a>
                                    </div> -->
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->

            </div>
        </div>
    </section>
    <section class="blog-one">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 section-title">

                    <!-- Title 	-->
                    <h3 class="h3-md const">Consulting Places



                    </h3>

                </div>
            </div>
            <div class="row justify-content-center">
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 col-md-4 wow fadeInUp animated animated" data-wow-delay="100ms"
                    style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset('/resources/assets/images/aniruddha-ortho-polyclinic.jpg') }}"
                                alt="">
                        </div>
                        <div class="blog-one__content">
                            <!-- <div class="blog-one__date">
                                        <p>28</p>
                                        <span>july</span>
                                    </div> -->
                            <!-- <ul class="blog-one__meta list-unstyled">
                                        <li>
                                            <a href="#"><i class="far fa-user-circle"></i>Guru Nanak hospital</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="far fa-comments"></i>2 Comments</a>
                                        </li>
                                    </ul> -->
                            <h3 class="blog-one__title">Dr. Aniruddha's ortho and polyclinic, Hinjawadi </h3>
                            <p class="blog-one__text"><b>Address :</b> Dr Aniruddha's Advance Ortho and Polyclinic,Office
                                No 103,Viva Icon,Wing A,Opposite to Xion Mall,Hinjewadi Main Road,Hinjewadi,Pimpri
                                Chinchwad,Pune 411057</p>
                            {{-- <p class="blog-one__text"><b>Phone : </b>+91 22 4222 7804 ,<br>+91 22 4222 7803</p>
                            <p class="blog-one__text"><b>Timing : </b>10.00 AM to 12.00 PM (Daily)</p> --}}
                            <!-- <div class="blog-one__read-more">
                                        <a href="#">Read more <span class="icon-right-arrow"></span></a>
                                    </div> -->
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 col-md-4 wow fadeInUp animated animated" data-wow-delay="100ms"
                    style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset('/resources/assets/images/vitalife-clinic.jpg') }}" alt="">
                        </div>
                        <div class="blog-one__content">
                            <!-- <div class="blog-one__date">
                                        <p>28</p>
                                        <span>july</span>
                                    </div> -->
                            <!-- <ul class="blog-one__meta list-unstyled">
                                        <li>
                                            <a href="#"><i class="far fa-user-circle"></i>Guru Nanak hospital</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="far fa-comments"></i>2 Comments</a>
                                        </li>
                                    </ul> -->
                            <h3 class="blog-one__title">Vitalife clinic, Wakad</h3>
                            <p class="blog-one__text"><b>Address :</b> Nisarg Tulip, Renuka Akruti, 1&2, Datta Mandir Rd,
                                near Dange Chowk Road, Shankar Kalat Nagar, Wakad, Pimpri-Chinchwad, Maharashtra 411057</p>
                            {{-- <p class="blog-one__text"><b>Phone : </b>022 66986666</p>
                            <p class="blog-one__text">(By Appointment only)</p> --}}
                            <!-- <div class="blog-one__read-more">
                                        <a href="#">Read more <span class="icon-right-arrow"></span></a>
                                    </div> -->
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->


            </div>
        </div>
    </section>

    <!-- TESTIMONIALS-2
           ============================================= -->
    <section id="reviews-2" class="bg-lightgrey wide-100 reviews-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1 section-title">

                    <!-- Title 	-->
                    <h3 class="h3-md steelblue-color">What Our Patients Say</h3>
                </div>
            </div> <!-- END SECTION TITLE -->


            {{-- <!google-logo-icon.png- TESTIMONIALS CONTENT --> --}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme reviews-holder">


                            <!-- TESTIMONIAL #1 -->
                            <div class="review-2">
                                <div class="review-txt text-center">

                                    <!-- Quote -->


                                    <!-- Author Avatar -->
                                    <div class="testimonial-avatar">
                                        <img src="{{ asset('/resources/assets/images/google-logo-icon.png') }}"
                                            alt="testimonial-avatar">
                                    </div>

                                    <!-- Testimonial Text -->
                                    <p>Dr. Renu Pimpale's expertise and care during my laparoscopic surgery were
                                        exceptional.
                                        Her skillful hands and compassionate approach made me feel at ease throughout the
                                        entire process.
                                    </p>

                                    <!-- Testimonial Author -->
                                    <div class="review-author">
                                        <h5 class="h5-sm">Raj Kumar Vishwakarma</h5>

                                    </div>

                                </div>
                            </div> <!--END  TESTIMONIAL #1 -->


                            <!-- TESTIMONIAL #2 -->
                            <div class="review-2">
                                <div class="review-txt text-center">

                                    <!-- Quote -->


                                    <!-- Author Avatar -->
                                    <div class="testimonial-avatar">
                                        <img src="{{ asset('/resources/assets/images/google-logo-icon.png') }}"
                                            alt="testimonial-avatar">
                                    </div>

                                    <!-- Testimonial Text -->
                                    <p>She attended to my mom in law's treatment very promptly. She suggested good course of
                                        action and is very good at convincing patients.She is one of the best surgeons we
                                        have ever met.

                                    </p>

                                    <!-- Testimonial Author -->
                                    <div class="review-author">
                                        <h5 class="h5-sm">Chhaya Pattan</h5>

                                    </div>

                                </div>
                            </div> <!-- END TESTIMONIAL #2 -->


                            <!-- TESTIMONIAL #3 -->
                            <div class="review-2">
                                <div class="review-txt text-center">

                                    <!-- Quote -->


                                    <!-- Author Avatar -->
                                    <div class="testimonial-avatar">
                                        <img src="{{ asset('/resources/assets/images/google-logo-icon.png') }}"
                                            alt="testimonial-avatar">
                                    </div>

                                    <!-- Testimonial Text -->
                                    <p>She has treated my father so well undertaking all the risk wd full responsibility and
                                        saved his life..
                                        She is a GOLDEN DOCTOR..
                                        LOTS OF BLESSINGS AND DEEP GRATITUDE ALWAYS❤️🙏❤️
                                    </p>

                                    <!-- Testimonial Author -->
                                    <div class="review-author">
                                        <h5 class="h5-sm">Hira Agrawal</h5>

                                    </div>

                                </div>
                            </div> <!-- END TESTIMONIAL #3 -->


                            <!-- TESTIMONIAL #4 -->
                            <div class="review-2">
                                <div class="review-txt text-center">

                                    <!-- Author Avatar -->
                                    <div class="testimonial-avatar">
                                        <img src="{{ asset('/resources/assets/images/google-logo-icon.png') }}"
                                            alt="testimonial-avatar">
                                    </div>

                                    <!-- Testimonial Text -->
                                    <p>Dr Renu Pimpale mam have very calm, good & polite mankind nature, gives enough time
                                        to check & treat patient.
                                        She always gives best and perfect diagnosis. I am very satisfied with her treatment.
                                    </p>

                                    <!-- Testimonial Author -->
                                    <div class="review-author">
                                        <h5 class="h5-sm">Madhuri Karjol</h5>

                                    </div>

                                </div>
                            </div> <!-- END TESTIMONIAL #4 -->


                            <!-- TESTIMONIAL #5 -->
                            <div class="review-2">
                                <div class="review-txt text-center">

                                    <!-- Quote -->


                                    <!-- Author Avatar -->
                                    <div class="testimonial-avatar">
                                        <img src="{{ asset('/resources/assets/images/google-logo-icon.png') }}"
                                            alt="testimonial-avatar">
                                    </div>

                                    <!-- Testimonial Text -->
                                    <p>First time experience with Dr.Renu Mam was very good. She is good hernia surgeon in
                                        Hinjewadi.
                                    </p>

                                    <!-- Testimonial Author -->
                                    <div class="review-author">
                                        <h5 class="h5-sm">Sanket Kalambe</h5>

                                    </div>

                                </div>
                            </div> <!-- END TESTIMONIAL #5 -->


                            <!-- TESTIMONIAL #6 -->
                            <div class="review-2">
                                <div class="review-txt text-center">

                                    <!-- Quote -->
                                    <div class="quote"><img src="images/quote.png" alt="quote-img" /></div>

                                    <!-- Author Avatar -->
                                    <div class="testimonial-avatar">
                                        <img src="{{ asset('/resources/assets/images/google-logo-icon.png') }}"
                                            alt="testimonial-avatar">
                                    </div>

                                    <!-- Testimonial Text -->
                                    <p>We went for a boiler condition developed. Mam helped us getting proper treatment and
                                        follow up. Thank you Mam.
                                    </p>

                                    <!-- Testimonial Author -->
                                    <div class="review-author">
                                        <h5 class="h5-sm">
                                            shivshankar shejwal</h5>

                                    </div>

                                </div>
                            </div> <!-- END TESTIMONIAL #6 -->


                            <!-- TESTIMONIAL #7 -->
                            <div class="review-2">
                                <div class="review-txt text-center">

                                    <!-- Quote -->


                                    <!-- Author Avatar -->
                                    <div class="testimonial-avatar">
                                        <img src="{{ asset('/resources/assets/images/google-logo-icon.png') }}"
                                            alt="testimonial-avatar">
                                    </div>

                                    <!-- Testimonial Text -->
                                    <p>Doctor understand and listen to us patiently. Solved my problem till end.
                                    </p>

                                    <!-- Testimonial Author -->
                                    <div class="review-author">
                                        <h5 class="h5-sm">
                                            TADEPALLI SASIDHAR.</h5>

                                    </div>

                                </div>
                            </div> <!-- END TESTIMONIAL #7 -->


                            <!-- TESTIMONIAL #8 -->
                            <div class="review-2">
                                <div class="review-txt text-center">

                                    <!-- Quote -->


                                    <!-- Author Avatar -->
                                    <div class="testimonial-avatar">
                                        <img src="{{ asset('/resources/assets/images/google-logo-icon.png') }}"
                                            alt="testimonial-avatar">
                                    </div>

                                    <!-- Testimonial Text -->
                                    <p>Best Laser piles Surgeon and Laparoscopy Surgeon in and around Hinjewadi !
                                    </p>

                                    <!-- Testimonial Author -->
                                    <div class="review-author">
                                        <h5 class="h5-sm">Pratik Joshi</h5>

                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>


        </div>
    </section>


@stop
