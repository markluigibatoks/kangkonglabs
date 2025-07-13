<?php get_header() ?>

<div class="relative">
    <div class="hidden lg:block absolute top-0 left-0 -z-10 max-w-[883px] h-[863px] w-full">
        <div class="max-w-[591px] -z-10">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/grid-lines.png" alt="grid lines design">
        </div>
        <div class="absolute top-0 h-full w-full bg-gradient-to-br from-transparent via-white via-30% to-white">
            
        </div>
    </div>

    <div class="wrapper">
        <div class="relative flex-col lg:flex-row flex justify-between gap-10 pb-5 lg:pt-[206px] lg:pb-[83px] lg:pl-[124px] lg:pr-8 xl:pr-0">
            <div class="relative order-2 px-6 lg:order-1">
                <div class="hidden lg:block w-[685px] absolute top-3 left-[292px] -z-10 pointer-events-none select-none overflow-hidden">
                    <img src="<?php echo esc_url(get_template_directory_uri())?>/assets/images/banner-dashed-design.svg" alt="dashed curve lines" />
                </div>

                <?php if ( is_active_sidebar( 'banner-widget-area' ) ) : ?>
                    <?php dynamic_sidebar( 'banner-widget-area' ); ?>
                <?php endif; ?>
                <!-- <h2 class="mb-5 text-2xl font-semibold text-black md:text-4xl font-unbounded lg:text-8xl xl:text-8xl lg:text-right lg:mb-10">Beautiful <span class="lg:block">Website</span> <em class="relative not-italic lg:block lg:font-public-sans lg:font-normal lg:text-2xl">in any screen</em></h2>

                <p class="lg:max-w-[331px] relative">Our mission is to create beautiful, functional solutions that elevate your brand and engage your audience.</p> -->
            </div>

            <div class="lg:max-w-[394px] h-[300px] lg:h-[481px] relative lg:mt-[66px] order-1 lg:order-2">
                <div class="lg:-z-10 absolute lg:bottom-0 lg:left-[unset] -right-[27px] lg:w-[155px] lg:h-[155px] w-28 h-28 lg:top-[calc(50% - 80px)] top-10 left-10 z-10 bg-tertiary overflow-hidden rounded-full blur-3xl"></div>
                <div class="bg-white/70 z-20 left-10 top-10 lg:w-40 lg:h-40 w-28 h-28 bg-[rgba(242, 242, 242, 0.58)] rounded-full absolute lg:top-1/2 lg:left-[-80px] lg:-translate-y-1/2  backdrop-blur-xs">
                    <svg class="w-[inherit] h-[inherit]" width="160" height="160" viewBox="0 0 160 160" style="display:block;">
                        <!-- Outer circle with 22px padding from SVG edge, no outline -->
                        <circle cx="80" cy="80" r="58" fill="none" stroke="none"/>
                        
                        <!-- Rotating text group -->
                        <g class="animate-[spin_6s_linear_infinite] origin-center">
                            <defs>
                            <path id="circlePath"
                                d="M80,80 m-58,0 a58,58 0 1,1 116,0 a58,58 0 1,1 -116,0"/>
                            </defs>
                            <text font-size="11" font-family="sans-serif" fill="#222" letter-spacing="1.45">
                            <textPath href="#circlePath" startOffset="0%">
                                • Get Started Now! • Get Started Now! • Get Started Now!
                            </textPath>
                            </text>
                        </g>
                        
                        <!-- Play button (yellow triangle) centered -->
                        <polygon points="98,80 74,66 74,94" fill="#FFD600"/>
                    </svg>
                </div>

                <img class="object-cover w-full h-full lg:rounded-4xl" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/best-web-design.jpg" alt="best web design image"/>
            </div>

            <div class="hidden lg:block w-[189px] h-[243px] absolute lg:left-6 xl:left-0 bottom-0">
                <img class="object-cover rounded-4xl" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/banner-design-image.jpg" alt="people choosing a color for design" />
            </div>
        </div>
    </div>
</div>

