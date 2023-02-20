<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Курс Мир Таро</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.css"
        integrity="sha512-jxGmKjC/OykrTklkNK2NgnhNtKtUAADFY+rvSi3nA7dbaPRfjrSXYxHqX8iq5N6WTOntqEQZrEwW3L84sirfKQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"/>
        @vite(['resources/css/main.css', 'resources/js/main.js'])
</head>
<body>

<header class="header header-home header-course">
  <nav class="nav">
    <div class="container nav-container">
      <div class="nav-row">
        <a href="{{ route('index')}}" class="logo">
          <img src="{{asset('storage/img/logo/logo.svg')}}" alt="Aga Method">
        </a>

        <ul class="navigation">
          <li>
            <a href="{{ route('course')}}" class="navigation-item active">курС МИР ТАРО</a>
          </li>

          <li>
            <a href="{{ route('index')}}" class="navigation-item">Вебинары</a>
          </li>

          <li>
            <a href="{{ route('consultation')}}" class="navigation-item">Консультация</a>
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

  <div class="header-content header-content__course">
      <div class="container">
        <h1 class="title-big header-content__course__title">
          мир таро
        </h1>

        <div class="header-content__course__inf-box">
            <h1 class="header-content__course__inf-box__title title-medium mobile-none">
              Раскройте то, что на сердце
              <br>
              и в голове
            </h1>

          <h1 class="header-content__course__inf-box__title title-medium mobile-active">
            Раскройте то, что на сердце и в голове
          </h1>

            <ul class="header-content__course__inf-box__list mobile-none">
              <li class="item-www">Онлайн-вебинар</li>
              <li class="item-calendar">21 декабря 2022</li>
              <li class="item-clock">21:00 (UTC+3)</li>
            </ul>
        </div>

        <ul class="header-content__course__inf-box__list">
          <li class="item-www">Онлайн-вебинар</li>
          <li class="item-calendar">21 декабря 2022</li>
          <li class="item-clock">21:00 (UTC+3)</li>
        </ul>

        <div class="header-content__course__price-box">
          <div class="header-content__course__price-box__wrapper">
            <a href="#" class="header-content__course__price-box__btn">
              записаться на вебинар
            </a>

            <p class="header-content__course__price-box__subtitle">
                7000 $
            </p>
          </div>
        </div>
      </div>
  </div>

  <div class="background-block__header"></div>

  <div class="header-taro__decoration_1 decoration mobile-none">
    <img src="{{asset('storage/img/decoration/taro_01.png')}}" alt="Карты">
  </div>

  <div class="header-taro__decoration_2 decoration  mobile-none">
    <img src="{{asset('storage/img/decoration/taro_02.png')}}" alt="Карты">
  </div>

  <div class="header-taro__decoration-mob_1 decoration mobile-active">
    <img src="{{asset('storage/img/decoration/taro-mob_01.png')}}" alt="Карты">
  </div>

  <div class="header-taro__decoration-mob_2 decoration mobile-active">
    <img src="{{asset('storage/img/decoration/taro-mob_02.png')}}" alt="Карты">
  </div>

  <div class="header-taro__decoration-mob_3 decoration mobile-active">
    <img src="{{asset('storage/img/decoration/taro-mob_03.png')}}" alt="Карты">
  </div>


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
          <a href="index.html" class="mobile-menu-nav__item">
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
  <section class="for-whom">
    <div class="container">
      <h1 class="title-medium center">
        кому подойдет этот вебинар
      </h1>

      <div class="for-whom__box">
          <div class="for-whom__box__persons">

            <div class="for-whom__box__person">
              <div class="for-whom__box__person__img">
                <img src="{{asset('storage/img/course/1.png')}}" alt="Персонаж">
              </div>
              <p>Тем, кто хочет узнать стратегию жизни,</p>
            </div>

            <div class="for-whom__box__person">
              <div class="for-whom__box__person__img">
                <img src="{{asset('storage/img/course/2.png')}}" alt="Персонаж">
              </div>
              <p>Женщинам и мужчинам,</p>
            </div>

            <div class="for-whom__box__person">
              <div class="for-whom__box__person__img">
                <img src="{{asset('storage/img/course/3.png')}}" alt="Персонаж">
              </div>
              <p>
                Тому, кто открыт к познанию себя и
                <br>
                окружаещего мира
              </p>
            </div>

          </div>
          <div class="for-whom__box__words">
            <ul class="for-whom__box__words-list">
              <li>СЕМЬЯ</li>
              <li>ОТНОШЕНИЯ</li>
              <li>ОСОЗНАННОСТЬ</li>
            </ul>
          </div>
      </div>
    </div>
  </section>

  <section class="webinar-program">
    <div class="container">
        <h1 class="webinar-program__title title center">
          Программа вебинара
        </h1>

      <div class="webinar-program__decoration decoration">
        <img src="{{asset('storage/img/decoration/big_cloudy.png')}}" alt="Облако">
      </div>
    </div>
  </section>

  <section class="results-webinar">
    <div class="container">
      <h1 class="title-medium center results-webinar__title">
        кАКОЙ РЕЗУЛЬТАТ ВЫ ПОЛУЧИТЕ
      </h1>

      <div class="results-webinar__cards">
        <div class="results-webinar__card">
          Отстройку от внутренних страхов
        </div>

        <div class="results-webinar__card">
          Эффективное достижение своих целей
        </div>

        <div class="results-webinar__card">
          Примените лучшие методы и практики
        </div>

        <div class="results-webinar__card">
          Налаживание взаимоотношений с партнером, детьми, окружением
        </div>
      </div>

      <div class="webinar-program__text-block">
        <p>
          Дополнительное описание результатов Дополнительное описание результатов  Дополнительное описание результатов Дополнительное описание результатов Дополнительное описание результатов
          <br>
          <br>
          Дополнительное описание результатов Дополнительное описание результатов Дополнительное описание результатов
        </p>
      </div>

      <div class="results-webinar__form">
        <div class="form-container">
          <h2 class="results-webinar__form__title title center">
            зАПИШИТЕСЬ НА ВЕБИНАР <span>мир таро</span>
          </h2>

          <form action="{{ route("send-email")}}" method="POST">
            @csrf
            <div class="results-webinar__form__inputs">
                <input class="results-webinar__form__input" type="text" name="name" id="name" placeholder="Ваше имя" required>

                <input class="results-webinar__form__input" type="tel" name="emailRecipient" id="tel" placeholder="Ваша почта" required>
            </div>

            <input class="pon" type="checkbox" id="privacy_policy" name="2" required>

            <label class="form-pol" for="privacy_policy">
              Нажимая на кнопку, вы даете согласие на обработку своих персональных данных
            </label>

            <input type="submit" class="results-webinar__form__inputs__submit" value="зАПИСАТЬСЯ НА ВЕБИНАР">
          </form>
        </div>
      </div>

    </div>
  </section>

  <section class="reviews reviews-background">
    <div class="container">
      <h1 class="title-medium center review__title">
        начните трансформацию своей жизни
      </h1>

      <p class="reviews__subtitle center">
        Посмотрите на отзывы тех, кто осмелился
      </p>

      <div class="reviews-cards">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js"
        integrity="sha512-wdUM0BxMyMC/Yem1RWDiIiXA6ssXMoxypihVEwxDc+ftznGeRu4s9Fmxl8PthpxOh5CQ0eqjqw1Q8ScgNA1moQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>














