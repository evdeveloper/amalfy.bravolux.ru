<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="services.css"> -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="blocks/cs/banner.css">
    <link rel="stylesheet" href="blocks/cs/header.css">
    <link rel="stylesheet" href="blocks/cs/trust.css">
    <link rel="stylesheet" href="blocks/cs/prices-table.css">
    <link rel="stylesheet" href="index.css">


    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <?php include ("blocks/header.php");?>
        <main class="main">
            <?php include ("blocks/banner.php");?>
            <?php include ("blocks/prices-table.php");?>
            <?php include ("blocks/trust.php");?>
            <?php include ("blocks/gallery-salon.php");?>
            <?php include ("blocks/footer.php");?>
            

            <!-- <div class="price-listcontainer-main">
                <div class="price-head-register">
                    <p class="price-list-head">Цены на основные услуги</p>
                    <a class="register register-none" href="index.html"><span class="register-text">Открыть полный прайс лист</span></a>
                </div>
                <div class="price-list-container">
                    <div class="price-list-div">
                        <div class="items-div-first">
                            <div class="price-list-item">
                                <span class="price-list-item-name">Стразы [мал. 1 шт.]</span>
                                <span class="price-list-item-price">20 ₽</span>

                            </div>
                            <div class="price-list-item">
                                <span class="price-list-item-name">Стразы [бол./фигур. 1 шт.]</span>
                                <span class="price-list-item-price">30 ₽</span>

                            </div>
                            <div class="price-list-item">
                                <span class="price-list-item-name">Полоски самокл. [1 шт.]</span>
                                <span class="price-list-item-price">50 ₽</span>

                            </div>
                            <div class="price-list-item">
                                <span class="price-list-item-name">Слайдер 1 ноготок</span>
                                <span class="price-list-item-price">50 ₽</span>

                            </div>

                        </div>
                        <div class="items-div-second">
                            <div class="price-list-item">
                                <span class="price-list-item-name">Дизайн "Мрамор"</span>
                                <span class="price-list-item-price">150 ₽</span>

                            </div>
                            <div class="price-list-item">
                                <span class="price-list-item-name">Дизайн "Битое стекло"</span>
                                <span class="price-list-item-price">150 ₽</span>

                            </div>
                            <div class="price-list-item">
                                <span class="price-list-item-name">Топ Luxio Shimmer</span>
                                <span class="price-list-item-price">200-300 ₽</span>

                            </div>
                            <div class="price-list-item">
                                <span class="price-list-item-name">Матовый топ</span>
                                <span class="price-list-item-price">200-300 ₽</span>

                            </div>

                        </div>

                    </div>
                </div>
                <div class="mobile-register-div">
                    <a class="register" href="index.html"><span class="register-text">Записаться</span></a>
                </div>
            </div>
            <div class="services-video-div">
                <div class="services-text-div">
                    <p class="benefit-name ">Салон и услуги в одном чудесном видео
                    </p>
                    <p class="benefit-description position">Просто посмотрите небольшое видео о салоне, работах и мастерах. Просто посмотрите небольшое видео о салоне, работах и мастерах</p>
                    <div class="benefits-link-div ">
                        <a class="benefits-link " href="index.html"><span>Смотреть фото</span><img class="pointer " src="img/Vector.png" alt=" "></a>

                    </div>
                </div>
                <div class="video-block">
                    <div class="back-block"></div>
                    <div onclick="initVideo()" id="img"><img class="play-img" src="img/play.png" alt="">
                    </div>
                </div>
            </div>
            <div class="services-list-div ">
                <h1 class="our-services ">Наши услуги</h1>
                <div class="services-list ">
                    <a href="manikur.html" class="services-item "><span class="services-item-name ">Маникюр</span><div class="wrap-opacity "></div></a>
                    <a href="index.html" class="services-item "><span class="services-item-name ">Педикюр</span><div class="wrap-opacity "></div></a>
                    <a href="index.html" class="services-item "><span class="services-item-name ">Дизайн</span><div class="wrap-opacity "></div></a>
                    <a href="index.html" class="services-item "><span class="services-item-name ">Дополнительные услуги</span><div class="wrap-opacity "></div></a>
                    <a href="index.html" class="services-item "><span class="services-item-name ">Покрытия</span><div class="wrap-opacity "></div></a>
                    <a href="index.html" class="services-item "><span class="services-item-name ">Наращивание ногтей</span><div class="wrap-opacity "></div></a>
                    <a href="index.html" class="services-item "><span class="services-item-name ">Brow Bar</span><div class="wrap-opacity "></div></a>
                    <a href="index.html" class="services-item "><span class="services-item-name ">Наращивание ресниц</span><div class="wrap-opacity "></div></a>
                    <a href="index.html" class="services-item "><span class="services-item-name ">Ламинирование ресниц</span><div class="wrap-opacity "></div></a>
                    <a href="index.html" class="services-item "><span class="services-item-name ">Ламинирование бровей</span><div class="wrap-opacity "></div></a>

                </div>
            </div>
            <p class="trust-us ">Доверьте нам работу над красотой!</p>
            <div class="benefits-list ">
                <div class="benefits-item ">
                    <picture class="benefits-img ">
                        <source srcset="img/garant180.png " media="(min-width: 1920px) ">
                        <source srcset="img/garant150.png " media="(min-width: 630px) ">
                        <img src="img/garant180.png" alt="logo ">
                    </picture>
                    <p class="benefit-name b-n-1">Гарантия на покрытие - N дней</p>
                    <p class="benefit-description ">Переделаем покрытие бесплатно в течение N дней после маникюра или педикюра, если с ним что-то случится</p>
                </div>
                <div class="benefits-item ">
                    <picture class="logo ">
                        <source srcset="img/studio180.png " media="(min-width: 1920px) ">
                        <source srcset="img/studio150.png " media="(min-width: 630px) ">
                        <img src="img/studio180.png" alt="logo ">
                    </picture>
                    <p class="benefit-name ">Профилактические меры
                    </p>
                    <p class="benefit-description ">Мы безоговорочно следуем указам Роспотребнадзора и заботимся о клиентах и сотрудниках</p>
                </div>
                <div class="benefits-item ">
                    <picture class="logo ">
                        <source srcset="img/profilactic180.png " media="(min-width: 1920px) ">
                        <source srcset="img/profilactic150.png " media="(min-width: 630px) ">
                        <img src="img/profilactic180.png" alt="logo ">
                    </picture>
                    <p class="benefit-name ">Студия в сердце столицы</p>
                    <p class="benefit-description ">Салон красоты бизнес-класса в центре Москвы у метро «Белорусская»</p>
                    <div class="benefits-link-div ">
                        <a class="benefits-link " href="index.html"><span>Адрес студии</span> <img class="pointer " src="img/Vector.png" alt=" "></a>

                    </div>
                </div>
                <div class="benefits-item ">
                    <picture class="logo ">
                        <source srcset="img/atmosphere.png " media="(min-width: 1920px) ">
                        <source srcset="img/atmosphere150.png " media="(min-width: 630px) ">
                        <img src="img/atmosphere.png" alt="logo ">
                    </picture>
                    <p class="benefit-name ">Роскошная атмосфера
                    </p>
                    <p class="benefit-description ">Погрузитесь в красивое стильное пространство, где хочется находиться!</p>
                    <div class="benefits-link-div ">
                        <a class="benefits-link " href="index.html"><span>Смотреть фото</span><img class="pointer " src="img/Vector.png" alt=" "></a>

                    </div>
                </div>

            </div>
            <p class="offer">Приятные предложения</p>
            <div class="main-banner second-banner">
                <div class="baner-container second-banner-position">
                    <div class="banner-content-container banner-content-container-second offer-banner-div">
                        <p class="manikur">15% скидка на первый визит</p>
                        <p class="main-banner-text">Если ты ещё ни разу у нас не была, приглашаем попробовать со скидкой. Первый маникюр + гель-лак = 925 рублей.</p>
                        <button class="main-banner-button"><span class="main-banner-button-text">Записаться</span></button>
                    </div>
                </div>
            </div>
            <div class="offers-div">
                <div class="offer-item">
                    <img class="offer-img" src="img/offer-img-1.png" alt="">
                    <span class="offers-text"> Скидка 10% за фото маникюра</span>
                </div>
                <div class="offer-item">
                    <img class="offer-img" src="img/offer-img-2.png" alt="">
                    <span class="offers-text">Маникюр с подругой — дешевле </span>
                </div>
                <div class="offer-item">
                    <img class="offer-img" src="img/offer-img-3.png" alt="">
                    <span class="offers-text"> Абонементы со скидкой до 30%</span>
                </div>
            </div>
            <p class="client-head">Заботимся о клиентах и сотрудниках</p>
            <div class="owl-carousel owl-theme" id="slider">
                <div class="slide slider-item ">
                    <div class="slide-client-number-div">
                        <img class="slide-client-img" src="img/client-slider-img.png" alt="">
                        <span class="slide-number"><img src="img/1.png" alt=""></span>
                    </div>
                    <p class="slider-head-text">Индивидуальные наборы</p>
                    <p class="slider-text">Для каждого клиента мы используем одноразовые индивидуальные наборы инструментов для педикюра и маникюра: пилка, бафик, палочки, тёрка для педикюра и сопутствующие одноразовые материалы</p>
                </div>
                <div class="slide slider-item">
                    <div class="slide-client-number-div">
                        <img class="slide-client-img" src="img/client-slider-img-1.png" alt="">
                        <span class="slide-number"><img src="img/2.png" alt=""></span>
                    </div>
                    <p class="slider-head-text">Дезинфекция</p>
                    <p class="slider-text">Все наши инструменты проходят постоянную дезинфекцию после каждой услуги. Мастер на полчаса помещает их в специальный дезинфецирующий раствор, который мы меняем каждые 3 часа.</p>
                </div>
                <div class="slide slider-item">
                    <div class="slide-client-number-div">
                        <img class="slide-client-img" src="img/client-slider-img-2.png" alt="">
                        <span class="slide-number"><img src="img/3.png" alt=""></span>
                    </div>
                    <p class="slider-head-text">Перед стерилизацией</p>
                    <p class="slider-text">После каждой процедуры дезинфекции мы дополнительно очищаем инструменты от раствора и возможных остатков биотканей. Мастер промывает их водой и кладёт их в специальный бокс, на котором указывается время обработки.</p>
                </div>
                <div class="slide slider-item">
                    <div class="slide-client-number-div">
                        <img class="slide-client-img" src="img/client-slider-img-2.png" alt="">
                        <span class="slide-number"><img src="img/4.png" alt=""></span>
                    </div>
                    <p class="slider-head-text">Перед стерилизацией</p>
                    <p class="slider-text">После каждой процедуры дезинфекции мы дополнительно очищаем инструменты от раствора и возможных остатков биотканей. Мастер промывает их водой и кладёт их в специальный бокс, на котором указывается время обработки.</p>
                </div>
                <div class="slide slider-item">
                    <div class="slide-client-number-div">
                        <img class="slide-client-img" src="img/client-slider-img.png" alt="">
                        <span class="slide-number"><img src="img/1.png" alt=""></span>
                    </div>
                    <p class="slider-head-text">Индивидуальные наборы</p>
                    <p class="slider-text">Для каждого клиента мы используем одноразовые индивидуальные наборы инструментов для педикюра и маникюра: пилка, бафик, палочки, тёрка для педикюра и сопутствующие одноразовые материалы</p>
                </div>
                <div class="slide slider-item">
                    <div class="slide-client-number-div">
                        <img class="slide-client-img" src="img/client-slider-img-1.png" alt="">
                        <span class="slide-number"><img src="img/2.png" alt=""></span>
                    </div>
                    <p class="slider-head-text">Дезинфекция</p>
                    <p class="slider-text">Все наши инструменты проходят постоянную дезинфекцию после каждой услуги. Мастер на полчаса помещает их в специальный дезинфецирующий раствор, который мы меняем каждые 3 часа.</p>
                </div>
                <div class="slide slider-item">
                    <div class="slide-client-number-div">
                        <img class="slide-client-img" src="img/client-slider-img-2.png" alt="">
                        <span class="slide-number"><img src="img/3.png" alt=""></span>
                    </div>
                    <p class="slider-head-text">Перед стерилизацией</p>
                    <p class="slider-text">После каждой процедуры дезинфекции мы дополнительно очищаем инструменты от раствора и возможных остатков биотканей. Мастер промывает их водой и кладёт их в специальный бокс, на котором указывается время обработки.</p>
                </div>
                <div class="slide slider-item">
                    <div class="slide-client-number-div">
                        <img class="slide-client-img" src="img/client-slider-img-2.png" alt="">
                        <span class="slide-number"><img src="img/4.png" alt=""></span>
                    </div>
                    <p class="slider-head-text">Перед стерилизацией</p>
                    <p class="slider-text">После каждой процедуры дезинфекции мы дополнительно очищаем инструменты от раствора и возможных остатков биотканей. Мастер промывает их водой и кладёт их в специальный бокс, на котором указывается время обработки.</p>
                </div>

            </div>

            <div class="galery-container-main">
                <div class="our-work-div">
                    <p class="our-work-text">Наши работы</p>
                    <a class="we-in-instagram" href="index.html"><span class="we-in-instagram-text">Посмотреть ещё в Instagram</span></a>
                </div>
                <div class="galery-container">
                    <div class="galery-slide">
                        <div class="galery-div-slide">
                            <img class="galery-img" src="img/img-1.png" alt="">
                        </div>
                        <div class="galery-div-slide display-none">
                            <img class="galery-img" src="img/img-2.png" alt="">
                        </div>
                        <div class="galery-div-slide display-none">
                            <img class="galery-img" src="img/img-3.png" alt="">
                        </div>
                        <div class="galery-div-slide display-none">
                            <img class="galery-img" src="img/img-4.png" alt="">
                        </div>
                        <div class="galery-div-slide display-none">
                            <img class="galery-img" src="img/img-5.png" alt="">
                        </div>
                        <div class="galery-div-slide display-none">
                            <img class="galery-img" src="img/img-6.png" alt="">
                        </div>
                        <div class="galery-div-slide display-none">
                            <img class="galery-img" src="img/img-7.png" alt="">
                        </div>
                        <div class="galery-div-slide display-none">
                            <img class="galery-img" src="img/img-8.png" alt="">
                        </div>

                    </div>
                    <div class="slider-img-galery slider-img">
                        <div class="slider-img_item" onclick="currentSlide_galery(1)">
                            <div class="wrap-opacity"></div>
                        </div>
                        <div class="slider-img_item" onclick="currentSlide_galery(2)">
                            <div class="wrap-opacity"></div>
                        </div>
                        <div class="slider-img_item" onclick="currentSlide_galery(3)">
                            <div class="wrap-opacity"></div>
                        </div>
                        <div class="slider-img_item" onclick="currentSlide_galery(4)">
                            <div class="wrap-opacity"></div>
                        </div>
                        <div class="slider-img_item" onclick="currentSlide_galery(5)">
                            <div class="wrap-opacity"></div>
                        </div>
                        <div class="slider-img_item" onclick="currentSlide_galery(6)">
                            <div class="wrap-opacity"></div>
                        </div>
                        <div class="slider-img_item" onclick="currentSlide_galery(7)">
                            <div class="wrap-opacity"></div>
                        </div>
                        <div class="slider-img_item" onclick="currentSlide_galery(8)">
                            <div class="wrap-opacity"></div>
                        </div>

                    </div>
                </div>
            </div>
            <p class="our-work-mobile">Наши работы</p>
            <div class="items">
                <img class="item" src="img/slider-img-2.png">
                <img class="item" src="img/slider-img-2.png">
                <img class="item" src="img/slider-img-2.png">
            </div>
            <p class="who-win-head">Кто выигрывает в дуэли?</p>
            <div class="who-win-container">
                <img src="img/Vector&#32;(2).png" class="minus-slide-who-win" onclick="minusSlide()" alt="">
                <div class="who-win-div">
                    <div class="who-win-item">
                        <div class="who-win-img-block who-win-img-block-1">
                            <div class="who-win-block"></div>
                            <img class="who-win-img who-win-img-2" src="img/who-win-img.png" alt="">

                        </div>
                        <div class="who-win-description">

                            <div class="who-win-description-img"></div>
                            <div class="who-win-description-text-div">
                                <span class="who-win-description-mail">@amalfibeauty</span>
                                <span class="who-win-description-text">Дизайн «Натуральные текстуры» выполн…</span>
                            </div>
                        </div>

                    </div>
                    <p class="who-win-text">Выбираем лучший маникюр месяца!</p>
                    <div class="who-win-item">
                        <div class="who-win-img-block who-win-img-block-2">
                            <div class="who-win-block"></div>
                            <img class="who-win-img who-win-img-2" src="img/who-win-img-2.png" alt="">

                        </div>
                        <div class="who-win-description">
                            <div class="who-win-description-img"></div>
                            <div class="who-win-description-text-div">
                                <span class="who-win-description-mail">@amalfibeauty</span>
                                <span class="who-win-description-text">В данной работе выполнены: -комбинир…</span>
                            </div>
                        </div>

                    </div>


                </div>
                <div class="who-win-div display-none">
                    <div class="who-win-item">
                        <div class="who-win-img-block who-win-img-block-1">
                            <div class="who-win-block"></div>
                            <img class="who-win-img who-win-img-2" src="img/who-win-img-2.png" alt="">

                        </div>
                        <div class="who-win-description">

                            <div class="who-win-description-img"></div>
                            <div class="who-win-description-text-div">
                                <span class="who-win-description-mail">@amalfibeauty</span>
                                <span class="who-win-description-text">В данной работе выполнены: -комбинир…</span>
                            </div>
                        </div>

                    </div>
                    <p class="who-win-text">Выбираем лучший маникюр месяца!</p>
                    <div class="who-win-item">
                        <div class="who-win-img-block who-win-img-block-2">
                            <div class="who-win-block"></div>
                            <img class="who-win-img who-win-img-2" src="img/who-win-img.png" alt="">

                        </div>
                        <div class="who-win-description">
                            <div class="who-win-description-img"></div>
                            <div class="who-win-description-text-div">
                                <span class="who-win-description-mail">@amalfibeauty</span>
                                <span class="who-win-description-text">Дизайн «Натуральные текстуры» выполн…</span>
                            </div>
                        </div>

                    </div>


                </div>
                <img src="img/Vector&#32;(3).png" class="plus-slide-who-win" onclick="plusSlide()" alt="">
                <button class="main-banner-button  who-win-button"><span class="main-banner-button-text">Посмотреть ещё отзывы</span></button>

            </div>
            <div class="comment-container">
                <div class="comment-div">
                    <div class="banner-content-container banner-content-container-none comment-content">
                        <p class="manikur">Честные отзывы</p>
                        <p class="main-banner-text">80% клиентов рекомендуют наш салон друзьям и близким. За время нашей работы мы получили сотни положительных отзывов.</p>
                        <button class="main-banner-button"><span class="main-banner-button-text">Посмотреть ещё отзывы</span></button>
                    </div>
                    <div class="mobile-video">
                        <img id="mobile" src="img/mobile-video-img.png" alt="">
                        <img onclick="initVideoSecond()" class="mobile-border" src="img/mobile-border.png" alt="">
                        <img class="play-img" src="img/play.png" alt="">

                    </div>
                    <button class="main-banner-button main-banner-button-none"><span class="main-banner-button-text">Посмотреть ещё отзывы</span></button>

                </div>

            </div>
            <div class="surprise-container">
                <div class="surprise-content">
                    <p class="surprise-content-head">Порадуйте друзей и близких</p>
                    <span class="surprise-content-text-first">Уход за собой — лучший подарок!</span>
                    <p class="surprise-content-text">
                        При покупке подарочного сертификаты вы получите целый бьюти набор с маской для лица или кремом для рук в красивой упаковке! При покупке подарочного сертификаты вы получите целый бьюти набор с маской для лица или кремом для рук в красивой упаковке!</p>
                </div>
                <div class="video-block">
                    <div class="back-block"></div>
                    <div onclick="initVideo()" id="img"><img class="play-img" src="img/play.png" alt="">
                    </div>
                </div>

            </div>

            <div class="present-container">
                <div class="give-present-div">
                    <p class="give-present-text">Дарите с удовольствием!</p>
                    <button class="give-present-button"> <span class="give-present-button-text">Приобрести сертификат онлайн</span></button>
                </div>
                <span class="line-for-salon line-for-present"></span>
                <div class="presents-div">
                    <div class="present-1-div">
                        <img class="present-1" src="img/present-1.png" alt="">
                        <p class="present-1-text">Подарочный сертификат Amalfi на любые услуги</p>
                    </div>
                    <span class="present-plus">+</span>
                    <div class="present-2-div">
                        <img class="present-2" src="img/present-2.png" alt="">
                        <p class="present-1-text">Маска для лица или крема для рук</p>
                    </div>
                </div>
            </div>
            <span class="line-for-salon"></span>
            <div class="salon-description-div">
                <p class="salon-photo-head">Фотографии салона</p>
                <p class="salon-photo-description">Неповторимая атмосфера, стильный роскошный дизайн и услуги высочайшего качества в салоне красоты Amalfi Nail&Beauty!</p>
            </div>
            <div class="salon-slider-container">

                <div class="salon-slider-div">
                    <div class="galery-div-slide-salon">
                        <img class="galery-img-salon" src="img/salon-sider-main-img.png" alt="">
                    </div>
                    <div class="galery-div-slide-salon display-none">
                        <img class="galery-img-salon" src="img/salon-sider-img-1.png" alt="">
                    </div>
                    <div class="galery-div-slide-salon display-none">
                        <img class="galery-img-salon" src="img/salon-sider-img-2.png" alt="">
                    </div>
                    <div class="galery-div-slide-salon display-none">
                        <img class="galery-img-salon" src="img/salon-sider-img-3.png" alt="">
                    </div>
                    <div class="galery-div-slide-salon display-none">
                        <img class="galery-img-salon" src="img/salon-sider-img-4.png" alt="">
                    </div>
                    <div class="galery-div-slide-salon display-none">
                        <img class="galery-img-salon" src="img/salon-sider-img-5.png" alt="">
                    </div>
                    <div class="galery-div-slide-salon display-none">
                        <img class="galery-img-salon" src="img/salon-sider-main-img.png" alt="">
                    </div>
                    <div class="galery-div-slide-salon display-none">
                        <img class="galery-img-salon" src="img/salon-sider-img-7.png" alt="">
                    </div>
                    <div class="galery-div-slide-salon display-none">
                        <img class="galery-img-salon" src="img/salon-sider-img-8.png" alt="">
                    </div>
                    <div class="galery-div-slide-salon display-none">
                        <img class="galery-img-salon" src="img/salon-sider-img-9.png" alt="">
                    </div>
                    <div class="galery-div-slide-salon display-none">
                        <img class="galery-img-salon" src="img/salon-sider-img-8.png" alt="">
                    </div>
                    <div class="galery-div-slide-salon display-none">
                        <img class="galery-img-salon" src="img/salon-sider-img-9.png" alt="">
                    </div>


                </div>



            </div>
            <div class="owl-carousel owl-theme end-galery" id="slider">
                <div class="slide salon_dot-1 salon_dot" onclick="currentSlide_salon(1)">
                    <div class="wrap-opacity"></div>
                </div>
                <div class="slide salon_dot-2 salon_dot" onclick="currentSlide_salon(2)">
                    <div class="wrap-opacity"></div>
                </div>
                <div class="slide salon_dot-3 salon_dot" onclick="currentSlide_salon(3)">
                    <div class="wrap-opacity"></div>
                </div>
                <div class="slide salon_dot-4 salon_dot" onclick="currentSlide_salon(4)">
                    <div class="wrap-opacity"></div>
                </div>
                <div class="slide salon_dot-5 salon_dot" onclick="currentSlide_salon(5)">
                    <div class="wrap-opacity"></div>
                </div>
                <div class="slide salon_dot-6 salon_dot" onclick="currentSlide_salon(6)">
                    <div class=" wrap-opacity "></div>
                </div>
                <div class="slide salon_dot-7 salon_dot " onclick="currentSlide_salon(7)">
                    <div class="wrap-opacity "></div>
                </div>
                <div class="slide salon_dot-8 salon_dot " onclick="currentSlide_salon(8) ">
                    <div class="wrap-opacity "></div>
                </div>
                <div class="slide salon_dot-9 salon_dot " onclick="currentSlide_salon(9) ">
                    <div class="wrap-opacity "></div>
                </div>
                <div class="slide salon_dot-10 salon_dot " onclick="currentSlide_salon(10) ">
                    <div class="wrap-opacity "></div>
                </div>
                <div class="slide salon_dot-1 salon_dot" onclick="currentSlide_salon(1)">
                    <div class="wrap-opacity"></div>
                </div>
                <div class="slide salon_dot-2 salon_dot" onclick="currentSlide_salon(2)">
                    <div class="wrap-opacity"></div>
                </div>
                <div class="slide salon_dot-3 salon_dot" onclick="currentSlide_salon(3)">
                    <div class="wrap-opacity"></div>
                </div>
                <div class="slide salon_dot-4 salon_dot" onclick="currentSlide_salon(4)">
                    <div class="wrap-opacity"></div>
                </div>
                <div class="slide salon_dot-5 salon_dot" onclick="currentSlide_salon(5)">
                    <div class="wrap-opacity"></div>
                </div>
                <div class="slide salon_dot-6 salon_dot" onclick="currentSlide_salon(6)">
                    <div class=" wrap-opacity "></div>
                </div>
                <div class="slide salon_dot-7 salon_dot " onclick="currentSlide_salon(7)">
                    <div class="wrap-opacity "></div>
                </div>
                <div class="slide salon_dot-8 salon_dot " onclick="currentSlide_salon(8) ">
                    <div class="wrap-opacity "></div>
                </div>
                <div class="slide salon_dot-9 salon_dot " onclick="currentSlide_salon(9) ">
                    <div class="wrap-opacity "></div>
                </div>
                <div class="slide salon_dot-10 salon_dot " onclick="currentSlide_salon(10) ">
                    <div class="wrap-opacity "></div>
                </div>

            </div> -->

        </main>
    </div>


    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link rel="stylesheet" href="blocks/cs/gallery-salon.css">
    <link rel="stylesheet" href="blocks/cs/services-video.css">
    <link rel="stylesheet" href="blocks/cs/video.css">
    <link rel="stylesheet" href="blocks/cs/footer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="blocks/js/gallery-salon.js"></script>
    <script src="blocks/js/video.js"></script>
    <script src="script.js"></script>
    </script>
</body>

</html>