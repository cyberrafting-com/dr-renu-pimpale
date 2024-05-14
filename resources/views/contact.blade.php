@php($title = 'Contact: Dr. Renu Pimpale General & Laproscopic Surgeon Pune')
@section('meta_desc')Have questions or ready to connect? Contact Dr. Renu Pimpale's office in Pune today! We're here to assist you on your path to better health and well-being. Reach out now! @endsection

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

                            <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Contact us</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

<!-- CONTACTS-1
       ============================================= -->
<section id="contacts-1" class="wide-60 contacts-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1 section-title">

                <!-- Title 	-->
                <h3 class="h3-md steelblue-color">Get In Touch</h3>

                <!-- Text -->
                <p>Have a question? Want to book an appointment? Give us a call
                    or send an email.
                </p>

            </div>
        </div>


        <div class="row">


            <!-- CONTACTS INFO -->
            <div class="col-md-4 col-lg-4 col-sm-12">

                <!-- General Information -->
                <div class="contact-box mb-30">
                    <h5 class="h5-sm steelblue-color">Address 1</h5>
                    <p style="color:  #7e418f; font-size:20px"><strong>Dr Aniruddha's Advance Ortho & Polyclinic</strong></p>
                    <p>Hinjewadi Main Road, Office No 103,</p>
                    <p>Viva Icon, Wing A, Opposite to Xion Mall,</p>
                    <p>Hinjewadi, Pimpri Chinchwad, Pune 411057</p>

                </div>



            </div>
            <div class="col-md-4 col-lg-4 col-sm-12">
                <div class="contact-box mb-30">
                    <h5 class="h5-sm steelblue-color">Address 2</h5>
                    <p style="color:  #7e418f; font-size:20px;"><strong>Vitalife clinic</strong></p>
                    <p>Datta Mandir Rd, near Dange Chowk Road,</p>
                    <p>Shankar Kalat Nagar, Wakad,</p>
                    <p>Pimpri-Chinchwad, Maharashtra 411057</p>

                </div>
            </div>
            <!-- END CONTACTS INFO -->
            <div class="col-md-4 col-lg-4 col-sm-12">

                <!-- General Information -->


                <div class="contact-box mb-30">
                    <h5 class="h5-sm steelblue-color">Contact us</h5>
<p>Phone: </p>
                    <p><a href="tel:+919850085979" class="blue-color">+91 98500 85079</a></p>
                    <p>Email: </p>
                    <p><a href="mailto:renuapd@gmail.com" class="blue-color">renuapd@gmail.com</a></p>
                    <!--<h5 class="h5-sm steelblue-color mt-30">Working Hours</h5>-->
                    <!--<p>Mon – Sat : - 10:00 AM - 9:00 PM</p>-->
                    <!--<p>Sun : - Closed</p>-->

                </div>





            </div>

        </div>


        <!-- CONTACT FORM -->
        <div class="col-md-12 col-lg-12">
            {{-- <div class="form-holder mb-40">
                        <form name="contactForm" class="row contact-form">

                            <!-- Contact Form Input -->
                            <div id="input-name" class="col-md-12 col-lg-6">
                                <input type="text" name="name" class="form-control name"
                                    placeholder="Enter Your Name*" required>
                            </div>

                            <div id="input-email" class="col-md-12 col-lg-6">
                                <input type="text" name="email" class="form-control email"
                                    placeholder="Enter Your Email*" required>
                            </div>

                            <div id="input-phone" class="col-md-12 col-lg-6">
                                <input type="tel" name="phone" class="form-control phone"
                                    placeholder="Enter Your Phone Number*" required>
                            </div>

                          
                            <div id="input-patient" class="col-md-12 col-lg-6 input-patient">
                                <select id="inlineFormCustomSelect3" name="patient" class="custom-select patient" required>
                                    <option value="">Have You Visited Us Before?*</option>
                                    <option>New Patient</option>
                                    <option>Returning Patient</option>
                                    <option>Other</option>
                                </select>
                            </div>

                            <div id="input-subject" class="col-lg-12">
                                <input type="text" name="subject" class="form-control subject" placeholder="Subject*"
                                    required>
                            </div>

                            <div id="input-message" class="col-lg-12 input-message">
                                <textarea class="form-control message" name="message" rows="6" placeholder="Your Message ..." required></textarea>
                            </div>

                          
                            <div class="col-lg-12 mt-15 form-btn">
                                <button type="submit" class="btn btn-blue blue-hover submit">Send Your Message</button>
                            </div>

                        
                            <div class="col-lg-12 contact-form-msg text-center">
                                <div class="sending-msg"><span class="loading"></span></div>
                            </div>

                        </form>

                    </div> --}}
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3781.624507208067!2d73.7431268!3d18.590959899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bb9d772586df%3A0xb609f8b9d21a508f!2sDr%20Renu%20Pimpale!5e0!3m2!1sen!2sin!4v1714735436287!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>


    </div>




    </div> <!-- End container -->
</section> <!-- END CONTACTS-1 -->




@stop