<?php
$temp_uri = get_template_directory_uri();
$home_uri = get_home_url();
?>

</main>

<footer class="footer">
    <div class="container">
        <div class="footer__inner">

            <div class="footer__item">
                <div class="footer__logo"><img src="<?php echo $temp_uri ?>/assets/img/main/logo-79-38.png" alt=""></div>
                <a href="#">
                    <div class="btn btn_arrow-yellow">Бесплатный аудит</div>
                </a>
            </div>

            <div class="footer__item">
                <div class="footer__block">
                    <div class="footer__label">Ссылки</div>
                    <div class="footer__list">
                        <ul>
                            <li><a href="#">Блог</a></li>
                            <li><a href="#">Кейсы</a></li>
                            <li><a href="#">Наша команда</a></li>
                            <li><a href="#">О компании</a></li>
                            <li><a href="#">Цены</a></li>
                            <li><a href="#">Политика конфиденциальности</a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="footer__item">
                <div class="footer__block">
                    <div class="footer__label">Услуги</div>
                    <div class="footer__list">
                        <ul>
                            <li><a href="#">Страны</a></li>
                            <li><a href="#">SEO-продвижение сайтов</a></li>
                            <li><a href="#">Услуги Digital-маркетинга</a></li>
                            <li><a href="#">Индустрии</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer__item">
                <div class="footer__block">
                    <div class="footer__label">Контактная информация</div>
                    <div class="footer__list">
                        <ul>
                            <li>Адресс: Austria</li>
                            <li><a href="mailto:support@wadiv.com">Email: support@wadiv.com</a></li>
                            <li><a href="tel:+(002) 1111-8710-594">Телефон: +(002) 1111-8710-594</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-social">
                    <div class="footer-social__item">
                        <a href="#">
                            <img src="<?php echo $temp_uri ?>/assets/img/social/Facebook.png" alt="Facebook">
                        </a>
                    </div>
                    <div class="footer-social__item">
                        <a href="#">
                            <img src="<?php echo $temp_uri ?>/assets/img/social/insta.png" alt="insta">
                        </a>
                    </div>
                    <div class="footer-social__item">
                        <a href="#">
                            <img src="<?php echo $temp_uri ?>/assets/img/social/linkedin.png" alt="linkedin">
                        </a>
                    </div>
                    <div class="footer-social__item">
                        <a href="#">
                            <img src="<?php echo $temp_uri ?>/assets/img/social/tg.png" alt="tg">
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<?php wp_footer(); ?>
<script src="<?php echo $temp_uri ?>/assets/js/main.js"></script>
</body>

</html>