<main class="relative px-6">
    <div class="wrapper">
        <div class="py-5 relative lg:pt-[56px] lg:pb-[116px] lg:pl-[469px]">
            <div class="max-w-[300px] relative top-0 lg:absolute left-0 lg:top-[165px] lg:max-w-[620px] w-full">
                <div class="-z-10 absolute -bottom-[18px] right-[107px] w-[155px] h-[155px] bg-tertiary overflow-hidden rounded-full blur-3xl"></div>
                <img src="<?php echo esc_url(get_template_directory_uri())?>/assets/images/main-image.png" alt="laptop and smartphone displaying a responsive website design"/>
            </div>
            <section class="faq">
                <div class="hidden lg:block absolute -top-[279px] -left-[110px] -z-10 pointer-events-none select-none overflow-hidden">
                    <img src="<?php echo esc_url(get_template_directory_uri())?>/assets/images/main-dashed-design.svg" alt="dashed curve lines"/>
                </div>

                <?php if ( is_active_sidebar( 'main-widget-area' ) ) : ?>
                    <?php dynamic_sidebar( 'main-widget-area' ); ?>
                <?php endif; ?>

                <!-- <h1 class="font-unbounded text-2xl md:text-4xl lg:text-6xl font-semibold text-black mb-5">Kangkonglabs</h1>

                <p class="before:absolute before:top-1 before:-left-[58px] before:w-5 before:h-5 before:rounded-full before:bg-tertiary before:lg:block before:hidden relative lg:ml-[127px] lg:mb-[71px] lg:max-w-[529px]"><strong class="company-name">Kangkonglabs</strong> is a web design and development agency dedicated to pushing the boundaries of digital aesthetics and functionality.
                <br /> <br />
                Our team of passionate designers, developers, and creative thinkers work together to craft custom websites that not only captivate but also convert. We understand that your website is often the first interaction a customer will have with your brand, and we want to make sure it's a memorable one, no matter where they view it.</p>

                <details class="mt-10 mb-4 lg:mt-0 lg:mb-10 lg:ml-[206px]">
                    <summary class="relative pr-6 list-none pb-3 border-b-2 border-solid border-[#e4e4e4]">What is the core mission of <strong class="company-name">Kangkonglabs</strong>? <i class="absolute right-0 ml-10 text-sm fa-solid fa-chevron-down"></i></summary>
                    <p>The core mission of <strong class="company-name">Kangkonglabs</strong> is to empower businesses and individuals by creating beautiful, functional, and user-friendly websites. We focus on delivering digital solutions that not only look great but also drive engagement and results, helping our clients grow and succeed online.</p>
                </details>

                <details class="lg:ml-[246px]">
                    <summary class="relative pr-6 list-none pb-3 border-b-2 border-solid border-[#e4e4e4]">Why Choose <strong class="company-name">Kangkonglabs</strong> for Your Website? <i class="absolute right-0 ml-10 text-sm fa-solid fa-chevron-down"></i></summary>
                    <p><strong class="company-name">Kangkonglabs</strong> combines creativity, technical expertise, and a client-focused approach to deliver custom web solutions tailored to your needs. Our team is dedicated to quality, transparency, and ongoing support, ensuring your website stands out and performs well on any device.</p>
                </details> -->

                <div class="hidden lg:block absolute -bottom-[634px] right-0 -z-10 pointer-events-none select-none overflow-hidden">
                    <div class="block absolute top-[321px] left-[377px] w-5 h-5 rounded-full bg-tertiary"></div>
                    
                    <img class="relative" src="<?php echo esc_url(get_template_directory_uri())?>/assets/images/services-dashed-design.svg" alt="dashed curve lines"/>
                </div>
            </section>
        </div>
    </div>
</main>

