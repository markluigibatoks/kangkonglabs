<footer class="bg-secondary text-white px-6 relative">
    <div class="wrapper">
        <div class="">
            <div class="py-10 lg:pt-[157px] lg:pb-[168px] lg:border-b border-solid border-white">
                <!-- <?php if ( is_active_sidebar( 'footer1-widget-area' ) ) : ?>
                    <?php dynamic_sidebar( 'footer1-widget-area' ); ?>
                <?php endif; ?> -->
                <h2 class="font-unbounded text-2xl md:text-4xl lg:text-6xl font-semibold mb-5 lg:mb-[53px] lg:float-left">Try it Now!</h2>
                <p class="mb-5 lg:float-right lg:max-w-[529px]"><strong class="company-name">Kangkonglabs</strong> is a web design and development agency dedicated to pushing the boundaries of digital aesthetics and functionality.</p>

                <p class="lg:float-right lg:max-w-[529px]">Our team of passionate designers, developers, and creative thinkers work together to craft custom websites that not only captivate but also convert. We understand that your website is often the first interaction a customer will have with your brand, and we want to make sure it's a memorable one, no matter where they view it.</p>

                <a href="#" class="lg:mt-0 mt-5 hover:bg-white hover:text-secondary px-6 py-3 text-white border border-solid border-white rounded-[22px] block no-underline lg:clear-left max-w-max">Get Started <i class="fa-solid fa-arrow-right -rotate-45"></i></a>
            </div>

            <div class="py-10 block relative lg:clear-both lg:pt-[178px] lg:pb-[231px] lg:flex gap-6 justify-between">
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => 'nav',
                        'container_class' => 'hidden lg:block',
                        'menu_class' => '',
                    ));
                ?>

                <div class="hidden lg:block">
                    <ul>
                        <li>Web Maintenance</li>
                        <li>Web Hosting</li>
                        <li>SEO Optimization</li>
                        <li>Graphic Design</li>
                        <li>Custom Website Design</li>
                    </ul>
                </div>

                <div class="hidden lg:block">
                    <!-- <?php if ( is_active_sidebar( 'footer2-widget-area' ) ) : ?>
                        <?php dynamic_sidebar( 'footer2-widget-area' ); ?>
                    <?php endif; ?> -->
                    <ul>
                        <li>P: 123-456-7890</li>
                        <li>E: info@samplemail.com</li>
                    </ul>
                </div>

                <div class="lg:hidden">
                    <details class="py-2">
                        <summary class="relative pr-6 list-none pb-3 border-b-2 border-solid border-[#e4e4e4] mb-4">Learn <i class="fa-solid fa-chevron-down absolute right-0"></i></summary>
                        <ul>
                            <li>Home</li>
                            <li>About  Kangkonglabs</li>
                            <li>Request Form</li>
                            <li>Portfolio</li>
                            <li>Testimonials</li>
                            <li>Blog</li>
                        </ul>
                    </details>
                    <details class="py-2">
                        <summary class="relative pr-6 list-none pb-3 border-b-2 border-solid border-[#e4e4e4] mb-4">Services <i class="fa-solid fa-chevron-down absolute right-0"></i></summary>
                        <ul>
                            <li>Web Maintenance</li>
                            <li>Web Hosting</li>
                            <li>SEO Optimization</li>
                            <li>Graphic Design</li>
                            <li>Custom Website Design</li>
                        </ul>
                    </details>
                    <details class="py-2">
                        <summary class="relative pr-6 list-none pb-3 border-b-2 border-solid border-[#e4e4e4] mb-4">Info <i class="fa-solid fa-chevron-down absolute right-0"></i></summary>
                        <!-- <?php if ( is_active_sidebar( 'footer4-widget-area' ) ) : ?>
                            <?php dynamic_sidebar( 'footer4-widget-area' ); ?>
                        <?php endif; ?> -->
                        <ul>
                            <li>P: 123-456-7890</li>
                            <li>E: info@samplemail.com</li>
                        </ul>
                    </details>
                </div>

                <div class="lg:max-w-[314px]">
                    <a href="/">
                        <div class="static mb-5 lg:mb-0 max-w-[197px] w-full lg:absolute top-12">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" alt="Kangkong Labs Logo">
                        </div>
                    </a>

                    <!-- <?php if ( is_active_sidebar( 'footer3-widget-area' ) ) : ?>
                        <?php dynamic_sidebar( 'footer3-widget-area' ); ?>
                    <?php endif; ?> -->
                    <p>At <strong class="company-name">Kangkonglabs</strong>, we believe in building strong, lasting relationships with our clients and partners. Whether you're interested in collaborating with us on a new project, need help with a product, or simply want to discuss an idea, we are always available to chat.</p>
                </div>

                <div class="static text-center mt-10 lg:mt-0 lg:absolute top-[58px] left-0">
                    <small>&copy; Copyright <?php echo date('Y'); ?> <i class="not-italic">|</i> <span>Designed by KangkongLabs</span></small>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
