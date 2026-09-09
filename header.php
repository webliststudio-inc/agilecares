<header>
    <div class="header-top">
        <div class="header-top-div-in">
            <div class="contact-div1">
              <p><i class="bi bi-telephone-fill"></i> +1 (555) 123-4567</p>
              <p><i class="bi bi-envelope-fill"></i> info@agilecares.com</p>
              <p class="disp-remv"><i class="bi bi-headset"></i> 24/7 services available</p>
            </div>

            <div class="media-div">
               <p>Follow Us:</p>

             <div class="icon-div">
                 <a href="https://www.facebook.com/agilecares" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/agilecares" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/company/agilecares" target="_blank"><i class="bi bi-linkedin"></i></a>
             </div>
            </div>

            <button class="top-mobile btn">
                 <i class="bi bi-telephone-fill"></i>+1 (209) 741-0783
            </button>
        </div>
    </div>

    <div class="header-bottom">
            <div class="header-bottom-div-in">
                  <div class="left-wrapper">
                     <div class="logo-div">
                        <img src="<?php echo $websiteUrl ?>/all-images/images/logo2.png" alt="AGILE CARES Logo" />
                     </div>
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

                                <a href="<?php echo $websiteUrl ?>/#" title="About Us">
                                    <li class="<?php if (strstr($websiteAutoUrl, "$websiteUrl/about_us")) { ?>active<?php } ?>">
                                        About Us
                                    </li>
                                </a>

                                <a href="<?php echo $websiteUrl ?>/#" title="Our Services">
                                    <li class="<?php if (strstr($websiteAutoUrl, "$websiteUrl/our-services")) { ?>active<?php } ?>">
                                        <i class="bi bi-plus"></i> Our Services
                                    </li>
                                </a>


                                <a href="<?php echo $websiteUrl ?>/#" title="Care Policies" class="disp-none">
                                    <li class="<?php if (strstr($websiteAutoUrl, "$websiteUrl/care-policies")) { ?>active<?php } ?>">
                                        Care Policies
                                    </li>
                                </a>

                                <a href="<?php echo $websiteUrl ?>/#" title="Resources" class="disp-none">
                                    <li class="<?php if (strstr($websiteAutoUrl, "$websiteUrl/resources")) { ?>active<?php } ?>">
                                        Resources
                                    </li>
                                </a>

                                <a href="<?php echo $websiteUrl ?>/#" title="Careers" class="disp-none">
                                    <li class="<?php if (strstr($websiteAutoUrl, "$websiteUrl/careers")) { ?>active<?php } ?>">
                                        Careers
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

                             <a href="<?php echo $websiteUrl ?>" title="Contact Us">
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