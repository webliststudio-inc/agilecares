<?php include 'config/constants.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">


<head>
    <?php include 'meta.php' ?>
    <title><?php echo $appName ?> | Care Policies</title>
    <meta name="keywords"
        content="Agile Cares care policies, care policies, supported living policies, independent living policies, disability care policies, person-centered care, disability support policies, supported living services, independent living services, quality care standards, disability support services, safeguarding policy, privacy and dignity, individual rights, community living support, behavioral support services, residential support services, personalized care, disability care provider, supported living provider, developmental disability support, compassionate care, inclusive care services, person-centered support, care quality standards, independent living support" />

    <meta name="description"
        content="Explore AGILE CARES care policies and standards for providing safe, respectful, person-centered supported living and independent living services that protect dignity, rights, privacy, independence, and well-being." />

    <meta property="og:type" content="website" />

    <meta property="og:title"
        content="<?php echo $appName ?> | Care Policies" />

    <meta property="og:description"
        content="Learn about AGILE CARES care policies and standards designed to promote safety, dignity, privacy, independence, rights, and person-centered support." />

    <meta property="og:image"
        content="<?php echo $websiteUrl ?>/all-images/plugin-pix/agilecares.jpeg" />

    <meta property="og:url"
        content="<?php echo $websiteUrl ?>/care-policies" />

    <meta property="og:site_name"
        content="<?php echo $appName ?>" />

    <meta name="twitter:card" content="summary_large_image" />

    <meta name="twitter:title"
        content="<?php echo $appName ?> | Care Policies" />

    <meta name="twitter:description"
        content="AGILE CARES care policies promote safe, respectful, dignified, and person-centered support for individuals receiving supported and independent living services." />

    <meta name="twitter:image"
        content="<?php echo $websiteUrl ?>/all-images/plugin-pix/agilecares.jpeg" />
</head>

<body>
     <?php include 'alert.php'; ?>
     <?php include 'header.php'; ?>

      <section class="slide">
            <div class="other-slide2">
                <div class="slide-inner-div" data-aos="fade-in" data-aos-duration="1500">
                    <div class="text-div">
                      <div class="breadcrumb">
                            <a href="<?php echo $websiteUrl ?>">
                                Home
                            </a>
                            <span><i class="bi bi-caret-right-fill"></i></span>
                            <a href="<?php echo $websiteUrl ?>/care-polices">
                              <span>Care Policies</span>
                            </a>
                      </div>

                        <div class="title">
                            <h1>Our Care Policies</h1>
                            <p>
                              Our care policies are designed to protect the dignity, safety, independence, and wellbeing of every individual we support.
                            </p>
                            <div class="btn-div">  
                                <a href="<?php echo $websiteUrl ?>/services" class="service-btn" title="Our Services"> 
                                    Our Services <i class="bi bi-arrow-right-circle"></i> 
                                </a> 

                                <a href="<?php echo $websiteUrl ?>/contact-us" class="contact-btn" title="Contact Us"> 
                                    Contact Us  <i class="bi bi-telephone-inbound"></i>
                                </a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </section>


    <section class="index-section other-index-section">
        <section class="body-div">
        <div class="body-div-in">
            <div class="policies-card-div">
                <div class="policy-card" data-aos="fade-in" data-aos-duration="1500">
                    <div class="policy-icon">
                        <i class="bi bi-capsule"></i>
                    </div>

                    <h2>Medication Administration</h2>

                    <p>
                        Prescriptions are verified against physician orders, logged, and
                        secured in locked boxes. Changes are executed only upon written
                        medical orders. Daily administrations are recorded on a MAR log;
                        errors or refusals are reported directly to VMRC.
                    </p>
                </div>

                <div class="policy-card" data-aos="fade-in" data-aos-duration="1500">
                    <div class="policy-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>

                    <h2>SIR & Abuse Prevention</h2>

                    <p>
                        AGILE enforces a zero-tolerance standard regarding isolation,
                        financial exploitation, neglect, or client abuse. Personnel
                        undergo Mandated Reporter certification, with formal SIRs
                        submitted within the mandatory 24-hour window.
                    </p>
                </div>

                <div class="policy-card" data-aos="fade-in" data-aos-duration="1500">
                    <div class="policy-icon">
                        <i class="bi bi-telephone-inbound"></i>
                    </div>

                    <h2>24/7 Emergency Back-Up</h2>

                    <p>
                        We maintain an active, experienced On-Call management team
                        available 24/7. Every Individual Service Plan (ISP) contains
                        a rapid communication roadmap connecting first responders,
                        primary families, and VMRC.
                    </p>
                </div>

                <div class="policy-card" data-aos="fade-in" data-aos-duration="1500">
                    <div class="policy-icon">
                        <i class="bi bi-person-check"></i>
                    </div>

                    <h2>Staff Screening & Safety Credentials</h2>

                    <p>
                        Before working with clients, our personnel undergo thorough
                        background checks, reference verifications, and behavioral
                        screening. Every team member maintains active CPR and First
                        Aid certifications alongside specialized behavioral training.
                    </p>
                </div>
            </div>
        </div>
        </section>
        <?php include 'footer.php';?>
    </section> 

    <?php include 'bottom-scripts.php';?>
</body>
</html>