<div class="relative px-6">
    <div class="wrapper">
        <div class="py-5 lg:pt-[78px]">
            <div class="service-description">
                <?php if ( is_active_sidebar( 'middle-widget-area' ) ) : ?>
                    <?php dynamic_sidebar( 'middle-widget-area' ); ?>
                <?php endif; ?>
                <!-- <h2 class="font-unbounded text-2xl md:text-4xl lg:text-6xl font-semibold text-black lg:mb-[38px] mb-5">Our Service</h2>
                <p class="before:lg:block before:hidden before:absolute before:top-0 before:-left-[58px] before:w-5 before:h-5 before:rounded-full before:bg-tertiary relative lg:ml-[127px] lg:max-w-[529px]">At <strong class="company-name">Kangkonglabs</strong>, we are passionate about creating innovative solutions that drive success. Whether you're a startup looking to build your first digital presence, or an established enterprise aiming to elevate your online experience, we offer a range of services designed to meet your unique needs</p> -->
            </div>
            <div class="lg:max-w-[904px] mx-auto relative flex justify-center lg:items-start md:gap-5 lg:gap-[30px] flex-wrap lg:mt-[38px]">
                <div class="each-service mt-5 p-5 rounded-2xl md:max-w-[calc(50%-10px)] lg:max-w-[437px] lg:min-h-[433px] lg:p-16 w-full bg-[#f2f2f2]/65 border-2 border-solid border-[rgba(209 209 209, 1)] lg:mt-[58px] lg:rounded-tl-[59px]">
                    <em class="not-italic block font-unbounded font-medium text-lg">$$$$</em>
                    <h3 class="font-unbounded font-medium text-lg mt-5 mb-4">Web Hosting and <span class="block">Maintenance</span></h3>
                    <p>This package includes all the essentials for maintaining a smooth and secure online presence.</p>
                    <ul class="mt-4 list-disc list-inside">
                        <li>1 Website Hosting on Shared Server</li>
                        <li>10GB SSD Storage</li>
                        <li>1 Free Domain Name (for the first year)</li>
                        <li>1 Website Email Account</li>
                        <li>99.9% Uptime Guarantee</li>
                    </ul>

                    <button type="button" class="hover:text-black text-2xl -rotate-45 block mt-5 cursor-pointer">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>

                <div class="each-service mt-5 p-5 rounded-2xl md:max-w-[calc(50%-10px)] lg:max-w-[437px] lg:min-h-[433px] lg:p-16 w-full bg-[#f2f2f2]/65 border-2 border-solid border-[rgba(209, 209, 209, 1)] lg:rounded-tr-[59px]">
                    <em class="not-italic block font-unbounded font-medium text-lg">$$$$</em>
                    <h3 class="font-unbounded font-medium text-lg mt-5 mb-4">SEO <span class="block">Optimization</span></h3>
                    <p>At <strong class="company-name">Kangkonglabs</strong>, we offer comprehensive SEO optimization services designed to increase your website&apos;s visibility, drive organic traffic, and improve search engine rankings.</p>
                    <ul class="mt-4 list-disc list-inside">
                        <li>Website Audit & Analysis</li>
                        <li>On-Page SEO Optimization</li>
                        <li>Reporting & Analytics</li>
                    </ul>

                    <button type="button" class="hover:text-black text-2xl -rotate-45 block mt-5 cursor-pointer">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>

                <div class="each-service mt-5 p-5 rounded-2xl md:max-w-[calc(50%-10px)] lg:max-w-[437px] lg:min-h-[433px] lg:p-16 w-full bg-[#f2f2f2]/65 border-2 border-solid border-[rgba(209, 209, 209, 1)] lg:rounded-bl-[59px]">
                    <em class="not-italic block font-unbounded font-medium text-lg">$$$$</em>
                    <h3 class="font-unbounded font-medium text-lg mt-5 mb-4">Custom Website <span class="block">Design</span></h3>
                    <p>Ideal for growing businesses or brands that need a more robust and customized website with additional features.</p>
                    <ul class="mt-4 list-disc list-inside">
                        <li>Up to 10 Pages (Home, About, Services, Team, Blog, Portfolio, Testimonials, Contact, etc.)</li>
                        <li>Fully Responsive Design (Mobile, Tablet, Desktop)</li>
                    </ul>

                    <button type="button" class="hover:text-black text-2xl -rotate-45 block mt-5 cursor-pointer">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>

                <div class="each-service mt-5 p-5 rounded-2xl md:max-w-[calc(50%-10px)] lg:max-w-[437px] lg:min-h-[433px] lg:p-16 w-full bg-[#f2f2f2]/65 border-2 border-solid border-[rgba(209, 209, 209, 1)] lg:rounded-br-[59px] lg:-mt-[59px]">
                    <em class="not-italic block font-unbounded font-medium text-lg">$$$$</em>
                    <h3 class="font-unbounded font-medium text-lg mt-5 mb-4">View More <span class="block">Services</span></h3>
                    <p>We specialize in providing customized solutions for businesses of all sizes, across various industries. Explore our diverse services below to see how we can help you achieve your goals.</p>

                    <button type="button" class="hover:text-black text-2xl -rotate-45 block mt-5 cursor-pointer">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>

                <div class="hidden lg:block -z-10 absolute -top-5 -right-[23px] w-[155px] h-[155px] bg-tertiary overflow-hidden rounded-full blur-3xl"></div>
            </div>
        </div>
    </div>
