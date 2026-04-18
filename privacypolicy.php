<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Discover our multispeciality hospital in Pammal, offering 24/7 services in neurology, cardiology, pediatrics, and more. Comprehensive care at your doorstep!">
  <link href="assets/images/favicon/symbol only-01.png" rel="icon">
    <title>BP Jain Multispeciality Hospital #privacypolicy | 24/7 Healthcare in Pammal, Chennai</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
      <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&amp;family=Roboto:wght@400;700&amp;display=swap">
  <link rel="stylesheet" href="../../../use.fontawesome.com/releases/v5.15.1/css/all.css">
  <link rel="stylesheet" href="assets/css/libraries.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-red: #c02328;
            --primary-green: #422e73;
            --light-bg: #f8f9fa;
            --text-dark: #2c3e50;
            --text-light: #5a6c7d;
            --border-color: #e1e8ed;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

        }

        .privacy-container {
            max-width: 1000px;
            margin: 0 auto;
            opacity: 0;
            animation: fadeInUp 0.8s ease-out forwards;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero-section {
            background: linear-gradient(135deg, var(--primary-red) 0%, var(--primary-green) 100%);
            padding: 60px 40px;
            border-radius: 20px 20px 0 0;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: pulse 4s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
                opacity: 0.5;
            }
            50% {
                transform: scale(1.1);
                opacity: 0.8;
            }
        }

        .hero-icon {
            font-size: 60px;
            margin-bottom: 20px;
            display: inline-block;
            animation: floatIcon 3s ease-in-out infinite;
        }

        @keyframes floatIcon {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        .hero-section h1 {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 10px;
            letter-spacing: 1px;
            position: relative;
            z-index: 1;
            color: white !important;
        }

        .hero-section .subtitle {
            font-size: 18px;
            opacity: 0.95;
            position: relative;
            z-index: 1;
        }

        .effective-date {
            display: inline-block;
            background: rgba(255,255,255,0.2);
            padding: 8px 20px;
            border-radius: 20px;
            margin-top: 15px;
            font-size: 14px;
            backdrop-filter: blur(10px);
        }

        .main-content {
            background: white;
            padding: 50px;
            border-radius: 0 0 20px 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        }

        .intro-text {
            font-size: 17px;
            line-height: 1.8;
            color: var(--text-light);
            margin-bottom: 30px;
            padding: 25px;
            background: var(--light-bg);
            border-left: 4px solid var(--primary-red);
            border-radius: 8px;
            animation: slideInLeft 0.8s ease-out 0.3s backwards;
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .section {
            margin-bottom: 10px !important;
            opacity: 0;
            animation: fadeIn 0.6s ease-out forwards;
        }

        .section:nth-child(1) { animation-delay: 0.4s; }
        .section:nth-child(2) { animation-delay: 0.5s; }
        .section:nth-child(3) { animation-delay: 0.6s; }
        .section:nth-child(4) { animation-delay: 0.7s; }
        .section:nth-child(5) { animation-delay: 0.8s; }
        .section:nth-child(6) { animation-delay: 0.9s; }
        .section:nth-child(7) { animation-delay: 1s; }
        .section:nth-child(8) { animation-delay: 1.1s; }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .section-title {
            color: var(--primary-green);
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            padding-bottom: 12px;
            border-bottom: 3px solid var(--border-color);
            transition: all 0.3s ease;
        }

        .section-title:hover {
            color: var(--primary-red);
            transform: translateX(5px);
        }

        .section-title i {
            color: var(--primary-red);
            font-size: 28px;
        }

        .sub-title {
            color: var(--primary-red);
            font-size: 20px;
            font-weight: 600;
            margin: 25px 0 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .sub-title i {
            font-size: 18px;
        }

        .section p {
            font-size: 16px;
            line-height: 1.9;
            color: var(--text-dark);
            margin-bottom: 15px;
        }

        .section ul {
            margin: 20px 0 20px 25px;
        }

        .section li {
            font-size: 16px;
            line-height: 1.9;
            color: var(--text-dark);
            margin-bottom: 12px;
            position: relative;
            padding-left: 15px;
            transition: all 0.3s ease;
        }

        .section li:hover {
            transform: translateX(5px);
            color: var(--primary-red);
        }

        .section li::before {
            content: '▸';
            position: absolute;
            left: -10px;
            color: var(--primary-red);
            font-weight: bold;
        }

        .highlight-box {
            background: linear-gradient(135deg, #fff5f5 0%, #f0f9ff 100%);
            padding: 25px;
            border-radius: 12px;
            margin: 20px 0;
            border: 2px solid var(--border-color);
            transition: all 0.3s ease;
        }

        .highlight-box:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }

        .info-card {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 25px 0;
        }

        .info-item {
            background: white;
            padding: 20px;
            border-radius: 10px;
            border: 2px solid var(--border-color);
            transition: all 0.3s ease;
            text-align: center;
        }

        .info-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            border-color: var(--primary-red);
        }

        .info-item i {
            font-size: 36px;
            color: var(--primary-red);
            margin-bottom: 12px;
        }

        .info-item h4 {
            color: var(--primary-green);
            font-size: 18px;
            margin-bottom: 8px;
        }

        .contact-section {
            background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-red) 100%);
            color: white;
            padding: 40px;
            border-radius: 15px;
            margin-top: 40px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .contact-section h2 {
            font-size: 28px;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            color: white !important;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 15px;
            max-width: 600px;
            margin: 0 auto;
            text-align: left;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 15px;
            background: rgba(255,255,255,0.1);
            padding: 15px 20px;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .contact-item:hover {
            background: rgba(255,255,255,0.2);
            transform: translateX(10px);
        }

        .contact-item i {
            font-size: 24px;
            min-width: 30px;
        }

        .divider {
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--border-color), transparent);
            margin: 35px 0;
        }

        strong {
            color: var(--primary-red);
            font-weight: 600;
        }

        @media (max-width: 768px) {
            .hero-section {
                padding: 40px 25px;
            }

            .hero-section h1 {
                font-size: 32px;
            }

            .main-content {
                padding: 30px 25px;
            }

            .section-title {
                font-size: 22px;
            }

            .info-card {
                grid-template-columns: 1fr;
            }

            .contact-info {
                text-align: center;
            }

            .contact-item {
                flex-direction: column;
                text-align: center;
            }
        }

        /* Scroll Animation */
        .scroll-indicator {
            position: fixed;
            top: 0;
            left: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-red), var(--primary-green));
            transition: width 0.1s ease;
            z-index: 9999;
            box-shadow: 0 2px 10px rgba(192, 35, 40, 0.5);
        }
    </style>
