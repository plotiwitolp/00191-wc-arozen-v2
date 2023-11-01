<?php
/*
Template Name: Шаблон страницы "SEO-продвижение"
Template Post Type: post, page
*/
?>

<?php get_header(); ?>
<?php
$temp_uri = get_template_directory_uri();
$home_uri = get_home_url();
?>

<div class="wrapper">

    <!-- pervyj_ekran -->
    <?php if (get_field('pervyj_ekran_zagolovok')) { ?>
        <div class="top">
            <div class="container">
                <div class="top__inner">
                    <div class="top__first">
                        <h1 class="top__title"><?php the_field('pervyj_ekran_zagolovok') ?></h1>
                        <?php the_field('pervyj_ekran_opisanie') ?>
                    </div>
                    <div class="top__second">
                        <?php
                        $pervyj_ekran_zagolovok_kartinka = get_field('pervyj_ekran_kartinka');
                        if (!empty($pervyj_ekran_zagolovok_kartinka)) : ?>
                            <img src="<?php echo $pervyj_ekran_zagolovok_kartinka['url']; ?>" alt="<?php echo $pervyj_ekran_zagolovok_kartinka['alt']; ?>" />
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    <?php } ?>


    <!-- czeny -->
    <?php if (get_field('czeny_lejbl')) { ?>
        <!-- START ЦЕНЫ -->
        <div class="block">
            <div class="container">
                <div class="block__label"><?php the_field('czeny_lejbl'); ?></div>
                <h2 class="block__title mw740"><?php the_field('czeny_zagolovok'); ?></h2>

                <div class="price">

                    <?php
                    if (have_rows('czeny_kartochki')) :
                        $i = 1;
                        while (have_rows('czeny_kartochki')) : the_row();

                            the_sub_field('sub_field_name');
                    ?>
                            <div class="price__item <?php the_sub_field('css_klass_oformleniya_kartochki'); ?>">
                                <div class="price__header">
                                    <div class="counter">
                                        <?php if ($i < 10) {
                                            echo '0' . $i;
                                        } else {
                                            echo $i;
                                        }; ?>
                                    </div>
                                    <div class="price__header-el">
                                        <a href="<?php the_sub_field('ssylka_knopki'); ?>">
                                            <div class="btn <?php the_sub_field('css_klass_oformleniya_knopki_vverhu'); ?>"><?php the_sub_field('nazvanie_knopki'); ?></div>
                                        </a>
                                    </div>
                                </div>
                                <h3 class="price__title"><?php the_sub_field('zagolovok'); ?></h3>
                                <div class="price__desc"><?php the_sub_field('opisanie'); ?></div>
                                <div class="price__detail">

                                    <div class="price-list">
                                        <div class="price-list__label"><?php the_sub_field('nazvanie_lejbla'); ?></div>
                                        <ul>
                                            <?php
                                            if (have_rows('spisok')) :
                                                while (have_rows('spisok')) : the_row();
                                            ?>
                                                    <li><?php the_sub_field('punkt_spiska'); ?></li>
                                            <?php
                                                endwhile;
                                            endif;
                                            ?>
                                        </ul>
                                    </div>

                                </div>
                                <div class="price__price"><?php the_sub_field('tekst_czeny'); ?></div>
                                <div class="price__footer">
                                    <div class="btn"><?php the_sub_field('nazvanie_knopki_vnizu'); ?></div>
                                </div>
                            </div>

                    <?php
                            $i++;
                        endwhile;

                    endif;
                    ?>


                </div>

            </div>
        </div>
        <!-- END ЦЕНЫ -->
    <?php } ?>


    <!-- utp -->
    <?php if (get_field('utp_lejbl')) { ?>
        <!-- START УТП -->
        <div class="block">
            <div class="container">
                <div class="block__label"><?php the_field('utp_lejbl'); ?></div>
                <h2 class="block__title mw760"><?php the_field('utp_zagolovok'); ?></h2>

                <div class="advant">

                    <?php
                    if (have_rows('utp_kartochki')) :
                        while (have_rows('utp_kartochki')) : the_row();
                    ?>
                            <div class="advant__item">
                                <div class="advant__header">
                                    <?php
                                    $kartinka = get_sub_field('kartinka');
                                    if (!empty($kartinka)) : ?>
                                        <img src="<?php echo $kartinka['url']; ?>" alt="<?php echo $kartinka['alt']; ?>" />
                                    <?php endif; ?>
                                </div>
                                <h3 class="advant__title"><?php the_sub_field('zagolovok'); ?></h3>
                                <div class="advant__desc"><?php the_sub_field('opisanie'); ?></div>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    ?>

                </div>

            </div>
        </div>
        <!-- END УТП -->
    <?php } ?>


    <!-- kejsy -->
    <?php if (get_field('kejsy_lejbl')) { ?>
        <!-- START КЕЙСЫ -->
        <div class="block">
            <div class="container">
                <div class="block__label"><?php the_field('kejsy_lejbl'); ?></div>
                <h2 class="block__title mw880"><?php the_field('kejsy_zagolovok'); ?></h2>

                <div class="cases">

                    <?php
                    if (have_rows('kejsy_kartochki')) :
                        $i = 1;
                        while (have_rows('kejsy_kartochki')) : the_row();

                    ?>
                            <div class="cases__item">
                                <div class="cases__inner">
                                    <div class="cases__img">
                                        <?php
                                        $kartinka = get_sub_field('kartinka');
                                        if (!empty($kartinka)) : ?>
                                            <img src="<?php echo $kartinka['url']; ?>" alt="<?php echo $kartinka['alt']; ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="cases__body">
                                        <div class="cases__body-header">
                                            <div class="cases__tags">
                                                <span class="cases__tag"><?php the_sub_field('nazvanie'); ?></span>
                                            </div>
                                            <div class="counter">
                                                <?php if ($i < 10) {
                                                    echo '0' . $i;
                                                } else {
                                                    echo $i;
                                                }; ?>
                                            </div>
                                        </div>

                                        <div class="cases__list">
                                            <?php
                                            if (have_rows('spisok')) :
                                                while (have_rows('spisok')) : the_row();
                                            ?>
                                                    <div class="cases__list-item">
                                                        <span><?php the_sub_field('nazvanie'); ?></span>
                                                        <span><?php the_sub_field('opisanie'); ?></span>
                                                    </div>
                                            <?php
                                                endwhile;
                                            endif;
                                            ?>

                                        </div>
                                        <h3 class="cases__title"><?php the_sub_field('zagolovok'); ?></h3>
                                        <div class="cases__desc">
                                            <?php the_sub_field('opisanie'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                            $i++;
                        endwhile;
                    endif;
                    ?>

                </div>

            </div>
        </div>
        <!-- END КЕЙСЫ -->
    <?php } ?>


    <!-- etapy_raboty -->
    <?php if (get_field('etapy_raboty_lejbl')) { ?>
        <!-- START ЭТАПЫ РАБОТЫ -->
        <div class="block">
            <div class="container">
                <div class="block__label"><?php the_field('etapy_raboty_lejbl'); ?></div>
                <h2 class="block__title"><?php the_field('etapy_raboty_zagolovok'); ?></h2>

                <div class="howwork">
                    <div class="howwork__inner">
                        <div class="howwork__list">
                            <?php
                            if (have_rows('etapy_raboty_punkty')) :
                                while (have_rows('etapy_raboty_punkty')) : the_row();
                            ?>
                                    <div class="howwork__item">
                                        <div class="howwork__body">
                                            <div class="howwork__text">
                                                <h3 class="howwork__title"><?php the_sub_field('zagolovok'); ?></h3>
                                                <div class="howwork__desc"><?php the_sub_field('opisanie'); ?></div>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                        <div class="howwork__line"></div>
                        <div class="howwork__line_mob"></div>
                    </div>
                </div>

            </div>
        </div>
        <!-- END ЭТАПЫ РАБОТЫ -->
    <?php } ?>


    <!-- optimizacziya_sajta_v_kanade -->
    <?php if (get_field('optimizacziya_sajta_v_kanade_lejbl')) { ?>
        <!-- START ОПТИМИЗАЦИЯ САЙТА -->
        <div class="block">
            <div class="container">
                <div class="block__label"><?php the_field('optimizacziya_sajta_v_kanade_lejbl'); ?></div>
                <h2 class="block__title mw790"><?php the_field('optimizacziya_sajta_v_kanade_zagolovok'); ?></h2>

                <div class="advant">
                    <?php
                    if (have_rows('optimizacziya_sajta_v_kanade_kartochki')) :
                        while (have_rows('optimizacziya_sajta_v_kanade_kartochki')) : the_row();
                    ?>
                            <div class="advant__item">
                                <div class="advant__header">
                                    <?php
                                    $kartinka = get_sub_field('kartinka');
                                    if (!empty($kartinka)) : ?>
                                        <img src="<?php echo $kartinka['url']; ?>" alt="<?php echo $kartinka['alt']; ?>" />
                                    <?php endif; ?>
                                </div>
                                <h3 class="advant__title"><?php the_sub_field('zagolovok'); ?></h3>
                                <div class="advant__desc"><?php the_sub_field('opisanie'); ?></div>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>

            </div>
        </div>
        <!-- END ОПТИМИЗАЦИЯ САЙТА -->
    <?php } ?>


    <!-- sravnitelnaya_harakteristika -->
    <?php if (get_field('sravnitelnaya_harakteristika_lejbl')) { ?>
        <!-- START СРАВНИТЕЛЬНАЯ ХАРАКТЕРИСТИКА -->
        <div class="block">
            <div class="container">
                <div class="block__label"><?php the_field('sravnitelnaya_harakteristika_lejbl'); ?></div>
                <h2 class="block__title"><?php the_field('sravnitelnaya_harakteristika_zagolovok'); ?></h2>

                <div class="table-char">
                    <div class="table-char__inner">


                        <?php echo do_shortcode('[table id=1 /]'); ?>


                        <!-- <table id="tablepress-1" class="tablepress tablepress-id-1">
                            <thead>
                                <tr class="row-1 odd">
                                    <th class="column-1"></th>
                                    <th colspan="6" class="column-2">Контекстная реклама Google</th>
                                    <th colspan="5" class="column-8">SEO-продвижение сайта</th>
                                </tr>
                            </thead>
                            <tbody class="row-hover">
                                <tr class="row-2 even">
                                    <td class="column-1"><strong>Период</strong></td>
                                    <td class="column-2"><strong>Вложения, $</strong></td>
                                    <td class="column-3"><strong>Кол-во трафика</strong></td>
                                    <td class="column-4"><strong>Кол-во заявок</strong></td>
                                    <td class="column-5"><strong>Конверсии, %</strong></td>
                                    <td class="column-6"><strong>Стоимость клика, $</strong></td>
                                    <td class="column-7"><strong>Стоимость привлечения 1 клиента</strong></td>
                                    <td class="column-8"><strong>Вложения, $</strong></td>
                                    <td class="column-9"><strong>Кол-во трафика</strong></td>
                                    <td class="column-10"><strong>Кол-во заявок</strong></td>
                                    <td class="column-11"><strong>Конверсии, %</strong></td>
                                    <td class="column-12"><strong>Стоимость привлечения 1 клиента</strong></td>
                                </tr>
                                <tr class="row-3 odd">
                                    <td class="column-1">1 месяц</td>
                                    <td class="column-2">1000</td>
                                    <td class="column-3">50</td>
                                    <td class="column-4">10</td>
                                    <td class="column-5">10</td>
                                    <td class="column-6">10</td>
                                    <td class="column-7">1000</td>
                                    <td class="column-8">50</td>
                                    <td class="column-9">10</td>
                                    <td class="column-10">10</td>
                                    <td class="column-11">10</td>
                                    <td class="column-12">10</td>
                                </tr>
                                <tr class="row-4 even">
                                    <td class="column-1">2 месяц</td>
                                    <td class="column-2">1000</td>
                                    <td class="column-3">50</td>
                                    <td class="column-4">10</td>
                                    <td class="column-5">10</td>
                                    <td class="column-6">10</td>
                                    <td class="column-7">900</td>
                                    <td class="column-8">50</td>
                                    <td class="column-9">10</td>
                                    <td class="column-10">10</td>
                                    <td class="column-11">10</td>
                                    <td class="column-12">10</td>
                                </tr>
                                <tr class="row-5 odd">
                                    <td class="column-1">В сумме за <br> 1-ый год</td>
                                    <td class="column-2"><strong>6000</strong></td>
                                    <td class="column-3"><em>600</em></td>
                                    <td class="column-4"><em>120</em></td>
                                    <td class="column-5"><em>12000</em></td>
                                    <td class="column-6"><strong>12000</strong></td>
                                    <td class="column-7"><em>12000</em></td>
                                    <td class="column-8"><em>600</em></td>
                                    <td class="column-9"><em>120</em></td>
                                    <td class="column-10"><strong>12000</strong></td>
                                    <td class="column-11"><em>12000</em></td>
                                    <td class="column-12"><em>12000</em></td>
                                </tr>
                                <tr class="row-6 even">
                                    <td class="column-1">1 месяц</td>
                                    <td class="column-2">1000</td>
                                    <td class="column-3">50</td>
                                    <td class="column-4">10</td>
                                    <td class="column-5">10</td>
                                    <td class="column-6">10</td>
                                    <td class="column-7">10</td>
                                    <td class="column-8">50</td>
                                    <td class="column-9">10</td>
                                    <td class="column-10">10</td>
                                    <td class="column-11">10</td>
                                    <td class="column-12">10</td>
                                </tr>
                                <tr class="row-7 odd">
                                    <td class="column-1">2 месяц</td>
                                    <td class="column-2">1000</td>
                                    <td class="column-3">50</td>
                                    <td class="column-4">10</td>
                                    <td class="column-5">10</td>
                                    <td class="column-6">10</td>
                                    <td class="column-7">10</td>
                                    <td class="column-8">50</td>
                                    <td class="column-9">10</td>
                                    <td class="column-10">10</td>
                                    <td class="column-11">10</td>
                                    <td class="column-12">10</td>
                                </tr>
                                <tr class="row-8 even">
                                    <td class="column-1">В сумме за <br> 2-ой год</td>
                                    <td class="column-2"><strong>6000</strong></td>
                                    <td class="column-3"><em>600</em></td>
                                    <td class="column-4"><em>120</em></td>
                                    <td class="column-5"><em>12000</em></td>
                                    <td class="column-6"><em>12000</em></td>
                                    <td class="column-7"><em>12000</em></td>
                                    <td class="column-8"><strong>600</strong></td>
                                    <td class="column-9"><em>120</em></td>
                                    <td class="column-10"><em>12000</em></td>
                                    <td class="column-11"><em>12000</em></td>
                                    <td class="column-12"><em>12000</em></td>
                                </tr>
                                <tr class="row-9 even">
                                    <td class="column-1">В сумме за <br> два года</td>
                                    <td class="column-2"><strong>6000</strong></td>
                                    <td class="column-3"><em>600</em></td>
                                    <td class="column-4"><em>120</em></td>
                                    <td class="column-5"><em>12000</em></td>
                                    <td class="column-6"><em>12000</em></td>
                                    <td class="column-7"><em>12000</em></td>
                                    <td class="column-8"><strong>600</strong></td>
                                    <td class="column-9"><em>120</em></td>
                                    <td class="column-10"><em>12000</em></td>
                                    <td class="column-11"><em>12000</em></td>
                                    <td class="column-12"><em>12000</em></td>
                                </tr>
                            </tbody>
                        </table> -->


                    </div>
                    <div class="table-char__info">
                        <div class="table-char__info-icon"></div>
                        <div class="table-char__info-text">
                            Исходя из таблицы выше можно сделать вывод о том seo продвижение становится более выгодным инструментом интернет-маркетинга после 6 месяцев использования каждого из каналов.
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- END СРАВНИТЕЛЬНАЯ ХАРАКТЕРИСТИКА -->
    <?php } ?>

    <!-- rezultat -->
    <?php if (get_field('rezultat_lejbl')) { ?>
        <!-- START РЕЗУЛЬТАТ -->
        <div class="block block_yellow">
            <div class="container">
                <div class="block__label"><?php the_field('rezultat_lejbl'); ?></div>
                <h2 class="block__title mw790">Когда ждать результат от SEO-продвижения канадского сайта</h2>


                <div class="seoresult">

                    <div class="seoresult__item">
                        <div class="seoresult__img">
                            <img src="<?php echo $temp_uri ?>/assets/img/page-seo/seoresult.png" alt="">
                        </div>
                        <h3 class="seoresult__title">Время на индексацию</h3>
                        <div class="seoresult__desc">
                            <p>
                                Первым этапом в SEO-процессе является индексация вашего сайта поисковыми системами, такими как Google. Это может занять от нескольких дней до нескольких недель. Важно убедиться, что ваш сайт хорошо структурирован и содержит качественный контент, чтобы ускорить процесс индексации.
                            </p>
                        </div>
                    </div>

                    <div class="seoresult__item">
                        <div class="seoresult__img">
                            <img src="<?php echo $temp_uri ?>/assets/img/page-seo/seoresult.png" alt="">
                        </div>
                        <h3 class="seoresult__title">Первые изменения в позициях</h3>
                        <div class="seoresult__desc">
                            <p>
                                Через несколько недель после индексации вы можете начать видеть первые изменения в позициях вашего сайта в поисковых результатах. Это могут быть небольшие сдвиги, и они могут варьироваться в зависимости от ключевых слов и конкуренции на рынке.
                            </p>
                        </div>
                    </div>

                    <div class="seoresult__item">
                        <div class="seoresult__img">
                            <img src="<?php echo $temp_uri ?>/assets/img/page-seo/seoresult.png" alt="">
                        </div>
                        <h3 class="seoresult__title">Улучшение трафика</h3>
                        <div class="seoresult__desc">
                            <p>
                                Постепенно, с усилением оптимизации и увеличением количества качественных обратных ссылок, вы начнете привлекать больше органического трафика на ваш сайт. Это может занять несколько месяцев, но по мере улучшения позиций в поисковых системах, трафик будет расти.
                            </p>
                        </div>
                    </div>

                    <div class="seoresult__item">
                        <div class="seoresult__img">
                            <img src="<?php echo $temp_uri ?>/assets/img/page-seo/seoresult.png" alt="">
                        </div>
                        <h3 class="seoresult__title">Конверсии и ROI</h3>
                        <div class="seoresult__desc">
                            <p>
                                Итоговый результат SEO-продвижения - это увеличение конверсий и возврат на инвестиции (ROI). Это может занять более полугода или даже годы, в зависимости от вашей ниши и конкурентной среды. Важно понимать, что SEO - это непрерывный процесс, и результаты продолжат улучшаться с течением времени.
                            </p>
                        </div>
                    </div>

                    <div class="seoresult__item">
                        <div class="seoresult__img">
                            <img src="<?php echo $temp_uri ?>/assets/img/page-seo/seoresult.png" alt="">
                        </div>
                        <h3 class="seoresult__title">Стабильность позиций</h3>
                        <div class="seoresult__desc">
                            <p>
                                Когда ваш сайт достигнет стабильных высоких позиций в поисковых результатах, вы сможете наслаждаться стабильным и долгосрочным источником органического трафика. Однако необходимо продолжать мониторинг и обновление контента, чтобы сохранить эти позиции.
                            </p>
                        </div>
                    </div>

                    <div class="seoresult__item">
                        <div class="seoresult__img">
                            <img src="<?php echo $temp_uri ?>/assets/img/page-seo/seoresult.png" alt="">
                        </div>
                        <h3 class="seoresult__title">Общий вывод</h3>
                        <div class="seoresult__desc">
                            <p>
                                SEO-продвижение сайта в Канаде - это стратегия, требующая терпения и постоянной работы. Результаты будут видны постепенно, но они будут стабильными и устойчивыми в долгосрочной перспективе. Наилучший момент начать SEO - это сейчас, чтобы в будущем наслаждаться органическими успехами на англоязычном рынке Канады.
                            </p>
                        </div>
                    </div>


                </div>

            </div>
        </div>
        <!-- END РЕЗУЛЬТАТ -->
    <?php } ?>

    <!-- seo_prodvizhenie -->
    <?php if (get_field('seo_prodvizhenie_lejbl')) { ?>
        <!-- START SEO-ПРОДВИЖЕНИЕ -->
        <div class="block ">
            <div class="container">
                <div class="block__label"><?php the_field('seo_prodvizhenie_lejbl'); ?></div>
                <h2 class="block__title mw915">Особенности SEO-продвижения сайта в Канаде</h2>

                <div class="seoprom">

                    <div class="seoprom__item">
                        <div class="seoprom__before"></div>
                        <div class="seoprom__body">
                            <h3 class="seoprom__title">Мультикультурное окружение</h3>
                            <div class="seoprom__desc">
                                Канада – это мультикультурное общество с разнообразной аудиторией, говорящей на разных языках. Это означает, что для успешного продвижения сайта в Канаде необходимо учитывать разные языковые группы и культурные особенности. Контент и ключевые слова должны быть адаптированы под разные аудитории.
                            </div>
                        </div>
                    </div>

                    <div class="seoprom__item">
                        <div class="seoprom__before"></div>
                        <div class="seoprom__body">
                            <h3 class="seoprom__title">Влияние мобильного трафика</h3>
                            <div class="seoprom__desc">
                                Как и во многих других странах, мобильный трафик в Канаде постоянно растет. Поэтому ваш сайт должен быть адаптирован для мобильных устройств и иметь высокую скорость загрузки на мобильных платформах.
                            </div>
                        </div>
                    </div>

                    <div class="seoprom__item">
                        <div class="seoprom__before"></div>
                        <div class="seoprom__body">
                            <h3 class="seoprom__title">Географические различия</h3>
                            <div class="seoprom__desc">
                                Канада - крупная страна с разнообразными географическими особенностями. Расстояния между городами и провинциями могут быть огромными. Поэтому важно определить целевую аудиторию и проводить геотаргетинг, чтобы привлечь клиентов из конкретных регионов.
                            </div>
                        </div>
                    </div>

                    <div class="seoprom__item">
                        <div class="seoprom__before"></div>
                        <div class="seoprom__body">
                            <h3 class="seoprom__title">Соблюдение местных законов</h3>
                            <div class="seoprom__desc">
                                Канада имеет свои законы и правила, касающиеся интернет-бизнеса, защиты данных и рекламы. При продвижении сайта в Канаде необходимо соблюдать все местные нормативы и стандарты, чтобы избежать правовых проблем.
                            </div>
                        </div>
                    </div>

                    <div class="seoprom__item">
                        <div class="seoprom__before"></div>
                        <div class="seoprom__body">
                            <h3 class="seoprom__title">Конкуренция на рынке</h3>
                            <div class="seoprom__desc">
                                Канада – это развитая страна с активной конкуренцией во многих отраслях. SEO-продвижение в Канаде требует более интенсивных усилий для преодоления конкуренции и выхода на топовые позиции в поисковых результатах.
                            </div>
                        </div>
                    </div>

                    <div class="seoprom__item">
                        <div class="seoprom__before"></div>
                        <div class="seoprom__body">
                            <h3 class="seoprom__title">Учет особенностей культуры</h3>
                            <div class="seoprom__desc">
                                Канадская культура уникальна, и важно понимать ее особенности при создании контента и рекламных кампаний. Успешное SEO-продвижение в Канаде включает в себя создание контента, который соответствует ценностям и интересам канадских пользователей.
                            </div>
                        </div>
                    </div>

                    <div class="seoprom__item">
                        <div class="seoprom__before"></div>
                        <div class="seoprom__body">
                            <h3 class="seoprom__title">Правила локального SEO</h3>
                            <div class="seoprom__desc">
                                Локальный SEO имеет большое значение для бизнесов, ориентированных на местный рынок. Важно оптимизировать свой сайт для локальных поисковых запросов, указать точное местоположение на карте, создать локальные бизнес-профили и следить за отзывами клиентов.
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- END SEO-ПРОДВИЖЕНИЕ -->
    <?php } ?>

    <!-- effektivnoe_seo_prodvizhenie_sajta -->
    <?php if (get_field('effektivnoe_seo_prodvizhenie_sajta_lejbl')) { ?>
        <!-- START Эффективное SEO-продвижение сайта -->
        <div class="block">
            <div class="container">
                <div class="block__label"><?php the_field('effektivnoe_seo_prodvizhenie_sajta_lejbl'); ?></div>
                <h2 class="block__title">Инструменты и технологии</h2>

                <div class="tools">

                    <div class="tools__item">
                        <div class="tools__img">
                            <img src="<?php echo $temp_uri ?>/assets/img/page-seo/tools.png" alt="">
                        </div>
                        <h3 class="tools__title">Аналитика и мониторинг</h3>
                        <div class="tools__desc">
                            <p>
                                Одним из ключевых компонентов успешного SEO-продвижения является аналитика. Инструменты, такие как Google Analytics и Google Search Console, позволяют отслеживать трафик, поведение пользователей, ключевые слова, которые приводят на сайт, и многое другое. Эта информация помогает определить, какие стратегии работают, а какие требуют коррекции.
                            </p>
                        </div>
                    </div>

                    <div class="tools__item">
                        <div class="tools__img">
                            <img src="<?php echo $temp_uri ?>/assets/img/page-seo/tools.png" alt="">
                        </div>
                        <h3 class="tools__title">Исследование ключевых слов</h3>
                        <div class="tools__desc">
                            <p>
                                Для оптимизации контента необходимо проводить исследование ключевых слов, актуальных для канадской аудитории. Инструменты, такие как Google Keyword Planner и SEMrush, помогают определить наиболее востребованные запросы и фразы, которые помогут привлечь целевых посетителей на сайт.
                            </p>
                        </div>
                    </div>

                    <div class="tools__item">
                        <div class="tools__img">
                            <img src="<?php echo $temp_uri ?>/assets/img/page-seo/tools.png" alt="">
                        </div>
                        <h3 class="tools__title">Оптимизация контента</h3>
                        <div class="tools__desc">
                            <p>
                                Современные технологии позволяют проводить более эффективную оптимизацию контента. Это включает в себя использование инструментов для анализа плотности ключевых слов, определения уникальности текста и улучшения читабельности для пользователей и поисковых роботов.
                            </p>
                        </div>
                    </div>

                    <div class="tools__item">
                        <div class="tools__img">
                            <img src="<?php echo $temp_uri ?>/assets/img/page-seo/tools.png" alt="">
                        </div>
                        <h3 class="tools__title">Техническая оптимизация</h3>
                        <div class="tools__desc">
                            <p>
                                Для улучшения скорости загрузки сайта и его технической производительности используются инструменты и технологии, такие как сжатие изображений, кэширование, оптимизация CSS и JavaScript. Это позволяет улучшить пользовательский опыт и повысить ранжирование сайта в поисковых системах.
                            </p>
                        </div>
                    </div>

                    <div class="tools__item">
                        <div class="tools__img">
                            <img src="<?php echo $temp_uri ?>/assets/img/page-seo/tools.png" alt="">
                        </div>
                        <h3 class="tools__title">Ссылочный профиль</h3>
                        <div class="tools__desc">
                            <p>
                                Сбор и анализ данных о ссылках на сайт (ссылочный профиль) является важной частью SEO. Инструменты, такие как Ahrefs и Majestic, помогают отслеживать обратные ссылки, оценивать их качество и выявлять потенциальные возможности для получения новых ссылок.
                            </p>
                        </div>
                    </div>

                    <div class="tools__item">
                        <div class="tools__img">
                            <img src="<?php echo $temp_uri ?>/assets/img/page-seo/tools.png" alt="">
                        </div>
                        <h3 class="tools__title">Автоматизация</h3>
                        <div class="tools__desc">
                            <p>
                                С ростом сложности задач SEO становится все более важной автоматизация процессов. Инструменты автоматизации, такие как Screaming Frog и Moz, помогают в сборе данных, мониторинге, анализе и отчетности, что позволяет сэкономить время и улучшить результаты.
                            </p>
                        </div>
                    </div>

                    <div class="tools__item">
                        <div class="tools__img">
                            <img src="<?php echo $temp_uri ?>/assets/img/page-seo/tools.png" alt="">
                        </div>
                        <h3 class="tools__title">Социальные сети</h3>
                        <div class="tools__desc">
                            <p>
                                Социальные сети играют важную роль в продвижении сайта. Интеграция социальных медиа и использование инструментов для планирования и анализа публикаций помогают расширить аудиторию и повысить вовлеченность пользователей.
                            </p>
                        </div>
                    </div>

                    <div class="tools__item">
                        <div class="tools__img">
                            <img src="<?php echo $temp_uri ?>/assets/img/page-seo/tools.png" alt="">
                        </div>
                        <h3 class="tools__title">Мобильная оптимизация</h3>
                        <div class="tools__desc">
                            <p>
                                С увеличением числа мобильных пользователей важно оптимизировать сайт для мобильных устройств. Использование технологий, таких как адаптивный дизайн и ускорение загрузки на мобильных устройствах, помогает удерживать аудиторию и улучшать показатели SEO.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- END Эффективное SEO-продвижение сайта -->
    <?php } ?>

    <!-- otzyvy_klientov -->
    <?php if (get_field('otzyvy_klientov_lejbl')) { ?>
        <!-- START Отзывы клиентов -->
        <div class="block">
            <div class="container">
                <div class="block__label"><?php the_field('otzyvy_klientov_lejbl'); ?></div>
                <h2 class="block__title mw880">Опыт клиентов: что говорят о нас наши заказчики</h2>

                <div class="review">
                    <div class="review__inner">

                        <div class="review__item">
                            <div class="review__header">
                                <div class="review__img">
                                    <img src="<?php echo $temp_uri ?>/assets/img/page-seo/photo.png" alt="">
                                </div>
                                <div class="review__pers">
                                    <div class="review__pers-name">Марина Иванова</div>
                                    <div class="review__pers-position">Ютубер</div>
                                </div>
                            </div>
                            <div class="review__text">
                                <p>
                                    За более чем годовое сотрудничество — хотелось бы отметить четкую и грамотную постановку задач, максимально понятные технические задания и быстрое реагирование на наши вопросы. И главное — системную работу на результат. Раш Эдженси — профессионалы своего дела.
                                </p>
                            </div>
                            <div class="review__rating">
                                <span class="active"></span>
                                <span class="active"></span>
                                <span class="active"></span>
                                <span class="active"></span>
                                <span></span>
                            </div>
                        </div>


                        <div class="review__item">
                            <div class="review__header">
                                <div class="review__img">
                                    <img src="<?php echo $temp_uri ?>/assets/img/page-seo/photo.png" alt="">
                                </div>
                                <div class="review__pers">
                                    <div class="review__pers-name">Марина Иванова</div>
                                    <div class="review__pers-position">Ютубер</div>
                                </div>
                            </div>
                            <div class="review__text">
                                <p>
                                    За более чем годовое сотрудничество — хотелось бы отметить четкую и грамотную постановку задач, максимально понятные технические задания и быстрое реагирование на наши вопросы. И главное — системную работу на результат. Раш Эдженси — профессионалы своего дела.
                                </p>
                            </div>
                            <div class="review__rating">
                                <span class="active"></span>
                                <span class="active"></span>
                                <span class="active"></span>
                                <span class="active"></span>
                                <span class="active"></span>
                            </div>
                        </div>

                        <div class="review__item">
                            <div class="review__header">
                                <div class="review__img">
                                    <img src="<?php echo $temp_uri ?>/assets/img/page-seo/photo.png" alt="">
                                </div>
                                <div class="review__pers">
                                    <div class="review__pers-name">Марина Иванова</div>
                                    <div class="review__pers-position">Ютубер</div>
                                </div>
                            </div>
                            <div class="review__text">
                                <p>
                                    За более чем годовое сотрудничество — хотелось бы отметить четкую и грамотную постановку задач, максимально понятные технические задания и быстрое реагирование на наши вопросы. И главное — системную работу на результат. Раш Эдженси — профессионалы своего дела.
                                </p>
                            </div>
                            <div class="review__rating">
                                <span class="active"></span>
                                <span class="active"></span>
                                <span class="active"></span>
                                <span class="active"></span>
                                <span></span>
                            </div>
                        </div>

                    </div>
                    <div class="review__all">
                        <div class="review__all_before"></div>
                        <a href="#">
                            <div class="btn btn_arrow-black">Все отзывы</div>
                        </a>
                        <div class="review__all_after"></div>
                    </div>
                </div>

            </div>
        </div>
        <!-- END Отзывы клиентов -->
    <?php } ?>

    <!-- komanda -->
    <?php if (get_field('komanda_lejbl')) { ?>
        <!-- START КОМАНДА -->
        <div class="block">
            <div class="container">
                <div class="block__label"><?php the_field('komanda_lejbl'); ?></div>
                <h2 class="block__title mw880">Команда, которая будет работать над вашим проектом</h2>

                <div class="team">
                    <div class="team__main">
                        <div class="team__main-img">
                            <img src="<?php echo $temp_uri ?>/assets/img/page-seo/team-main.png" alt="">
                        </div>
                        <div class="team__main-body">
                            <div class="team__main-label">
                                <div class="team__main-icon">
                                    <img src="<?php echo $temp_uri ?>/assets/img/page-seo/team-main-icon.png" alt="">
                                </div>
                                <div class="team__main-position">Руководитель SEO департамента</div>
                            </div>
                            <div class="team__main-name">Иван Иванов</div>
                        </div>
                    </div>

                    <div class="team__list">

                        <div class="team__item">
                            <div class="team__label">
                                <div class="team__icon">
                                    <img src="<?php echo $temp_uri ?>/assets/img/page-seo/team-icons/SEO-аналитик.png" alt="">
                                </div>
                                <div class="team__position">SEO-аналитик</div>
                            </div>
                            <div class="team__count-spec">1 специалист</div>
                        </div>

                        <div class="team__item">
                            <div class="team__label">
                                <div class="team__icon">
                                    <img src="<?php echo $temp_uri ?>/assets/img/page-seo/team-icons/SEO-специалист.png" alt="">
                                </div>
                                <div class="team__position">SEO-специалист</div>
                            </div>
                            <div class="team__count-spec">1 специалист</div>
                        </div>

                        <div class="team__item">
                            <div class="team__label">
                                <div class="team__icon">
                                    <img src="<?php echo $temp_uri ?>/assets/img/page-seo/team-icons/Копирайтер-1.png" alt="">
                                </div>
                                <div class="team__position">Копирайтер</div>
                            </div>
                            <div class="team__count-spec">1 специалист</div>
                        </div>

                        <div class="team__item">
                            <div class="team__label">
                                <div class="team__icon">
                                    <img src="<?php echo $temp_uri ?>/assets/img/page-seo/team-icons/Копирайтер-2.png" alt="">
                                </div>
                                <div class="team__position">Копирайтер</div>
                            </div>
                            <div class="team__count-spec">1 специалист</div>
                        </div>

                        <div class="team__item">
                            <div class="team__label">
                                <div class="team__icon">
                                    <img src="<?php echo $temp_uri ?>/assets/img/page-seo/team-icons/Линкбилдер-1.png" alt="">
                                </div>
                                <div class="team__position">Линкбилдер</div>
                            </div>
                            <div class="team__count-spec">1 специалист</div>
                        </div>

                        <div class="team__item">
                            <div class="team__label">
                                <div class="team__icon">
                                    <img src="<?php echo $temp_uri ?>/assets/img/page-seo/team-icons/Линкбилдер-2.png" alt="">
                                </div>
                                <div class="team__position">Линкбилдер</div>
                            </div>
                            <div class="team__count-spec">1 специалист</div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
        <!-- END КОМАНДА -->
    <?php } ?>

    <!-- faq -->
    <?php if (get_field('faq_lejbl')) { ?>
        <!-- START FAQ -->
        <div class="block">
            <div class="container">
                <div class="block__label"><?php the_field('faq_lejbl'); ?></div>
                <h2 class="block__title mw880">Часто задаваемые вопросы и полезная информация для вас</h2>

                <div class="faq">

                    <div class="faq__item">
                        <div class="faq-question">
                            <div class="counter">01</div>
                            <div class="faq-question__question">Через какое время я увижу результат?</div>
                            <div class="btn btn_plus-yellow">Подробнее</div>
                        </div>
                        <div class="faq-answer">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum quibusdam iste voluptas illo corporis sint reiciendis laborum expedita molestiae, enim non provident et perspiciatis dicta ex omnis earum. Rerum, culpa!
                            </p>
                        </div>
                    </div>

                    <div class="faq__item">
                        <div class="faq-question">
                            <div class="counter">02</div>
                            <div class="faq-question__question">У вас есть гарантия результата?</div>
                            <div class="btn btn_plus-yellow">Подробнее</div>
                        </div>
                        <div class="faq-answer">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum quibusdam iste voluptas illo corporis sint reiciendis laborum expedita molestiae, enim non provident et perspiciatis dicta ex omnis earum. Rerum, culpa!
                            </p>
                        </div>
                    </div>

                    <div class="faq__item">
                        <div class="faq-question">
                            <div class="counter">03</div>
                            <div class="faq-question__question">Что входит в стоимость услуг?</div>
                            <div class="btn btn_plus-yellow">Подробнее</div>
                        </div>
                        <div class="faq-answer">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum quibusdam iste voluptas illo corporis sint reiciendis laborum expedita molestiae, enim non provident et perspiciatis dicta ex omnis earum. Rerum, culpa!
                            </p>
                        </div>
                    </div>

                    <div class="faq__item">
                        <div class="faq-question">
                            <div class="counter">04</div>
                            <div class="faq-question__question">Какие сервисы вы используете в работе?</div>
                            <div class="btn btn_plus-yellow">Подробнее</div>
                        </div>
                        <div class="faq-answer">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum quibusdam iste voluptas illo corporis sint reiciendis laborum expedita molestiae, enim non provident et perspiciatis dicta ex omnis earum. Rerum, culpa!
                            </p>
                        </div>
                    </div>


                </div>

            </div>
        </div>
        <!-- END FAQ -->
    <?php } ?>

    <!-- uslugi -->
    <?php if (get_field('uslugi_lejbl')) { ?>
        <!-- START УСЛУГИ -->
        <div class="block">
            <div class="container">
                <div class="block__label"><?php the_field('uslugi_lejbl'); ?></div>
                <h2 class="block__title">Что еще можем предложить</h2>

                <div class="service">

                    <div class="service__item">
                        <div class="service__header">
                            <div class="service__header-el">
                                <img src="<?php echo $temp_uri ?>/assets/img/services/icon-1.png" alt="">
                            </div>
                            <div class="counter">01</div>
                        </div>
                        <h3 class="service__title">Разработка сайтов</h3>
                        <div class="service__desc">Создаем уникальные, функциональные и пользовательски ориентированные сайты для улучшения вашего онлайн-присутствия.</div>
                        <div class="service__detail">

                            <div class="service-list">
                                <div class="service-list__item"><span>Реализация</span><span>от 4 нед.</span></div>
                                <div class="service-list__item"><span>Цена</span><span>от 500 000 ₽</span></div>
                            </div>

                        </div>
                        <div class="service__footer">
                            <a href="#">
                                <div class="btn">Подробнее</div>
                            </a>
                        </div>
                    </div>

                    <div class="service__item">
                        <div class="service__header">
                            <div class="service__header-el">
                                <img src="<?php echo $temp_uri ?>/assets/img/services/icon-2.png" alt="">
                            </div>
                            <div class="counter">02</div>
                        </div>
                        <h3 class="service__title">Контекстная реклама</h3>
                        <div class="service__desc">Оптимизируем вашу рекламную кампанию для максимального ROI, привлекая целевую аудиторию и увеличивая доход.</div>
                        <div class="service__detail">

                            <div class="service-list">
                                <div class="service-list__item"><span>Реализация</span><span>от 4 нед.</span></div>
                                <div class="service-list__item"><span>Цена</span><span>от 500 000 ₽</span></div>
                            </div>

                        </div>
                        <div class="service__footer">
                            <a href="#">
                                <div class="btn">Подробнее</div>
                            </a>
                        </div>
                    </div>

                    <div class="service__item">
                        <div class="service__header">
                            <div class="service__header-el">
                                <img src="<?php echo $temp_uri ?>/assets/img/services/icon-3.png" alt="">
                            </div>
                            <div class="counter">03</div>
                        </div>
                        <h3 class="service__title">Реклама Google Local Ads / Google Guaranteed</h3>
                        <div class="service__desc">Создаем уникальные, функциональные и пользовательски ориентированные сайты для улучшения вашего онлайн-присутствия.</div>
                        <div class="service__detail">

                            <div class="service-list">
                                <div class="service-list__item"><span>Реализация</span><span>от 4 нед.</span></div>
                                <div class="service-list__item"><span>Цена</span><span>от 500 000 ₽</span></div>
                            </div>

                        </div>
                        <div class="service__footer">
                            <a href="#">
                                <div class="btn">Подробнее</div>
                            </a>
                        </div>
                    </div>

                    <div class="service__item">
                        <div class="service__header">
                            <div class="service__header-el">
                                <img src="<?php echo $temp_uri ?>/assets/img/services/icon-4.png" alt="">
                            </div>
                            <div class="counter">04</div>
                        </div>
                        <h3 class="service__title">Web-дизайн</h3>
                        <div class="service__desc">Оптимизируем вашу рекламную кампанию для максимального ROI, привлекая целевую аудиторию и увеличивая доход.</div>
                        <div class="service__detail">

                            <div class="service-list">
                                <div class="service-list__item"><span>Реализация</span><span>от 4 нед.</span></div>
                                <div class="service-list__item"><span>Цена</span><span>от 500 000 ₽</span></div>
                            </div>

                        </div>
                        <div class="service__footer">
                            <a href="#">
                                <div class="btn">Подробнее</div>
                            </a>
                        </div>
                    </div>

                    <div class="service__item">
                        <div class="service__header">
                            <div class="service__header-el">
                                <img src="<?php echo $temp_uri ?>/assets/img/services/icon-5.png" alt="">
                            </div>
                            <div class="counter">05</div>
                        </div>
                        <h3 class="service__title">Написание SEO-текстов</h3>
                        <div class="service__desc">Создаем уникальные, функциональные и пользовательски ориентированные сайты для улучшения вашего онлайн-присутствия.</div>
                        <div class="service__detail">

                            <div class="service-list">
                                <div class="service-list__item"><span>Реализация</span><span>от 4 нед.</span></div>
                                <div class="service-list__item"><span>Цена</span><span>от 500 000 ₽</span></div>
                            </div>

                        </div>
                        <div class="service__footer">
                            <a href="#">
                                <div class="btn">Подробнее</div>
                            </a>
                        </div>
                    </div>

                    <div class="service__item">
                        <div class="service__header">
                            <div class="service__header-el">
                                <img src="<?php echo $temp_uri ?>/assets/img/services/icon-6.png" alt="">
                            </div>
                            <div class="counter">06</div>
                        </div>
                        <h3 class="service__title">Ускорение работы сайта</h3>
                        <div class="service__desc">Оптимизируем вашу рекламную кампанию для максимального ROI, привлекая целевую аудиторию и увеличивая доход.</div>
                        <div class="service__detail">

                            <div class="service-list">
                                <div class="service-list__item"><span>Реализация</span><span>от 4 нед.</span></div>
                                <div class="service-list__item"><span>Цена</span><span>от 500 000 ₽</span></div>
                            </div>

                        </div>
                        <div class="service__footer">
                            <a href="#">
                                <div class="btn">Подробнее</div>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- END УСЛУГИ -->
    <?php } ?>

</div>

<?php get_footer(); ?>