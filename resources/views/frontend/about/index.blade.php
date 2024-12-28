@extends('frontend.layout')

@section('content')
<div class="breadcrumb-area pt-205 breadcrumb-padding pb-210" style="background-image: url({{ asset('themes/ezone/assets/img/bg/breadcrumb.jpg') }})">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <h2>About Us</h2>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</div>

<div class="about-us-section pt-100 pb-100">
    <div class="container">
        <!-- Profile Section -->
        <div class="row mb-5">
            <div class="col-lg-4 col-md-5">
                <div class="profile-image text-center">
                    <img src="{{ asset('themes/ezone/assets/img/profile/vincent-van-gogh.jpg') }}" alt="Vincent van Gogh" class="img-fluid rounded border border-primary shadow-lg" style="transition: transform 0.3s ease;">
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="profile-content">
                    <h1>Gusti Prayoga</h1>
                    <p>
                        Vincent membawa pengalaman spesial dalam dunia seni kontemporer pada perannya di ArtSpace. 
                        Sebagai Direktur Penjualan Pribadi, Amanda berusaha memberikan wawasan dan panduan pribadi kepada 
                        klien dan mitra perdagangan, yang didapat dari hampir satu dekade bekerja di galeri-galeri terkenal di 
                        New York City, termasuk Van Doren Waxter, Koenig & Clinton, dan Alexander Gray Associates, 
                        di antara lainnya. Ia meraih gelar B.A. dalam Sejarah Seni dan Jurnalistik dari New York University.
                    </p>
                </div>
            </div>
        </div>

        <!-- Gallery and Office Section -->
        <div class="row mb-5">
            <div class="col-lg-12">
                <h2 class="section-title text-center">Gallery and Office</h2>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="gallery-info">
                    <div class="map-responsive">
                        <iframe 
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Cultural+Park+West+Sumatra+Province" 
                            frameborder="0" 
                            style="border:2px solid #ddd; border-radius: 8px; width: 100%; height: 250px;" 
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <p class="mt-4">
                    🏛 <strong>Galeri dan taman budaya Sumatera Barat</strong> <br>
                    Jl. P Diponegoro 31, Padang Barat - Kec. Padang Bar., Kota Padang, Sumatera Barat
                </p>
            </div>
        </div>

        <!-- Social Media Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-title text-center">Social Media</h2>
            </div>
            <div class="col-lg-12 text-center">
                <div class="social-links mt-3">
                    <a href="https://www.instagram.com/_draf.art.id" target="_blank" class="btn btn-outline-danger mx-2">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/9/95/Instagram_logo_2022.svg" alt="Instagram Logo" style="width: 15px; height: 15px; margin-right: 3px;">
                         @_draf.art.id
                    </a>
                    <a href="https://twitter.com/gustiprayoga1" target="_blank" class="btn btn-outline-info mx-2">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Logo_of_Twitter.svg/180px-Logo_of_Twitter.svg.png" alt="Instagram Logo" style="width: 15px; height: 15px; margin-right: 3px;">
                         @gustiprayoga1
                    </a>
                    <a href="https://facebook.com/gustiprayoga1" target="_blank" class="btn btn-outline-primary mx-2">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/900px-Facebook_f_logo_%282019%29.svg.png" alt="Instagram Logo" style="width: 15px; height: 15px; margin-right: 3px;">
                         gustiprayoga1
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .profile-image img {
        transition: transform 0.3s ease-in-out;
    }
    .profile-image img:hover {
        transform: scale(1.1);
    }
    
    .btn:hover {
        transition: all 0.3s ease;
        transform: scale(1.1);
    }

    .social-links .btn {
        border-radius: 50px;
        font-weight: 600;
    }

    .map-responsive iframe {
        border-radius: 12px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    }

    .hover-effect:hover {
        background-color: #f0f0f0;
    }
</style>
@endsection
