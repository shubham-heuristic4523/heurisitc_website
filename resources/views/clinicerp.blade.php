@include('layout.header')

<!-- Breadcrumb -->
<div class="rts-about-breadcrumb-area mb-5" style="background: linear-gradient(rgba(9, 30, 62, .7), rgba(9, 30, 62, .7)), url(assets/images/about/banner.webp)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rts-about-breadcrumb-content">
                    <ul>
                        <li><a href="{{ route('index') }}" class="text-white">Home</a></li>
                        <li><i class="fa fa-chevron-right"></i></li>
                        <li><a href="{{ route('clinicerp') }}" class="active">Clinic ERP</a></li>
                    </ul>
                    <h1 class="title rts-text-anime-style-1 text-white">Smart Clinic ERP<br>Complete Clinic Management System</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Service Details -->
<div class="rts-work-process-area rts-section-gapBottom pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pr--70 pr_md--10 pr_sm--10">
                <div class="work-process-content">
                    <div class="title-left-wrapper">
                        <span class="pre">Clinic ERP</span>
                    </div>
                    <div class="thumbnail-plunning-service-detials mt--60">
                        <img src="assets/images/service/clinic-erp.jpg" alt="Clinic ERP" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt_md--50 mt_sm--50">
                <h2 class="title rts-text-anime-style-1 mb-5">Clinic ERP – All-in-One Management System</h2>
                <div class="working-process-list-wrapper">

                    <p class="mb-4">
                        Our Clinic ERP is a comprehensive, cloud-based management solution thoughtfully designed for modern multi-specialty clinics, polyclinics, and diagnostic centers. It brings all essential operations under one unified platform, helping healthcare providers deliver seamless patient care while significantly reducing administrative workload.
                    </p>

                    <p class="mb-4">
                        With an intuitive interface and real-time data access, clinic staff and doctors can easily manage day-to-day activities without complexity. From handling patient appointments and maintaining detailed medical histories to managing billing, pharmacy, and laboratory processes, the system ensures smooth coordination across all departments. This results in faster service delivery, enhanced patient satisfaction, and better decision-making through actionable insights and reports.
                    </p>

                    <ul>
                        <li>
                            <b>Patient-Centric Design:</b> Simplifies patient registration, maintains detailed medical histories, and enables efficient follow-ups to ensure personalized and continuous care.
                        </li>
                        <li>
                            <b>Complete Automation:</b> Automates appointment scheduling, billing, prescriptions, and report generation, reducing manual effort and improving accuracy.
                        </li>
                        <li>
                            <b>Secure & Compliant:</b> Built with advanced security protocols, role-based access control, and compliance readiness for standards like HIPAA and GDPR to protect sensitive data.
                        </li>
                        <li>
                            <b>Multi-Location Ready:</b> Easily manage single or multiple clinic locations from a centralized dashboard with real-time visibility and control.
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Features -->
<div id="features" class="rts-feature-area-three rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-center-wrapper">
                    <span class="pre">Powerful Features</span>
                    <h2 class="title mb--0 rts-text-anime-style-1">Core Features of Our Clinic ERP</h2>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--30">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="single-feature-area-four">
                    <div class="icon"><i class="fa-solid fa-calendar-check"></i></div>
                    <div class="content">
                        <h3 class="title">Smart Appointment Scheduling</h3>
                        <p class="disc">Online booking, doctor availability, SMS/email reminders & queue management.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="single-feature-area-four">
                    <div class="icon"><i class="fa-solid fa-file-medical"></i></div>
                    <div class="content">
                        <h3 class="title">Electronic Medical Records (EMR)</h3>
                        <p class="disc">Digital patient history, prescriptions, lab reports & secure cloud storage.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="single-feature-area-four">
                    <div class="icon"><i class="fa-solid fa-file-invoice-dollar"></i></div>
                    <div class="content">
                        <h3 class="title">Billing & Insurance Claims</h3>
                        <p class="disc">Automated invoicing, insurance processing, receipts & financial reports.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="single-feature-area-four">
                    <div class="icon"><i class="fa-solid fa-boxes-stacked"></i></div>
                    <div class="content">
                        <h3 class="title">Pharmacy & Inventory</h3>
                        <p class="disc">Medicine stock, expiry alerts, purchase orders & low-stock notifications.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="single-feature-area-four">
                    <div class="icon"><i class="fa-solid fa-users"></i></div>
                    <div class="content">
                        <h3 class="title">Role-Based Access Control</h3>
                        <p class="disc">Doctor, receptionist, accountant, admin — secure permissions for everyone.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="single-feature-area-four">
                    <div class="icon"><i class="fa-solid fa-chart-line"></i></div>
                    <div class="content">
                        <h3 class="title">Real-Time Analytics & Reports</h3>
                        <p class="disc">Daily revenue, patient footfall, appointment trends & custom reports.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="single-feature-area-four">
                    <div class="icon"><i class="fa-solid fa-truck"></i></div>
                    <div class="content">
                        <h3 class="title">Lab Integration</h3>
                        <p class="disc">Direct lab test ordering, results upload & patient notification.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="single-feature-area-four">
                    <div class="icon"><i class="fa-solid fa-mobile-screen-button"></i></div>
                    <div class="content">
                        <h3 class="title">Patient Portal & Mobile App</h3>
                        <p class="disc">Patients can book, view reports, pay bills & receive prescriptions online.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Why Choose Us Section -->
