<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <title>{{ env('APP_NAME') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!--=============== HEADER ===============-->
    <header class="header">
        <nav class="nav container">
            <div class="nav__data">
                <a href="#" class="nav__logo">
                    <i class="ri-traffic-light-line"></i>
                    Eazy-Traffic
                </a>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line nav__toggle-menu"></i>
                    <i class="ri-close-line nav__toggle-close"></i>
                </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li>
                        <a href="/" class="nav__link">Home</a>
                    </li>

                    <!--=============== DROPDOWN 1 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link dropdown__button">
                            Discover <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-flashlight-line"></i>
                                    </div>

                                    <span class="dropdown__title">Rules and Safety</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="{{ route('traffic.laws') }}" class="dropdown__link">Traffic laws
                                                and fines</a>
                                        </li>
                                        <li>
                                            <a href="{{route('traffic.safety')}}" class="dropdown__link">Traffic Safety</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">JavaScript OOP</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-heart-3-line"></i>
                                    </div>

                                    <span class="dropdown__title">Popular courses</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Development with Flutter</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Web development with React</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Backend development expert</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-book-mark-line"></i>
                                    </div>

                                    <span class="dropdown__title">Careers</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Web development</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Applications development</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">UI/UX design</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Informatic security</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-file-paper-2-line"></i>
                                    </div>

                                    <span class="dropdown__title">Certifications</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Course certificates</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Free certifications</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!--=============== DROPDOWN 2 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link dropdown__button">
                            Resources <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-code-line"></i>
                                    </div>

                                    <span class="dropdown__title">Web templates</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Free templates</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Premium templates</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-pen-nib-line"></i>
                                    </div>

                                    <span class="dropdown__title">Designs</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Web designs</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">App designs</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Component design</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-apps-2-line"></i>
                                    </div>

                                    <span class="dropdown__title">Others</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Recent blogs</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Tutorial videos</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Webinar</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <a href="{{ route('login') }}" class="nav__link">Sign In</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" class="nav__link">Register</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="main">
        {{ $slot }}
    </main>
    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
