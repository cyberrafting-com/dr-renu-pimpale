@php($title = 'About Dr. Renu Pimpale | Female Laproscopic Surgeon in Pune')
@section('meta_desc')Dr. Renu Pimpale Deshmukh, an experienced female general and laparoscopic surgeon based in Pune, Maharashtra, a trusted healthcare professional in the field. @endsection

@extends('layouts.default')
@section('content')
<div id="breadcrumb" class="division">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class=" breadcrumb-holder">

                    <!-- Breadcrumb Nav -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">About Us</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div>
 <!-- END BREADCRUMB -->

    <!-- CONTACTS-1
           ============================================= -->
    <section id="info-3" class="">
        <div class="container-fluid">
            <div class="row d-flex align-items-center">


                <!-- INFO IMAGE -->
                <div class="col-md-6 col-lg-6 col-xl-5 col-xxl-5">
                    <div class="info-3-img ">
                        <img class="abt-img11"
                            src="{{ asset('/resources/assets/images/dr-renu-pimpale-aboupage-pic2.JPG') }}"
                            alt="dr-renu-pimpale-about-home-pic" style=""/>
                    </div>
                </div>


                <!-- INFO TEXT -->
                <div class="col-lg-6 col-xl-7 col-xxl-7 info-section division">
                    <div class="txt-block pc-30 white-color wow fadeInUp" data-wow-delay="0.4s">

                        <!-- Title -->
                        <h3 class="h3-md">Dr. Renu Pimpale</h3>
                        <p class="abt-degree"><span><i class="fa fa-minus"></i></span> MBBS, Ms - General Surgery</p>
                        <p class="abt-degree"><span><i class="fa fa-minus"></i></span> FMAS (MUHS) (Fellowship in Minimal Access Surgery) </p>
                        <p class="abt-degree"><span><i class="fa fa-minus"></i></span> FIAGES (Fellowship of Indian Association Gastrointestinal Endo Surgeons)</p>
                          <p class="abt-degree"><span><i class="fa fa-minus"></i></span> Consultant General & Laparoscopic Surgeon</p>
                        <p class="abt-degree"><span><i class="fa fa-minus"></i></span> Proctologist & Colorectal Surgeon</p>

                        <!-- Text -->
                        <p class="abt-para">Dr. Renu Pimpale is a highly skilled and accomplished surgeon specializing in general surgery and minimal access procedures. With a solid educational background, including an MS in General Surgery from NKP Salve Medical College and Lata Mangeshkar Hospital, Nagpur, and additional fellowships in Minimal Access Surgery and Gastrointestinal Endo Surgeons, Dr. Pimpale brings a wealth of knowledge and expertise to her practice. Over the years, she has honed her skills through extensive hands-on experience, having worked in various capacities in esteemed institutions such as Galaxy CARE Hospital in Pune and Symbiosis Medical College for Women in Pune.
                        </p>
                         <p class="abt-para-1">Throughout her career, Dr. Pimpale has demonstrated a commitment to excellence in patient care and surgical innovation. She has independently performed a wide range of laparoscopic and open surgical procedures, including cholecystectomy, appendicectomy, hernia repair, and thyroidectomy, among others. Her dedication to advancing surgical techniques is evident through her participation in workshops, presentations at national conferences, and ongoing pursuit of further skills development in areas such as abdominal wall reconstruction and endoscopic procedures. As an independent consultant at Ruby Hall Clinic Hinjawadi, Dr. Pimpale continues to provide comprehensive care to her patients while striving for excellence in surgical practice and patient outcomes.</p>
                       


                       

                    </div>
                    
                    
                </div>
                
                
                <!-- END CONTENT TEXT -->


            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </section>
    
    <!-- END CONTACTS-1 -->

    <section id="pricing-1" class=" pricing-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1 section-title">

                    <!-- Title 	-->
                    <h3 class="h3-md steelblue-color qualification-txt">Qualification</h3>
                    <!-- Text -->

                </div>
            </div>


            <!-- PRICING TABLES -->
            <div class="row pricing-row">
                <!-- PRICING TABLE #1 -->
                <div class="col-lg-4">
                    <div class="pricing-table icon-xl">

                        <!-- Icon -->
                        <span class=" blue-color"><i class="fa-solid fa-building-columns"></i></span>

                        <!-- Title -->
                        {{-- <h5 class="h5-lg">FMAS</h5>	 --}}

                        <!-- Plan Price  -->
                        <div class="pricing-plan">

                            <span class="price steelblue-color">FMAS</span>

                        </div>

                        <!-- Pricing Plan Features  -->
                        <ul class="features">
                            <li>Galaxy Care Laparoscopy Institute, Erandwane, Pune.
                            </li>

                        </ul>

                    </div>
                </div>


                <!-- PRICING TABLE #2 -->
                <div class="col-lg-4">
                    <div class="pricing-table icon-xl">

                        <!-- Icon -->
                        <span class=" blue-color"><i class="fa-solid fa-building-columns"></i></span>

                        <!-- Title -->
                        {{-- <h5 class="h5-lg">Ms General Surgery
                        </h5>			 --}}

                        <!-- Plan Price  -->
                        <div class="pricing-plan">

                            <span class="price steelblue-color">Ms General Surgery
                            </span>

                        </div>

                        <!-- Pricing Plan Features  -->
                        <ul class="features">
                            <li>NKP Salve Medical College and Lata Mangeshkar Hospital,
                                Hingna, Nagpur, Maharashtra.
                            </li>

                        </ul>



                    </div>
                </div>


                <!-- PRICING TABLE #3 -->
                <div class="col-lg-4">
                    <div class="pricing-table icon-xl">

                        <!-- Icon -->
                        <span class=" blue-color"><i class="fa-solid fa-building-columns"></i></span>


                        <!-- Plan Price  -->
                        <div class="pricing-plan">

                            <span class="price steelblue-color">MBBS</span>

                        </div>

                        <!-- Pricing Plan Features  -->
                        <ul class="features">
                            <li>MIMER Medical College & Dr. Bhausaheb Sardesai General Hospital
                                Pune, Maharashtra</li>

                        </ul>



                    </div>
                </div>


            </div>


        </div>
    </section>

    <section class="faq-sec">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 section-title">

                <!-- Title 	-->
                <h3 class="h3-md steelblue-color qualification-txt">Professional
                    Accomplishments
                </h3>
                <!-- Text -->

            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="accordion-wrapper">
                        <div class="accordion">
                            <input type="radio" name="radio-a" id="check1" checked>
                            <label class="accordion-label" for="check1">Thesis</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p><strong>Cholelithiasis: </strong>Causative Factors, Clinical Manifestations and Its Management
                                        </p>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="accordion">
                            <input type="radio" name="radio-a" id="check2">
                            <label class="accordion-label" for="check2">Publications</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>1. Renu Pimpale1
                                            , Pradeep Katakwar2
                                            , Murtaza Akhtar3 “Cholelithiasis Causative
                                            Factors, Clinical Manifestations and Management”. International Surgery Journal
                                            Pimpale R et al. Int Surg J. 2019 Jun; 6(6):2133-2138</p>
                                        <p>2. Dattatraya Gopalghare1
                                            , Renu Pimpale2
                                            , Pranali Ghuge3
                                            , Patit Paban Panigrahi4
                                            .
                                            “Role of Body Mass Index and Antenatal Care in Mode of Delivery, Birth Weight
                                            and
                                            Haemoglobin at Term”. Journal of Evolution of Medical and Dental Sciences 2014;
                                            Vol. 3, Issue 46, September 22; Page: 11170-11176,
                                            DOI: 10.14260/jemds/2014/3457</p>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="accordion">
                            <input type="radio" name="radio-a" id="check3">
                            <label class="accordion-label" for="check3">Poster/ Paper/ Case presentations
                            </label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p><strong>Poster presentation–</strong> An isolated hydatidosis of Kidney: A case
                                            report. MASICON
                                            2018, Mumbai 25th
                                            -28th January 2018. </p>
                                        <p><strong>Paper presentation-</strong> Cholelithiasis: Causative factors, clinical
                                            manifestations and
                                            management”. ASICON 2018, Chennai, 26th
                                            -30th December 2018. (3rd Prize)</p>
                                        <p><strong>Case presentation-</strong> – Scope course- February 2019 in RML
                                            Hospital, New Delhi, 7th
                                            -
                                            10th February, 2019. (3rd Prize)</p>
                                        <p>MUHS Research studentship (2011-12)</p>

                                    </div>

                                </div>
                            </div>
                           
                          
                        </div>
                    </div>
                </div>
            </div>


    </section>

    <section id="pricing-2" class="pb-60 pricing-section division">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 section-title">

                <!-- Title 	-->
                <h3 class="h3-md steelblue-color qualification-txt">Workshop attended

                </h3>
                <!-- Text -->

            </div>
        </div>
        <div class="container">	
            <div class="row pricing-row">


                <!-- PRICING TABLE #1 -->
                <div class="col-lg-6">


                    <div class="pricing-table">								
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                      {{-- <th scope="col">#</th>
                                      <th scope="col">Service</th>
                                      <th scope="col">Price</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                      <th scope="row">1</th>
                                     <td>AWR DEEP IMPACT 2023 in Hotel Vivanta, Delhi</td>
                                      {{-- <td>From <span>$325.00</span></td> --}}
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                     <td>Workshop and CME of International college of Surgeons – West Zone conference
                                        December 16-17 2017 at CARE hospital and hotel centre point Nagpur.</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Workshop at MASICON on 26th January 2018</td>
                                </tr>
                                <tr>
                                    <th scope="row" style="border-bottom:none">4</th>
                                    <td style="border-bottom:none">Suture Practicum at Johnson and Johnson institute, Mumbai. 19th
                                        -20th April, 2018.</td>
                                </tr>
                              
                            </tbody>
                        </table>
                    </div>
                </div>	<!-- END PRICING TABLE #1 -->


                <!-- PRICING TABLE #2 -->
                <div class="col-lg-6">

                

                    <div class="pricing-table mb-40">	
                        <table class="table table-hover">
                           
                            <tbody>
                              
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Hands on Workshop on basic surgical skills on 17th august 2018 at B.J. Medical
                                        College, Ahmedabad.</td>
                                </tr>
                                <tr class="last-tr">
                                    <th scope="row">6</th>
                                    <td>ASI regional refresher course 17th
                                        - 19th August 2018 at B.J medical college,
                                        Ahmedabad.</td>
                                </tr>
                                <tr class="last-tr">
                                    <th scope="row">7</th>
                                    <td>Surgery updates 2018 at Maulana Azad medical college, New Delhi 24th
                                        -29th
                                        September 2018. </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>	<!-- END PRICING TABLE #2 -->


            </div>	<!-- End row -->




        </div>    <!-- End container -->		
    </section>	




@stop
