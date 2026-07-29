@include('layout.header')

<!-- rts about-breadcrumb-area-start -->
<div class="rts-about-breadcrumb-area" style="background: linear-gradient(rgba(9, 30, 62, .7), rgba(9, 30, 62, .7)), url(assets/images/about/banner.webp)">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="rts-about-breadcrumb-content">
                    <ul>
                        <li><a href="{{ route('index') }}" class="text-white">Home</a></li>
                        <li class="text-white"><i class="fa fa-chevron-right text-white"></i></li>
                        <li class="active text-primary"><a href="{{ route('about') }}">About</a></li>
                    </ul>
                    <h1 class="title rts-text-anime-style-1 text-white">Empowering Businesses Through Technology</h1>
                </div>
            </div>
            <!-- <div class="col-lg-6 pl--50 pl_md--10 pl_sm--10">
                <div class="rts-about-breadcrumb-image">
                    <img src="assets/images/about/banner.webp" alt="about">
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- rts about-breadcrumb-area-end -->

<!-- rts working process area start -->
<div class="rts-working-process-area rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-center-wrapper">
                    <span class="pre">Working Process</span>
                    <h2 class="title rts-text-anime-style-1">Our Approach to Success</h2>
                </div>
            </div>
        </div>
        <div class="row mt--40">
            <div class="col-lg-12">
                <div class="working-process-three-main">
                    <div class="row g-5">
                        <div class="col-lg-3">
                            <div class="working-process-wrapper-three">
                                <h5 class="title">01. Discovery & Assessment</h5>
                                <p class="disc">
                                    We thoroughly understand your business goals, challenges, current systems, and requirements through detailed discussions and analysis.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="working-process-wrapper-three">
                                <h5 class="title">02. Strategy & Planning</h5>
                                <p class="disc">
                                    We create a customized roadmap, technical architecture, and project timeline tailored to your specific needs and budget.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="working-process-wrapper-three">
                                <h5 class="title">03. Development & Implementation</h5>
                                <p class="disc">
                                    Our expert team develops high-quality solutions using agile methodology with regular updates and your valuable feedback.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="working-process-wrapper-three">
                                <h5 class="title">04. Deployment & Support</h5>
                                <p class="disc">
                                    We ensure smooth go-live, provide training to your team, and offer ongoing maintenance and dedicated support.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts working process area end -->

