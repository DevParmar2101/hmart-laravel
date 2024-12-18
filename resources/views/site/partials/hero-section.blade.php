@php use Illuminate\Support\Facades\URL; @endphp
    <!-- Hero/Intro Slider Start -->
<div class="section ">
    <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
        <!-- Hero slider Active -->
        <div class="swiper-wrapper">
            <!-- Single slider item -->
            <div class="hero-slide-item slider-height swiper-slide bg-color1"
                 data-bg-image="{{ URL::to('images/hero/bg/hero-bg-1.webp') }}">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                            <div class="hero-slide-content slider-animated-1">
                                <span class="category">Welcome To Hmart</span>
                                <h2 class="title-1">Your Home <br>
                                    Smart Devices & <br>
                                    Best Solution </h2>
                                <a href="#" class="btn btn-primary text-capitalize">Shop All Devices</a>
                            </div>
                        </div>
                        <div
                            class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative align-items-end">
                            <div class="show-case">
                                <div class="hero-slide-image">
                                    <img src="{{ URL::to('images/hero/inner-img/hero-1-1.png') }}" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single slider item -->
            <div class="hero-slide-item slider-height swiper-slide bg-color1"
                 data-bg-image="{{ URL::to('images/hero/bg/hero-bg-1.webp') }}">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                            <div class="hero-slide-content slider-animated-1">
                                <span class="category">Welcome To Hmart</span>
                                <h2 class="title-1">Your Home <br>
                                    Smart Devices & <br>
                                    Best Solution </h2>
                                <a href="#" class="btn btn-primary text-capitalize">Shop All Devices</a>
                            </div>
                        </div>
                        <div
                            class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative align-items-end">
                            <div class="show-case">
                                <div class="hero-slide-image">
                                    <img src="{{ URL::to('images/hero/inner-img/hero-1-2.png') }}" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- Add Arrows -->
        <div class="swiper-buttons">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>
<!-- Hero/Intro Slider End -->
