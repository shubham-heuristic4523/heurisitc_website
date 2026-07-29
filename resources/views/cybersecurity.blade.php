@include('layout.header')
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    /* Hero */
    .hero {
        height: 100vh;
        background: #111827;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 40px;
    }

    /* Section title */
    .title {
        text-align: center;
        font-size: 32px;
        margin: 80px 0 40px;
    }

    /* Wrapper */
    .stack-wrapper {
        position: relative;
    }

    /* Each section */
    .card {
        position: sticky;
        top: 80px;
        margin-bottom: 100vh;
    }

    /* Last one fix */
    .card:last-child {
        margin-bottom: 0;
    }

    /* Card content */
    .card-inner {
        height: 80vh;
        margin: 0 10%;
        border-radius: 20px;
        padding: 40px;
        color: white;
        font-size: 24px;
    }

    /* Colors */
    .card1 .card-inner {
        background: #1e293b;
    }

    .card2 .card-inner {
        background: #0f172a;
    }

    .card3 .card-inner {
        background: #020617;
    }

    .card4 .card-inner {
        background: #000;
    }

    /* Bottom section */
    .footer {
        height: 100vh;
        background: #111;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 30px;
    }

    .stack-wrapper,
    .card {
        transform: none !important;
    }

    body,
    html,
    .rts-work-process-area,
    .container,
    .row {
        overflow: visible !important;
    }
</style>
<!-- rts service-details-breadcrumb-area-start -->
<div class="rts-about-breadcrumb-area mb-5" style="background: linear-gradient(rgba(9, 30, 62, .7), rgba(9, 30, 62, .7)), url(assets/images/about/banner.webp)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rts-about-breadcrumb-content">
                    <ul>
                        <li><a href="{{ route('index') }}" class="text-white">Home</a></li>
                        <li><i class="fa fa-chevron-right"></i></li>
                        <li><a href="{{ route('cybersecurity') }}" class="active">Cybersecurity Services</a></li>
                    </ul>
                    <h1 class="title rts-text-anime-style-1 text-white">Protecting Your Digital Assets with Advanced Cybersecurity</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts service-details-breadcrumb-area-end -->

<!-- rts desktop app development start -->
<div class="rts-work-process-area py-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pr--70 pr_md--10 pr_sm--10">
                <div class="work-process-content">
                    <div class="title-left-wrapper">
                        <span class="pre">Service Details</span>
                    </div>
                    <div class="thumbnail-plunning-service-detials mt-5">
                        <img src="assets/images/process/cyber-security.png" alt="Cybersecurity Services" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt_md--50 mt_sm--50">
                <h2 class="title rts-text-anime-style-1">Cybersecurity Services</h2>
                <div class="working-process-list-wrapper">
                    <p class="mb-4">We provide comprehensive cybersecurity solutions to safeguard your business against evolving digital threats. Our expert team combines deep technical knowledge, industry best practices, and cutting-edge tools to protect your networks, applications, data, and users from cyberattacks, breaches, and compliance risks.</p>
                    <p class="mb-4">From vulnerability assessments and penetration testing to managed security operations and employee awareness training, we deliver proactive, layered defense strategies tailored to your specific business needs. Whether you're a startup, enterprise, or in a regulated industry, our solutions help you build resilience, maintain trust, and ensure business continuity.</p>
                    <p class="mb-4">We follow frameworks like NIST, ISO 27001, and OWASP to ensure robust security posture. Our services cover network security, cloud security, application security, endpoint protection, and incident response, enabling you to focus on growth while we handle the threats.</p>
                    <p class="mb-4">Our approach emphasizes prevention, rapid detection, and effective response. We work closely with your team to implement secure architectures, conduct regular audits, and provide ongoing monitoring and support for long-term protection.</p>
                    <p>Our goal is to minimize risks, reduce downtime, and help your business thrive securely in the digital world.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts desktop app development end -->

<!-- rts service detail start -->