<!-- about section start -->
<div class="rts-about-area rts-section-gap bg_dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-center-wrapper">
                    <span class="pre">About Us</span>
                    <h2 class="title rts-text-anime-style-1">Transforming Businesses Through Innovative Software Solutions
                    </h2>
                </div>
            </div>
        </div>
        <div class="row mt--40">
            <div class="col-lg-12">
                <div class="about-three-wrapper">
                    <div class="row">
                        <div class="col-lg-3 pr--70 pr_sm--10">
                            <div class="about-nav-area">
                                <ul class="nav nav-tabs" id="aboutTabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="mission-tab" data-bs-toggle="tab"
                                            data-bs-target="#mission" type="button" role="tab"
                                            aria-controls="mission" aria-selected="true">
                                            <span>About Our Company</span>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="vision-tab" data-bs-toggle="tab"
                                            data-bs-target="#vision" type="button" role="tab" aria-controls="vision"
                                            aria-selected="false">
                                            <span>Who We Are</span>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="values-tab" data-bs-toggle="tab"
                                            data-bs-target="#values" type="button" role="tab" aria-controls="values"
                                            aria-selected="false">
                                            <span>Our Mission and Vision</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="nav-content-about-three-area">
                                <div class="tab-content" id="aboutTabsContent">
                                    <div class="tab-pane fade show active" id="mission" role="tabpanel"
                                        aria-labelledby="mission-tab">
                                        <div class="about-content-three">
                                            <!-- <div class="image-top-area-about">
                                                    <div class="thumbnail-1">
                                                        <img src="assets/images/about/03.html" alt="about">
                                                    </div>
                                                    <div class="thumbnail-2">
                                                        <img src="assets/images/about/04.html" alt="about">
                                                    </div>
                                                </div> -->
                                            <div class="content-area-about">
                                                <p class="disc">
                                                    Since our inception, Heuristic Technopark has been at the forefront of digital innovation, crafting sophisticated software solutions that drive business growth and operational excellence. Our journey is marked by continuous innovation, unwavering commitment to quality, and a deep understanding of evolving technology landscapes.
                                                </p>
                                            </div>
                                            <div class="progress-area-about-wrapper">
                                                <div class="progress-wrapper-main">
                                                    <div class="single-progress-area-h" data-sal-delay="150"
                                                        data-sal="slide-up" data-sal-duration="800">
                                                        <div class="progress-top">
                                                            <p class="name">
                                                                Milestones We've Achieved
                                                            </p>
                                                            <span class="parcent">
                                                                65%
                                                            </span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft bg--primary"
                                                                role="progressbar" style="width: 65%"
                                                                aria-valuenow="25" aria-valuemin="0"
                                                                aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-progress-area-h" data-sal-delay="150"
                                                        data-sal="slide-up" data-sal-duration="800">
                                                        <div class="progress-top">
                                                            <p class="name">
                                                                Our Continuous Growth
                                                            </p>
                                                            <span class="parcent">
                                                                85%
                                                            </span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft bg--primary"
                                                                role="progressbar" style="width: 85%"
                                                                aria-valuenow="25" aria-valuemin="0"
                                                                aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="round-progress">
                                                    <img src="assets/images/about/progress.html" alt="about">
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="vision" role="tabpanel"
                                        aria-labelledby="vision-tab">
                                        <div class="about-content-three two">
                                            <div class="image-top-area-about">
                                                <!-- <div class="thumbnail">
                                                    <img src="assets/images/about/ht.png" alt="about" class="img-fluid w-25">
                                                </div> -->
                                            </div>
                                            <div class="content-area-about">
                                                <p class="disc">
                                                    Founded with a vision to bridge the gap between technology and business success, Heuristic Technopark has emerged as a trusted IT solutions partner.
                                                    We specialize in delivering end-to-end digital transformation services — from custom website and mobile application development to powerful ERP systems,
                                                    AI & Machine Learning solutions, and robust desktop applications.
                                                    Our focus is not just on building software, but on crafting intelligent, scalable, and future-ready solutions that drive real growth, efficiency,
                                                    and competitive advantage for businesses across industries.
                                                </p>
                                            </div>
                                            <!-- <div class="counter-area">
                                                <ul>
                                                    <li>
                                                        <div class="icon">
                                                            <img src="assets/images/about/icons/12.html" alt="">
                                                        </div>
                                                        <div class="content">
                                                            <h5>5+</h5>
                                                            <p>Year IT Experience</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <img src="assets/images/about/icons/13.html" alt="">
                                                        </div>
                                                        <div class="content">
                                                            <h5>2K</h5>
                                                            <p>Wonderful Client</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <img src="assets/images/about/icons/14.html" alt="">
                                                        </div>
                                                        <div class="content">
                                                            <h5>2k</h5>
                                                            <p>Project Done</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="values" role="tabpanel"
                                        aria-labelledby="values-tab">
                                        <div class="about-content-three three">
                                            <!-- <div class="image-top-area-about">
                                                <div class="thumbnail">
                                                    <img src="assets/images/about/ht.png" alt="Heuristic Technopark">
                                                </div>
                                            </div> -->
                                            <div class="content-area-about">
                                                <p class="disc">
                                                    Our mission is to provide best IT services that enhance efficiency and drive innovation. We envision a future where technology empowers businesses to reach their full potential, and we’re here to help you get there.
                                                </p>
                                                <p class="disc">At the heart of our company lies a dedication to creating future-ready IT solutions. We stay ahead of technological trends to ensure your business is always equipped with the latest tools and strategies for success.</p>
                                                <!-- <div class="signature-area-wrapper">
                                                    <img src="assets/images/others/sign-03.html" alt="signature">
                                                </div>
                                                <div class="clients-area-clients">
                                                    <img src="assets/images/about/avatar.png" alt="about">
                                                    <p class="disc">
                                                        2.5k Client Connect with <br>
                                                        our Company
                                                    </p> -->
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
    </div>
</div>
<!-- about section end -->

