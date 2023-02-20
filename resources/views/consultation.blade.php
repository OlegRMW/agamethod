<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Консультация</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.css" integrity="sha512-jxGmKjC/OykrTklkNK2NgnhNtKtUAADFY+rvSi3nA7dbaPRfjrSXYxHqX8iq5N6WTOntqEQZrEwW3L84sirfKQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/fonts/style.css">
    @vite(['resources/css/main.css', 'resources/js/main.js'])
</head>
<body>
<header class="header header-home">
    <nav class="nav">
        <div class="container nav-container">
            <div class="nav-row">
                <a href="{{ route('index')}}" class="logo">
                    <img src="{{asset('storage/img/logo/logo.svg')}}" alt="Aga Method">
                </a>

                <ul class="navigation">
                    <li>
                        <a href="{{ route('course')}}" class="navigation-item">курС МИР ТАРО</a>
                    </li>

                    <li>
                        <a href="{{ route('index')}}" class="navigation-item">Вебинары</a>
                    </li>

                    <li>
                        <a href="{{ route('consultation')}}" class="navigation-item active">Консультация</a>
                    </li>

                    <li>
                        <a href="{{ route('contacts')}}" class="navigation-item">Контакты</a>
                    </li>
                </ul>
            </div>

            <ul class="nav__social-icons">
                <li>
                    <a href="#"><img src="{{asset('storage/img/social_icons/telegram.svg')}}" alt="telegram"></a>
                </li>

                <li>
                    <a href="#"><img src="{{asset('storage/img/social_icons/youtube.svg')}}" alt="youtube"></a>
                </li>

                <li>
                    <a href="#"><img src="{{asset('storage/img/social_icons/instagram.svg')}}" alt=""></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="header-content header-content__consultation">
        <div class="container">
            <div class="header-content__consultation__row">
                <div class="header-content__consultation__row__box_1">
                    <h1 class="title-big header-content__consultation__title">
                        Получите личную <br> консультацию
                    </h1>

                    <p class="header-content__consultation__subtitle m-none">
                        Найдите свое поле энергии для бизнеса, <br> здоровья, отношений и самореализации
                    </p>
                </div>
                <div class="header-content__consultation__row__box_2">
                    <p class="header-content__consultation__about mobile-active">
                        Найдите свое поле энергии для:
                    </p>

                    <ul class="header-content__consultation__about-list mobile-active">
                        <li>бизнеса</li>
                        <li>здоровья</li>
                        <li>отношений</li>
                        <li>самореализации</li>
                    </ul>

                    <div class="header-content__consultation__row__expert">
                        <div class="header-content__consultation__img">
                            <img class="mobile-none" src="{{asset('storage/img/header/persons/karina.png')}}" alt="Карина">
                            <img class="mobile-active" src="{{asset('storage/img/header/persons/karina-mob.png')}}" alt="Карина">
                        </div>

                        <div class="about-expert__consultation">
                            <h2 class="expert-name title">
                                Карина Агаян
                            </h2>

                            <p class="expert-position">
                                энерготерапевт, таролог
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <a href="#" class="header-content__consultation__btn">
                получить личную консультацию
            </a>
        </div>
    </div>

    <div class="header-consultation__leaf__decoration decoration mobile-none">
        <img src="{{asset('storage/img/decoration/leaf.png')}}" alt="Листок">
    </div>

    <div class="header-consultation__cloudy__decoration decoration mobile-none">
        <img src="{{asset('storage/img/decoration/cloudy_2.png')}}" alt="Облако">
    </div>

    <div class="header-consultation__cloudy__decoration__mob_1 decoration mobile-active">
        <img src="{{asset('storage/img/decoration/mob-cloudy_01.png')}}" alt="Облако">
    </div>

    <div class="background-block__header"></div>
</header>

<div class="header-mobile">
    <div class="mobile-navigation">
        <div class="mobile-navigation__logo">
            <img src="{{asset('storage/img/logo/mobile-logo.png')}}" alt="Aga Method">
        </div>

        <div class="mobile-navigation__burger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>

