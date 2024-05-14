@php($title = 'Dr Renu Pimpale- Gallery')
@section('meta_desc') Explore our gallery for a glimpse into Dr. Renu Pimpale's expertise and patient care in Pune. See the difference firsthand. Browse now for confidence and reassurance!@endsection

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

                            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Gallery</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div>
<section id="contacts-1" class="wide-60 contacts-section division">
    <div class="container">


       
        
          <!------main-content------>
    <main class="main-content">
        <div class="gallery-area pt-50 pb-75">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-4">
                        <div class="single-gallery-item">
                            <a data-fancybox="gallery" href="{{ asset('/resources/assets/images/gallery/gallery1.jpg') }}">
                                <img src="{{ asset('/resources/assets/images/gallery/gallery1.jpg') }}" alt=""
                                    class="gal-img">
                            </a>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-gallery-item">
                            <a data-fancybox="gallery" href="{{ asset('/resources/assets/images/gallery/gallery2.jpg') }}">
                                <img src="{{ asset('/resources/assets/images/gallery/gallery2.jpg') }}" alt=""
                                    class="gal-img">
                            </a>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-gallery-item">
                            <a data-fancybox="gallery" href="{{ asset('/resources/assets/images/gallery/gallery3.jpg') }}">
                                <img src="{{ asset('/resources/assets/images/gallery/gallery3.jpg') }}" alt=""
                                    class="gal-img">
                            </a>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-gallery-item">
                            <a data-fancybox="gallery" href="{{ asset('/resources/assets/images/gallery/gallery4.jpg') }}">
                                <img src="{{ asset('/resources/assets/images/gallery/gallery4.jpg') }}" alt=""
                                    class="gal-img">
                            </a>

                        </div>
                    </div>
                    <!-- ------- -->
                    <div class="col-lg-4 col-md-4">
                        <div class="single-gallery-item">
                            <a data-fancybox="gallery" href="{{ asset('/resources/assets/images/gallery/gallery5.jpg') }}">
                                <img src="{{ asset('/resources/assets/images/gallery/gallery5.jpg') }}" alt=""
                                    class="gal-img">
                            </a>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-gallery-item">
                            <a data-fancybox="gallery" href="{{ asset('/resources/assets/images/gallery/gallery6.jpg') }}">
                                <img src="{{ asset('/resources/assets/images/gallery/gallery6.jpg') }}" alt=""
                                    class="gal-img">
                            </a>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-gallery-item">
                            <a data-fancybox="gallery" href="{{ asset('/resources/assets/images/gallery/gallery7.jpg') }}">
                                <img src="{{ asset('/resources/assets/images/gallery/gallery7.jpg') }}" alt=""
                                    class="gal-img">
                            </a>

                        </div>
                    </div>
                    {{-- <div class="col-lg-4 col-md-4">
                        <div class="single-gallery-item">
                            <a data-fancybox="gallery" href="{{ asset('/resources/assets/images/gallery/gallery1.jpg') }}">
                                <img src="{{ asset('/resources/assets/images/gallery/gallery1.jpg') }}" alt=""
                                    class="gal-img">
                            </a>

                        </div>
                    </div> --}}


                </div>
            </div>
        </div>
    </main>
     </div> 
</section> 
  



@stop
