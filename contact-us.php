<?php include 'config/constants.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">


<head>
    <?php include 'meta.php' ?>
    <title><?php echo $appName ?> | Contact Us</title>
    <meta name="keywords"
        content="contact Agile Cares, Agile Cares contact, supported living services contact, independent living services contact, disability support services, disability care services, supported living provider, independent living support, developmental disability support, person-centered care, disability assistance, community living support, life skills support, behavioral support services, residential support services, disability support agency, special needs support services, disability care provider, community-based support services" />

    <meta name="description"
        content="Contact AGILE CARES to learn more about our person-centered supported living, independent living, and disability support services. Our team is here to answer your questions and help you explore available support." />

    <meta property="og:type" content="website" />

    <meta property="og:title"
        content="<?php echo $appName ?> | Contact Us" />

    <meta property="og:description"
        content="Get in touch with AGILE CARES to learn more about supported living, independent living, and personalized disability support services." />

    <meta property="og:image"
        content="<?php echo $websiteUrl ?>/all-images/plugin-pix/agilecares.jpeg" />

    <meta property="og:url"
        content="<?php echo $websiteUrl ?>/contact-us" />

    <meta property="og:site_name"
        content="<?php echo $appName ?>" />

    <meta name="twitter:card" content="summary_large_image" />

    <meta name="twitter:title"
        content="<?php echo $appName ?> | Contact Us" />

    <meta name="twitter:description"
        content="Contact AGILE CARES to ask questions, learn about our services, or explore personalized supported living and independent living support." />

    <meta name="twitter:image"
        content="<?php echo $websiteUrl ?>/all-images/plugin-pix/agilecares.jpeg" />
</head>

<body>
     <?php include 'alert.php'; ?>
     <?php include 'header.php'; ?>

      <section class="slide">
            <div class="other-slide2">
                <div class="slide-inner-div">
                    <div class="text-div">
                      <div class="breadcrumb">
                            <a href="<?php echo $websiteUrl ?>">
                                Home
                            </a>
                            <span><i class="bi bi-caret-right-fill"></i></span>
                            <a href="<?php echo $websiteUrl ?>/contact-us">
                              <span>Contact Us</span>
                            </a>
                      </div>

                        <div class="title">
                            <h1>Contact Us</h1>
                            <p>
                                Have questions about our supported living services? 
                                Get in touch with AGILE Cares to learn how our compassionate 
                                support can help promote independence, safety, and wellbeing.
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
        <section class="body-div contact">
                <div class="contact-info-div">
                    <div class="contact-info-div-in">
                        <div class="image-text-div">
                            <div class="imageinfo">
                                <img src="all-images/images/email.png" alt="email">
                            </div>

                            <div class="info-text-div">
                                <h3>MAIL US</h3>
                                <p>info@agilecares.com</p>
                            </div>
                        </div>

                        <div class="image-text-div">
                            <div class="imageinfo">
                                <img src="all-images/images/phone.png" alt="email">
                            </div>

                            <div class="info-text-div">
                                <h3>CALL US</h3>
                                <p>+1(209) 741-0783</p>
                            </div>
                        </div>

                        <div class="image-text-div">
                            <div class="imageinfo">
                                <img src="all-images/images/location.png" alt="email">
                            </div>

                            <div class="info-text-div">
                                <h3>LOCATION</h3>
                                <p>Tracy, California USA</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="loaction-map">
                    <iframe class="google-map"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12600!2d-121.4327!3d37.7369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0!2sTracy%2C%20CA%2095376%2C%20USA!5e0!3m2!1sen!2sng!4v1770112721709!5m2!1sen!2sng"style="border:0;"allowfullscreen="" loading="lazy"referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
        </section>


        <section class="body-div">
            <div class="body-div-in">
                <div class="form-div">
                    <div class="form-title">
                        <h3><i class="bi bi-envelope-fill"></i>Get in Touch</h3>
                        <p>
                            Have a question or need more information about our services?
                            We're here to help.
                        </p>
                    </div>

                    <form action="" method="POST">

                        <div class="form-row">

                            <div class="form-column">

                                <div class="text_field_container" id="fullName_container">
                                    <script>
                                        textField({
                                            id: 'fullName',
                                            title: 'Full Name'
                                        });
                                    </script>
                                </div>

                                <div class="text_field_container" id="email_container">
                                    <script>
                                        textField({
                                            id: 'email',
                                            title: 'Email Address'
                                        });
                                    </script>
                                </div>

                                <div class="text_field_container" id="phone_container">
                                    <script>
                                        textField({
                                            id: 'phone',
                                            title: 'Phone Number'
                                        });
                                    </script>
                                </div>

                            </div>

                            <div class="form-column">

                                <div class="text_field_container" id="subject_container">
                                    <script>
                                        textField({
                                            id: 'subject',
                                            title: 'Subject'
                                        });
                                    </script>
                                </div>

                                <div class="text_field_container" id="message_container">
                                    <textarea
                                        name="message"
                                        placeholder="Message"
                                        rows="6"
                                        required
                                    ></textarea>
                                </div>

                                <div class="submit-div">
                                    <button type="submit">
                                        Send Message
                                        <span>➤</span>
                                    </button>
                                </div>

                            </div>

                        </div>

                    </form>

                </div>
            </div>
        </section>



    
     <?php include 'footer.php';?>
   </section> 

    <?php include 'bottom-scripts.php';?>
</body>
</html>