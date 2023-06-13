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
        <div class="mv__scroll">
            <span class="mv__scrollText">下にスクロールしてください</span>
        </div>
    </div><!-- /.mv -->

    <div class="l-content information">
        <div class="l-content__inner">
            <div class="l-content__body">
                <div class="un-information">
                    <div class="un-information__layout">
                        <h2 class="un-information__hading">翠翔って？</h2>
                        <span class="un-information__subHeading m-subTitle">What’s SUISYOU?</span><!-- /.un-information__heading -->
                        <div class="un-information__media">
                            <picture class="un-information__mediaItem">
                                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri()?>/img/img_index_02-pc.webp" type="image/webp">
                                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri()?>/img/img_index_02-pc.png" type="image/png">
                                <source srcset="<?php echo get_template_directory_uri()?>/img/img_index_02-sp.webp" type="image/webp">
                                <source srcset="<?php echo get_template_directory_uri()?>/img/img_index_02-sp.png" type="image/png">
                                <img src="<?php echo get_template_directory_uri()?>/img/img_index_02-pc.png" alt="">
                            </picture>
                            <img src="<?php echo get_template_directory_uri()?>/img/img_index_05.svg" alt="翠翔の焼き鳥知ったら もうよそには戻れない！" class="un-information__mediaBubble">
                        </div><!-- /.un-information__media -->
                        <div class="un-information__contents">
                            <div class="un-information__text">
                                <p class="un-information__textItem">翠翔は、福井で駅前と片町に二店舗かまえる、名古屋コーチンのお肉をはじめとした、地鶏、地物野菜、鮮魚、ジビエなどを福井の美味しい地酒やビールとともに味わえるお店です。</p>
                                <p class="un-information__textItem">おすすめは、備長炭の炭火で焼き上げる、名古屋コーチンの焼き鳥や、ふわふわすぎて口の中でとろける、名古屋コーチン有精卵のだし巻き、特製のお鍋で作る、鶏鍋などなど・・・他には真似できない美味しさです。</p>
                                <p class="un-information__textItem">日によって、採れたて山菜の天ぷらや、朝どれ鮮魚のお刺身など、来た人だけ食べられる一品も数々ご用意しています。</p>
                                <p class="un-information__textItem">お客様のご来店を、心よりお待ちしております。</p>
                            </div><!-- /.um-about__text -->
                            <div class="un-information__button">
                                <div class="m-button m-button--right">
                                    <a href="__dummy__" class="m-button__link">
                                        <div class="m-button__inner">
                                            <span class="m-button__text">翠翔のこだわりをもっと見る</span>
                                        </div> 
                                    </a>
                                </div><!-- /.m-button -->
                            </div><!-- /.un-information__button -->
                        </div><!-- /.un-information__contents -->
                    </div><!-- /.un-information__layout -->
                </div><!-- /.un-information -->
            </div>
        </div>
    </div><!-- /.l-content -->

    <div class="l-content menu">
        <div class="l-content__inner">
            <div class="l-content__body">
                <div class="un-menu">
                    <div class="un-menu__layout">
                        <div class="un-menu__left">
                            <h2 class="un-menu__heading">
                                <span class="un-menu__headingMain">
                                    <span class="un-menu__headingMainText01">ウ、ウマい！</span>
                                    <span class="un-menu__headingMainText02">翠翔の</span>
                                    <span class="un-menu__headingMainText03">絶品</span>
                                    <span class="un-menu__headingMainText04">メニュー</span>
                                </span>
                                <span class="un-menu__headingSub">
                                    <span class="un-menu__headingSubMenu m-subTitle">MENU</span>
                                    <span class="un-menu__headingSubNotion">※価格は全て税込です。</span>
                                </span>
                            </h2>
                            <div class="un-menu__leftContents01 un-menu__contents">
                                <picture class="un-menu__media">
                                    <source srcset="<?php echo get_template_directory_uri()?>/img/img_index_06.webp" type="image/webp">
                                    <img src="<?php echo get_template_directory_uri()?>/img/img_index_06.png" alt="">
                                </picture>
                                <img src="<?php echo get_template_directory_uri()?>/img/img_index_07.svg" alt="翠翔といえばこれ！野菜と地鶏が鶏出汁でさらにウマく！" class="un-menu__contentsBubble">
                                <div class="un-menu__text">
                                    <span class="un-menu__textMenu">焼き鳥盛り合わせ</span>
                                    <span class="un-menu__price">2260円</span>
                                </div><!-- /.un-menu__text -->
                            </div><!-- /.un-menu__leftContents01 -->

                            <div class="un-menu__leftContents02 un-menu__contents">
                            <picture class="un-menu__media">
                                    <source srcset="<?php echo get_template_directory_uri()?>/img/img_index_08.webp" type="image/webp">
                                    <img src="<?php echo get_template_directory_uri()?>/img/img_index_08.png" alt="">
                                </picture>
                                <img src="<?php echo get_template_directory_uri()?>/img/img_index_09.svg" alt="" class="un-menu__contentsBubble">
                                <div class="un-menu__text">
                                    <span class="un-menu__textMenu">名古屋コーチン有精卵だしまき</span>
                                    <span class="un-menu__price">790円</span>
                                </div><!-- /.un-menu__text -->
                            </div><!-- /.un-menu__leftContents01 -->

                            <div class="un-menu__leftContents03 un-menu__contents">
                                <picture class="un-menu__media">
                                    <source srcset="<?php echo get_template_directory_uri()?>/img/img_index_10.webp" type="image/webp">
                                    <img src="<?php echo get_template_directory_uri()?>/img/img_index_10.png" alt="">
                                </picture>
                                <img src="<?php echo get_template_directory_uri()?>/img/img_index_11.svg" alt="" class="un-menu__contentsBubble">
                                <div class="un-menu__text">
                                    <span class="un-menu__textMenu">柔らかい蒸し鶏の冷菜香味黒酢ソース</span>
                                    <span class="un-menu__price">1610円</span>
                                </div><!-- /.un-menu__text -->
                            </div><!-- /.un-menu__leftContents01 -->

                        </div><!-- /.un-menu__left -->

                        <div class="un-menu__right">
                            <div class="un-menu__rightContents01 un-menu__contents">
                                <picture class="un-menu__media">
                                    <source srcset="<?php echo get_template_directory_uri()?>/img/img_index_12.webp" type="image/webp">
                                    <img src="<?php echo get_template_directory_uri()?>/img/img_index_12.png" alt="">
                                </picture>
                                <img src="<?php echo get_template_directory_uri()?>/img/img_index_13.svg" alt="" class="un-menu__contentsBubble">
                                <div class="un-menu__text">
                                    <span class="un-menu__textMenu">月見つくね</span>
                                    <span class="un-menu__price">480円</span>
                                </div><!-- /.un-menu__text -->
                            </div><!-- /.un-menu__rightContents01 -->

                            <div class="un-menu__rightContents02 un-menu__contents">
                                <picture class="un-menu__media">
                                    <source srcset="<?php echo get_template_directory_uri()?>/img/img_index_14.webp" type="image/webp">
                                    <img src="<?php echo get_template_directory_uri()?>/img/img_index_14.png" alt="">
                                </picture>
                                <img src="<?php echo get_template_directory_uri()?>/img/img_index_15.svg" alt="" class="un-menu__contentsBubble">
                                <div class="un-menu__text">
                                    <span class="un-menu__textMenu">SUISYOU塩鍋</span>
                                    <span class="un-menu__price">1人前 1610円〜</span>
                                </div><!-- /.un-menu__text -->
                            </div><!-- /.un-menu__rightContents01 -->

                            <div class="un-menu__rightContents03 un-menu__contents">
                                <picture class="un-menu__media">
                                    <source srcset="<?php echo get_template_directory_uri()?>/img/img_index_16.webp" type="image/webp">
                                    <img src="<?php echo get_template_directory_uri()?>/img/img_index_16.png" alt="">
                                </picture>
                                <img src="<?php echo get_template_directory_uri()?>/img/img_index_17.svg" alt="やっぱ串10 !他店じゃ出せないこの美味さ！" class="un-menu__contentsBubble">
                                <div class="un-menu__text">
                                    <span class="un-menu__textMenu">SUISYOU 水炊き</span>
                                    <span class="un-menu__price">1人前 1610円〜</span>
                                </div><!-- /.un-menu__text -->
                            </div><!-- /.un-menu__rightContents01 -->


                            <div class="un-menu__button">
                                <div class="m-button m-button--right">
                                    <a href="__dummy__" class="m-button__link">
                                        <div class="m-button__inner">
                                            <span class="m-button__text">翠翔のメニューをもっと見る</span>
                                        </div> 
                                    </a>
                                </div><!-- /.m-button -->
                            </div><!-- /.un-menu__button -->

                        </div><!-- /.un-menu__right -->
                    </div><!-- /.un-menu__layout -->
                </div><!-- /.un-menu -->
            </div>
        </div>
    </div><!-- /.l-content -->

    <div class="l-content course">
        <div class="l-content__inner">
            <div class="l-content__body">
                <div class="un-course">
                    <div class="un-course__layout">
                        <h2 class="un-course__heading">翠翔のコ<span>ー</span>ス紹介</h2>
                        <div class="un-course__body">
                            <span class="un-course__headingSub m-subTitle">COURSE</span>
                            <div class="un-course__banner">
                                <img src="<?php echo get_template_directory_uri()?>/img/img_index_19.svg" alt="乾杯1杯分だけ生ビールOK 飲み放題 2h +1,500円 ずっと生ビールOK! 飲み放題 2h + 1,800円">
                            </div><!-- /.un-course__banner -->

                            <div class="un-course__carousel splide js-menuCarousel" role="group" aria-label="Splideの基本的なHTML">
                                <div class="splide__track un-course__carouselInner">
                                    <ul class="un-course__list splide__list">
                                        <li class="un-course__item splide__slide">
                                            <div class="un-course__itemHeading">
                                                <span class="un-course__itemHeadingMain">華</span>
                                                <span class="un-course__itemHeadingNumber">全<b>11</b>品</span>
                                                <span class="un-course__itemHeadingPrice"><b>4.200</b>円</span>
                                            </div><!-- /.un-course__itemHeading -->

                                            <ul class="un-course__menu">
                                                <li class="un-course__menuItem">テキスト</li>
                                                <li class="un-course__menuItem">テキスト</li>
                                                <li class="un-course__menuItem">テキスト</li>
                                                <li class="un-course__menuItem">テキスト</li>
                                                <li class="un-course__menuItem">テキスト</li>
                                            </ul>
                                        </li>
                                        
                                        <li class="un-course__item splide__slide">
                                            <div class="un-course__itemHeading">
                                                <span class="un-course__itemHeadingMain">華</span>
                                                <span class="un-course__itemHeadingNumber">全<b>11</b>品</span>
                                                <span class="un-course__itemHeadingPrice"><b>4.200</b>円</span>
                                            </div><!-- /.un-course__itemHeading -->

                                            <ul class="un-course__menu">
                                                <li class="un-course__menuItem">テキスト</li>
                                                <li class="un-course__menuItem">テキスト</li>
                                                <li class="un-course__menuItem">テキスト</li>
                                                <li class="un-course__menuItem">テキスト</li>
                                                <li class="un-course__menuItem">テキスト</li>
                                                <li class="un-course__menuItem">テキスト</li>
                                                <li class="un-course__menuItem">テキスト</li>
                                                <li class="un-course__menuItem">テキスト</li>
                                            </ul>
                                        </li>

                                        <li class="un-course__item splide__slide">
                                            <div class="un-course__itemHeading">
                                                <span class="un-course__itemHeadingMain">華</span>
                                                <span class="un-course__itemHeadingNumber">全<b>11</b>品</span>
                                                <span class="un-course__itemHeadingPrice"><b>4.200</b>円</span>
                                            </div><!-- /.un-course__itemHeading -->

                                            <ul class="un-course__menu">
                                                <li class="un-course__menuItem">テキスト</li>
                                                <li class="un-course__menuItem">テキスト</li>
                                                <li class="un-course__menuItem">テキスト</li>
                                                <li class="un-course__menuItem">テキスト</li>
                                                <li class="un-course__menuItem">テキスト</li>
                                                <li class="un-course__menuItem">テキスト</li>
                                                <li class="un-course__menuItem">テキスト</li>
                                                <li class="un-course__menuItem">テキスト</li>
                                            </ul>
                                        </li>

                                        <li class="un-course__item splide__slide">
                                            <div class="un-course__itemHeading">
                                                <span class="un-course__itemHeadingMain">華</span>
                                                <span class="un-course__itemHeadingNumber">全<span>11</span>品</span>
                                                <span class="un-course__itemHeadingPrice"><span>4.200</span>円</span>
                                            </div><!-- /.un-course__itemHeading -->

                                            <ul class="un-course__menu">
                                                <li class="un-course__menuItem">テキスト</li>
                                                <li class="un-course__menuItem">テキスト</li>
                                                <li class="un-course__menuItem">テキスト</li>
                                                <li class="un-course__menuItem">テキスト</li>
                                                <li class="un-course__menuItem">テキスト</li>
                                                <li class="un-course__menuItem">テキスト</li>
                                                <li class="un-course__menuItem">テキスト</li>
                                                <li class="un-course__menuItem">テキスト</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="un-course__notion">※全て税込・おひとり様料金 ※2名様から承ります</p>
                        </div>
                    </div><!-- /.un-course__layout -->

                    <div class="un-course__button">
                        <div class="m-button m-button--right">
                            <a href="__dummy__" class="m-button__link">
                                <div class="m-button__inner">
                                    <span class="m-button__text">翠翔のコースをもっと見る</span>
                                </div> 
                            </a>
                        </div><!-- /.m-button -->
                    </div><!-- /.un-course__button -->

                </div><!-- /.un-course -->
            </div>
        </div>
    </div><!-- /.l-content -->


    <div class="l-content news">
        <div class="l-content__inner">
            <div class="l-content__body">
                
                <h2 class="m-heading-type2">お知らせ</h2>
                
                <div class="un-news">
                    <div class="un-news__inner">
                        <ul class="nu-news__list">
                            <li class="un-news__item">
                                <a href="__dummy__" class="un-news__link">
                                    <time class="un-news__date" datetime="2023-07-23">23/07/23</time>
                                    <div class="un-news__text">2023年三国花火の予約を受け付けております。テキストテキストテキスとテキスト</div>
                                </a>
                            </li>

                            <li class="un-news__item">
                                <a href="__dummy__" class="un-news__link">
                                    <time class="un-news__date" datetime="2023-07-23">23/07/23</time>
                                    <div class="un-news__text">2023年三国花火の予約を受け付けております。テキストテキストテキスとテキスト2023年三国花火の予約を受け付けております。テキストテキストテキスとテキスト</div>
                                </a>
                            </li>

                        </ul>
                        <div class="un-news__button">
                            <div class="m-button">
                                <a href="__dummy__" class="m-button__link">
                                    <div class="m-button__inner">
                                        <span class="m-button__text">お知らせをもっと見る</span>
                                    </div> 
                                </a>
                            </div><!-- /.m-button -->
                        </div><!-- /.un-news__button -->
                    </div><!-- /.un-news__inner -->


                </div><!-- /.un-news -->
            </div>
        </div>
    </div><!-- /.l-content -->

</main>

<!-- フッター -->
<?php get_footer(); ?>