<!-- rts mission areas start -->
<!-- <div class="rts-mission-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rts-mission-content-about-page">
                        <p class="disc">
                            Digix, we specialize in delivering innovative IT solutions that drive business success.
                            Founded with a vision to empower organizations through technology, we bring together a team
                            of experts dedicated to solving today’s challenges and anticipating tomorrow’s needs. From
                            system integration and cloud solutions to cybersecurity and data management, we’re committed
                            to helping businesses harness the power of technology.
                        </p>
                        <div class="large-image-mission">
                            <img src="assets/images/about/about.webp" alt="about">
                        </div>

                        <div class="arrow-text-animation">
                            <div class="circle-animation">
                                <a class="" href="#">
                                    <svg class="uni-circle-text-path uk-text-secondary uni-animation-spin"
                                        viewBox="0 0 100 100" width="154" height="154">
                                        <defs>
                                            <path id="circle"
                                                d="M 50, 50 m -37, 0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0">
                                            </path>
                                        </defs>
                                        <text>
                                            <textPath xlink:href="#circle">Heuristic Technopark Pvt Ltd
                                            </textPath>
                                        </text>
                                    </svg>
                                    <i class="fa-sharp fa-regular fa-arrow-down"></i>
                                </a>
                            </div>
                            <p class="disc1">
                                About Us
                            </p>
                        </div>

                        <div class="funfacts-area-counter-up-mission">
                            <div class="single-funfacts-area-counter-up-mission">
                                <div class="icon">
                                    <img src="assets/images/about/icons/06.html" alt="icons">
                                </div>
                                <div class="content">
                                    <h2 class="counter title"><span class="odometer" data-count="25">00</span>+
                                    </h2>
                                    <p class="disc2">
                                        Year IT Experience
                                    </p>
                                </div>
                            </div>
                            <div class="single-funfacts-area-counter-up-mission">
                                <div class="icon">
                                    <img src="assets/images/about/icons/07.html" alt="icons">
                                </div>
                                <div class="content">
                                    <h2 class="counter title"><span class="odometer" data-count="23">00</span>K
                                    </h2>
                                    <p class="disc2">
                                        Wonderful Client
                                    </p>
                                </div>
                            </div>
                            <div class="single-funfacts-area-counter-up-mission">
                                <div class="icon">
                                    <img src="assets/images/about/icons/08.html" alt="icons">
                                </div>
                                <div class="content">
                                    <h2 class="counter title"><span class="odometer" data-count="2">00</span>M
                                    </h2>
                                    <p class="disc2">
                                        Project Done
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- rts mission areas end -->

<!-- rts company values area start -->
<!-- <div class="rts-company-values-area rts-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-center-wrapper">
                    <span class="pre">Company Values</span>
                    <h2 class="title rts-text-anime-style-1">Our Values in Action</h2>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--10 justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="single-company-value-area">
                    <div class="icon">
                        <img src="assets/images/about/icons/01.html" alt="icons">
                    </div>
                    <div class="content">
                        <h3 class="title">
                            Innovation
                        </h3>
                        <p class="disc">
                            Constantly exploring technologies to provide our clients with leading-edge.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="single-company-value-area">
                    <div class="icon">
                        <img src="assets/images/about/icons/02.html" alt="icons">
                    </div>
                    <div class="content">
                        <h3 class="title">
                            Client-Centricity
                        </h3>
                        <p class="disc">
                            We prioritize our clients’ unique needs and challenges, working growth.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="single-company-value-area">
                    <div class="icon">
                        <img src="assets/images/about/icons/03.html" alt="icons">
                    </div>
                    <div class="content">
                        <h3 class="title">
                            Integrity
                        </h3>
                        <p class="disc">
                            Our approach is transparent, reliable, and ethical, ensuring trust solution.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="single-company-value-area">
                    <div class="icon">
                        <img src="assets/images/about/icons/04.html" alt="icons">
                    </div>
                    <div class="content">
                        <h3 class="title">
                            Excellence
                        </h3>
                        <p class="disc">
                            We are committed to maintaining high in quality and efficiency impactful.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="single-company-value-area">
                    <div class="icon">
                        <img src="assets/images/about/icons/05.html" alt="icons">
                    </div>
                    <div class="content">
                        <h3 class="title">
                            Innovative Solutions
                        </h3>
                        <p class="disc">
                            We stay ahead of industry trends, providing you cutting-edge solutions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- rts company values area end -->