<div class="mobile-menu not-visible">
    <div class="menu-body"></div>
    <div class="menu-content">
        <div class="mobile-menu__header">
            <div class="mobile-menu__header__logo">
                <img src="{{asset('storage/img/logo/mobile-logo.png')}}" alt="">
            </div>
        </div>

        <div class="mobile-menu__main">
            <ul class="mobile-menu__nav">

                <li>
                    <a href="course.html" class="mobile-menu-nav__item">
                        курС МИР ТАРО
                    </a>
                </li>

                <li>
                    <a href="index.htmlеч" class="mobile-menu-nav__item">
                        Вебинары
                    </a>
                </li>

                <li>
                    <a href="consultation.html" class="mobile-menu-nav__item">
                        Консультация
                    </a>
                </li>

                <li>
                    <a href="contacts.html" class="mobile-menu-nav__item">
                        Контакты
                    </a>
                </li>
            </ul>

            <ul class="mobile-menu__social-icons">
                <li>
                    <a href="#">
                        <img src="{{asset('storage/img/social_icons/ins-black.svg')}}" alt="instagram">
                    </a>
                </li>

                <li>
                    <a href="#">
                        <img src="{{asset('storage/img/social_icons/yot-black.svg')}}" alt="instagram">
                    </a>
                </li>

                <li>
                    <a href="#">
                        <img src="{{asset('storage/img/social_icons/tg-black.svg')}}" alt="instagram">
                    </a>
                </li>
            </ul>
        </div>

        <div class="menu-content__dec-logo">
            <img src="{{asset('storage/img/logo/mobile-menu_logo.png')}}" alt="Aga Method">
        </div>
    </div>
</div>

