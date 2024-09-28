<x-app-layout>
    <!-- Header Start -->
    <div class="container-fluid header bg-light p-0 mb-5">
    <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
        <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
            <h1 class="display-4 text-black mb-5">La Santé, Pilier Essentiel pour un Avenir Rayonnant à Kinshasa</h1>
            <p class="text-black mb-4">Dans une ville dynamique comme Kinshasa, prendre soin de votre santé est primordial pour vous permettre de vivre pleinement. À Onyx Medical Center, nous vous offrons des soins de qualité pour garantir un bien-être durable, à proximité de chez vous.</p>
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="owl-carousel header-carousel">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                    <div class="owl-carousel-text">
                        <h1 class="display-1 text-white mb-0">Cardiologie</h1>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                    <div class="owl-carousel-text">
                        <h1 class="display-1 text-white mb-0">Neurologie</h1>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/carousel-3.jpg" alt="">
                    <div class="owl-carousel-text">
                        <h1 class="display-1 text-white mb-0">Pneumologie</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Header End -->


    <!-- About Start -->
    @include('partials.about')
    <!-- About End -->


    <!-- Service Start -->
    @include('partials.services')
    <!-- Service End -->


    <!-- Feature Start -->
    @include('partials.features')
    <!-- Feature End -->


    <!-- Team Start -->
    @include('partials.team')
    <!-- Team End -->


    <!-- Appointment Start -->
    @include('partials.appointment')
    <!-- Appointment End -->


    <!-- Testimonial Start -->
    @include('partials.testimonial')
    <!-- Testimonial End -->
</x-app-layout>