</div>

<div class="relative px-6">
    <div class="max-w-[1258px] mx-auto">
        <div class="lg:pt-[133px] lg:pb-0 py-5">
            <div class="bg-secondary py-10 px-5 lg:py-[116px] lg:px-[267px] rounded-4xl text-white text-center">
                <?php if ( is_active_sidebar( 'bottom1-widget-area' ) ) : ?>
                    <?php dynamic_sidebar( 'bottom1-widget-area' ); ?>
                <?php endif; ?>
                <!-- <h2 class="font-unbounded font-semibold text-2xl lg:text-4xl lg:mb-8 mb-5">Want to start your business?</h2>
                <p><strong class="company-name">Kangkonglabs</strong> is a web design and development agency dedicated to pushing the boundaries of digital aesthetics and functionality.</p>
                <a href="#" class="border border-solid border-white py-[10px] px-[23px] rounded-4xl no-underline text-white mt-8 inline-block hover:bg-white hover:text-black">Get Started <i class="fa-solid fa-arrow-right -rotate-45"></i></a> -->

                <div class="-z-10 absolute -bottom-[56px] left-1/2 -translate-x-1/2 w-[293px] h-[293px] bg-tertiary overflow-hidden rounded-full blur-3xl"></div>
            </div>
        </div>
    </div>
</div>

