<?php include 'alert.php'; ?>
<header class="animated fadeInDown">
    <div class="header-top">
        <div class="header-top-div-in">
            <div class="contact-div1">
              <p><a href="tel:+12097410783" title="Call Us"><i class="bi bi-telephone-fill"></i>+1 (209) 741-0783</a></p>
              <p><a href="mailto:info@agilecares.com" title="Email Us"><i class="bi bi-envelope-fill"></i> info@agilecares.com</a></p>
              <p class="disp-remv"><i class="bi bi-headset"></i> 24/7 services available</p>
            </div>

            <div class="media-div">
               <p>Follow Us:</p>

             <div class="icon-div">
                 <a href="https://www.facebook.com/profile.php?id=61594706722310&mibextid=wwXIfr" target="_blank" title="Facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/agile_cares" target="_blank" title="Instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://api.whatsapp.com/send?text=Hello AGILE CARES&phone= +1 (209) 741-0783" target="_blank" title="Whatsapp"><i class="bi bi-whatsapp"></i></a>
             </div>
            </div>

            <button class="top-mobile btn">
                <a href="tel:+12097410783" title="Call Us">
                 <i class="bi bi-telephone-fill"></i>+1 (209) 741-0783
                </a>
            </button>
        </div>
    </div>

    <div class="header-bottom">
            <div class="header-bottom-div-in">
                  <div class="left-wrapper">
                    <a href="<?php echo $websiteUrl ?>" title="AGILE CARES">
                     <div class="logo-div">
                        <img src="<?php echo $websiteUrl ?>/all-images/images/logo2.png" alt="AGILE CARES Logo" />
                     </div></a>
                  </div>

                  <div class="right-wrapper">
                       <nav>
                            <ul>

                                <a href="<?php echo $websiteUrl ?>" title="Home Page">
                                    <li <?php if (
                                        ($websiteAutoUrl == "$websiteUrl/index") ||
                                        ($websiteAutoUrl == "$websiteUrl/") ||
                                        ($websiteAutoUrl == "$websiteUrl")
                                    ) { ?>class="active"<?php } ?>>
                                        Home
                                    </li>
                                </a>

                                <a href="<?php echo $websiteUrl ?>/about-us" title="About Us">
                                    <li class="<?php if (strstr($websiteAutoUrl, "$websiteUrl/about-us")) { ?>active<?php } ?>">
                                        About Us
                                    </li>
                                </a>

                                <a href="<?php echo $websiteUrl ?>/services" title="Our Services">
                                    <li class="<?php if (strstr($websiteAutoUrl, "$websiteUrl/services")) { ?>active<?php } ?>">
                                        <i class="bi bi-plus"></i> Our Services
                                    </li>
                                </a>


                                <a href="<?php echo $websiteUrl ?>/care-polices" title="Care Policies" class="disp-none">
                                    <li class="<?php if (strstr($websiteAutoUrl, "$websiteUrl/care-polices")) { ?>active<?php } ?>">
                                        Care Policies
                                    </li>
                                </a>

                                <a href="<?php echo $websiteUrl ?>/brochure/AGILE SLS Trifold Brochure.pdf" title="Download Brochure"class="disp-none" target="_blank">
                                    <li class="<?php if (strstr($websiteAutoUrl, "$websiteUrl/brochure")) { ?>active<?php } ?>">
                                        Download Brochure
                                    </li>
                                </a>
                                <li id="readMore" class="read-more-li">
                                    <i class="bi bi-plus"></i> More
                                    <ul>
                                        <div class="sub-nav-div">

                                            <a href="<?php echo $websiteUrl ?>/care-policies" title="Care Policies">
                                                <li class="li">Care Policies</li>
                                            </a>

                                            <a href="<?php echo $websiteUrl ?>/resources" title="Resources">
                                                <li class="li">Resources</li>
                                            </a>

                                            <a href="<?php echo $websiteUrl ?>/careers" title="Careers">
                                                <li class="li">Careers</li>
                                            </a>

                                        </div>
                                    </ul>

                                </li>

                            </ul>

                             <a href="<?php echo $websiteUrl?>/contact-us" title="Contact Us">
                                <button class="contact-btn">
                                    Contact Us <i class="bi bi-telephone-inbound"></i>
                                </button>
                            </a>

                            <button class=" menu" title="Menu " onclick="_open_menu()">
                                <i class="bi bi-text-right"></i>
                            </button>   
                        </nav>
                  </div>  
            </div>
    </div>
</header>