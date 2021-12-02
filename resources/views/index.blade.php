<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/fovicon.png">
    <link rel="stylesheet" href="css/reset.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="body" id="top">
        <header class="header" data-aos="zoom-in">
            <div class="container">
                <div class="header__inner">
                    <a class="header__logo" href="#top">
                        <img src="images/logo.png" alt="">
                    </a>
                    <button class="burger">
                        <span class="burger-line"></span>
                    </button>
                    <div class="header__item-box"></div>
                    <div class="header__item">
                        <nav class="header__nav">
                            <ul class="header__menu">
                                <li class="header__menu-item">
                                    <a class="header__menu-link" href="#welcome">
                                        О компании
                                    </a>
                                </li>
                                <li class="header__menu-item">
                                    <a class="header__menu-link" href="#task">
                                        Обучение за рубежом
                                    </a>
                                </li>
                                <li class="header__menu-item">
                                    <a class="header__menu-link" href="#profession">
                                        Профориентация
                                    </a>
                                </li>
                                <li class="header__menu-item">
                                    <a class="header__menu-link" href="#studio">
                                        Онлайн студия иностранных языков
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <button class="header__btn page__btn" data-modal="#modal__contact">
                            Связаться
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <main class="main">

            <section class="intro" data-aos="zoom-out" style="background-image: url(./images/intro-bg.jpg)">
                <div class="container">
                    <div class="intro__content">
                        {!! $banner->text !!}
                        <button class="intro__btn page__btn" data-modal="#modal__contact">
                            Связаться
                        </button>
                    </div>
                </div>
            </section>

            <section class="welcome">
                <div class="container">
                    <div class="welcome__inner">
                        <img class="welcome__img" data-aos="fade-right" src="/storage/{{ $about->image }}" alt="">
                        <div class="welcome__content" id="welcome" data-aos="fade-down">
                            <h2 class="welcome__content-title">
                                Welcome to
                                <span>M.A.P Academy</span>
                            </h2>
                            {!! $about->text !!}
                            <button class="welcome__content-btn page__btn" data-modal="#modal__registration">
                                Записаться на консультацию
                            </button>
                        </div>
                    </div>

                    <img class="scheme__img" data-aos="zoom-in" src="/storage/{{ $about->image2 }}" alt="">
                </div>
            </section>

            <section class="task" id="task">
                <div class="container">
                    <div class="task__inner">
                        <div class="task__content" data-aos="zoom-in-right">
                            <h4 class="task__title page__title">
                                {{ $choice->title }}
                                <span>Study abroad</span>
                            </h4>
                            <p class="task__text">
                                {{ $choice->description }}
                            </p>
                            <div class="task__images">
                                <img class="task__decor" src="images/task-decor.svg" alt="">
                                <img class="task__img" src="images/task-bag.svg" alt="">
                            </div>
                        </div>
                        <div class="task__accordion" data-aos="zoom-in-left">
                            @foreach ($questions as $question)
                            <div class="task__accordion-item">
                                <div class="task__accordion-title">
                                    <p>{{ $question->question }}</p>
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13 25.9999C10.4288 25.9999 7.91543 25.2374 5.77759 23.809C3.63975 22.3805 1.97351 20.3502 0.989572 17.9748C0.0056327 15.5993 -0.251811 12.9855 0.249797 10.4637C0.751405 7.94196 1.98953 5.62558 3.80762 3.8075C5.6257 1.98941 7.94208 0.751283 10.4638 0.249675C12.9856 -0.251933 15.5995 0.00551063 17.9749 0.98945C20.3503 1.97339 22.3807 3.63963 23.8091 5.77747C25.2376 7.91531 26 10.4287 26 12.9999C26 16.4477 24.6304 19.7543 22.1924 22.1923C19.7544 24.6302 16.4478 25.9999 13 25.9999V25.9999ZM13 1.99988C10.8244 1.99988 8.69767 2.64502 6.88873 3.85372C5.07979 5.06241 3.66989 6.78038 2.83733 8.79037C2.00477 10.8004 1.78693 13.0121 2.21137 15.1459C2.63581 17.2797 3.68345 19.2397 5.22183 20.7781C6.76021 22.3164 8.72022 23.3641 10.854 23.7885C12.9878 24.213 15.1995 23.9951 17.2095 23.1626C19.2195 22.33 20.9375 20.9201 22.1462 19.1112C23.3549 17.3022 24 15.1755 24 12.9999C24 10.0825 22.8411 7.28461 20.7782 5.22171C18.7153 3.15881 15.9174 1.99988 13 1.99988Z" fill="black" />
                                        <path d="M13 19.9999C12.7348 19.9999 12.4804 19.8945 12.2929 19.707C12.1054 19.5194 12 19.2651 12 18.9999L12 6.99988C12 6.73466 12.1054 6.48031 12.2929 6.29277C12.4804 6.10523 12.7348 5.99988 13 5.99988C13.2652 5.99988 13.5196 6.10523 13.7071 6.29277C13.8946 6.48031 14 6.73466 14 6.99988L14 18.9999C14 19.2651 13.8946 19.5194 13.7071 19.707C13.5196 19.8945 13.2652 19.9999 13 19.9999Z" fill="black" />
                                        <path d="M19 13.9999L7 13.9999C6.73478 13.9999 6.48043 13.8945 6.29289 13.707C6.10536 13.5194 6 13.2651 6 12.9999C6 12.7347 6.10536 12.4803 6.29289 12.2928C6.48043 12.1052 6.73478 11.9999 7 11.9999L19 11.9999C19.2652 11.9999 19.5196 12.1052 19.7071 12.2928C19.8946 12.4803 20 12.7347 20 12.9999C20 13.2651 19.8946 13.5194 19.7071 13.707C19.5196 13.8945 19.2652 13.9999 19 13.9999Z" fill="black" />
                                    </svg>
                                </div>
                                <div class="task__accordion-text">
                                    {!! $question->answer !!}
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </section>

            <section class="selection">
                <div class="container">
                    <h4 class="selection__title page__title" data-aos="fade-down">
                        {{ $document->title }}
                    </h4>
                    <div class="selection__inner">
                        <div class="selection__item">
                            {!! $document->description !!}
                            <img class="selection__item-img" data-aos="fade-left" src="images/selection-1.svg" alt="">
                        </div>
                        <div class="selection__item">
                            {!! $document->description2 !!}
                            <img class="selection__item-img" data-aos="fade-left" src="images/selection-2.svg" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <section class="profession" id="profession">
                <div class="container">
                    <div class="profession__inner">
                        <img class="profession__img" data-aos="fade-up-right" src="/storage/{{ $profession->image }}" alt="">
                        <div class="profession__content" data-aos="fade-left">
                            <h4 class="profession__title page__title">
                                {{ $profession->title }}
                                <span>Your future career</span>
                            </h4>
                            {!! $profession->description !!}
                            <button class="profession__btn page__btn" data-modal="#modal__registration">
                                Записаться на консультацию
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            <section class="studio" id="studio">
                <div class="container">
                    <h4 class="studio__title page__title" data-aos="fade-down">
                        {{ $language->title }}
                        <span>Speak now</span>
                    </h4>
                    <p class="studio__text" data-aos="fade-right">
                        {{ $language->description }}
                    </p>
                    <div class="studio__inner" data-aos="zoom-in-down">
                        @foreach ($advantages as $advantage)
                            <p class="studio__item">
                                {{ $advantage->advantage }}
                            </p>
                        @endforeach
                    </div>

                </div>
                <a href="{{ $price->price }}">
                    <button class="price__btn page__btn">
                        Посмотреть прайс
                    </button>
                </a>
            </section>
        </main>

        <footer class="footer">
            <div class="container">
                <div class="footer__inner">
                    <div class="footer__social" data-aos="fade-right">
                        <a class="footer__logo" href="#?">
                            <img class="footer__logo-img" src="images/logo.png" alt="logo">
                        </a>
                        <p class="footer__social-text">
                            Обучение за границей
                        </p>
                        <ul class="footer__social-list">
                            <li class="footer__social-item">
                                    @foreach ($links as $link)
                                    <a class="footer__social footer__social-linkedin" href="{{ $link->link }}">
                                        <img src="/storage/{{ $link->logo }}" alt="">
                                    </a>
                                    @endforeach
                            </li>
                        </ul>
                    </div>
                    <ul class="footer__categories" data-aos="fade-up">
                        <li class="footer__categories-title">
                            Категории
                        </li>
                        <li class="footer__categories-item">
                            <a class="footer__categories-link" href="#?">
                                О компании
                            </a>
                        </li>
                        <li class="footer__categories-item">
                            <a class="footer__categories-link" href="#?">
                                Профориентация
                            </a>
                        </li>
                        <li class="footer__categories-item">
                            <a class="footer__categories-link" href="#?">
                                Обучение за границей
                            </a>
                        </li>
                        <li class="footer__categories-item">
                            <a class="footer__categories-link" href="#?">
                                Онлайн обучение
                            </a>
                        </li>
                    </ul>

                    <ul class="footer__contacts" data-aos="fade-left">
                        <li class="footer__contacts-title">
                            Контакты
                        </li>
                        <li class="footer__contacts-item footer__contacts-phone">
                            {{ $contact->phone }}
                        </li>
                        <li class="footer__contacts-item footer__contacts-email">
                            {{ $contact->mail }}
                        </li>
                        <li class="footer__contacts-item footer__contacts-place">
                            {{ $contact->address }}
                        </li>
                    </ul>

                </div>

                <div class="footer__copy">
                    <p>Разработано в</p>
                    <img src="images/a_lux-logo.png" alt="">
                </div>
            </div>
        </footer>

        <!-- modal start -->

        <div class="modal" id="modal__contact">
            <div class="modal__content modal__contact">
                <button class="modal__close" data-close="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="26" viewBox="0 0 12 16">
                        <path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z" />
                    </svg>
                </button>
                <h3 class="modal__contact-title">
                    Нужна консультация?
                </h3>
                <form class="modal__contact-form" action="/callback" method="POST">
                    @csrf

                    <input class="modal__contact-name input-words" type="text" name="name" placeholder="Имя">

                    <input class="modal__contact-number" type="number" name="number" placeholder="Номер">

                    <input class="modal__contact-email" type="email" name="email" placeholder="Email">

                    <div class="modal__contact-social">
                        <p>Выберите удобный способ связи:</p>
                        <div class="modal__contact-icons">
                            <label class="modal__contact-label">
                                <input class="modal__contact-radio " type="radio" name="radio" value="Telegram">
                                <i class="fab fa-telegram" aria-hidden="true"></i>
                            </label>

                            <label class="modal__contact-label">
                                <input class="modal__contact-radio" type="radio" name="radio" value="WhatsApp">
                                <i class="fab fa-whatsapp"></i>
                            </label>

                            <label class="modal__contact-label">
                                <input class="modal__contact-radio" type="radio" name="radio" value="По номеру телефона">
                                <i class="fas fa-phone-volume"></i>
                            </label>
                        </div>
                    </div>
                    <input class="modal__contact-btn page__btn" type="submit" value="Отправить">
                </form>
            </div>
        </div>


        <div class="modal" id="modal__registration">
            <div class="modal__content modal__registration">
                <button class="modal__close" data-close="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="26" viewBox="0 0 12 16">
                        <path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z" />
                    </svg>
                </button>
                <h3 class="modal__registration-title">
                    {{setting('admin.callback')}}
                </h3>
                <form class="modal__registration-form" action="/req" method="POST">

                    @csrf

                    <input class="modal__registration-name input-words" type="text" name="name" placeholder="Имя">
                    <input class="modal__registration-email" type="email" name="email" placeholder="Email">
                    <input class="modal__registration-number" type="number" name="number" placeholder="Номер">
                    <input class="modal__registration-county" type="text" name="country" placeholder="Желаемая страна поступления?">
                    <input class="modal__registration-level" type="text" name="language" placeholder="Уровень владения иностранным языком?">
                    <input class="modal__registration-budget" type="text" name="budget" placeholder="Примерный Бюджет на образование?">

                    <input class="modal__registration-btn" type="submit" value="Отправить">
                </form>
            </div>
        </div>


        <!-- modal end -->



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/a010647b51.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="js/app.js"></script>
    </div>
</body>

</html>
