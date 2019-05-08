<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سامانه فصلنامه</title>
    <link rel="stylesheet" href="assets/css/site.css">
    <script data-main="assets/js/index.js" src="assets/libs/requirejs/require.js"></script>
</head>

<body id="showoption" class="theme-color-default">
<header>
    <div class="header_topbar">
        <div class="container-fluid">

            <div class="header_topbar__client-area col-md-6 col-sm-6 col-xs-12 pull-right">
                <a class="button user-register color-main-bg" href="{{route('register')}}">ثبت کاربر جدید <i class="fa fa-user"></i></a>
                <div class="user-login-box">
                    <a class="button user-login" href="#">ورود کاربر <i class="fa fa-key"></i></a>
                    <div class="login-form">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">

                                <div class="col-md-12">
                                    <input id="email" type="email" placeholder="آدرس ایمیل" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-12">
                                    <input id="password" type="password" placeholder="رمز عبور" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12 offset-md-8">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4" style="">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link right" href="{{ route('password.request') }}">
                                            رمز عبور را فراموش کرده اید ؟
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- header_topbar__client-area -->
            <div class="header_topbar__search col-md-6 col-sm-6 col-xs-12 pull-left">
                <form action="">
                    <input type="text" placeholder="در سایت جستجو کنید">
                    <div class="btn-search"><i class="fa fa-search"></i></div>
                </form>
            </div>
            <!-- header_topbar__search -->
        </div>
    </div>
    <div class="header_banner">
        <img src="assets/images/header.png" alt=""/>
        <div class="header_banner__content">
            <div class="container-fluid">
                <div class="header__title col-md-5 col-sm-12 col-xs-12 pull-right">
                    <h1>
                        <a href="index.html">
                            <span class="title-1">سامانه مدیریت آموزش ضمن خدمت شهرداری کرج</span>
                            <span class="title-2 color-main-bg">Managment System Training Karaj Municipality</span>
                        </a>
                    </h1>
                </div>
                <div class="header__desc col-md-5 col-sm-12 col-xs-12 pull-left">
                    <h2>
                        <p>معاونت برنامه ریزی و توسعه سرمایه انسانی</p>
                        <p>دفتر نوسازی و تحول اداری</p>
                        <p>اداره آموزش </p>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="header_navigation">
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarResponsive" aria-expanded="false">
                        <span class="sr-only">منوی سایت</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <ul class="nav social-icon pull-left">
                        <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                    </ul>
                </div>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="nav navbar-nav ">
                        <li><a href="index.html">صفحه اصلی</a></li>
                        <li><a href="#">خدمات آموزشی</a>
                            <ul>
                                <li><a href="courses.html">لیست دوره ها</a></li>
                                <li><a href="courses-info.html">اطلاعات هر دوره</a></li>
                                <li><a href="meetings.html">جلسات</a></li>
                            </ul>
                        </li>
                        <li><a href="index.html">مقالات</a>
                            <ul>
                                <li><a href="blog.html">وبلاگ</a></li>
                                <li><a href="#">اخبار</a>
                                    <ul>
                                        <li><a href="news.html">صفحه اخبار</a></li>
                                        <li><a href="single.html">صفحه تک خبر</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">گالری تصاویر</a>
                            <ul>
                                <li><a href="gallery-cat.html">لیست گالری ها</a></li>
                                <li><a href="gallery.html">صفحه گالری</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">درباره ما</a></li>
                        <li><a href="contact.html">تماس با ما</a></li>
                        <li><a href="faq.html">سوالات متداول</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

@yield('content')

