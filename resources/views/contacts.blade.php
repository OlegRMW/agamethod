<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Aga Method</title>
  @vite(['resources/css/main.css', 'resources/js/main.js'])
</head>
<body>

<header class="header header-contacts">
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
            <a href="{{ route('consultation')}}" class="navigation-item">Консультация</a>
          </li>

          <li>
            <a href="{{ route('contacts')}}l" class="navigation-item active">Контакты</a>
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

  <div class="header-content header-content__contacts">
    <div class="container">
      <h1 class="title-big header-content__contacts__title">
        контакты
      </h1>

      <p class="header-content__contacts__subtitle">
        Энерготерапевта и таролога Карины Аганян
      </p>
    </div>
  </div>

  <div class="header-contacts__cloudy__decoration__mob_1 decoration mobile-active">
    <img src="{{asset('storage/img/decoration/mob-cloudy_01.png')}}" alt="Облако">
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
  <section class="contacts-block">
    <div class="contacts-block__container">
      <div class="contacts-block__text">
        <h1 class="contacts-block__title title">
          офис
        </h1>

        <p class="contacts-block__subtitle">
          Город, улица, дом, офис
        </p>
      </div>

      <div class="map-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d81416.6213621731!2d30.696451!3d50.380176!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf4ee15a4505%3A0xa013ea0b6c4b7dc5!2sKyiv%2C%20Ukraine%2C%2002000!5e0!3m2!1sen!2sru!4v1672615829809!5m2!1sen!2sru" width="100%" height="545" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>

    <div class="header-contacts__cloudy__decoration decoration mobile-none">
      <img src="{{asset('storage/img/decoration/cloudy_3.png')}}" alt="Облако">
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
              <a href="{{ route('index')}}" class="footer__nav-list__item">
                Вебинары
              </a>
            </li>

            <li>
              <a href="{{ route('consultation')}}" class="footer__nav-list__item">
                консультация
              </a>
            </li>

            <li>
              <a href="{{ route('contacts')}}" class="footer__nav-list__item">
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

<script src="public/js/main.js"></script>
</body>
</html>