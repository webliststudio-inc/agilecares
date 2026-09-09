<div class="all-alert-back-div">
    <div class="success-alert-div animated fadeInDown">
        <div class="icon"><i class="bi-check-all"></i></div> 
        <div class="text"><p>PASSWORD RESET SUCCESSFUL! Check your email to confirm.</p></div>
    </div>
</div>

<div id="get-more-div" onclick="_alert_close(event);">
    <div class="alert-loading-div">
        <div class="icon"><img src="<?php echo $websiteUrl?>/all-images/images/loading.gif" width="20px" alt="Loading"/></div> 
        <div class="text"><p>LOADING...</p></div>
    </div>
</div>

<div id="get-more-div-secondary">
    <div class="alert-loading-div">
        <div class="icon"><img src="<?php echo $websiteUrl?>/all-images/images/loading.gif" width="20px" alt="Loading"/></div> 
        <div class="text"><p>LOADING...</p></div>
    </div>
</div>



<div class="sidenavdiv">
    <div class="live-chat-back-div">
    <a href="tel:1-800-658-5679" title="Call Customer Care">
        <div class="chat-div">
            <div class="icon-div" style="background:#008040;"><i class="bi-telephone-outbound"></i></div>
            <div class="text">1-800-658-5679</div>
          <br clear="all" />
        </div>
    </a>
    <a href="https://api.whatsapp.com/" target="_blank" title="Whatsapp">
        <div class="chat-div">
            <div class="icon-div" style="background:#25D366;"><i class="bi-whatsapp"></i></div>
            <div class="text">+234-812-700-0262</div>
          <br clear="all" />
        </div>
    </a>

    <a href="https://www.facebook.com/" target="_blank" title="Facebook">
        <div class="chat-div">
            <div class="icon-div" style="background:#2980b9;"><i class="bi-facebook"></i></div>
            <div class="text">Facebook Page </div>
          <br clear="all" />
        </div>
    </a>

    <a href="https://twitter.com/" target="_blank" title="Twitter">
        <div class="chat-div">
            <div class="icon-div" style="background:#3498db;"><i class="bi-twitter"></i></div>
            <div class="text">Twitter Page</div>
          <br clear="all" />
        </div>
    </a>

    <a href="https://www.instagram.com/" target="_blank" title="Instagram">
        <div class="chat-div">
            <div class="icon-div" style="background-image: linear-gradient(to right,#03F, #F0F);"><i class="bi-instagram"></i></div>
            <div class="text">Instagram Page</div>
          <br clear="all" />
        </div>
    </a>
</div>




<div class="index-menu-back-div">

    <div class="top-div">
        <div class="logo-div">
            <a href="<?php echo $websiteUrl ?>">
                <img src="<?php echo $websiteUrl ?>/all-images/images/logo.png"
                     alt="<?php echo $appName ?> Logo"
                     class="animated zoomIn"/>
            </a>
        </div>
    </div>


    <div class="div-in">

        <!-- HOME -->
        <div class="div">
            <a href="<?php echo $websiteUrl?>" title="Home Page">
                <li <?php if ($page == 'index.php') { ?> id="active-li" <?php } ?>>
                    <i class="bi-house"></i> Home
                </li>
            </a>
        </div>


        <!-- ABOUT US -->
        <div class="div">
            <a href="<?php echo $websiteUrl ?>/#" title="About Us">
                <li <?php if ($page == 'about_us') { ?> id="active-li" <?php } ?>>
                    <i class="bi-info-circle"></i> About Us
                </li>
            </a>
        </div>


        <!-- OUR SERVICES -->
        <div class="div">

            <li onclick="_open_li('OurServices')">
                <i class="bi-grid"></i> Our Services
                <i class="bi-plus" id="side-expand"></i>
            </li>

            <div class="sub-li" id="OurServices-sub-li">

                <a href="<?php echo $websiteUrl ?>/#">
                    <li>
                        <i class="bi-house-heart"></i>
                        Supported Living Services
                    </li>
                </a>

                <a href="<?php echo $websiteUrl ?>/our-services">
                    <li>
                        <i class="bi-capsule"></i>
                        Medication Administration
                    </li>
                </a>

                <a href="<?php echo $websiteUrl ?>/our-services">
                    <li>
                        <i class="bi-shield-check"></i>
                        Safety & Accountability
                    </li>
                </a>

                <a href="<?php echo $websiteUrl ?>/our-services">
                    <li>
                        <i class="bi-heart-pulse"></i>
                        Behavioral Support
                    </li>
                </a>

                <a href="<?php echo $websiteUrl ?>/our-services">
                    <li>
                        <i class="bi-exclamation-circle"></i>
                        24/7 Emergency Support
                    </li>
                </a>

                <a href="<?php echo $websiteUrl ?>/our-services">
                    <li>
                        <i class="bi-people"></i>
                        Community & Circles of Support
                    </li>
                </a>

            </div>

        </div>

        <!-- CARE POLICIES -->
        <div class="div">
            <a href="<?php echo $websiteUrl ?>/#" title="Care Policies">
                <li <?php if ($page == 'care-policies') { ?> id="active-li" <?php } ?>>
                    <i class="bi-shield-check"></i> Care Policies
                </li>
            </a>
        </div>


        <!-- RESOURCES -->
        <div class="div">
            <a href="<?php echo $websiteUrl ?>/#" title="Resources">
                <li <?php if ($page == 'resources') { ?> id="active-li" <?php } ?>>
                    <i class="bi-book"></i> Resources
                </li>
            </a>
        </div>


        <!-- CAREERS -->
        <div class="div">
            <a href="<?php echo $websiteUrl ?>/#" title="Careers">
                <li <?php if ($page == 'careers') { ?> id="active-li" <?php } ?>>
                    <i class="bi-briefcase"></i> Careers
                </li>
            </a>
        </div>



    </div>

</div>

<div class="sidenavdiv-in" onclick="_close_side_nav()"></div>
</div>