<footer>
    <div class="footer_base">
        <div class="container">
            <div class="row">

                <div class="footer_forms col-md-4 col-sm-12 col-xs-12 pull-right">
                    <div class="footer_forms__content">
                        <h6>
                                <span class="icon">
                                    <i class="fa fa-comments"></i>
                                </span>
                        </h6>
                        <form action="">
                            <input type="text" placeholder="نام">
                            <input type="email" placeholder="ایمیل">
                            <textarea name="name" rows="3" placeholder="متن ارسالی"></textarea>
                            <button type="button" name="button">نظرمو اینجا ارسال می کنم</button>
                        </form>
                    </div>
                </div>

                <div class="footer_links col-md-4 col-sm-12 col-xs-12 pull-right">
                    <div class="footer_links__content">
                        <h6>نقل و قول دوستان</h6>
                        <div id="comment" class="owl-carousel">
                            <div class="item">
                                <p>
                                    لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است.لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است.لورم ایپسوم متنی است که ساختگی برای طراح
                                </p>
                            </div>
                            <div class="item">
                                <p>
                                    لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است.لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است.لورم ایپسوم متنی است که ساختگی برای طراح
                                </p>
                            </div>
                            <div class="item">
                                <p>
                                    لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است.لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است.لورم ایپسوم متنی است که ساختگی برای طراح
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer_links col-md-4 col-sm-12 col-xs-12 pull-left">
                    <div class="footer_links__content">
                        <h6>لینکستان</h6>
                        <div class="list">
                            <ul>
                                <li>
                                    <a href="#">استانداری البرز</a>
                                </li>
                                <li>
                                    <a href="#">شهرداری کرج</a>
                                </li>
                                <li>
                                    <a href="#">سازمان شهرداری ها</a>
                                </li>
                                <li>
                                    <a href="#">فرم های آموزشی</a>
                                </li>
                                <li>
                                    <a href="#">فرم های آموزشی</a>
                                </li>
                                <li>
                                    <a href="#">شهرداری کرج</a>
                                </li>
                                <li>
                                    <a href="#">اداره کل آموزش و پرورش</a>
                                </li>
                                <li>
                                    <a href="#">شهرداری کرج</a>
                                </li>
                                <li>
                                    <a href="#">سازمان شهرداری ها</a>
                                </li>
                                <li>
                                    <a href="#">استانداری البرز</a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="#">اداره کل آموزش و پرورش</a>
                                </li>
                                <li>
                                    <a href="#">شهرداری کرج</a>
                                </li>
                                <li>
                                    <a href="#">سازمان شهرداری ها</a>
                                </li>
                                <li>
                                    <a href="#">استانداری البرز</a>
                                </li>
                                <li>
                                    <a href="#">فرم های آموزشی</a>
                                </li>
                                <li>
                                    <a href="#">شهرداری کرج</a>
                                </li>
                                <li>
                                    <a href="#">استانداری البرز</a>
                                </li>
                                <li>
                                    <a href="#">شهرداری کرج</a>
                                </li>
                                <li>
                                    <a href="#">سازمان شهرداری ها</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer_copyright">
        <p>نقل و نشر مطالب تنها با ذکر نام و لینک سایت اداره آموزش شهرداری کرج بلامانع است</p>
        <p>طراحی سایت توسط آژانس تخصصی طراحی وب گیلاس</p>
    </div>
</footer>


<div class="side-menu-hidden">
    <div class="side-menu-hidden--content">
        <ul class="menu">
            <li><a href="#">
                    <i class="fa fa-certificate"></i>
                    <span>گواهینامه</span>
                </a></li>
            <li><a href="#">
                    <i class="fa fa-briefcase"></i>
                    <span>آموزش الکترونیک</span>
                </a></li>
            <li><a href="#">
                    <i class="fa fa-list-alt"></i>
                    <span>درخواست دوره</span>
                </a></li>
            <li><a href="#">
                    <i class="fa fa-cloud-download"></i>
                    <span>بخش دانلود</span>
                </a></li>
            <li><a href="#">
                    <i class="fa fa-calendar"></i>
                    <span>تقویم آموزشی</span>
                </a></li>
            <li><a href="#">
                    <i class="fa fa-file-text-o"></i>
                    <span>ثبت نام آنلاین</span>
                </a></li>
        </ul>
        <ul id="ColorBox" class="colors">
            <li class="theme-color-purple"></li>
            <li class="theme-color-lightblue"></li>
            <li class="theme-color-darkblue"></li>
            <li class="theme-color-blue"></li>
            <li class="theme-color-default"></li>
            <li class="theme-color-red"></li>
            <li class="theme-color-orange"></li>
            <li class="theme-color-green"></li>
        </ul>
        <div class="side-menu-button">
            <div class="side-menu-button--content">
                <i class="fa fa-cog" aria-hidden="true"></i>
            </div>
        </div>
    </div>
</div>


</body>

</html>
