<?php include 'config/connection.php' ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php' ?>
    <title><?php echo $thename ?> – Empowering Independent Living Through Compassionate Support Services</title>
    <meta name="keywords"
        content="supported living services, independent living services, disability support services, developmental disability support, assisted independent living, person-centered care, disability empowerment, community living support, life skills development, disability care provider, inclusive support services, supported independent living, disability assistance programs, special needs support services, independent living empowerment, disability care services, supported housing services, adult disability services, independent living support, disability community programs, daily living assistance, behavioral support services, residential support services, disability advocacy, community integration services, life enrichment programs, disability empowerment services, quality disability care, personalized support services, disability resource services, compassionate care services, supported living provider, developmental services, independent living programs, disability support agency, special needs care, independent living assistance, community-based support services, disability care organization, empowerment through independence." />
    <meta name="description"
        content="AGILE CARES provides inclusive supported living and independent living services for non-able individuals. We empower people to live with dignity, confidence, independence, and community engagement through person-centered care." />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="ROBOTS" content="ALL">
    <meta name="Engine" content="all">
    <meta name="distribution" content="global">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image-png" href="<?php echo $website ?>/all-images/images/icon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="<?php echo $website ?>/style/animate.css" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo $website ?>/style/aos.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo $website ?>/style/paramount.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo $website ?>/style/main-style.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo $website ?>/style/nav-style.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo $website ?>/style/preloader.css" type="text/css" rel="stylesheet" />

    <meta property="og:type" content="Website" />
    <meta property="og:site_name" content="<?php echo $thename ?>">
    <meta property="og:url" content="<?php echo $website_url ?>" />
    <link href="<?php echo $website ?>/js/classycountdown/css/jquery.classycountdown.css" rel="stylesheet"
        type="text/css">
</head>

<body>

    <!------------------------ start preloader ----------------------->
    <div class="loader-wrapper" id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!------------------------ end preloader ----------------------->
    <?php include 'header.php' ?>
    <div class="slide-div" data-aos="fade-in" data-aos-duration="1000">
        <div class="inner-div">
            <div class="text-div">
                <h1 data-aos="zoom-in" data-aos-duration="1800"><span>WEBSITE</span> WILL <br />OPEN SOON!</h1>
                <p><strong>
                        <?php echo $thename ?>
                    </strong>: Empowering Independent Living Through Compassionate Support:
                    Contact us at info@agilecares.com</p>
            </div>
        </div>
    </div>

    <div class="count-down-div" data-aos="fade-down" data-aos-duration="1000">
        <div class="div-in">
            <div id="countdown" class="ClassyCountdownDemo"></div>
        </div>
    </div>
</body>

</html>

<script src="<?php echo $website ?>/js/jquery-v3.6.1.min.js"></script>
<script src="<?php echo $website ?>/js/scripts.js"></script>
<script src="<?php echo $website ?>/js/aos.js"></script>
<script type="text/javascript">
$(".sb-container").scrollBox();
</script>
<script>
AOS.init({
    easing: 'ease-in-out-sine'
});

$(document).ready(function() {
    setTimeout(function() {
        $('#loader-wrapper').addClass('loaded');
    }, 3000);
    $(".loader-wrapper").delay(4000).fadeOut(800);
});
</script>




<!-- jQuery Classy Countdown Scripts and CSS -->
<script src="<?php echo $website ?>/js/classycountdown/js/jquery.knob.js"></script>
<script src="<?php echo $website ?>/js/classycountdown/js/jquery.throttle.js"></script>
<script src="<?php echo $website ?>/js/classycountdown/js/jquery.classycountdown.js"></script>
<!-- Classy Countdown Script -->
<script type="text/javascript">
$(document).ready(function() {
    $('#countdown').ClassyCountdown({
        theme: "flat-colors-very-wide",
        end: $.now() + 10000
    });
});
</script>