<div class="relative px-6">
    <div class="wrapper">
        <div class="lg:pt-[135px] lg:pb-0 py-5">
            <div class="lg:pr-[190px] relative">
                <?php if ( is_active_sidebar( 'bottom2-widget-area' ) ) : ?>
                    <?php dynamic_sidebar( 'bottom2-widget-area' ); ?>
                <?php endif; ?>
                <!-- <h2 class="font-unbounded font-semibold text-black text-2xl md:text-4xl lg:text-6xl lg:mb-9 mb-5">Latest Projects</h2>
                <p class="relative lg:ml-[127px] before:absolute before:top-0 before:-left-[58px] before:w-5 before:h-5 before:rounded-full before:bg-tertiary">Our latest project, the AI-Powered Sustainability Platform, aims to provide businesses with the tools they need to reduce their environmental impact while enhancing operational efficiency.</p>
                <a href="/portfolio" class="hover:bg-primary hover:text-white border border-solid border-primary py-[10px] px-[23px] rounded-[22px] text-primary no-underline lg:absolute lg:top-[16px] lg:right-0 mt-5 block max-w-max lg:mt-0">Explore More <i class="fa-solid fa-arrow-right -rotate-45"></i></a> -->

                <div class="hidden lg:block w-[685px] absolute -top-[468px] -left-[120px] -z-10 pointer-events-none select-none overflow-hidden">
                    <img src="<?php echo esc_url(get_template_directory_uri())?>/assets/images/bottom2-dashed-design.svg" alt="dashed curve lines"/>
                </div>
            </div>
            <div class="lg:mt-[78px] mt-10 flex flex-wrap md:flex-nowrap md:gap-5 gap-10 justify-center">
                <div class="lg:max-w-[484px] w-full">
                    <div class="h-[300px] lg:h-[385px] w-full lg:w-full">
                        <img class="h-full w-full rounded-[45px] object-cover" src="<?php echo esc_url(get_template_directory_uri())?>/assets/images/project-1.jpg" alt="group making website plans" />
                    </div>
                    <h3 class="font-unbounded font-medium lg:mt-[52px] lg:mb-6 my-5">Dummy Business Name</h3>
                    <p>This dummy content provides a basic structure for the website. It&apos;s designed to give you an idea of where the real information would go, and you can replace it with actual details when you&apos;re ready to launch your website.</p>
                </div>

                <div class="lg:max-w-[484px] w-full">
                    <div class="h-[300px] lg:h-[385px] w-full lg:w-full">
                        <img class="h-full w-full rounded-[45px] object-cover" src="<?php echo esc_url(get_template_directory_uri())?>/assets/images/project-2.jpg" alt="group making website plans" />
                    </div>
                    <h3 class="font-unbounded font-medium lg:mt-[52px] lg:mb-6 my-5">Dummy Business Name</h3>
                    <p>This dummy content provides a basic structure for the website. It&apos;s designed to give you an idea of where the real information would go, and you can replace it with actual details when you&apos;re ready to launch your website.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="relative px-6">
    <div class="wrapper">
        <div class="lg:pt-[137px] lg:pb-0 py-5">
            <?php if ( is_active_sidebar( 'bottom3-widget-area' ) ) : ?>
                    <?php dynamic_sidebar( 'bottom3-widget-area' ); ?>
                <?php endif; ?>
            <!-- <h2 class="font-unbounded font-semibold text-2xl md:text-4xl lg:text-6xl text-black text-center lg:mb-12 mb-5">What People Say</h2> -->
            <div class="lg:max-w-[994px] w-full mx-auto relative">
                <div class="lg:hidden block">
                    <div class="navigation">
                        <div class="absolute top-1/2 -translate-y-1/2 -left-[16px] z-10 flex justify-center items-center w-10 h-10 rounded-full bg-tertiary shadow-2xs text-white">
                            <i class="fa-solid fa-arrow-left"></i>
                        </div>

                        <div class="absolute top-1/2 -translate-y-1/2 -right-[16px] z-10 flex justify-center items-center w-10 h-10 rounded-full bg-tertiary shadow-2xs text-white">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center flex-col sm:flex-row lg:gap-6 gap-5 relative">
                    <div class="w-full p-8 sm:pt-[63px] sm:px-[50px] sm:pb-[150px] text-white border border-solid border-primary sm:max-w-[484px] rounded-4xl md:rounded-[59px] bg-secondary/65 backdrop-blur-xs">
                        <i class="fa-solid fa-quote-right text-4xl block mb-4"></i>
                        <p>This dummy content provides a basic structure for the website. It&apos;s designed to give you an idea of where the real information would go, and you can replace it with actual details when you&apos;re ready to launch your website.</p>
                        <div class="mt-5 sm:mt-0 sm:absolute sm:bottom-10 lg:bottom-12 w-full flex flex-col lg:flex-row justify-between items-center lg:gap-6 sm:px-[50px] mx-auto left-0">
                            <div class="flex flex-col sm:flex-row items-center gap-3">
                                <div class="w-14 h-14 md:w-18 md:h-18">
                                    <img class="object-cover w-full h-full rounded-full" src="<?php echo esc_url(get_template_directory_uri())?>/assets/images/testimonial-1.jpg" alt="client image" />
                                </div>
                                <div class="client-name-title">
                                    <strong class="font-medium text-lg md:text-xl whitespace-nowrap">Client Name</strong>
                                    <em class="text-tertiary block not-italic text-sm md:text-base">sub-content</em>
                                </div>
                            </div>
                            <div class="text-tertiary">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>

                    <div class="hidden sm:block w-full p-8 sm:pt-[63px] sm:px-[50px] sm:pb-[150px] text-white border border-solid border-primary sm:max-w-[484px] rounded-4xl md:rounded-[59px] bg-secondary/65 backdrop-blur-xs">
                        <i class="fa-solid fa-quote-right text-4xl block mb-4"></i>
                        <p>This dummy content provides a basic structure for the website. It&apos;s designed to give you an idea of where the real information would go, and you can replace it with actual details when you&apos;re ready to launch your website.</p>
                        <div class="mt-5 sm:mt-0 sm:absolute sm:bottom-10 lg:bottom-12 w-full flex flex-col lg:flex-row justify-between items-center lg:gap-6 sm:px-[50px] mx-auto left-0">
                            <div class="flex flex-col sm:flex-row items-center gap-3">
                                <div class="w-14 h-14 md:w-18 md:h-18">
                                    <img class="object-cover w-full h-full rounded-full" src="<?php echo esc_url(get_template_directory_uri())?>/assets/images/testimonial-1.jpg" alt="client image" />
                                </div>
                                <div class="client-name-title">
                                    <strong class="font-medium text-lg md:text-xl whitespace-nowrap">Client Name</strong>
                                    <em class="text-tertiary block not-italic text-sm md:text-base">sub-content</em>
                                </div>
                            </div>
                            <div class="text-tertiary">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="relative px-6">
    <div class="wrapper">
        <div class="lg:pt-[137px] lg:pb-[123px] py-5">
            <div class="lg:pr-[190px] relative">
                <?php if ( is_active_sidebar( 'bottom4-widget-area' ) ) : ?>
                    <?php dynamic_sidebar( 'bottom4-widget-area' ); ?>
                <?php endif; ?>
                <!-- <h2 class="font-unbounded font-semibold text-black text-2xl md:text-4xl lg:text-6xl lg:mb-[38px] mb-5">Our Blog Articles</h2>
                <p class="relative before:hidden before:lg:block before:absolute before:top-0 before:-left-[58px] before:w-5 before:h-5 before:rounded-full before:bg-tertiary">Whether you're a small startup or a large enterprise, our blog articles are packed with actionable tips, industry trends, and expert insights to help you thrive online.</p>
                <a href="/blog" class="mt-5 lg:mt-0 hover:bg-primary hover:text-white border border-solid border-primary px-6 py-3 rounded-[22px] text-primary no-underline max-w-max block lg:absolute lg:top-[90px] lg:right-0">View More <i class="fa-solid fa-arrow-right -rotate-45"></i></a> -->

                <div class="hidden lg:block w-[685px] absolute -top-[470px] left-[556px] -z-10 pointer-events-none select-none overflow-hidden">
                    <div class="block absolute top-[481px] left-[405px] w-5 h-5 rounded-full bg-tertiary"></div>
                    <img src="<?php echo esc_url(get_template_directory_uri())?>/assets/images/bottom4-dashed-design.svg" alt="dashed curve lines"/>
                </div>
            </div>
            <div class="lg:mt-20 mt-10 flex sm:flex-row flex-col sm:gap-5 gap-10 justify-center">
                <?php
                    if(have_posts()) {
                        
                        $recent_blog_posts = new WP_Query(array(
                            "posts_per_page" => 2,
                            "post_status" => 'publish'
                        ));

                        while($recent_blog_posts->have_posts()) {
                            $recent_blog_posts->the_post();

                            $first_img_url = null;
                            $content = get_the_content();
                            $content_no_img = preg_replace('/<img[^>]+src=["\']([^"\']+)["\'][^>]*>/i', '', $content, 1);
                            if (preg_match('/<img[^>]+src=["\']([^"\']+)["\']/i', $content, $matches)) {
                                $first_img_url = $matches[1];
                            }
                ?>
                        
                            <div class="md:max-w-[484px] w-[calc(50% - 16px]">
                                <?php
                                    if(isset($first_img_url)) {
                                ?>
                                    <div class="md:max-w-[484px] w-full h-[300px] md:h-[385px]">
                                        <img class="rounded-[45px] w-full h-full object-cover" src="<?php echo esc_url($first_img_url)?>" alt="group making website plans" />
                                    </div>
                                <?php
                                    }
                                    else {
                                ?>
                                    <div class="flex justify-center items-center w-full h-[385px] bg-secondary rounded-[45px] p-6">
                                        <img class="object-contain max-w-[200px] w-full h-full" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" alt="Kangkong Labs Logo">
                                    </div>
                                <?php
                                    }
                                ?>
                                
                                <h3 class="lg:mt-[52px] mt-5 lg:mb-6 font-unbounded font-medium">
                                    <a class="no-underline text-inherit hover:underline" href="<?php the_permalink() ?>"><?php the_title()?></a>
                                </h3>
                                <p><?php echo wp_trim_words($content_no_img, 18)?> <a class="text-secondary font-bold no-underline hover:underline" href="<?php the_permalink()?>">Read More</a></p>
                            </div>
                        
                <?php
                        wp_reset_postdata();
                    }
                    } else {
                        echo "No posts found";
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>