</head>
<body>
<?php include('header.php'); ?>
<div class="scroll-indicator" id="scrollIndicator"></div>



<div class="privacy-container">

    <div class="hero-section">
        <div class="hero-icon">
            <i class="fas fa-shield-alt"></i>
        </div>
        <h1>Privacy Policy</h1>
        <p class="subtitle">Your Privacy is Our Priority</p>
        <div class="effective-date">
            <i class="far fa-calendar-alt"></i> Effective Date: July 03, 2023
        </div>
    </div>

    <div class="main-content">

        <div class="intro-text">
            <p>
                This Privacy Policy describes how <strong>BP Jain Multispeciality Hospital</strong> (referred to as "the Hospital," "we," "us," or "our")
                collects, uses, maintains, and discloses information collected from users (referred to as "User" or "you")
                of the https://www.bpjainhospital.in/
            </p>
            <p style="margin-top: 15px;">
                By using our Website, you consent to the data practices described in this policy.
            </p>
        </div>

        <div class="section">
            <h2 class="section-title">
                <i class="fas fa-database"></i>
                1. Information We Collect
            </h2>

            <p>We collect information from the public and patients through the Website for essential purposes such as managing appointments and general inquiries. The types of information we may collect fall into two categories:</p>

            <div class="info-card">
                <div class="info-item">
                    <i class="fas fa-user-circle"></i>
                    <h4>Personal Information</h4>
                    <p style="font-size: 14px; color: var(--text-light); margin-top: 10px;">Name, email, phone, address</p>
                </div>
                <div class="info-item">
                    <i class="fas fa-laptop"></i>
                    <h4>Technical Data</h4>
                    <p style="font-size: 14px; color: var(--text-light); margin-top: 10px;">Browser type, IP, device info</p>
                </div>
            </div>

            <h3 class="sub-title">
                <i class="fas fa-id-card"></i>
                A. Personal Identification Information (PII)
            </h3>
            <div class="highlight-box">
                <p>This information is voluntarily provided by you when you interact with us through forms, email, or telephone links on our Website. This includes:</p>
                <ul>
                    <li><strong>Contact Information:</strong> Name, Email Address, Phone Number, Postal Address</li>
                    <li><strong>Appointment/Inquiry Details:</strong> Preferred date, time, reason for visit</li>
                    <li><strong>Patient Details:</strong> Any voluntarily provided patient-related information</li>
                </ul>
            </div>

            <h3 class="sub-title">
                <i class="fas fa-chart-line"></i>
                B. Non-Personal Identification Information
            </h3>
            <p>We may collect technical and usage information whenever Users interact with the Website, such as browser type, device details, operating system, ISP, and IP address.</p>
        </div>

        <div class="divider"></div>

        <div class="section">
            <h2 class="section-title">
                <i class="fas fa-cogs"></i>
                2. How We Use Your Information
            </h2>
            <ul>
                <li><strong>Process Appointments and Inquiries:</strong> Efficiently manage your healthcare needs</li>
                <li><strong>Internal Operations:</strong> Improving Website performance and administration</li>
                <li><strong>Communication:</strong> Appointment updates, hospital notifications</li>
                <li><strong>Security and Legal Compliance:</strong> Protecting your data and meeting legal obligations</li>
            </ul>
        </div>

        <div class="divider"></div>

        <div class="section">
            <h2 class="section-title">
                <i class="fas fa-lock"></i>
                3. Our Commitment to Data Security
            </h2>

            <h3 class="sub-title">
                <i class="fas fa-shield-check"></i>
                A. Data Security
            </h3>
            <div class="highlight-box">
                <p>
                    We safeguard your details with utmost security using data protection practices, secure storage, encryption,
                    and access controls to prevent unauthorized access or disclosure.
                </p>
            </div>

            <h3 class="sub-title">
                <i class="fas fa-user-shield"></i>
                B. Data Sharing Policy
            </h3>

            <p><strong>We will not sell, rent, lease, or leak your personal information to third parties.</strong> Data may be shared only in the following cases:</p>

            <ul>
                <li><strong>Service Providers:</strong> Trusted IT and hosting providers under confidentiality obligations</li>
                <li><strong>Legal Requirements:</strong> If required by law, court order, or to protect public safety</li>
                <li><strong>Business Transfer:</strong> During mergers/acquisitions with policy continuation</li>
            </ul>
        </div>

        <div class="divider"></div>

        <div class="section">
            <h2 class="section-title">
                <i class="fas fa-cookie-bite"></i>
                4. Cookies and Web Browser Tracking
            </h2>
            <ul>
                <li>Cookies may be used to enhance user experience and remember preferences</li>
                <li>You may disable cookies in your browser, but some parts of the site may not work properly</li>
                <li>Non-personal data is used for traffic analysis and performance optimization</li>
            </ul>
        </div>

        <div class="divider"></div>

        <div class="section">
            <h2 class="section-title">
                <i class="fas fa-external-link-alt"></i>
                5. Links to Third-Party Websites
            </h2>
            <p>
                We are not responsible for the privacy practices or content of third-party websites linked from our Website.
                Your interaction with such sites is governed by their own privacy policies.
            </p>
        </div>

        <div class="divider"></div>

        <div class="section">
            <h2 class="section-title">
                <i class="fas fa-child"></i>
                6. Children's Privacy
            </h2>
            <div class="highlight-box">
                <p>
                    The Website is not intended for individuals under 18 without parental supervision. We do not knowingly collect
                    information from minors. If collected accidentally, it will be deleted promptly.
                </p>
            </div>
        </div>

        <div class="divider"></div>

        <div class="section">
            <h2 class="section-title">
                <i class="fas fa-sync-alt"></i>
                7. Changes to This Privacy Policy
            </h2>
            <p>
                BP Jain Hospital may update this policy at any time. Any changes will be reflected by updating the
                "July 03, 2023" at the top of the page. Users are encouraged to review this page periodically.
            </p>
        </div>

        <div class="contact-section">
            <h2>
                <i class="fas fa-envelope"></i>
                Contact Us
            </h2>
            <p style="margin-bottom: 25px; font-size: 16px;">If you have any questions regarding this Privacy Policy, please contact us:</p>
            
            <div class="contact-info">
                <div class="contact-item">
                    <i class="fas fa-hospital"></i>
                    <div>
                        <strong>BP Jain Hospital</strong>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-globe"></i>
                    <div>https://www.bpjainhospital.in/</div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>Plot No. 6, Anna Salai, Gokulam Colony, Pammal, Chennai</div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <div>bpjain@gmail.com</div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <div>044-22483678 , 044-22485340</div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include('footer.php'); ?>

<script>
    // Scroll Progress Indicator
    window.addEventListener('scroll', function() {
        const scrollIndicator = document.getElementById('scrollIndicator');
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrollPercentage = (scrollTop / scrollHeight) * 100;
        scrollIndicator.style.width = scrollPercentage + '%';
    });

    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe all sections
    document.querySelectorAll('.section').forEach(section => {
        observer.observe(section);
    });
</script>

</body>
</html>