<main class="main">
    <section class="person-consultation">
        <div class="container">
            <h2 class="person-consultation__title title center">
                консультация Карины Агаян
            </h2>

            <p class="person-consultation__subtitle center">
                Для тех, кто стремиться трансформировать и улучшить свою жизнь
            </p>

            <div class="person-consultation__row">
                <div class="person-consultation__cards">
                    <div class="results-webinar__card">
                        Уникальная энергопрактика и работа со страхами
                    </div>

                    <div class="results-webinar__card">
                        Поиск, раскрытие внутренней силы
                    </div>

                    <div class="results-webinar__card">
                        Обсуждение и проработка личности
                    </div>
                </div>

                <div class="person-consultation-achievements__results">
                    <div class="company-achievements__results__item">
                        <h1 class="company-achievements__results__item__amount">
                            22+
                        </h1>

                        <p class="company-achievements__results__item__about">
                            лет консультирую <br> и коучу
                        </p>
                    </div>

                    <div class="company-achievements__results__item">
                        <h1 class="company-achievements__results__item__amount">
                            1000+
                        </h1>

                        <p class="company-achievements__results__item__about">
                            довольных успехами карьеры и <br> личной жизни клиентов
                        </p>
                    </div>
                </div>
            </div>

            <div class="results-consultation">
                <h2 class="results-consultation__title title">
                    за 1 час личной консультации вы сможете:
                </h2>

                <ul class="results-consultation__list">
                    <li>Снять блоки и зажимы личной жизни</li>
                    <li>Найти баланс и новые финансовые каналы</li>
                    <li>Открыть в себе истинные мотивы желаемого</li>
                    <li>Настроить гармонию в семейных отношениях</li>
                    <li>Освоить дыхательные практики</li>
                    <li>Ощутить силу экспоненциальной терапии</li>
                    <li>Понять, как помогать другим</li>
                    <li>Войти в ресурсный поток со своим телом</li>
                    <li>Уверенно двигаться к своим целям без предубеждений</li>
                    <li>Улучшить благосостояние и профессиональный рост</li>
                    <li>Выйти из тяжелого состояния</li>
                    <li>Развить интуицию, чувствовать ситуацию и людей</li>
                </ul>
            </div>

            <div class="person-consultation__box">
                <div class="person-consultation__box__img">
                    <img src="{{asset('storage/img/consultation/person_img.png')}}" alt="Фото эксперта">
                </div>

                <div class="person-consultation__box__content">
                    <h1 class="person-consultation__box__content__title title">
                        Запишитесь на личную
                        <br>
                        консультацию
                    </h1>

                    <p class="person-consultation__box__content__text">
                        <span>На личных консультациях определяем ресурс и точку всего роста.</span>
                        <br>
                        <br>
                        Во взаимодействии я соединила лучшие практики, инструменты, благоприятные астромоменты, чтобы помочь вам справиться с любым запросом и ограничением в вашей голове.
                    </p>
                </div>

                <a href="#" class="person-consultation__box__btn">
                    получить личную консультацию
                </a>
            </div>
        </div>

        <div class="person-consultation__leaf__decoration_1 decoration mobile-none">
            <img src="{{asset('storage/img/decoration/leaf.png')}}" alt="Листок">
        </div>

        <div class="person-consultation__big-logo decoration mobile-none">
            <img src="{{asset('storage/img/logo/main-ligo_min-blur.png')}}" alt="">
        </div>

        <div class="person-consultation__box__cloudy__decoration_1 decoration mobile-none">
            <img src="{{asset('storage/img/decoration/cloudy_2.png')}}" alt="Облако">
        </div>

        <div class="person-consultation__box__cloudy__decoration_2 decoration mobile-none">
            <img src="{{asset('storage/img/decoration/cloudy_1.png')}}" alt="Облако">
        </div>
    </section>

    <section class="webinar-videos">
        <div class="container">
            <h1 class="title-medium center webinar-videos__title">
                Посмотрите, как консультации помогают достигать целей
            </h1>

            <div class="webinar-videos__box">
                <div class="youtube-slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="youtube-slider-item">
                                    <img src="{{asset('storage/img/yout.png')}}" alt="">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="youtube-slider-item">
                                    <img src="{{asset('storage/img/yout.png')}}" alt="">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="youtube-slider-item">
                                    <img src="{{asset('storage/img/yout.png')}}" alt="">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="nav-left slide-btn">
                        <img src="{{asset('storage/img/navigation/nav-left.svg')}}" alt="Влево">
                    </div>

                    <div class="nav-right slide-btn">
                        <img src="{{asset('storage/img/navigation/nav-right.svg')}}" alt="Вправо">
                    </div>
                </div>

                <h3 class="webinar-videos__box__about">
                    От бухгалтера до риелтора | Оксана Таран
                </h3>

                <a href="#" class="subscribe-btn title webinar-videos__subscribe-btn">
                    <span>
                        подписаться
                    </span>
                </a>
            </div>
        </div>

        <div class="webinar-videos__leaf__decoration_1 decoration mobile-none">
            <img src="{{asset('storage/img/decoration/leaf.png')}}" alt="Листок">
        </div>

        <div class="webinar-videos__leaf__decoration_2 decoration mobile-none">
            <img src="{{asset('storage/img/decoration/leaf.png')}}" alt="Листок">
        </div>
    </section>

    <section class="conditions-consultation">
        <div class="container">
            <h1 class="title-medium conditions-consultation__title">
                как проходит консультация
                <br>
                с энерготерапевтом
            </h1>

            <div class="conditions-consultation__cards">
                <div class="conditions-consultation__card">
                    1 час личной беседы
                </div>
                <div class="conditions-consultation__card">
                    Онлайн формат
                </div>
                <div class="conditions-consultation__card">
                    Запись на почту
                </div>
            </div>

            <div class="conditions-consultation__row">
                <p class="line-col">Вы получаете индивидуальные рекомендации в процессе диалога</p>
                <p class="line-col">Делаю расклад ТАРО с вариантностью, помогаю наладить энергопоток</p>
                <p class="line-row">Обсуждаем вопросы личной жизни, отношений, бизнеса, самореализации</p>
                <p>Стоимость личной консультации зависит от темы запроса</p>
            </div>

            <ul class="conditions-consultation__list">
                <li>Отмена или перенос — не позднее, чем за 24 часа. </li>
                <li>Стоимость не меняется, если вам требуется меньше времени.</li>
                <li>Дополнительная информация об условиях — в публичной оферте</li>
                <li>Дополнительная информация об условиях — в публичной оферте</li>
            </ul>
        </div>
    </section>

    <section class="consultation-reviews">
        <div class="container">
            <div class="consultation-reviews__row">
                <h1 class="consultation-reviews__title title">
                    научитесь повышать и удерживать энергетический поток для реализации своих целей
                </h1>

                <div class="company-achievements__results__item">
                    <h1 class="company-achievements__results__item__amount company-achievements__results__item__amount--pes">
                        146+
                    </h1>

                    <p class="company-achievements__results__item__about company-achievements__results__item__about--white">
                        вебинаров и программ <br> трансформации жизни
                    </p>
                </div>
            </div>

            <p class="consultation-reviews__subtitle">
                Посмотрите на отзывы тех, кто осмелился
            </p>

            <div class="reviews-box__wrapper">
                <div class="reviews-box">
                    <div class="swiper-reviews">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <img src="{{asset('storage/img/reviews/reviews-slide-01.png')}}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('storage/img/reviews/reviews-slide-02.png')}}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('storage/img/reviews/reviews-slide-03.png')}}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{asset('storage/img/reviews/reviews-slide-01.png')}}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('storage/img/reviews/reviews-slide-02.png')}}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('storage/img/reviews/reviews-slide-03.png')}}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{asset('storage/img/reviews/reviews-slide-01.png')}}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('storage/img/reviews/reviews-slide-02.png')}}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('storage/img/reviews/reviews-slide-03.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="nav-left__rev slide-btn" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-fe6f62ddf2a7ee1c">
                    <img src="{{asset('storage/img/navigation/nav-left.svg')}}" alt="Влево">
                </div>

                <div class="nav-right__rev slide-btn" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-fe6f62ddf2a7ee1c">
                    <img src="{{asset('storage/img/navigation/nav-right.svg')}}" alt="Влево">
                </div>
            </div>

            <a href="#" class="consultation-reviews__btn">
                записаться на консультацию
            </a>
        </div>
    </section>

    <section class="about-person">
        <div class="container">
            <h1 class="title-big about-person__title">
                о Карине агаян
            </h1>

            <div class="about-person__advice-box">
                <ul class="about-person__advice-box-list">
                    <li>Описание</li>
                    <li>Описание</li>
                    <li>Описание</li>
                    <li>Описание</li>
                    <li>Описание</li>
                    <li>Описание</li>
                    <li>Описание</li>
                    <li>Описание</li>
                    <li>Описание</li>
                </ul>

                <div class="about-person__img">
                    <img src="{{asset('storage/img/header/persons/woman_home_2.png')}}" alt="Карина">
                </div>
            </div>
        </div>
        
        <div class="about-person__cloudy__decoration_1 decoration mobile-none">
            <img src="{{asset('storage/img/decoration/cloudy_1.png')}}" alt="Облако">
        </div>

        <div class="about-person__cloudy__decoration_2 decoration mobile-none">
            <img src="{{asset('storage/img/decoration/cloudy_2.png')}}" alt="Облако">
        </div>
    </section>

    <section class="expert-advice">
        <div class="container">
            <h1 class="title-medium center">
                Используйте опыт ведущих практиков
            </h1>

            <p class="expert-advice__subtitle center">
                Обратитесь за консультацией к тарологу, астрологу, нумерологу
            </p>

            <div class="expert-advice__box">
                <div class="expert-advice__box__left-side">
                    <ul class="expert-advice__box-list">
                        <li>Достигните цели быстрее</li>
                        <li>Повышайте свой доход</li>
                        <li>Найдите свое признание</li>
                        <li>Восстановите здоровье и отношения</li>
                    </ul>
                </div>

                <div class="expert-advice__box__right-side">
                    <h3 class="title-medium lower">
                        Раскройте историю своих блоков и избавьтесь от страхов
                    </h3>
                </div>
            </div>

            <div class="expert-cards">
                <div class="expert-card">
                    <div class="expert-card__img">
                        <img src="{{asset('storage/img/webinar/4.png')}}" alt="Интенсив">

                        <div class="expert-card__img__text">
                            <p class="expert-card__img__text__type">
                                Таролог
                            </p>

                            <div class="expert-card__img__text__name">
                                Имя Фамилия
                            </div>
                        </div>
                    </div>

                    <div class="expert-card__content">
                        <p class="expert-card__content__text">
                            Описание программы Описание программы Описание программы
                            Описание программы
                        </p>

                        <a href="#" class="expert-btn">
                            Записаться
                        </a>
                    </div>
                </div>

                <div class="expert-card">
                    <div class="expert-card__img">
                        <img src="{{asset('storage/img/webinar/4.png')}}" alt="Интенсив">

                        <div class="expert-card__img__text">
                            <p class="expert-card__img__text__type">
                                Таролог
                            </p>

                            <div class="expert-card__img__text__name">
                                Имя Фамилия
                            </div>
                        </div>
                    </div>

                    <div class="expert-card__content">
                        <p class="expert-card__content__text">
                            Описание программы Описание программы Описание программы
                            Описание программы
                        </p>

                        <a href="#" class="expert-btn">
                            Записаться
                        </a>
                    </div>
                </div>

                <div class="expert-card">
                    <div class="expert-card__img">
                        <img src="{{asset('storage/img/webinar/4.png')}}" alt="Интенсив">

                        <div class="expert-card__img__text">
                            <p class="expert-card__img__text__type">
                                Таролог
                            </p>

                            <div class="expert-card__img__text__name">
                                Имя Фамилия
                            </div>
                        </div>
                    </div>

                    <div class="expert-card__content">
                        <p class="expert-card__content__text">
                            Описание программы Описание программы Описание программы
                            Описание программы
                        </p>

                        <a href="#" class="expert-btn">
                            Записаться
                        </a>
                    </div>
                </div>

                <div class="expert-card">
                    <div class="expert-card__img">
                        <img src="{{asset('storage/img/webinar/4.png')}}" alt="Интенсив">

                        <div class="expert-card__img__text">
                            <p class="expert-card__img__text__type">
                                Таролог
                            </p>

                            <div class="expert-card__img__text__name">
                                Имя Фамилия
                            </div>
                        </div>
                    </div>

                    <div class="expert-card__content">
                        <p class="expert-card__content__text">
                            Описание программы Описание программы Описание программы
                            Описание программы
                        </p>

                        <a href="#" class="expert-btn">
                            Записаться
                        </a>
                    </div>
                </div>

                <div class="expert-card">
                    <div class="expert-card__img">
                        <img src="{{asset('storage/img/webinar/4.png')}}" alt="Интенсив">

                        <div class="expert-card__img__text">
                            <p class="expert-card__img__text__type">
                                Таролог
                            </p>

                            <div class="expert-card__img__text__name">
                                Имя Фамилия
                            </div>
                        </div>
                    </div>

                    <div class="expert-card__content">
                        <p class="expert-card__content__text">
                            Описание программы Описание программы Описание программы
                            Описание программы
                        </p>

                        <a href="#" class="expert-btn">
                            Записаться
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="footer">
    <div class="container">
        <div class="row footer-row">
            <div class="col">
                <h1 class="footer__title title-medium">
                    Реквизиты
                </h1>

                <div class="footer-requisites">
                    <p>000 0000 0000 000</p>
                    <p>IBAN 0000 0000 0000 000 UA</p>
                </div>

                <div class="terms mobile-none">
                    <a href="#" class="terms-link">Публичная оферта</a>
                    <a href="#" class="terms-link">Политика конфиденциальности</a>
                </div>
            </div>

            <div class="col">
                <div class="footer-logo">
                    <img src="{{asset('storage/img/logo/logo-footer.png')}}" alt="Aga Method">
                </div>
            </div>

            <div class="col col--right">

                <div class="mobile-row">
                    <ul class="footer__nav-list">
                        <li>
                            <a href="index.html" class="footer__nav-list__item">
                                Вебинары
                            </a>
                        </li>

                        <li>
                            <a href="consultation.html" class="footer__nav-list__item">
                                консультация
                            </a>
                        </li>

                        <li>
                            <a href="contacts.html" class="footer__nav-list__item">
                                контакты
                            </a>
                        </li>

                        <li>
                            <a href="tel:+380440000000" class="footer-phone title-medium mobile-active">
                                + 380 (44) 000 00 00
                            </a>
                        </li>
                    </ul>


                    <ul class="footer__social-icons">
                        <li>
                            <a href="#">
                                <img src="{{asset('storage/img/social_icons/inst-footer.svg')}}" alt="Инстаграм">
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <img src="{{asset('storage/img/social_icons/yout-footer.svg')}}" alt="Ютуб">
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <img src="{{asset('storage/img/social_icons/tg-footer.svg')}}" alt="Телеграм">
                            </a>
                        </li>
                    </ul>
                </div>
                <a href="tel:+380440000000" class="footer-phone title-medium mobile-none">
                    + 380 (44) 000 00 00
                </a>

                <div class="terms mobile-active">
                    <a href="#" class="terms-link">Публичная оферта</a>
                    <a href="#" class="terms-link">Политика конфиденциальности</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js" integrity="sha512-wdUM0BxMyMC/Yem1RWDiIiXA6ssXMoxypihVEwxDc+ftznGeRu4s9Fmxl8PthpxOh5CQ0eqjqw1Q8ScgNA1moQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>