<div class="stack-wrapper">

    <div class="card card1">
        <div class="card-inner">
            <h3 class="title">Features</h3>
            <p class="disc">Our Cybersecurity services include robust features that meet and exceed your security
                expectations.</p>
            <ul class="feature-list">
                <li><i class="fa-regular fa-check"></i>Vulnerability Assessment & Penetration Testing: Identify and
                    exploit weaknesses before attackers do.</li>
                <li><i class="fa-regular fa-check"></i>Network & Endpoint Security: Protect infrastructure and
                    devices from unauthorized access and malware.</li>
                <li><i class="fa-regular fa-check"></i>Cloud Security: Secure your AWS, Azure, or Google Cloud
                    environments with proper configurations.</li>
                <li><i class="fa-regular fa-check"></i>Incident Response & Forensics: Rapid detection, containment,
                    and recovery from breaches.</li>
                <li><i class="fa-regular fa-check"></i>Compliance & Audits: Help achieve GDPR, ISO 27001, HIPAA,
                    PCI-DSS, and other standards.</li>
                <li><i class="fa-regular fa-check"></i>Security Awareness Training: Educate employees to recognize
                    and prevent phishing and social engineering.</li>
                <li><i class="fa-regular fa-check"></i>Identity & Access Management (IAM): Implement strong
                    authentication and role-based access controls.</li>
                <li><i class="fa-regular fa-check"></i>Continuous Monitoring & SIEM: Real-time threat detection and
                    log analysis.</li>
            </ul>
        </div>
    </div>

    <div class="card card2">
        <div class="card-inner">
            <h3 class="title">Technology Stack</h3>
            <p class="disc">We leverage the latest cybersecurity tools and technologies for effective protection.
            </p>
            <ul class="feature-list">
                <li><i class="fa-regular fa-check"></i>Scanning & Testing: Nessus, Burp Suite, Metasploit, OWASP ZAP
                </li>
                <li><i class="fa-regular fa-check"></i>Endpoint & EDR: CrowdStrike, Microsoft Defender, SentinelOne
                </li>
                <li><i class="fa-regular fa-check"></i>SIEM & Monitoring: Splunk, ELK Stack, QRadar, Microsoft
                    Sentinel</li>
                <li><i class="fa-regular fa-check"></i>Firewall & Network: Palo Alto, Cisco Firepower, pfSense</li>
                <li><i class="fa-regular fa-check"></i>Cloud Security: AWS Security Hub, Azure Sentinel, Prisma
                    Cloud</li>
                <li><i class="fa-regular fa-check"></i>Tools & Frameworks: NIST, OWASP, ISO 27001, MITRE ATT&CK</li>
            </ul>
        </div>
    </div>

    <div class="card card3">
        <div class="card-inner">
            <h3 class="title">Development Process</h3>
            <p class="disc">Our proven cybersecurity process ensures thorough assessment, implementation, and
                ongoing protection.</p>
            <ul class="feature-list">
                <li><i class="fa-regular fa-check"></i>Discovery: Assess your current security posture, assets, and
                    risks.</li>
                <li><i class="fa-regular fa-check"></i>Planning: Develop a customized security strategy and roadmap.
                </li>
                <li><i class="fa-regular fa-check"></i>Implementation: Deploy tools, configurations, and security
                    controls.</li>
                <li><i class="fa-regular fa-check"></i>Testing: Conduct penetration tests, audits, and simulations.
                </li>
                <li><i class="fa-regular fa-check"></i>Monitoring: Set up continuous threat detection and alerting.
                </li>
                <li><i class="fa-regular fa-check"></i>Maintenance: Provide ongoing support, updates, and training.
                </li>
            </ul>
        </div>
    </div>

    <div class="card card4">
        <div class="card-inner">
            <h3 class="title">Project Examples</h3>
            <p class="disc">Take a look at some of our recent cybersecurity projects:</p>
            <ul class="feature-list">
                <li><i class="fa-regular fa-check"></i>Financial App Security Audit: Comprehensive penetration
                    testing and compliance for a banking platform.</li>
                <li><i class="fa-regular fa-check"></i>Enterprise Network Protection: Implemented EDR, SIEM, and
                    zero-trust architecture for a manufacturing company.</li>
                <li><i class="fa-regular fa-check"></i>Cloud Migration Security: Secured AWS infrastructure with
                    proper IAM, encryption, and monitoring.</li>
                <li><i class="fa-regular fa-check"></i>Employee Awareness Program: Phishing simulation and training
                    that reduced successful attacks by over 80%.</li>
            </ul>
        </div>
    </div>

</div>
<!-- rts service detail end -->

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
                                    We thoroughly evaluate your current security posture, identify vulnerabilities, and understand your business risks through audits and discussions.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="working-process-wrapper-three">
                                <h5 class="title">02. Strategy & Planning</h5>
                                <p class="disc">
                                    We design a tailored cybersecurity roadmap, recommend tools, and create an implementation plan aligned with your goals and compliance needs.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="working-process-wrapper-three">
                                <h5 class="title">03. Implementation & Hardening</h5>
                                <p class="disc">
                                    Our experts deploy security controls, configure tools, and integrate solutions using best practices and agile methods with your feedback.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="working-process-wrapper-three">
                                <h5 class="title">04. Testing, Monitoring & Support</h5>
                                <p class="disc">
                                    We perform rigorous testing, set up continuous monitoring, and provide ongoing maintenance, training, and rapid incident response.
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

@include('layout.footer')