<!-- client -->
<section class="our-clients relative overflow-hidden">
<div class="container">
<p class="title">Наши пациенты – <span>наша гордость</span></p>
<div class="w-0 min-w-[100%] relative">
    <div class="our-clients-swiper swiper">
    <div class="swiper-button-inner">
        <div class="swiper-button-prev swiper-button-prev-client"></div>
        <div class="swiper-button-next swiper-button-next-client"></div>
    </div>
<ul class="swiper-wrapper justify-stretch">
<?php
$count = 1;
$my_posts = get_posts(
    array(
        'numberposts' => -1,
        'post_type' => 'post',
        'category' => 4,
        'suppress_filters' => true,
    )
);

foreach ($my_posts as $post) {
    setup_postdata($post);
    $count++;
    ?> 
                            <li class="swiper-slide">
                            <video preload="metadata"
                            poster="<?php echo get_field("poster") ? get_field("poster") : get_template_directory_uri() . '/src/video/placeholder.png'; ?>"
                            class="video video-js">
                            <source src="<?= get_field("video"); ?>" type="video/mp4">
                            </video>
                            <div>
                            <!-- <a href="#popup-video-text<?php echo $count; ?>" class="our-clients-popup-link popup-link">Читать описание</a>     -->
                            </div>    
                            </li>
                            <?php
}
wp_reset_postdata();
?>

</ul>
</div>
</div>
</section>

<!-- <?php
//$count2 = 1;
//$my_posts = get_posts(
//array(
//'numberposts' => -1,
//'post_type' => 'post',
//'category' => 4,
//'suppress_filters' => true,
// )
//);

//foreach ($my_posts as $post) {
//setup_postdata($post);
?>     -->
                    <!-- <? php// $count2++; ?>          
                <section id="popup-video-text<? php// echo $count2 ?>" class="popup">
                <div class="popup__body">
                <div class="popup__content relative popup__content-item">
                <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                <path d="M4 1.45508L19.9099 17.365" stroke="#000000" />
                <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#000000" />
                </svg>
                </button> -->
                    <!-- <p class="popup__content-item-title"><? php// the_title(); ?></p> -->
                    <!-- <div class="popup-reviews-text-content"><? php// the_content(); ?></div>
                </div>
                </div>
                </section>
                <?php
                //}
//wp_reset_postdata();
                ?> -->


<!-- <?php load_template(get_stylesheet_directory() . '/include/our-clients.php'); ?> -->