<section class="our-partners">
    <p class="our-partners__title">Наши партнеры</p>

    <div class="our-partners__container">
        <ul class="our-partners__list">
            <?php
            // Создаем два набора элементов для бесконечной прокрутки
            for ($j = 0; $j < 3; $j++) {
                for ($i = 1; $i <= 6; $i++) {
                    ?>
                    <li class="our-partners__item">
                        <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/image-<?php echo $i ?>.png" alt="partner">
                    </li>
                    <?php
                }
            }
            ?>  
        </ul>
    </div>
    
    <div class="our-partners__container">
        <ul class="our-partners__list our-partners__list--reverse">
            <?php
            // Создаем два набора элементов для бесконечной прокрутки в обратном направлении
            for ($j = 0; $j < 3; $j++) {
                for ($i = 7; $i <= 13; $i++) {
                    ?>
                    <li class="our-partners__item">
                        <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/image-<?php echo $i ?>.png" alt="partner">
                    </li>
                    <?php
                }
            }
            ?>  
        </ul>
    </div>
    
</section>