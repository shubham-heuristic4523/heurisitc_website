@include ('layout.header')

<!-- contact banner start -->
<div class="rts-about-breadcrumb-area" style="background: linear-gradient(rgba(9, 30, 62, .7), rgba(9, 30, 62, .7)), url(assets/images/about/banner.webp)">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="rts-about-breadcrumb-content">
                    <ul>
                        <li><a href="index.html" class="text-white">Home</a></li>
                        <li class="text-white"><i class="fa fa-chevron-right text-white"></i></li>
                        <li class="active text-primary"><a href="about.html">contact</a></li>
                    </ul>
                    <h1 class="title rts-text-anime-style-1 text-white">Get in touch with us</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact banner end -->

<!-- rts service-details-breadcrumb-area-start -->
<div class="rts-service-details-breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-area">
                    <h1 class="title rts-text-anime-style-1">Contact Us</h1>
                    <p class="disc" style="max-width: 384px; margin: auto;  margin-top: 25px;">
                        If you have any questions or require assistance, please complete the form on this page.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts service-details-breadcrumb-area-end -->

<!-- rts contact area start -->
<div class="rts-contact-area rts-section-gapBottom">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="contact-form-content-left-wrapper">
                    <div class="signle-contact-card">
                        <div class="top-area">
                            <div class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <h4 class="title">Our Location</h4>
                        </div>
                        <p class="disc">Your trusted partner, right here</p>
                            
                        <a href="https://maps.app.goo.gl/rHEiuhGoDrL8nV1m9" target="_blank" class="text-primary">
                            Gurukrupa Row Houses, 3, Dattatray Nagar, Panchavati, Nashik, Maharashtra 422003.</a>
                    </div>

                    <div class="signle-contact-card">
                        <div class="top-area">
                            <div class="icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <h4 class="title">Email Us</h4>
                        </div>
                        <p class="disc">
                            Our support team is here to assist you
                        </p>
                        <a href="mailto:info@heuristictechpark.com">info@heuristictechpark.com</a>
                    </div>

                    <div class="signle-contact-card">
                        <div class="top-area">
                            <div class="icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <h4 class="title">Call Us</h4>
                        </div>
                        <p class="disc">
                            Our customer support team is available
                        </p>
                        <a href="tel:+919309079965">+91 93090 79965</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <form method="post" action="https://html.themewant.com/digix/mailer.php" id="contact-form" class="contact-form-main-wrapper-contact form__content">
                    <div class="single-input-wrapper">
                        <div class="single-input">
                            <label for="name">First Name</label>
                            <input name="name" id="name" type="text" placeholder="Your Name" required>
                        </div>
                        <div class="single-input">
                            <label for="lname">Last Name</label>
                            <input id="lname" type="text" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="single-input-wrapper">
                        <div class="single-input">
                            <label for="email">Email</label>
                            <input id="email" type="email" name="email" placeholder="example@gmail.com" required>
                        </div>
                        <div class="single-input">
                            <label for="phone">Phone</label>
                            <div class="input-with-country-selenct">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>IN</option>
                                    <option value="1">USA</option>
                                    <option value="2">UAE</option>
                                </select>
                                <input id="phone" type="tel" name="phone" placeholder="Phone">
                            </div>
                        </div>
                    </div>
                    <div class="single-input">
                        <label for="message">How can we help you?</label>
                        <textarea name="message" id="message" placeholder="Your message..." required></textarea>
                    </div>
                    <div class="single-input with-checkbox">
                        <input type="checkbox" name="checkbox" id="checkbox">
                        <label for="checkbox">You agree to our friendly <a href="#">privacy policy</a></label>
                    </div>
                    <div id="form-messages"></div>
                    <button class="rts-btn btn-primary" type="submit">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- rts contact area end -->

@include ('layout.footer')