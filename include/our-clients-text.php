<section class="our-clients-text relative overflow-hidden">
    <div class="container">
        <p class="title">Наши пациенты – <span>наша гордость</span></p>
        <div class="swiper-button-inner">
            <div class="swiper-button-prev swiper-button-prev-client-text"></div>
            <div class="swiper-button-next swiper-button-next-client-text"></div>
        </div>
        <div class="w-0 min-w-[100%] relative">
            <div class="our-clients-text-swiper swiper">
            <ul class="swiper-wrapper justify-stretch">
            <?php
            $count = 1;
            $my_posts = get_posts(
                array(
                    'numberposts' => -1,
                    'post_type' => 'post',
                    'category' => 5,
                    'suppress_filters' => true,
                )
            );

            foreach ($my_posts as $post) {
                setup_postdata($post);
                ?>    
                                                        <?php $count++; ?>          
                                                            <li class="text-review-item swiper-slide">
                                                                <p class="text-review-title"><?php the_title(); ?></p>
                                                                <div class="text-review-content"><?php the_content(); ?></div>
                                                                <a href="#popupreviews<?php echo $count ?>" class="text-review-link popup-link">Подробнее</a>
                                                            </li>
                                                            <?php
            }
            wp_reset_postdata();
            ?>
            </ul>
        </div>
    </div>
</section>
<?php
$count2 = 1;
$my_posts = get_posts(
    array(
        'numberposts' => -1,
        'post_type' => 'post',
        'category' => 5,
        'suppress_filters' => true,
    )
);

foreach ($my_posts as $post) {
    setup_postdata($post);
    ?>    
                    <?php $count2++; ?>          
                    <section id="popupreviews<?php echo $count2 ?>" class="popup">
                        <div class="popup__body">
                            <div class="popup__content relative popup__content-item">
                            <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                            <path d="M4 1.45508L19.9099 17.365" stroke="#ffffff" />
                            <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#ffffff" />
                            </svg>
                            </button>
                                <p class="popup__content-item-title"><?php the_title(); ?></p>
                                <div class="popup-reviews-text-content"><?php the_content(); ?></div>
                            </div>
                        </div>
                    </section>
                    <?php
}
wp_reset_postdata();
?>