<div class="working-process-area">
    <div class="container">
        <div class="row g-5 mt--60">
            <div class="col-lg-12">
                <div class="title-center-wrapper">
                    <h2 class="title rts-text-anime-style-1">Why Choose Our Clinic ERP</h2>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single-process-area">
                    <div class="icon">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <h5 class="title">Save 70% Admin Time</h5>
                    <p class="disc">
                        Automate appointments, billing, and reports to focus on patient care.
                    </p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single-process-area">
                    <div class="icon">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <h5 class="title">100% Data Security</h5>
                    <p class="disc">
                        HIPAA-compliant with encryption and role-based access.
                    </p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single-process-area">
                    <div class="icon">
                        <i class="fa-solid fa-rupee-sign"></i>
                    </div>
                    <h5 class="title">Reduce Costs & Errors</h5>
                    <p class="disc">
                        Cut operational costs by up to 60% with error-free automation.
                    </p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single-process-area">
                    <div class="icon">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <h5 class="title">24×7 Expert Support</h5>
                    <p class="disc">
                        Dedicated team for seamless operation and quick resolution.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Key Modules - New Modern Design -->
<div class="rts-section-gap bg-white">
    <div class="container">
        <div class="title-center-wrapper">
            <span class="pre">Modules</span>
            <h2 class="title rts-text-anime-style-1">Powerful Modules Included</h2>
        </div>
        <div class="row g-5 mt--50">
            <div class="col-lg-3 col-md-6">
                <div class="rts-service-box-one text-center p-4 border rounded-3 shadow-sm h-100 hover-scale">
                    <div class="icon mb-3" style="font-size: 2.5rem;">
                        <i class="fa-solid fa-user-plus text-primary"></i>
                    </div>
                    <h5 class="title">Patient Management</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="rts-service-box-one text-center p-4 border rounded-3 shadow-sm h-100 hover-scale">
                    <div class="icon mb-3" style="font-size: 2.5rem;">
                        <i class="fa-solid fa-calendar text-primary"></i>
                    </div>
                    <h5 class="title">Appointment & OPD</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="rts-service-box-one text-center p-4 border rounded-3 shadow-sm h-100 hover-scale">
                    <div class="icon mb-3" style="font-size: 2.5rem;">
                        <i class="fa-solid fa-file-medical text-primary"></i>
                    </div>
                    <h5 class="title">EMR / EHR</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="rts-service-box-one text-center p-4 border rounded-3 shadow-sm h-100 hover-scale">
                    <div class="icon mb-3" style="font-size: 2.5rem;">
                        <i class="fa-solid fa-receipt text-primary"></i>
                    </div>
                    <h5 class="title">Billing & Insurance</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="rts-service-box-one text-center p-4 border rounded-3 shadow-sm h-100 hover-scale">
                    <div class="icon mb-3" style="font-size: 2.5rem;">
                        <i class="fa-solid fa-pills text-primary"></i>
                    </div>
                    <h5 class="title">Pharmacy Management</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="rts-service-box-one text-center p-4 border rounded-3 shadow-sm h-100 hover-scale">
                    <div class="icon mb-3" style="font-size: 2.5rem;">
                        <i class="fa-solid fa-flask text-primary"></i>
                    </div>
                    <h5 class="title">Lab & Diagnostics</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="rts-service-box-one text-center p-4 border rounded-3 shadow-sm h-100 hover-scale">
                    <div class="icon mb-3" style="font-size: 2.5rem;">
                        <i class="fa-solid fa-chart-pie text-primary"></i>
                    </div>
                    <h5 class="title">Analytics & Reports</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="rts-service-box-one text-center p-4 border rounded-3 shadow-sm h-100 hover-scale">
                    <div class="icon mb-3" style="font-size: 2.5rem;">
                        <i class="fa-solid fa-users text-primary"></i>
                    </div>
                    <h5 class="title">Staff & Payroll</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Final CTA -->
<div class="rts-cta-area rts-section-gap bg_dark text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="title rts-text-anime-style-1 text-white">Ready to Transform Your Clinic?</h2>
                <p class="disc mt--20 mb-0">Book a free live demo today and see the power of Clinic ERP in action.</p>
                <a href="{{ route('contact') }}" class="btn btn-primary mt--40 px-5 py-3">Request Free Demo Now</a>
            </div>
        </div>
    </div>
</div>

@include('layout.footer')