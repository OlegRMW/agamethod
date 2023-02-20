<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aga Method</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.css"
          integrity="sha512-jxGmKjC/OykrTklkNK2NgnhNtKtUAADFY+rvSi3nA7dbaPRfjrSXYxHqX8iq5N6WTOntqEQZrEwW3L84sirfKQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    @vite(['resources/css/main.css', 'resources/js/main.js'])
</head>
<body>
<header class="header header-home">
    <nav class="nav">
        <div class="container nav-container">
            <div class="nav-row">
                <a href="{{ route('index')}}" class="logo">
                    <img src="{{ asset('storage/img/logo/logo.svg') }}" alt="Aga Method">
                </a>

                <ul class="navigation">
                    <li>
                        <a href="{{ route('course')}}" class="navigation-item">курС МИР ТАРО</a>
                    </li>

                    <li>
                        <a href="#" class="navigation-item active">Вебинары</a>
                    </li>

                    <li>
                        <a href="{{ route('consultation') }}" class="navigation-item">Консультация</a>
                    </li>

                    <li>
                        <a href="{{ route('contacts') }}" class="navigation-item">Контакты</a>
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
                    <a href="#"><img src="{{asset('/storage/img/social_icons/instagram.svg')}}" alt="telegram"></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="header-content header-content__home">
        <div class="container">
            <h1 class="header-content__title header-content__title__home">
                Раскройте свои границы жизни и добейтесь желаемого
            </h1>

            <div class="quote-block">
                <p>Не бойтесь пробовать, бойтесь остановиться</p>
            </div>

            <div class="expert-promises">
                <div class="expert">
                    <div class="expert-card">
                        <img class="mobile-none" src="{{asset('storage/img/header/persons/woman_home.png')}}" alt="Фото Карины">
                        <img class="mobile-active" src="{{asset('storag/img/header/persons/woman-mobile_shadow.png')}}"
                             alt="Фото Карины">
                    </div>

                    <div class="about-expert">
                        <h2 class="expert-name title">
                            Карина Агаян
                        </h2>

                        <p class="expert-position">
                            энерготерапевт, таролог
                        </p>
                    </div>
                </div>

                <ul class="expert-promises__list">
                    <li>Постройте карьеру</li>
                    <li>Найдите точки роста</li>
                    <li>Реализуйте мечты</li>
                    <li>Создайте стратегию</li>
                </ul>

                <a href="#" class="show-btn">
                    Посмотреть программы вебинаров
                </a>
            </div>
        </div>
    </div>

    <div class="header-leaf__decoration_1 decoration mobile-none">
        <img src="{{asset('storage/img/decoration/leaf.png')}}" alt="Лист дерева">
    </div>

    <div class="header-leaf__decoration_2 decoration mobile-none">
        <img src="{{asset('storage/img/decoration/leaf.png')}}" alt="Лист дерева">
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
                <img src="assets/img/logo/mobile-logo.png" alt="">
            </div>
        </div>

        <div class="mobile-menu__main">
            <ul class="mobile-menu__nav">

                <li>
                    <a href="{{ route('course')}}" class="mobile-menu-nav__item">
                        курС МИР ТАРО
                    </a>
                </li>

                <li>
                    <a href="#" class="mobile-menu-nav__item">
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
    <section class="company-achievements">
        <div class="container">
            <h1 class="title company-achievements__title">
                Выше, дальше, больше - жизнь по вашей верхней планке
            </h1>

            <div class="company-achievements__block">
                Вселенная дает отклик тем, кто по-настоящему хочет меняться и живет по принципу
                <br>
                <span>“Выше, дальше, больше”</span>
            </div>

            <div class="company-achievements__results">
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

                <div class="company-achievements__results__item">
                    <h1 class="company-achievements__results__item__amount">
                        146+
                    </h1>

                    <p class="company-achievements__results__item__about">
                        вебинаров и программ <br> трансформации жизни
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="consultation-block">
        <div class="container">
            <div class="help-with">
                <div class="help-with__woman">
                    <h3 class="help-with__woman__name title">
                        Карина Агаян
                    </h3>
                    <p class="help-with__woman__position">
                        энерготерапевт, экспоненциальный коуч
                    </p>
                    <div class="woman-img">
                        <img src="{{asset('storage/img/consultation/woman.png')}}" alt="Женщина">
                    </div>

                    <div class="consultation-block__cloudy__decoration-mob_1 decoration mobile-active">
                        <img src="{{asset('storage/img/decoration/mob-cloudy_01.png')}}" alt="облако">
                    </div>

                    <div class="consultation-block__cloudy__decoration-mob_2 decoration mobile-active">
                        <img src="{{asset('storage/img/decoration/mob-cloudy_02.png')}}" alt="облако">
                    </div>
                </div>

                <div class="help-with__content">
                    <h2 class="help-with__woman-name title mobile-none">
                        Карина Агаян
                    </h2>

                    <p class="help-with__woman-position mobile-none">
                        энерготерапевт, экспоненциальный коуч
                    </p>

                    <h2 class="help-with__content__title title">
                        Я помогу разобраться с тем, как:
                    </h2>

                    <ul class="help-with__content__list">
                        <li>Найти свое предназначение</li>
                        <li>Построить счастливые отношения “женщина и мужчина”</li>
                        <li>Финансовая реализация</li>
                        <li>Проявленность в мире</li>
                        <li>Здоровая психика и тело</li>
                        <li>Управление энергией, интуицией</li>
                        <li>Устранение энергетических поломок</li>
                    </ul>
                </div>
            </div>

            <div class="consultation-box">
                <div class="consultation-box__container">
                    <h2 class="consultation-box__title title">
                        Получите личную консультацию
                    </h2>

                    <ul class="consultation-box__list">
                        <li class="bold-item">На личных консультациях и вебинарах я раскрываю сильные стороны и помогаю
                            избавиться от личных блоков сознания.
                        </li>
                        <li>Вы научитесь строить энергопотоки, чтобы иметь успех, крепкое здоровье, гармоничные
                            отношения и самореализацию.
                        </li>
                    </ul>
                </div>

                <a href="#" class="consultation-btn">получить личную консультацию</a>
            </div>
        </div>

        <div class="consultation-cloudy__decoration_1 decoration mobile-none">
            <img src="{{asset('storage/img/decoration/cloudy_1.png')}}" alt="облако">
        </div>

        <div class="consultation-cloudy__decoration_2 decoration mobile-none">
            <img src="{{asset('storage/img/decoration/cloudy_2.png')}}" alt="облако">
        </div>
    </section>

    <section class="history-success">
        <div class="container">
            <h1 class="title center history-success__title">
                Истории успеха
            </h1>

            <p class="history-success__subtitle">
                Психофизика помогает нам создавать новый опыт, который дает возможность жить счастливо в новых правилах
                игры. Все это тренируется и развивается, мы можем достичь всего желаемого.
            </p>

            <div class="history-success__box">
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

                <a href="#" class="subscribe-btn title">
                    <span>
                        подписаться
                    </span>
                </a>

                <div class="history-success__box__advice">
                    <h1 class="history-success__box__title history-success__box__advice__title">
                        Энергия появляется там, где есть действия.
                    </h1>

                    <ul class="history-success__box__advice-list">
                        <li>
                            Даже в самые сложные свои 7 лет жизни я продолжала <span>действовать.</span>
                        </li>

                        <li>
                            Две работы, учеба, семья.
                            <br>
                            Но я точно знала, что это особое испытание приведет меня к успеху.
                        </li>

                        <li>
                            Я скомпилировала свой опыт и знания и стала помогать другим.
                            <br>
                            Вместе с этим мы все вместе начали расти быстрее и эффективнее.
                        </li>
                    </ul>
                </div>

                <div class="webinar-box">
                    <h1 class="webinar-box__title title">
                        Программы вебинаров помогут <span>вам</span>
                    </h1>

                    <div class="webinar-achievement__cards">
                        <div class="webinar-achievement__card">
                            Двигаться вперед и развиваться, когда на пути встречаются вопросы и трудности
                        </div>

                        <div class="webinar-achievement__card">
                            Масштабировать бизнес и перейти на новый уровень карьеры, сохранив баланс в семье
                        </div>

                        <div class="webinar-achievement__card">
                            Проработать внутренние вопросы и получить мнение опытного эксперта
                        </div>
                    </div>

                    <div class="webinar-cards-swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide swiper-webinar">
                                <div class="webinar-card">
                                    <div class="webinar-card__img">
                                        <img src="{{asset('storage/img/webinar/1.png')}}" alt="Интенсив">

                                        <div class="webinar-card__img__text">
                                            <p class="webinar-card__img__text__type">
                                                интенсив
                                            </p>

                                            <div class="webinar-card__img__text__title">
                                                Ограничение в голове <br> как точка твоего роста
                                            </div>
                                        </div>
                                    </div>

                                    <div class="webinar-card__content">
                                        <p class="webinar-card__content__text">
                                            Описание программы Описание программы Описание программы
                                            Описание программы
                                        </p>

                                        <a href="#" class="webinar-btn">
                                            Записаться
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-webinar">
                                <div class="webinar-card">
                                    <div class="webinar-card__img">
                                        <img src="{{asset('storage/img/webinar/2.png')}}" alt="Интенсив">

                                        <div class="webinar-card__img__text">
                                            <p class="webinar-card__img__text__type">
                                                курс
                                            </p>

                                            <div class="webinar-card__img__text__title">
                                                МИР ТАРО
                                            </div>
                                        </div>
                                    </div>

                                    <div class="webinar-card__content">
                                        <p class="webinar-card__content__text">
                                            Описание программы Описание программы Описание программы
                                            Описание программы
                                        </p>

                                        <a href="#" class="webinar-btn">
                                            Записаться
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-webinar">
                                <div class="webinar-card">
                                    <div class="webinar-card__img">
                                        <img src="{{asset('storage/img/webinar/3.png')}}" alt="Интенсив">

                                        <div class="webinar-card__img__text">
                                            <p class="webinar-card__img__text__type">
                                                интенсив
                                            </p>

                                            <div class="webinar-card__img__text__title">
                                                Ограничение в голове как точка твоего роста
                                            </div>
                                        </div>
                                    </div>

                                    <div class="webinar-card__content">
                                        <p class="webinar-card__content__text">
                                            Описание программы Описание программы Описание программы
                                            Описание программы
                                        </p>

                                        <a href="#" class="webinar-btn">
                                            Записаться
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="history-success__leaf__decoration_1 decoration mobile-none">
                    <img src="{{asset('storage/img/decoration/leaf.png')}}" alt="Лист">
                </div>

                <div class="history-success__leaf__decoration_2 decoration mobile-none">
                    <img src="{{asset('storage/img/decoration/leaf.png')}}" alt="Лист">
                </div>

                <div class="history-success__leaf__decoration_3 decoration mobile-none">
                    <img src="{{asset('storage/img/decoration/leaf.png')}}" alt="Лист">
                </div>
            </div>
        </div>
    </section>

    <section class="reviews">
        <div class="container">
            <h1 class="title-medium center review__title">
                начните трансформацию своей жизни
            </h1>

            <p class="reviews__subtitle center">
                Посмотрите на отзывы тех, кто осмелился
            </p>

            <div class="reviews-cards mobile-none">
                <div class="reviews-card">
                    <img src="{{asset('storage/img/reviews/review-01.png')}}" alt="Отзывы">
                </div>

                <div class="reviews-card">
                    <img src="{{asset('storage/img/reviews/review-02.png')}}" alt="Отзывы">
                </div>

                <div class="reviews-card">
                    <img src="{{asset('storage/img/reviews/review-03.png')}}" alt="Отзывы">
                </div>
            </div>

            <div class="swiper__reviews-cards mobile-active">
                <div class="swiper-wrapper">
                    <div class="swiper-slide reviews-slide">
                        <div class="reviews-card">
                            <img src="{{asset('storage/img/reviews/review-02.png')}}" alt="Отзывы">
                        </div>
                    </div>

                    <div class="swiper-slide reviews-slide">
                        <div class="reviews-card">
                            <img src="{{asset('storage/img/reviews/review-03.png')}}" alt="Отзывы">
                        </div>
                    </div>

                    <div class="swiper-slide reviews-slide">
                        <div class="reviews-card">
                            <img src="{{asset('storage/img/reviews/review-01.png')}}" alt="Отзывы">
                        </div>
                    </div>
                </div>
            </div>

            <div class="reviews__main-logo mobile-none">
                <img src="{{asset('storage/img/logo/main-logo.png')}}" alt="Aga Method">
            </div>
        </div>
    </section>

    <section class="webinars-advantage">
        <div class="container">
            <h1 class="webinars-advantage__title title-medium title-medium--white">
                ПОЛУЧИТЕ ДОСТУП КО ВСЕМ ЗАПИСЯМ ВЕБИНАРОВ
            </h1>

            <div class="webinars-advantage__cards">
                <div class="webinars-advantage__card">
                    Более ХХХ программ обучения, консультаций и практик
                </div>

                <div class="webinars-advantage__card">
                    Лучшие методы и рекомендации
                </div>

                <div class="webinars-advantage__card">
                    Отстройтесь от внутренних страхов
                </div>
            </div>

            <div class="webinar-cards">
                <div class="webinar-card">
                    <div class="webinar-card__img">
                        <img src="{{asset('storage/img/webinar/1.png')}}" alt="Интенсив">

                        <div class="webinar-card__img__text">
                            <p class="webinar-card__img__text__type">
                                интенсив
                            </p>

                            <div class="webinar-card__img__text__title">
                                Ограничение в голове <br> как точка твоего роста
                            </div>
                        </div>
                    </div>
                </div>

                <div class="webinar-card">
                    <div class="webinar-card__img">
                        <img src="{{asset('storage/img/webinar/2.png')}}" alt="Интенсив">

                        <div class="webinar-card__img__text">
                            <p class="webinar-card__img__text__type">
                                курс
                            </p>

                            <div class="webinar-card__img__text__title">
                                МИР ТАРО
                            </div>
                        </div>
                    </div>
                </div>

                <div class="webinar-card">
                    <div class="webinar-card__img">
                        <img src="{{asset('storage/img/webinar/3.png')}}" alt="Интенсив">

                        <div class="webinar-card__img__text">
                            <p class="webinar-card__img__text__type">
                                интенсив
                            </p>

                            <div class="webinar-card__img__text__title">
                                Ограничение в голове как точка твоего роста
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="webinar-cards-swiper mobile-active">
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-webinar">
                        <div class="webinar-card">
                            <div class="webinar-card__img">
                                <img src="{{asset('storage/img/webinar/1.png')}}" alt="Интенсив">

                                <div class="webinar-card__img__text">
                                    <p class="webinar-card__img__text__type">
                                        интенсив
                                    </p>

                                    <div class="webinar-card__img__text__title">
                                        Ограничение в голове <br> как точка твоего роста
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-webinar">
                        <div class="webinar-card">
                            <div class="webinar-card__img">
                                <img src="{{asset('storage/img/webinar/2.png')}}" alt="Интенсив">

                                <div class="webinar-card__img__text">
                                    <p class="webinar-card__img__text__type">
                                        курс
                                    </p>

                                    <div class="webinar-card__img__text__title">
                                        МИР ТАРО
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-webinar">
                        <div class="webinar-card">
                            <div class="webinar-card__img">
                                <img src="{{asset('storage/img/webinar/3.png')}}" alt="Интенсив">

                                <div class="webinar-card__img__text">
                                    <p class="webinar-card__img__text__type">
                                        интенсив
                                    </p>

                                    <div class="webinar-card__img__text__title">
                                        Ограничение в голове как точка твоего роста
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wrapper-btn center">
                <a href="#" class="webinars-advantage__btn">
                    посмотреть все вебинары
                </a>
            </div>
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

        <div class="about-person__leaf__decoration_1 decoration mobile-none">
            <img src="{{asset('storage/img/decoration/leaf.png')}}" alt="Листок">
        </div>

        <div class="about-person__leaf__decoration_2 decoration mobile-none">
            <img src="{{asset('storage/img/decoration/leaf.png')}}" alt="Листок">
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
                            <a href="#" class="footer__nav-list__item">
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js"
        integrity="sha512-wdUM0BxMyMC/Yem1RWDiIiXA6ssXMoxypihVEwxDc+ftznGeRu4s9Fmxl8PthpxOh5CQ0eqjqw1Q8ScgNA1moQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="public/js/main.js"></script>
</body>
</html>

