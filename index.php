<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="blocks/cs/banner.css">
    <link rel="stylesheet" href="blocks/cs/header.css">
    <link rel="stylesheet" href="blocks/cs/trust.css">
    <link rel="stylesheet" href="blocks/cs/prices-table.css">
    <title>Главная</title>
</head>

<body>
    <div class="wrapper">
        <?php include ("blocks/header.php");?>
        <main class="main">
            <?php include ("blocks/banner.php");?>
            <?php include ("blocks/prices-table.php");?>
            <?php include ("blocks/services-video.php");?>
            <?php include ("blocks/trust.php");?>
            <?php include ("blocks/services-our.php");?>
            <?php include ("blocks/nice-offers.php");?>
            <?php include ("blocks/care.php");?>
            <?php include ("blocks/our-work.php");?>
            <?php include ("blocks/duel.php");?>
            <?php include ("blocks/honest-reviews.php");?>
            <?php include ("blocks/friends.php");?>
            <?php include ("blocks/gallery-salon.php");?>
            <?php include ("blocks/footer.php");?>
        </main>
    </div>


    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link rel="stylesheet" href="blocks/cs/gallery-salon.css">
    <link rel="stylesheet" href="blocks/cs/services-video.css">
    <link rel="stylesheet" href="blocks/cs/video.css">
    <link rel="stylesheet" href="blocks/cs/popup.css">
    <link rel="stylesheet" href="blocks/cs/select.css">
    <link rel="stylesheet" href="blocks/cs/services-our.css">
    <link rel="stylesheet" href="blocks/cs/nice-offers.css">
    <link rel="stylesheet" href="blocks/cs/services-video.css">
    <link rel="stylesheet" href="blocks/cs/honest-reviews.css">
    <link rel="stylesheet" href="blocks/cs/our-work.css">
    <link rel="stylesheet" href="blocks/cs/friends.css">
    <link rel="stylesheet" href="blocks/cs/care.css">
    <link rel="stylesheet" href="blocks/cs/duel.css">
    <link rel="stylesheet" href="blocks/cs/footer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="blocks/js/gallery-salon.js"></script>
    <script src="blocks/js/care.js"></script>
    <script src="blocks/js/duel.js"></script>
    <script src="blocks/js/our-work.js"></script>
    <script src="blocks/js/video.js"></script>
    <script src="blocks/js/select.js"></script>
    <script src="script.js"></script>

    <div class="mobileMenu">
        <div class="mobileMenu__inner">
            <header class="mobileMenu__header">
                <div class="mobileMenu__tabs">
                    <div class="mobileMenu__tab _active">Меню</div>
                    <div class="mobileMenu__tab">Услуги</div>
                </div>
                <div class="mobileMenu__list">
                    <div class="mobileMenu__item">
                        <a href="#"><span>Услуги</span></a>
                        <a href="#"><span>Наши работы</span></a>
                        <a href="#"><span>Прайс</span></a>
                        <a href="#"><span>Отзывы</span></a>
                        <a href="#"><span>Статьи</span></a>
                        <a href="#"><span>Акции</span></a>
                        <a href="#"><span>Контакты</span></a>
                        <a href="#"><span>О студии</span></a>
                    </div>
                    <div class="mobileMenu__item">
                        <a href="#">Маникюр</a>
                        <a href="#">Педикюр</a>
                        <a href="#">Дизайны</a>
                        <a href="#">Покрытия</a>
                        <a href="#">Наращивание ногтей</a>
                        <a href="#">Brow Bar</a>
                        <a href="#">Ламинирование бровей</a>
                        <a href="#">Макияж и причёска</a>
                        <a href="#">Наращивание ресниц</a>
                    </div>
                </div>
            </header>
            <footer class="mobileMenu__footer">
                <a class="mobileMenu__phone" href="tel:+74951320003">+7 (495) 132-00-03</a>
                <a class="mobileMenu__call callback" href="#"><span>Записаться онлайн</span></a>
                <div class="mobileMenu__clock clock">
                        <img src="img/clock.svg" alt="clock">
                        Ежедневно с 10 до 22
                </div>
                <div class="mobileMenu__location location">
                    <img src="img/location.svg" alt="clock">
                    Белорусская, Александра Невского, 19–25
                </div>
                <div class="mobileMenu__socials socials">
                    <a href="#" class="socials__item">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                            <path d="M21.7144 10.181C21.5764 9.7972 21.3562 9.44977 21.0701 9.1646C20.7922 8.87097 20.454 8.64499 20.0797 8.50334C19.7762 8.38237 19.3203 8.23837 18.4805 8.19914C17.5721 8.15662 17.2997 8.14746 14.9999 8.14746C12.6999 8.14746 12.4275 8.15639 11.5193 8.19891C10.6796 8.23837 10.2234 8.38237 9.92014 8.50334C9.54591 8.64499 9.2074 8.87097 8.92976 9.1646C8.64366 9.44977 8.42348 9.79696 8.28523 10.181C8.16736 10.4925 8.02705 10.9607 7.98883 11.8226C7.9474 12.7547 7.93848 13.0342 7.93848 15.3948C7.93848 17.7551 7.9474 18.0346 7.98883 18.967C8.02705 19.8288 8.16736 20.2968 8.28523 20.6082C8.42348 20.9923 8.64343 21.3395 8.92953 21.6247C9.2074 21.9183 9.54568 22.1443 9.91991 22.2859C10.2234 22.4071 10.6796 22.5511 11.5193 22.5904C12.4275 22.6329 12.6997 22.6418 14.9997 22.6418C17.3 22.6418 17.5723 22.6329 18.4803 22.5904C19.3201 22.5511 19.7762 22.4071 20.0797 22.2859C20.8309 21.9885 21.4247 21.3792 21.7144 20.6082C21.8323 20.2968 21.9726 19.8288 22.011 18.967C22.0525 18.0346 22.0612 17.7551 22.0612 15.3948C22.0612 13.0342 22.0525 12.7547 22.011 11.8226C21.9728 10.9607 21.8325 10.4925 21.7144 10.181ZM14.9999 19.9338C12.5571 19.9338 10.5768 17.9017 10.5768 15.3945C10.5768 12.8874 12.5571 10.8552 14.9999 10.8552C17.4426 10.8552 19.4228 12.8874 19.4228 15.3945C19.4228 17.9017 17.4426 19.9338 14.9999 19.9338ZM19.5977 11.7366C19.0269 11.7366 18.5641 11.2616 18.5641 10.6757C18.5641 10.0899 19.0269 9.61491 19.5977 9.61491C20.1685 9.61491 20.6313 10.0899 20.6313 10.6757C20.6311 11.2616 20.1685 11.7366 19.5977 11.7366Z" fill="black"/>
                            <path d="M17.8711 15.3949C17.8711 17.0223 16.5857 18.3415 15 18.3415C13.4143 18.3415 12.1289 17.0223 12.1289 15.3949C12.1289 13.7675 13.4143 12.4482 15 12.4482C16.5857 12.4482 17.8711 13.7675 17.8711 15.3949Z" fill="black"/>
                            <path d="M27.8364 0H2.16362C0.968628 0 0 0.994118 0 2.22056V28.5689C0 29.7954 0.968628 30.7895 2.16362 30.7895H27.8364C29.0314 30.7895 30 29.7954 30 28.5689V2.22056C30 0.994118 29.0314 0 27.8364 0V0ZM23.5613 19.0393C23.5197 19.9803 23.3739 20.6228 23.161 21.1851C22.7135 22.3726 21.7989 23.3113 20.6419 23.7705C20.0942 23.989 19.468 24.1384 18.5513 24.1814C17.6328 24.2243 17.3394 24.2347 15.0002 24.2347C12.6608 24.2347 12.3676 24.2243 11.4489 24.1814C10.5322 24.1384 9.90601 23.989 9.35829 23.7705C8.78334 23.5485 8.26286 23.2006 7.83257 22.7508C7.39449 22.3094 7.05551 21.775 6.83922 21.1851C6.62636 20.623 6.48056 19.9803 6.4389 19.0395C6.39656 18.0966 6.38672 17.7955 6.38672 15.3947C6.38672 12.994 6.39656 12.6929 6.43867 11.7502C6.48033 10.8092 6.6259 10.1667 6.83876 9.60433C7.05505 9.01448 7.39426 8.48007 7.83257 8.03868C8.26263 7.58884 8.78334 7.24095 9.35806 7.01896C9.90601 6.8005 10.532 6.6511 11.4489 6.60811C12.3674 6.56513 12.6608 6.55479 15 6.55479C17.3392 6.55479 17.6326 6.56513 18.5511 6.60835C19.468 6.6511 20.094 6.8005 20.6419 7.01873C21.2167 7.24071 21.7374 7.58884 22.1677 8.03868C22.6057 8.48031 22.9449 9.01448 23.161 9.60433C23.3741 10.1667 23.5197 10.8092 23.5616 11.7502C23.6034 12.6929 23.6133 12.994 23.6133 15.3947C23.6133 17.7955 23.6034 18.0966 23.5613 19.0393Z" fill="black"/>
                            </g>
                        </svg>
                    </a>
                    <a href="#" class="socials__item">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                            <path d="M27.8364 0H2.16362C0.968628 0 0 0.994118 0 2.22056V28.5689C0 29.7954 0.968628 30.7895 2.16362 30.7895H16.0254V18.8826H12.1289V14.2221H16.0254V10.7922C16.0254 6.81483 18.3913 4.64995 21.8484 4.64995C23.5041 4.64995 24.9271 4.77656 25.3418 4.83317V8.99029H22.958C21.077 8.99029 20.7129 9.90759 20.7129 11.2538V14.2221H25.21L24.624 18.8826H20.7129V30.7895H27.8364C29.0314 30.7895 30 29.7954 30 28.5689V2.22056C30 0.994118 29.0314 0 27.8364 0V0Z" fill="black"/>
                            </g>
                        </svg>
                    </a>
                    <a href="#" class="socials__item">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                            <path d="M15.3212 7.48486C11.2052 7.48486 7.85779 10.9189 7.85596 15.1402C7.8555 16.5867 8.25009 17.9955 8.99693 19.2144L9.17432 19.504L8.42038 22.3292L11.2446 21.5691L11.5172 21.7349C12.6627 22.4326 13.976 22.8016 15.315 22.8021H15.318C19.4308 22.8021 22.7782 19.3678 22.78 15.1463C22.7807 13.1005 22.0052 11.1771 20.5964 9.73009C19.1877 8.28307 17.3141 7.48557 15.3212 7.48486ZM19.7102 18.4317C19.5232 18.9691 18.6271 19.4599 18.1962 19.5261C17.8096 19.5853 17.3207 19.61 16.7833 19.4349C16.4573 19.3288 16.0396 19.1871 15.5043 18.9501C13.2541 17.9532 11.7845 15.6285 11.6723 15.4749C11.5602 15.3213 10.7564 14.2269 10.7564 13.0939C10.7564 11.9612 11.3359 11.4043 11.5414 11.174C11.7472 10.9436 11.9903 10.8861 12.1397 10.8861C12.2892 10.8861 12.4389 10.8875 12.5696 10.894C12.7073 10.9011 12.8923 10.8402 13.0742 11.2891C13.2612 11.75 13.7098 12.8827 13.7659 12.9978C13.822 13.1132 13.8593 13.2476 13.7847 13.4012C13.7098 13.5548 13.3569 14.0176 13.2239 14.1883C13.1248 14.3152 12.9946 14.4277 13.1255 14.6582C13.2562 14.8884 13.7066 15.6422 14.3734 16.2525C15.2303 17.0366 15.9531 17.2795 16.1774 17.3948C16.4015 17.5099 16.5324 17.4906 16.6633 17.3372C16.794 17.1836 17.2241 16.6652 17.3736 16.4347C17.523 16.2043 17.6727 16.2428 17.8782 16.3196C18.084 16.3962 19.1868 16.9532 19.4111 17.0683C19.6354 17.1836 19.7848 17.2412 19.8409 17.3372C19.8972 17.4333 19.8972 17.894 19.7102 18.4317Z" fill="black"/>
                            <path d="M27.8364 0H2.16362C0.968628 0 0 0.994118 0 2.22056V28.5689C0 29.7954 0.968628 30.7895 2.16362 30.7895H27.8364C29.0314 30.7895 30 29.7954 30 28.5689V2.22056C30 0.994118 29.0314 0 27.8364 0V0ZM15.3179 24.358C15.3177 24.358 15.3181 24.358 15.3179 24.358H15.3143C13.8116 24.3573 12.3351 23.9706 11.0239 23.2368L6.26472 24.5177L7.53845 19.7445C6.7527 18.3477 6.33934 16.7631 6.34003 15.1396C6.34209 10.061 10.3695 5.92924 15.3179 5.92924C17.7193 5.93018 19.9736 6.88953 21.6685 8.63041C23.3636 10.3715 24.2965 12.6858 24.2956 15.1469C24.2935 20.2258 20.2657 24.358 15.3179 24.358Z" fill="black"/>
                            </g>
                        </svg>
                    </a>
                </div>
            </footer>
        </div>
    </div>


</body>

</html>