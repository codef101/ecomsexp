<header id="header" class="header has-sticky sticky-jump">
    <div class="header-wrapper">
        <div id="top-bar" class="header-top hide-for-sticky nav-dark flex-has-center">
            <div class="flex-row container">
                <div class="flex-col hide-for-medium flex-left">
                    <ul class="nav nav-left medium-nav-center nav-small  nav-line">
                    </ul>
                </div><!-- flex-col left -->

                <div class="flex-col hide-for-medium flex-center">
                    <ul class="nav nav-center nav-small  nav-line">
                        <li class="html header-social-icons ml-0">
                            <div class="social-icons follow-icons "><a href="http://url" target="_blank"
                                    data-label="Facebook" rel="noopener noreferrer nofollow"
                                    class="icon plain facebook tooltip" title="Follow on Facebook"><i
                                        class="icon-facebook"></i></a><a href="http://url" target="_blank"
                                    rel="noopener noreferrer nofollow" data-label="Instagram"
                                    class="icon plain  instagram tooltip" title="Follow on Instagram"><i
                                        class="icon-instagram"></i></a><a href="http://url" target="_blank"
                                    data-label="Twitter" rel="noopener noreferrer nofollow"
                                    class="icon plain  twitter tooltip" title="Follow on Twitter"><i
                                        class="icon-twitter"></i></a><a
                                    href="/cdn-cgi/l/email-protection#9ce5f3e9eedcf9f1fdf5f0" data-label="E-mail"
                                    rel="nofollow" class="icon plain  email tooltip" title="Send us an email"><i
                                        class="icon-envelop"></i></a></div>
                        </li>
                    </ul>
                </div><!-- center -->

                <div class="flex-col hide-for-medium flex-right">
                    <ul class="nav top-bar-nav nav-right nav-small  nav-line">
                    </ul>
                </div><!-- .flex-col right -->

                <div class="flex-col show-for-medium flex-grow">
                    <ul class="nav nav-center nav-small mobile-nav  nav-line">
                        <li class="html header-social-icons ml-0">
                            <div class="social-icons follow-icons "><a href="http://url" target="_blank"
                                    data-label="Facebook" rel="noopener noreferrer nofollow"
                                    class="icon plain facebook tooltip" title="Follow on Facebook"><i
                                        class="icon-facebook"></i></a><a href="http://url" target="_blank"
                                    rel="noopener noreferrer nofollow" data-label="Instagram"
                                    class="icon plain  instagram tooltip" title="Follow on Instagram"><i
                                        class="icon-instagram"></i></a><a href="http://url" target="_blank"
                                    data-label="Twitter" rel="noopener noreferrer nofollow"
                                    class="icon plain  twitter tooltip" title="Follow on Twitter"><i
                                        class="icon-twitter"></i></a><a
                                    href="/cdn-cgi/l/email-protection#f78e988285b7929a969e9b" data-label="E-mail"
                                    rel="nofollow" class="icon plain  email tooltip" title="Send us an email"><i
                                        class="icon-envelop"></i></a></div>
                        </li>
                    </ul>
                </div>

            </div><!-- .flex-row -->
        </div><!-- #header-top -->
        <div id="masthead" class="header-main ">
            <div class="header-inner flex-row container logo-left" role="navigation">

                <!-- Logo -->
                <div id="logo" class="flex-col logo">
                    <!-- Header logo -->
                    <a href="{{ url('') }}" title="EcomsExpert - Your success, our mission" rel="home">
                        <img width="175" height="100"
                            src="https://ecomsexpert.com/wp-content/uploads/2021/02/Final-Logo-01.png"
                            class="header_logo header-logo" alt="EcomsExpert" /><img width="175" height="100"
                            src="https://ecomsexpert.com/wp-content/uploads/2021/02/Final-Logo-01.png"
                            class="header-logo-dark" alt="EcomsExpert" /></a>
                </div>

                <!-- Mobile Left Elements -->
                <div class="flex-col show-for-medium flex-left">
                    <ul class="mobile-nav nav nav-left ">
                    </ul>
                </div>

                <!-- Left Elements -->
                <div class="flex-col hide-for-medium flex-left
        flex-grow">
                    <ul
                        class="header-nav header-nav-main nav nav-left  nav-line-grow nav-size-medium nav-spacing-medium nav-uppercase">
                    </ul>
                </div>

                <!-- Right Elements -->
                <div class="flex-col hide-for-medium flex-right">
                    <ul
                        class="header-nav header-nav-main nav nav-right  nav-line-grow nav-size-medium nav-spacing-medium nav-uppercase">
                        <li id="menu-item-49"
                            class='menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-33 current_page_item  menu-item-49 {{ request()->is('/') ? 'active' : '' }}'>
                            <a href="{{ url('/') }}" class="nav-top-link">Home</a>
                        </li>
                        <li id="menu-item-105"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  menu-item-105 has-dropdown {{ request()->is('about-us') || request()->is('faq') || request()->is('contact-us') ? 'active' : '' }}">
                            <a href="#"
                                class='nav-top-link
                                   '>Company<i
                                    class="icon-angle-down"></i></a>
                            <ul class='nav-dropdown nav-dropdown-bold dropdown-uppercase'>
                                <li id="menu-item-232"
                                    class='menu-item menu-item-type-post_type menu-item-object-page  menu-item-232'>
                                    <a href="{{ url('about-us/') }}">About us</a>
                                </li>
                                <li id="menu-item-274"
                                    class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-274">
                                    <a href="{{ url('contact-us') }}">Contact Us</a>
                                </li>
                                <li id="menu-item-273"
                                    class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-273">
                                    <a href="{{ url('faq') }}">FAQ</a>
                                </li>
                            </ul>
                        </li>
                        <li id="menu-item-109"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  menu-item-109 has-dropdown  {{ request()->is('services/*') ? 'active' : '' }}">
                            <a href="#" class="nav-top-link">Our Services<i class="icon-angle-down"></i></a>
                            <ul class='nav-dropdown nav-dropdown-bold dropdown-uppercase'>
                                <li id="menu-item-701"
                                    class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-701">
                                    <a href="{{ url('services/amazon-account-management') }}">Amazon Account
                                        Management</a>
                                </li>
                                <li id="menu-item-702"
                                    class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-702">
                                    <a href="{{ url('services/product-hunting') }}">Product Hunting</a>
                                </li>
                                <li id="menu-item-703"
                                    class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-703">
                                    <a href="{{ url('services/category-approval') }}">Category Approval</a>
                                </li>
                                <li id="menu-item-704"
                                    class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-704">
                                    <a href="{{ url('services/graphic-designing') }}">Graphic Designing</a>
                                </li>
                                <li id="menu-item-705"
                                    class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-705">
                                    <a href="{{ url('services/supply-chain-management') }}">Supply Chain
                                        Management</a>
                                </li>
                                <li id="menu-item-706"
                                    class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-706">
                                    <a href="{{ url('services/amazon-ppc') }}">Amazon PPC</a>
                                </li>
                                <li id="menu-item-708"
                                    class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-708">
                                    <a href="{{ url('services/walmart-ppc') }}">Walmart PPC</a>
                                </li>
                                <li id="menu-item-707"
                                    class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-707">
                                    <a href="{{ url('services/ebay-seo') }}">eBay SEO</a>
                                </li>
                                <li id="menu-item-711"
                                    class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-711">
                                    <a href="{{ url('services/shopify-account-management') }}">Shopify
                                        Account Management</a>
                                </li>
                                <li id="menu-item-712"
                                    class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-712">
                                    <a href="{{ url('services/walmart-account-management') }}">Walmart
                                        Account Management</a>
                                </li>
                                <li id="menu-item-709"
                                    class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-709">
                                    <a href="{{ url('services/ebay-account-management') }}">Ebay Account
                                        Management</a>
                                </li>
                                <li id="menu-item-710"
                                    class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-710">
                                    <a href="{{ url('services/etsy-account-management') }}">Etsy Account
                                        Management</a>
                                </li>
                            </ul>
                        </li>
                        <li id="menu-item-308"
                            class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-308"><a
                                href="{{ url('blog/') }}" class="nav-top-link">Blog</a></li>
                        <li id="menu-item-503"
                            class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-503"><a
                                href="{{ url('testimonials/') }}" class="nav-top-link">Testimonials</a></li>
                        <li class="header-divider"></li>
                        <li class="html header-button-1">
                            <div class="header-button">
                                <a rel="noopener noreferrer" href="{{ url('appointment/') }}" target="_blank"
                                    class="button secondary is-outline is-medium">
                                    <span>Free Consultation</span>
                                </a>
                            </div>
                        </li>


                        <li class="header-divider"></li>
                        <li class="header-search header-search-dropdown has-icon has-dropdown menu-item-has-children">
                            <a href="#" class="is-small"><i class="icon-search"></i></a>
                            <ul class="nav-dropdown nav-dropdown-bold dropdown-uppercase">
                                <li class="header-search-form search-form html relative has-icon">
                                    <div class="header-search-form-wrapper">
                                        <div class="searchform-wrapper ux-search-box relative form- is-normal">
                                            <form method="get" class="searchform" action="https://ecomsexpert.com/"
                                                role="search">
                                                <div class="flex-row relative">
                                                    <div class="flex-col flex-grow">
                                                        <input type="search" class="search-field mb-0" name="s" value=""
                                                            id="s" placeholder="Search&hellip;" />
                                                    </div><!-- .flex-col -->
                                                    <div class="flex-col">
                                                        <button type="submit"
                                                            class="ux-search-submit submit-button secondary button icon mb-0">
                                                            <i class="icon-search"></i> </button>
                                                    </div><!-- .flex-col -->
                                                </div><!-- .flex-row -->
                                                <div class="live-search-results text-left z-top"></div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul><!-- .nav-dropdown -->
                        </li>
                    </ul>
                </div>

                <!-- Mobile Right Elements -->
                <div class="flex-col show-for-medium flex-right">
                    <ul class="mobile-nav nav nav-right ">
                        <li class="nav-icon has-icon">
                            <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color=""
                                class="is-small" aria-controls="main-menu" aria-expanded="false">

                                <i class="icon-menu"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div><!-- .header-inner -->

            <!-- Header divider -->
            <div class="container">
                <div class="top-divider full-width"></div>
            </div>
        </div><!-- .header-main -->
        <div class="header-bg-container fill">
            <div class="header-bg-image fill"></div>
            <div class="header-bg-color fill"></div>
        </div><!-- .header-bg-container -->
    </div><!-- header-wrapper-->
</header>
