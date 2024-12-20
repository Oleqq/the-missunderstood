<?php
/**
 * Template Name: Blog Overview
 * Template Post Type: page
 *
 *
 */
get_header();
?>

<main>

    <section class="travel-articles">
        <div class="container">
            <h3 class="section-title text-center text-left--mobile">
                TRAVEL
            </h3>

            <p class="section-subtitle text-center text-left--mobile">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            </p>

            <!-- articles desktop -->
            <div class="travel-articles__wrapper travel-articles__wrapper--desktop">
                <div class="travel-articles__col travel-articles__left">
                    <?php
                    $query_left = new WP_Query([
                        'posts_per_page' => 2,
                        'offset' => 0
                    ]);
                    if ($query_left->have_posts()) :
                        while ($query_left->have_posts()) : $query_left->the_post(); ?>
                            <a class="travel-articles__card">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" />
                                <?php endif; ?>

                                <h4><?php the_title(); ?></h4>
                                <p><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                                <p class="product-list__link">READ MORE</p>
                            </a>
                        <?php endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>

                <div class="travel-articles__center">
                    <div class="travel-articles__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle 245 (2).jpg" alt="" />
                    </div>
                </div>

                <div class="travel-articles__col travel-articles__right">
                    <?php
                    $query_right = new WP_Query([
                        'posts_per_page' => 2,
                        'offset' => 2
                    ]);
                    if ($query_right->have_posts()) :
                        while ($query_right->have_posts()) : $query_right->the_post(); ?>
                            <a class="travel-articles__card">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" />
                                <?php endif; ?>

                                <h4><?php the_title(); ?></h4>
                                <p><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                                <p class="product-list__link">READ MORE</p>
                            </a>
                        <?php endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>

            <!-- articles mobile -->
            <div class="travel-articles__wrapper travel-articles__wrapper--mobile">
                <div class="travel-articles__center">
                    <div class="travel-articles__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle-245.jpg" alt="Main Article" />
                    </div>
                </div>

                <div class="section-divider__border">
                    <!-- divider -->
                </div>

                <div class="travel-articles__col travel-articles__col--mobile">
                    <?php
                    $query_mobile = new WP_Query([
                        'posts_per_page' => 4
                    ]);
                    if ($query_mobile->have_posts()) :
                        while ($query_mobile->have_posts()) : $query_mobile->the_post(); ?>
                            <a class="travel-articles__card">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" />
                                <?php endif; ?>

                                <h4><?php the_title(); ?></h4>
                                <p><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                                <p class="product-list__link">READ MORE</p>
                            </a>
                        <?php endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>

            
        </div>
    </section>

    <section class="travel-guides">
        <div class="container">
            <h3 class="section-title--secondary">
                TRAVEL GUIDES
            </h3>

            <div class="travel-guides__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a class="travel-guides__card" href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle 252 (1).jpg" alt="" />
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a class="travel-guides__card" href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle 252 (1).jpg" alt="" />
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a class="travel-guides__card" href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle 252 (1).jpg" alt="" />
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a class="travel-guides__card" href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle 252 (1).jpg" alt="" />
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a class="travel-guides__card" href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle 252 (1).jpg" alt="" />
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a class="travel-guides__card" href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle 252 (1).jpg" alt="" />
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a class="travel-guides__card" href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle 252 (1).jpg" alt="" />
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a class="travel-guides__card" href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle 252 (1).jpg" alt="" />
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a class="travel-guides__card" href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle 252 (1).jpg" alt="" />
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a class="travel-guides__card" href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle 252 (1).jpg" alt="" />
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a class="travel-guides__card" href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle 252 (1).jpg" alt="" />
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a class="travel-guides__card" href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle 252 (1).jpg" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="info-section">
        <div class="container">
            <div class="info-section__wrapper">
                <div class="info-section__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle 254.jpg" alt="" />
                </div>

                <div class="info-section__info">
                    <div class="info-section__text">
                        <h3 class="section-title">
                            Quis autem vel eum iure reprehenderit qui in ea
                        </h3>

                        <p class="section-subtitle">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>

                    <div class="info-section__cards swiper">
                        <div class="swiper-wrapper">
                            <div class="info-section__card swiper-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle 256.jpg" alt="" />
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur
                                </p>
                            </div>
                            <div class="info-section__card swiper-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle 256.jpg" alt="" />
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur
                                </p>
                            </div>
                            <div class="info-section__card swiper-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle 256.jpg" alt="" />
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="article-categories">
        <div class="container">
            <h3 class="section-title text-center text-sm--mobile">
                Destinations
            </h3>

            <div class="article-categories__wrapper">
                <h3 class="section-title--secondary text-center--mobile">
                    CITY GUIDES
                </h3>

                <div class="article-category">
                    <a class="travel-articles__card">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle 244.jpg" alt="" />

                        <h4>
                            Article Title Here
                        </h4>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        </p>

                        <p class="product-list__link">
                            READ MORE
                        </p>
                    </a>

                    <a class="travel-articles__card">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle 244.jpg" alt="" />

                        <h4>
                            Article Title Here
                        </h4>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        </p>

                        <p class="product-list__link">
                            READ MORE
                        </p>
                    </a>

                    <a class="travel-articles__card">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle 244.jpg" alt="" />

                        <h4>
                            Article Title Here
                        </h4>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        </p>

                        <p class="product-list__link">
                            READ MORE
                        </p>
                    </a>

                    <a class="travel-articles__card">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle 244.jpg" alt="" />

                        <h4>
                            Article Title Here
                        </h4>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        </p>

                        <p class="product-list__link">
                            READ MORE
                        </p>
                    </a>
                </div>
            </div>

            <div class="article-categories__wrapper">
                <h3 class="section-title--secondary text-center--mobile">
                    NATURE
                </h3>

                <div class="article-category">
                    <a class="travel-articles__card">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle 244.jpg" alt="" />

                        <h4>
                            Article Title Here
                        </h4>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        </p>

                        <p class="product-list__link">
                            READ MORE
                        </p>
                    </a>

                    <a class="travel-articles__card">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle 244.jpg" alt="" />

                        <h4>
                            Article Title Here
                        </h4>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        </p>

                        <p class="product-list__link">
                            READ MORE
                        </p>
                    </a>

                    <a class="travel-articles__card">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle 244.jpg" alt="" />

                        <h4>
                            Article Title Here
                        </h4>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        </p>

                        <p class="product-list__link">
                            READ MORE
                        </p>
                    </a>

                    <a class="travel-articles__card">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle 244.jpg" alt="" />

                        <h4>
                            Article Title Here
                        </h4>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        </p>

                        <p class="product-list__link">
                            READ MORE
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-banner">
        <div class="container">
            <div class="cta-banner__wrapper">
                <div class="cta-banner__form">
                    <h3>
                        Nam libero tempore soluta nobis
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </p>

                    <div class="cta-banner__input">
                        <input type="email" name="" id="" placeholder="youremail@address.com" />
                        <button>
                            SUBMIT
                        </button>
                    </div>

                    <div class="cta-banner__socials">
                        <a href="">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M28 14C28 6.26719 21.7328 0 14 0C6.26719 0 0 6.26719 0 14C0 21.7328 6.26719 28 14 28C14.082 28 14.1641 28 14.2461 27.9945V17.1008H11.2383V13.5953H14.2461V11.0141C14.2461 8.02266 16.0727 6.39297 18.7414 6.39297C20.0211 6.39297 21.1203 6.48594 21.4375 6.52969V9.65781H19.6C18.1508 9.65781 17.8664 10.3469 17.8664 11.3586V13.5898H21.3391L20.8852 17.0953H17.8664V27.4586C23.718 25.7797 28 20.393 28 14Z"
                                    fill="#0B0B0B"
                                />
                            </svg>
                        </a>
                        <a href="">
                            <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_192_32)">
                                    <path
                                        d="M17.5464 14C17.5464 15.48 16.3467 16.6797 14.8667 16.6797C13.3867 16.6797 12.187 15.48 12.187 14C12.187 12.52 13.3867 11.3203 14.8667 11.3203C16.3467 11.3203 17.5464 12.52 17.5464 14Z"
                                        fill="#0B0B0B"
                                    />
                                    <path
                                        d="M21.1334 9.25885C21.0046 8.90979 20.7991 8.59384 20.5321 8.3345C20.2727 8.06747 19.957 7.86197 19.6077 7.73315C19.3245 7.62314 18.8989 7.49219 18.1151 7.45651C17.2673 7.41785 17.0131 7.40952 14.8666 7.40952C12.7199 7.40952 12.4657 7.41763 11.618 7.4563C10.8342 7.49219 10.4085 7.62314 10.1254 7.73315C9.77615 7.86197 9.46021 8.06747 9.20108 8.3345C8.93405 8.59384 8.72855 8.90958 8.59952 9.25885C8.4895 9.54211 8.35855 9.96786 8.32288 10.7516C8.28421 11.5993 8.27588 11.8535 8.27588 14.0002C8.27588 16.1467 8.28421 16.4009 8.32288 17.2488C8.35855 18.0326 8.4895 18.4581 8.59952 18.7414C8.72855 19.0906 8.93384 19.4064 9.20087 19.6657C9.46021 19.9327 9.77594 20.1382 10.1252 20.2671C10.4085 20.3773 10.8342 20.5082 11.618 20.5439C12.4657 20.5826 12.7197 20.5907 14.8664 20.5907C17.0133 20.5907 17.2675 20.5826 18.1149 20.5439C18.8987 20.5082 19.3245 20.3773 19.6077 20.2671C20.3088 19.9966 20.863 19.4425 21.1334 18.7414C21.2434 18.4581 21.3744 18.0326 21.4103 17.2488C21.4489 16.4009 21.4571 16.1467 21.4571 14.0002C21.4571 11.8535 21.4489 11.5993 21.4103 10.7516C21.3746 9.96786 21.2437 9.54211 21.1334 9.25885ZM14.8666 18.1281C12.5866 18.1281 10.7383 16.28 10.7383 14C10.7383 11.72 12.5866 9.87195 14.8666 9.87195C17.1464 9.87195 18.9946 11.72 18.9946 14C18.9946 16.28 17.1464 18.1281 14.8666 18.1281ZM19.1578 10.6735C18.6251 10.6735 18.1931 10.2415 18.1931 9.70874C18.1931 9.17596 18.6251 8.74402 19.1578 8.74402C19.6906 8.74402 20.1226 9.17596 20.1226 9.70874C20.1223 10.2415 19.6906 10.6735 19.1578 10.6735Z"
                                        fill="#0B0B0B"
                                    />
                                    <path
                                        d="M14.8667 0C7.13589 0 0.866699 6.2692 0.866699 14C0.866699 21.7308 7.13589 28 14.8667 28C22.5975 28 28.8667 21.7308 28.8667 14C28.8667 6.2692 22.5975 0 14.8667 0ZM22.8573 17.3144C22.8184 18.1701 22.6823 18.7544 22.4836 19.2658C22.066 20.3457 21.2124 21.1993 20.1325 21.6169C19.6213 21.8156 19.0368 21.9515 18.1813 21.9906C17.324 22.0297 17.0501 22.0391 14.8669 22.0391C12.6835 22.0391 12.4098 22.0297 11.5523 21.9906C10.6968 21.9515 10.1123 21.8156 9.6011 21.6169C9.06448 21.4151 8.5787 21.0987 8.17709 20.6896C7.76822 20.2882 7.45184 19.8022 7.24997 19.2658C7.0513 18.7546 6.91522 18.1701 6.87634 17.3146C6.83682 16.4571 6.82764 16.1832 6.82764 14C6.82764 11.8168 6.83682 11.5429 6.87613 10.6856C6.91501 9.82986 7.05087 9.24561 7.24954 8.73419C7.45142 8.19778 7.76801 7.71179 8.17709 7.31039C8.57849 6.90131 9.06448 6.58493 9.60089 6.38306C10.1123 6.18439 10.6966 6.04852 11.5523 6.00943C12.4096 5.97034 12.6835 5.96094 14.8667 5.96094C17.0499 5.96094 17.3238 5.97034 18.1811 6.00964C19.0368 6.04852 19.6211 6.18439 20.1325 6.38284C20.6689 6.58472 21.1549 6.90131 21.5565 7.31039C21.9654 7.71201 22.282 8.19778 22.4836 8.73419C22.6825 9.24561 22.8184 9.82986 22.8575 10.6856C22.8966 11.5429 22.9058 11.8168 22.9058 14C22.9058 16.1832 22.8966 16.4571 22.8573 17.3144Z"
                                        fill="#0B0B0B"
                                    />
                                </g>
                                <defs>
                                    <clipPath id="clip0_192_32">
                                        <rect width="28" height="28" fill="white" transform="translate(0.866699)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <a href="">
                            <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_192_38)">
                                    <path d="M14.7334 0C7.00168 0 0.733398 6.26828 0.733398 14C0.733398 21.7317 7.00168 28 14.7334 28C22.4651 28 28.7334 21.7317 28.7334 14C28.7334 6.26828 22.4651 0 14.7334 0Z" fill="#0B0B0B" />
                                    <path
                                        d="M16.2654 12.733L22.2587 5.76634H20.8385L15.6345 11.8154L11.4782 5.76634H6.68433L12.9695 14.9136L6.68433 22.2192H8.10461L13.6001 15.8312L17.9895 22.2192H22.7834L16.2651 12.733H16.2654ZM8.61635 6.83552H10.7978L20.8391 21.1986H18.6576L8.61635 6.83552Z"
                                        fill="white"
                                    />
                                </g>
                                <defs>
                                    <clipPath id="clip0_192_38">
                                        <rect width="28" height="28" fill="white" transform="translate(0.733398)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <a href="">
                            <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_192_30)">
                                    <path
                                        d="M14.6001 0C6.86931 0 0.600098 6.26921 0.600098 14C0.600098 21.7308 6.86931 28 14.6001 28C22.3309 28 28.6001 21.7308 28.6001 14C28.6001 6.26921 22.3309 0 14.6001 0ZM21.6236 10.7118V12.6074C20.7297 12.6078 19.8613 12.4326 19.0421 12.087C18.5154 11.8647 18.0247 11.5782 17.5759 11.2319L17.5894 17.0667C17.5837 18.3806 17.0639 19.615 16.1231 20.5449C15.3575 21.3018 14.3874 21.7831 13.3358 21.9389C13.0888 21.9755 12.8373 21.9942 12.583 21.9942C11.4574 21.9942 10.3887 21.6296 9.51454 20.9568C9.35004 20.8301 9.19271 20.6928 9.04292 20.5449C8.02332 19.5372 7.49756 18.1714 7.5861 16.7346C7.65364 15.6409 8.09152 14.5978 8.82149 13.7803C9.78727 12.6985 11.1384 12.098 12.583 12.098C12.8373 12.098 13.0888 12.1171 13.3358 12.1537V12.8546V14.8043C13.1016 14.727 12.8514 14.6845 12.5908 14.6845C11.271 14.6845 10.2032 15.7613 10.223 17.0821C10.2355 17.9272 10.6971 18.6659 11.378 19.0731C11.6979 19.2645 12.066 19.3831 12.4589 19.4047C12.7666 19.4216 13.0622 19.3787 13.3358 19.2883C14.2788 18.9768 14.9591 18.0911 14.9591 17.0465L14.9622 13.1392V6.00578H17.5727C17.5753 6.26445 17.6015 6.51684 17.6503 6.7614C17.8473 7.7513 18.4053 8.61011 19.1819 9.19559C19.859 9.70632 20.7022 10.0091 21.6161 10.0091C21.6167 10.0091 21.6242 10.0091 21.6236 10.0085V10.7118H21.6236Z"
                                        fill="#0B0B0B"
                                    />
                                </g>
                                <defs>
                                    <clipPath id="clip0_192_30">
                                        <rect width="28" height="28" fill="white" transform="translate(0.600098)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="cta-banner__info">
                    <div>
                        <h4>
                            NEED HELP?
                        </h4>
                        <h5>
                            Lorem ipsum dolor sit amet consectetur
                        </h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        </p>
                    </div>

                    <div>
                        <h4>
                            LOCATION & LANGUAGE
                        </h4>
                        <p>
                            <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_192_47)">
                                    <path
                                        d="M33.2888 33.2886C40.9041 25.6734 40.9041 13.3266 33.2888 5.71142C25.6736 -1.90381 13.3269 -1.90381 5.71168 5.71142C-1.90355 13.3266 -1.90355 25.6734 5.71168 33.2886C13.3269 40.9038 25.6736 40.9038 33.2888 33.2886Z"
                                        fill="#0046A2"
                                    />
                                    <path
                                        d="M38.1022 21.4548C37.209 30.2608 30.2624 37.2074 21.4565 38.1006C10.7852 39.1836 1.70586 31.2861 0.862793 21.0538L19.4909 20.9566C19.4909 20.9566 19.5 20.952 19.5 20.9475V0.807958C19.5 0.807958 19.5045 0.798843 19.5091 0.798843C30.4781 0.80492 39.2385 10.2534 38.1007 21.4564L38.1022 21.4548Z"
                                        fill="white"
                                    />
                                    <path d="M17.2972 18.8389L16.7807 18.5685L16.2658 18.8404L16.363 18.2662L15.9468 17.8606L16.5225 17.7771L16.7792 17.2545L17.0375 17.7755L17.6132 17.8591L17.197 18.2662L17.2972 18.8389Z" fill="white" />
                                    <path d="M17.2972 14.985L16.7807 14.7146L16.2658 14.985L16.363 14.4123L15.9468 14.0052L16.5225 13.9217L16.7792 13.3991L17.0375 13.9201L17.6132 14.0037L17.197 14.4108L17.2972 14.985Z" fill="white" />
                                    <path d="M17.2972 11.1299L16.7807 10.8595L16.2658 11.1314L16.363 10.5572L15.9468 10.1517L16.5225 10.0666L16.7792 9.54404L17.0375 10.0666L17.6132 10.1486L17.197 10.5557L17.2972 11.1299Z" fill="white" />
                                    <path d="M17.2972 7.27453L16.7807 7.00414L16.2658 7.27605L16.363 6.70185L15.9468 6.29626L16.5225 6.2112L16.7792 5.68864L17.0375 6.2112L17.6132 6.29474L17.197 6.70033L17.2972 7.27453Z" fill="white" />
                                    <path d="M14.9854 16.8079L14.469 16.5376L13.954 16.8095L14.0512 16.2353L13.635 15.8297L14.2107 15.7446L14.4674 15.2221L14.7257 15.7446L15.3014 15.8282L14.8852 16.2337L14.9854 16.8079Z" fill="white" />
                                    <path d="M14.9854 12.9527L14.469 12.6823L13.954 12.9542L14.0512 12.38L13.635 11.9744L14.2107 11.8908L14.4674 11.3683L14.7257 11.8893L15.3014 11.9729L14.8852 12.38L14.9854 12.9527Z" fill="white" />
                                    <path d="M14.9854 9.09878L14.469 8.82839L13.954 9.09878L14.0512 8.5261L13.635 8.11899L14.2107 8.03545L14.4674 7.51289L14.7257 8.03393L15.3014 8.11747L14.8852 8.52458L14.9854 9.09878Z" fill="white" />
                                    <path d="M14.9854 5.24339L14.469 4.973L13.954 5.2449L14.0512 4.67071L13.635 4.26512L14.2107 4.18005L14.4674 3.6575L14.7257 4.18005L15.3014 4.26208L14.8852 4.66919L14.9854 5.24339Z" fill="white" />
                                    <path d="M17.2972 3.41922L16.7807 3.14883L16.2658 3.42074L16.363 2.84654L15.9468 2.44095L16.5225 2.35741L16.7792 1.83485L17.0375 2.35589L17.6132 2.43943L17.197 2.84654L17.2972 3.41922Z" fill="white" />
                                    <path d="M12.4151 19.0104L11.8987 18.74L11.3837 19.0119L11.4824 18.4377L11.0647 18.0321L11.6404 17.9471L11.8971 17.426L12.1554 17.9471L12.7326 18.0306L12.3149 18.4377L12.4151 19.0104Z" fill="white" />
                                    <path d="M12.4151 15.155L11.8987 14.8861L11.3837 15.1565L11.4824 14.5823L11.0647 14.1767L11.6404 14.0932L11.8971 13.5706L12.1554 14.0917L12.7326 14.1752L12.3149 14.5823L12.4151 15.155Z" fill="white" />
                                    <path d="M12.4151 11.3015L11.8987 11.0311L11.3837 11.303L11.4824 10.7288L11.0647 10.3217L11.6404 10.2381L11.8971 9.71558L12.1554 10.2381L12.7326 10.3202L12.3149 10.7273L12.4151 11.3015Z" fill="white" />
                                    <path d="M12.4151 7.44607L11.8987 7.17568L11.3837 7.44759L11.4824 6.87339L11.0647 6.4678L11.6404 6.38274L11.8971 5.86018L12.1554 6.38274L12.7326 6.46476L12.3149 6.87187L12.4151 7.44607Z" fill="white" />
                                    <path d="M10.1031 16.9795L9.58664 16.7091L9.07169 16.981L9.1689 16.4068L8.75269 16.0012L9.3284 15.9162L9.58512 15.3936L9.84336 15.9162L10.4206 15.9982L10.0029 16.4053L10.1031 16.9795Z" fill="white" />
                                    <path d="M10.1031 13.1242L9.58664 12.8538L9.07169 13.1257L9.1689 12.5515L8.75269 12.1459L9.3284 12.0609L9.58512 11.5398L9.84336 12.0609L10.4206 12.1444L10.0029 12.5515L10.1031 13.1242Z" fill="white" />
                                    <path d="M10.1031 9.2688L9.58664 8.99993L9.07169 9.27032L9.1689 8.69612L8.75269 8.29053L9.3284 8.20698L9.58512 7.68443L9.84336 8.20547L10.4206 8.28901L10.0029 8.69612L10.1031 9.2688Z" fill="white" />
                                    <path d="M10.1031 5.41493L9.58664 5.14453L9.07169 5.41644L9.1689 4.84224L8.75269 4.43514L9.3284 4.35159L9.58512 3.82904L9.84336 4.35159L10.4206 4.43362L10.0029 4.84073L10.1031 5.41493Z" fill="white" />
                                    <path d="M12.4151 3.59076L11.8987 3.32037L11.3837 3.59228L11.4824 3.01808L11.0647 2.61249L11.6404 2.52743L11.8971 2.00639L12.1554 2.52743L12.7326 2.61097L12.3149 3.01808L12.4151 3.59076Z" fill="white" />
                                    <path d="M7.53305 19.1821L7.01657 18.9117L6.50162 19.1836L6.60035 18.6094L6.18262 18.2039L6.75834 18.1188L7.01505 17.5962L7.27329 18.1188L7.85053 18.2023L7.43431 18.6079L7.53305 19.1821Z" fill="white" />
                                    <path d="M7.53305 15.3268L7.01657 15.0564L6.50162 15.3283L6.60035 14.7541L6.18262 14.3486L6.75834 14.265L7.01505 13.7425L7.27329 14.2635L7.85053 14.347L7.43431 14.7541L7.53305 15.3268Z" fill="white" />
                                    <path d="M7.53305 11.473L7.01657 11.2026L6.50162 11.473L6.60035 10.9003L6.18262 10.4932L6.75834 10.4096L7.01505 9.88707L7.27329 10.4081L7.85053 10.4917L7.43431 10.8988L7.53305 11.473Z" fill="white" />
                                    <path d="M7.53305 7.61788L7.01657 7.34749L6.50162 7.6194L6.60035 7.0452L6.18262 6.63962L6.75834 6.55455L7.01505 6.032L7.27329 6.55455L7.85053 6.63658L7.43431 7.04368L7.53305 7.61788Z" fill="white" />
                                    <path d="M5.22104 17.1513L4.70456 16.8809L4.18961 17.1528L4.28834 16.5786L3.87061 16.173L4.44632 16.088L4.70304 15.5654L4.96128 16.088L5.53852 16.17L5.12078 16.5771L5.22104 17.1513Z" fill="white" />
                                    <path d="M5.22104 13.2959L4.70456 13.0255L4.18961 13.2974L4.28834 12.7232L3.87061 12.3176L4.44632 12.2326L4.70304 11.71L4.96128 12.2326L5.53852 12.3161L5.12078 12.7217L5.22104 13.2959Z" fill="white" />
                                    <path d="M5.22104 9.44061L4.70456 9.17022L4.18961 9.44213L4.28834 8.86793L3.87061 8.46235L4.44632 8.3788L4.70304 7.85625L4.96128 8.37728L5.53852 8.46083L5.12078 8.86793L5.22104 9.44061Z" fill="white" />
                                    <path d="M2.65073 19.3542L2.13425 19.0838L1.61929 19.3557L1.71803 18.7815L1.30029 18.3759L1.87601 18.2908L2.13273 17.7683L2.39097 18.2908L2.96821 18.3729L2.55199 18.78L2.65073 19.3542Z" fill="white" />
                                    <path d="M2.65073 15.4987L2.13425 15.2283L1.61929 15.5002L1.71803 14.926L1.30029 14.5204L1.87601 14.4353L2.13273 13.9143L2.39097 14.4353L2.96821 14.5189L2.55199 14.926L2.65073 15.4987Z" fill="white" />
                                    <path d="M35.2252 9.37691C34.5735 8.36674 33.8276 7.42189 32.9982 6.55756H19.5V9.37691H35.2252Z" fill="#C51848" />
                                    <path d="M29.3737 3.61516C26.5103 1.83179 23.1305 0.800362 19.5106 0.798843C19.506 0.798843 19.5015 0.803401 19.5015 0.807958V3.61516H29.3737Z" fill="#C51848" />
                                    <path d="M38.1508 20.9491C38.2207 19.9936 38.2161 19.0032 38.1478 18.0811H19.5015V20.9491H38.1508Z" fill="#C51848" />
                                    <path d="M37.6891 15.1385C37.4566 14.1679 37.1498 13.2261 36.7716 12.3192H19.5V15.1385H37.6875H37.6891Z" fill="#C51848" />
                                    <path d="M36.8248 26.5922C37.1893 25.696 37.4871 24.7663 37.7104 23.8063H1.29883C1.52517 24.7648 1.82442 25.696 2.19203 26.5922H36.8248Z" fill="#C51848" />
                                    <path d="M21.4565 38.102C24.3427 37.8089 27.0283 36.8625 29.3677 35.4164H9.67627C13.0425 37.499 17.1181 38.5426 21.4565 38.102Z" fill="#C51848" />
                                    <path d="M33.0804 32.3965C33.8931 31.5412 34.6252 30.6101 35.2632 29.6105H3.76733C4.40989 30.6085 5.14511 31.5397 5.95932 32.3965H33.0804Z" fill="#C51848" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_192_47">
                                        <rect width="39" height="39" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            English
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>