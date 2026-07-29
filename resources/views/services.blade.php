@include('layout.header')

<!-- rts service-details-breadcrumb-area-start -->
<div class="rts-about-breadcrumb-area" style="background: linear-gradient(rgba(9, 30, 62, .7), rgba(9, 30, 62, .7)), url(assets/images/about/banner.webp)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rts-about-breadcrumb-content">
                    <ul>
                        <li><a href="{{ route('index') }}" class="text-white">Home</a></li>
                        <li><i class="fa fa-chevron-right"></i></li>
                        <li><a href="{{ route('services') }}" class="active">Services</a></li>
                    </ul>
                    <h1 class="title rts-text-anime-style-1 text-white">Strategic IT Consulting to Drive Innovation and Growth
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts service-details-breadcrumb-area-end -->

<!-- service area start -->
<div class="rts-servcie-area rts-section-gap bg-light-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-between">
                    <div class="title-left-wrapper">
                        <h2 class="title rts-text-anime-style-1">Smart Solutions <br> For Every Business</h2>
                    </div>
                    <div class="right-area">
                        <p class="disc">
                            From custom ERP systems to AI-powered solutions, we deliver technology that drives real business growth.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-5 mt--10">
            <div class="col-lg-12">
                <div class="swiper mySwiper-case-one pb--75-im">
                    <div class="swiper-wrapper">

                        <!-- 1. Website Development -->
                        <div class="swiper-slide">
                            <div class="single-case-style-one title-bottom">
                                <a href="{{ route('webdevelopment') }}" class="thumbnail-case">
                                    <i class="fa-solid fa-globe text-primary"></i>
                                </a>
                                <a href="{{ route('webdevelopment') }}" class="inner-content">
                                    <h5 class="title">Website Design <br> and Development</h5>
                                    <div class="arrow-btn">
                                        <i class="fa-light fa-arrow-up"></i>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- 2. Custom ERP -->
                        <div class="swiper-slide">
                            <div class="single-case-style-one title-bottom">
                                <a href="{{ route('erp') }}" class="thumbnail-case">
                                    <i class="fa-solid fa-building text-primary"></i>
                                </a>
                                <a href="{{ route('erp') }}" class="inner-content">
                                    <h5 class="title">Custom ERP Solutions</h5>
                                    <div class="arrow-btn">
                                        <i class="fa-light fa-arrow-up"></i>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- 3. Mobile App Development -->
                        <div class="swiper-slide">
                            <div class="single-case-style-one title-bottom">
                                <a href="{{ route('mobileappdevelopment') }}" class="thumbnail-case">
                                    <i class="fa-solid fa-mobile-screen-button text-primary"></i>
                                </a>
                                <a href="{{ route('mobileappdevelopment') }}" class="inner-content">
                                    <h5 class="title">Mobile Application <br> Development</h5>
                                    <div class="arrow-btn">
                                        <i class="fa-light fa-arrow-up"></i>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- 4. Desktop Application -->
                        <div class="swiper-slide">
                            <div class="single-case-style-one title-bottom">
                                <a href="{{ route('desktopappdevelopment') }}" class="thumbnail-case">
                                    <i class="fa-solid fa-desktop text-primary"></i>
                                </a>
                                <a href="{{ route('desktopappdevelopment') }}" class="inner-content">
                                    <h5 class="title">Desktop Application <br> Development</h5>
                                    <div class="arrow-btn">
                                        <i class="fa-light fa-arrow-up"></i>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- 5. AI & ML Solutions -->
                        <div class="swiper-slide">
                            <div class="single-case-style-one title-bottom">
                                <a href="{{ route('aiml') }}" class="thumbnail-case">
                                    <i class="fa-solid fa-brain text-primary"></i>
                                </a>
                                <a href="{{ route('aiml') }}" class="inner-content">
                                    <h5 class="title">AI and Machine <br> Learning Solutions</h5>
                                    <div class="arrow-btn">
                                        <i class="fa-light fa-arrow-up"></i>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- 6. Cyber Security -->
                        <div class="swiper-slide">
                            <div class="single-case-style-one title-bottom">
                                <a href="#" class="thumbnail-case">
                                    <i class="fa-solid fa-shield-halved text-primary"></i>
                                </a>
                                <a href="#" class="inner-content">
                                    <h5 class="title">Cyber Security Solutions</h5>
                                    <div class="arrow-btn">
                                        <i class="fa-light fa-arrow-up"></i>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- service area end -->

<!-- client area start -->
<div class="rts-brand-area rts-section-gap bg_light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="brand-area-wrapper-inner">
                    <p class="brand-title-agency">Trusted by Businesses. Proven by Results.</p>
                    <div class="brand-swiper-wrapper-agency">
                        <div class="swiper mySwiper-digital-agency-brand">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="single-image">
                                        <img src="assets/images/brand/advent.png" alt="Advent Engineers">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-image">
                                        <img src="assets/images/brand/aps.png" alt="Arya Public School">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-image">
                                        <img src="assets/images/brand/bharti-clinic.png" alt="bharti Clinic">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-image">
                                        <img src="assets/images/brand/hungreetable.png" alt="hungree table">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-image">
                                        <img src="assets/images/brand/IMM.png" alt="IMM food Innovators">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-image">
                                        <img src="assets/images/brand/medi-connect.png" alt="Medi Connect">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-image">
                                        <img src="assets/images/brand/preona.png" alt="Preona">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-image">
                                        <img src="assets/images/brand/smartdumpster.png" alt="Smart Dumpster">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-image">
                                        <img src="assets/images/brand/yogintra.webp" alt="Yogintra">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- client area end -->

<!-- CTA Section Start-->
<div class="rts-cta-area rts-section-gap bg-white">
    <div class="container">
        <div class="row align-items-center">
            
            <!-- Left Content -->
            <div class="col-lg-7">
                <div class="cta-content">
                    <span class="pre text-primary mb-3">Let's Build Something Great</span>
                    <h2 class="title rts-text-anime-style-1 mb-3">
                        Ready to Transform Your Business?
                    </h2>
                    <p class="disc mb-4">
                        From custom ERP systems and AI solutions to websites and mobile apps — 
                        our expert team is ready to deliver technology that drives real growth.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="{{ route('contact') }}" class="rts-btn btn-primary btn-bold px-5 py-3">
                            Get Free Consultation
                        </a>
                        <!-- <a href="{{ route('products') }}" class="rts-btn btn-outline-primary btn-bold px-5 py-3">
                            View Our Products
                        </a> -->
                    </div>
                </div>
            </div>

            <!-- Right Side Visual -->
            <!-- <div class="col-lg-5 text-center text-lg-end mt-5 mt-lg-0">
                <div class="cta-image-wrapper">
                    <img src="assets/images/cta/cta-image.webp" 
                         alt="Transform Your Business" 
                         class="img-fluid rounded-4 shadow"
                         style="max-width: 380px;">
                </div>
            </div> -->

        </div>
    </div>
</div>
<!-- CTA Section End-->

@include('layout.footer')