<!-- rts team members area start -->
<!-- <div class="rts-team-members rts-section-gap bg-light-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-between">
                    <div class="title-left-wrapper">
                        <span class="pre">Team Member</span>
                        <h2 class="title rts-text-anime-style-1">The People Behind <br> Our Success</h2>
                    </div>
                    <div class="right-area">
                        <p class="disc">
                            our success is driven by a dedicated team of IT professionals who bring their expertise,
                            creativity, and passion to every project.
                        </p>
                        <a href="about.html" class="btn-line"><span>We are hiring</span> <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--20">
            <div class="col-lg-12">
                <div class="team-swiper-area">
                    <div class="swiper mySwiper-team-one">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="single-team-style-one">
                                    <div class="thumbnail">
                                        <img src="assets/images/team/01.webp" alt="team">
                                    </div>
                                    <div class="inner-content">
                                        <h5 class="title">Daniel Brown</h5>
                                        <span class="designation">Chief Executive Officer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-team-style-one">
                                    <div class="thumbnail">
                                        <img src="assets/images/team/02.webp" alt="team">
                                    </div>
                                    <div class="inner-content">
                                        <h5 class="title">Christopher Henry</h5>
                                        <span class="designation">Chief Executive Officer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-team-style-one">
                                    <div class="thumbnail">
                                        <img src="assets/images/team/03.webp" alt="team">
                                    </div>
                                    <div class="inner-content">
                                        <h5 class="title">Marketing Director</h5>
                                        <span class="designation">Senior Developer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-team-style-one">
                                    <div class="thumbnail">
                                        <img src="assets/images/team/04.webp" alt="team">
                                    </div>
                                    <div class="inner-content">
                                        <h5 class="title">John Smith</h5>
                                        <span class="designation">Senior Developer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-team-style-one">
                                    <div class="thumbnail">
                                        <img src="assets/images/team/02.webp" alt="team">
                                    </div>
                                    <div class="inner-content">
                                        <h5 class="title">Christopher Henry</h5>
                                        <span class="designation">Chief Executive Officer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-team-style-one">
                                    <div class="thumbnail">
                                        <img src="assets/images/team/03.webp" alt="team">
                                    </div>
                                    <div class="inner-content">
                                        <h5 class="title">Marketing Director</h5>
                                        <span class="designation">IT Specialist</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-team-style-one">
                                    <div class="thumbnail">
                                        <img src="assets/images/team/04.webp" alt="team">
                                    </div>
                                    <div class="inner-content">
                                        <h5 class="title">John Smith</h5>
                                        <span class="designation">Senior Developer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="swiper-button-next">
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class="fa-solid fa-chevron-left"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- rts team members area end -->

<!-- rts contact area start -->
<div class="rts-contact-area">
    <div class="container p-5">
        <div class="row g-5 my-5">
            <div class="col-lg-6">
                <div class="pb-3 mb-3">
                    <h5 class="text-primary text-uppercase">Request A Quote</h5>
                    <h3 class="mb-0">Need A Free Quote? Let's Discuss Your Project</h3>
                </div>
                <div class="row gx-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">
                        <h6 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Prompt Responses</h6>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: zoomIn;">
                        <h6 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>Dedicated Support</h6>
                    </div>
                </div>
                <p class="mb-4">We understand that starting a new project can be daunting. That's why we're here to help. Whether you need a new website, mobile app, desktop solution, or a comprehensive digital marketing strategy, our team of experts is ready to guide you. Tell us about your goals, and we'll provide a personalized quote to get you started.</p>
                <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h6 class="mb-2">Ready to Talk?</h6>
                        <h6 class="text-primary mb-0">
                            +91 9309079965</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <form action="#" class="contact-form-two">
                    <div class="single-input-wrapper">
                        <div class="single-input">
                            <input type="text" placeholder="Your Name">
                        </div>
                        <div class="single-input">
                            <input type="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="single-input-wrapper">
                        <div class="single-input">
                            <input type="tel" placeholder="Phone Number">
                        </div>
                        <div class="single-input">
                            <input type="email" placeholder="Your Name">
                        </div>
                    </div>
                    <textarea name="message" placeholder="Send a request" required></textarea>
                    <div class="single-input pl--20 mb--10">
                        <input id="checkbox" type="checkbox">
                        <label for="checkbox">Agree term and condition</label>
                    </div>
                    <button class="rts-btn btn-primary">Send a request</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- rts contact area end -->

@include('layout.footer')