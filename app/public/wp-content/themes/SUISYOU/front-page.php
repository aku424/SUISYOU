<!-- ヘッダー -->
<?php get_header(); ?>

<!-- メイン -->
<main>
    <div class="mv">
        <div class="mv__inner splide js-mvCarousel" role="group" aria-label="MVのカルーセル">
            <div class="mv__listWrap splide__track">
                <ul class="mv__list splide__list">
                    <li class="mv__item splide__slide">
                        <picture class="mv__itemMedia">
                            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri()?>/img/mv_index_01.webp" type="image/webp">
                            <img src="<?php echo get_template_directory_uri()?>/img/mv_index_01.jpg" alt="">
                        </picture>
                    </li>
                    <li class="mv__item splide__slide">
                    <picture class="mv__itemMedia">
                            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri()?>/img/mv_index_02.webp" type="image/webp">
                            <img src="<?php echo get_template_directory_uri()?>/img/mv_index_02.jpg" alt="">
                        </picture>
                    </li>
                    <li class="mv__item splide__slide">
                        <picture class="mv__itemMedia">
                            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri()?>/img/mv_index_03.webp" type="image/webp">
                            <img src="<?php echo get_template_directory_uri()?>/img/mv_index_03.jpg" alt="">
                        </picture>
                    </li>
                    <li class="mv__item splide__slide">
                    <picture class="mv__itemMedia">
                        <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri()?>/img/mv_index_04.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri()?>/img/mv_index_04.jpg" alt="">
                    </picture>
                    </li>
                </ul>
            </div>
            <ul class="splide__pagination mv__pagination"></ul>
        </div>
        <!-- <picture class="mv__media">
            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri()?>/img/mv_index_05.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri()?>/img/mv_index_05.png" alt="">
        </picture> -->
        <div class="mv__scroll">下にスクロールしてください</div>
        <!-- <div class="mv__scroll"><span class="mv__scrollText">下にスクロールしてください</span></div> -->
    </div><!-- /.mv -->

    <div class="l-content about">
        <div class="l-content__inner l-content__inner--2col">
            <h2 class="l-content__hading">翠翔って？</h2>
            <div class="l-content__body">
亜sdf亜sファsf
            </div>
        </div>
    </div><!-- /.l-content -->
</main>

<!-- フッター -->
<?php get_footer(); ?>
