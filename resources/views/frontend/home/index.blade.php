@extends('frontend.layouts.master')

@section('content')

    <section class="page_courses clearfix">



    <div class="container">
        <nav class="page_courses__sidebar col-md-3 col-sm-12 col-xs-12 pull-right">
            <div class="box--default">
                <h3 class="box_title">خدمات آموزشی</h3>
                <div class="box--content">

                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel">
                            <div class="panel-heading active" role="tab" id="heading1">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#faq1" aria-expanded="true" aria-controls="faq1">
                                        دوره های آموزشی
                                    </a>
                                </h4>
                            </div>
                            <div id="faq1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="#">دوره های تخصصی</a></li>
                                        <li><a href="#">دوره های عمومی</a>
                                            <ul>
                                                <li><a href="#">دوره فنی</a></li>
                                                <li><a href="#">دوره فنی</a></li>
                                                <li><a href="#">دوره فنی</a></li>
                                                <li><a href="#">دوره فنی</a></li>
                                                <li><a href="#">دوره فنی</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">دوره های مدیریتی</a></li>
                                        <li><a href="#">دوره های آزاد</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading" role="tab" id="heading2">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#faq2" aria-expanded="true" aria-controls="faq2">
                                        آموزش الکترونیک
                                    </a>
                                </h4>
                            </div>
                            <div id="faq2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="#">دوره های تخصصی</a></li>
                                        <li><a href="#">دوره های عمومی</a></li>
                                        <li><a href="#">دوره های مدیریتی</a></li>
                                        <li><a href="#">دوره های آزاد</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel accordion-list">
                            <div class="panel-heading" role="tab" id="heading3">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#faq3" aria-expanded="true" aria-controls="faq3">
                                        کمیته آموزش
                                    </a>
                                </h4>
                            </div>
                            <div id="faq3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="#">دوره های تخصصی</a></li>
                                        <li><a href="#">دوره های عمومی</a></li>
                                        <li><a href="#">دوره های مدیریتی</a></li>
                                        <li><a href="#">دوره های آزاد</a></li>
                                        <li><a href="#">دوره های تخصصی</a></li>
                                        <li><a href="#">دوره های عمومی</a></li>
                                        <li><a href="#">دوره های مدیریتی</a></li>
                                        <li><a href="#">دوره های آزاد</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading" role="tab" id="heading4">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#faq4" aria-expanded="true" aria-controls="faq4">
                                        جزوات و منابع آموزشی
                                    </a>
                                </h4>
                            </div>
                            <div id="faq4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4Three">
                                <div class="panel-body">
                                    <ul>
                                        <ul>
                                            <li><a href="#">دوره های تخصصی</a></li>
                                            <li><a href="#">دوره های عمومی</a></li>
                                            <li><a href="#">دوره های مدیریتی</a></li>
                                            <li><a href="#">دوره های آزاد</a></li>
                                            <li><a href="#">دوره های تخصصی</a></li>
                                            <li><a href="#">دوره های عمومی</a></li>
                                            <li><a href="#">دوره های مدیریتی</a></li>
                                            <li><a href="#">دوره های آزاد</a></li>
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading" role="tab" id="heading5">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#faq5" aria-expanded="true" aria-controls="faq5">
                                        همایش و سمینار
                                    </a>
                                </h4>
                            </div>
                            <div id="faq5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4Three">
                                <div class="panel-body">
                                    <ul>
                                        <ul>
                                            <li><a href="#">دوره های تخصصی</a></li>
                                            <li><a href="#">دوره های عمومی</a></li>
                                            <li><a href="#">دوره های مدیریتی</a></li>
                                            <li><a href="#">دوره های آزاد</a></li>
                                            <li><a href="#">دوره های تخصصی</a></li>
                                            <li><a href="#">دوره های عمومی</a></li>
                                            <li><a href="#">دوره های مدیریتی</a></li>
                                            <li><a href="#">دوره های آزاد</a></li>
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- box--default -->
        </nav>
        <!-- page_courses__sidebar -->
        <article class="page_courses__slider col-md-9 col-sm-12 col-xs-12 pull-left">
            <div class="page_courses__content">
                <h3>تازه ترین دوره ها</h3>

                <div id="courses" class="owl-carousel">
                    <div class="item">

                        <div class="page_courses__item col-md-4 col-sm-12 col-xs-12">
                            <aside class="page_courses__item___content">
                                <div class="content">
                                    <div class="photo">
                                        <a href="#"><img src="assets/images/gallery/g1.jpg" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <a href="#">
                                            <h5>سلسله مباحث شناخت زلزله</h5>
                                            <div class="info">
                                                <span>مدت آموزش</span>
                                                <span>۲۰ ساعت</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="footer">
                                    <div class="stars" data-score="2.5"></div>
                                    <div>11 <i class="fa fa-user"></i></div>
                                </div>
                            </aside>
                        </div>
                        <!-- page_courses__item -->
                        <div class="page_courses__item col-md-4 col-sm-12 col-xs-12">
                            <aside class="page_courses__item___content">
                                <div class="content">
                                    <div class="photo">
                                        <a href="#"><img src="assets/images/gallery/g2.jpg" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <a href="#">
                                            <h5>عفاف و حجاب(ویژه بانوان)</h5>
                                            <div class="info">
                                                <span>مدت آموزش</span>
                                                <span>۸ ساعت</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="footer">
                                    <div class="stars" data-score="1.5"></div>
                                    <div>11 <i class="fa fa-user"></i></div>
                                </div>
                            </aside>
                        </div>
                        <!-- page_courses__item -->
                        <div class="page_courses__item col-md-4 col-sm-12 col-xs-12">
                            <aside class="page_courses__item___content">
                                <div class="content">
                                    <div class="photo">
                                        <a href="#"><img src="assets/images/gallery/g3.jpg" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <a href="#">
                                            <h5>اقتصاد مقاومتی</h5>
                                            <div class="info">
                                                <span>مدت آموزش</span>
                                                <span>۸ ساعت</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="footer">
                                    <div class="stars" data-score="3.5"></div>
                                    <div>11 <i class="fa fa-user"></i></div>
                                </div>
                            </aside>
                        </div>
                        <!-- page_courses__item -->
                        <div class="page_courses__item col-md-4 col-sm-12 col-xs-12">
                            <aside class="page_courses__item___content">
                                <div class="content">
                                    <div class="photo">
                                        <a href="#"><img src="assets/images/gallery/g4.jpg" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <a href="#">
                                            <h5>آموزش تخصصی شبکه</h5>
                                            <div class="info">
                                                <span>مدت آموزش</span>
                                                <span>19 ساعت</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="footer">
                                    <div class="stars" data-score="4"></div>
                                    <div>11 <i class="fa fa-user"></i></div>
                                </div>
                            </aside>
                        </div>
                        <!-- page_courses__item -->
                        <div class="page_courses__item col-md-4 col-sm-12 col-xs-12">
                            <aside class="page_courses__item___content">
                                <div class="content">
                                    <div class="photo">
                                        <a href="#"><img src="assets/images/gallery/g5.jpg" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <a href="#">
                                            <h5>مدیریت و بهبود روش</h5>
                                            <div class="info">
                                                <span>مدت آموزش</span>
                                                <span>13 ساعت</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="footer">
                                    <div class="stars" data-score="1.5"></div>
                                    <div>11 <i class="fa fa-user"></i></div>
                                </div>
                            </aside>
                        </div>
                        <!-- page_courses__item -->
                        <div class="page_courses__item col-md-4 col-sm-12 col-xs-12">
                            <aside class="page_courses__item___content">
                                <div class="content">
                                    <div class="photo">
                                        <a href="#"><img src="assets/images/gallery/g6.jpg" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <a href="#">
                                            <h5>اصول حسابداری تعهدی</h5>
                                            <div class="info">
                                                <span>مدت آموزش</span>
                                                <span>13 ساعت</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="footer">
                                    <div class="stars" data-score="2"></div>
                                    <div>11 <i class="fa fa-user"></i></div>
                                </div>
                            </aside>
                        </div>
                        <!-- page_courses__item -->
                    </div>
                    <div class="item">

                        <div class="page_courses__item col-md-4 col-sm-12 col-xs-12">
                            <aside class="page_courses__item___content">
                                <div class="content">
                                    <div class="photo">
                                        <a href="#"><img src="assets/images/gallery/g1.jpg" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <a href="#">
                                            <h5>سلسله مباحث شناخت زلزله</h5>
                                            <div class="info">
                                                <span>مدت آموزش</span>
                                                <span>۲۰ ساعت</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="footer">
                                    <div class="stars" data-score="2.5"></div>
                                    <div>11 <i class="fa fa-user"></i></div>
                                </div>
                            </aside>
                        </div>
                        <!-- page_courses__item -->
                        <div class="page_courses__item col-md-4 col-sm-12 col-xs-12">
                            <aside class="page_courses__item___content">
                                <div class="content">
                                    <div class="photo">
                                        <a href="#"><img src="assets/images/gallery/g2.jpg" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <a href="#">
                                            <h5>عفاف و حجاب(ویژه بانوان)</h5>
                                            <div class="info">
                                                <span>مدت آموزش</span>
                                                <span>۸ ساعت</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="footer">
                                    <div class="stars" data-score="1.5"></div>
                                    <div>11 <i class="fa fa-user"></i></div>
                                </div>
                            </aside>
                        </div>
                        <!-- page_courses__item -->
                        <div class="page_courses__item col-md-4 col-sm-12 col-xs-12">
                            <aside class="page_courses__item___content">
                                <div class="content">
                                    <div class="photo">
                                        <a href="#"><img src="assets/images/gallery/g3.jpg" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <a href="#">
                                            <h5>اقتصاد مقاومتی</h5>
                                            <div class="info">
                                                <span>مدت آموزش</span>
                                                <span>۸ ساعت</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="footer">
                                    <div class="stars" data-score="3.5"></div>
                                    <div>11 <i class="fa fa-user"></i></div>
                                </div>
                            </aside>
                        </div>
                        <!-- page_courses__item -->
                        <div class="page_courses__item col-md-4 col-sm-12 col-xs-12">
                            <aside class="page_courses__item___content">
                                <div class="content">
                                    <div class="photo">
                                        <a href="#"><img src="assets/images/gallery/g4.jpg" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <a href="#">
                                            <h5>آموزش تخصصی شبکه</h5>
                                            <div class="info">
                                                <span>مدت آموزش</span>
                                                <span>19 ساعت</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="footer">
                                    <div class="stars" data-score="4"></div>
                                    <div>11 <i class="fa fa-user"></i></div>
                                </div>
                            </aside>
                        </div>
                        <!-- page_courses__item -->
                        <div class="page_courses__item col-md-4 col-sm-12 col-xs-12">
                            <aside class="page_courses__item___content">
                                <div class="content">
                                    <div class="photo">
                                        <a href="#"><img src="assets/images/gallery/g5.jpg" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <a href="#">
                                            <h5>مدیریت و بهبود روش</h5>
                                            <div class="info">
                                                <span>مدت آموزش</span>
                                                <span>13 ساعت</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="footer">
                                    <div class="stars" data-score="1.5"></div>
                                    <div>11 <i class="fa fa-user"></i></div>
                                </div>
                            </aside>
                        </div>
                        <!-- page_courses__item -->
                        <div class="page_courses__item col-md-4 col-sm-12 col-xs-12">
                            <aside class="page_courses__item___content">
                                <div class="content">
                                    <div class="photo">
                                        <a href="#"><img src="assets/images/gallery/g6.jpg" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <a href="#">
                                            <h5>اصول حسابداری تعهدی</h5>
                                            <div class="info">
                                                <span>مدت آموزش</span>
                                                <span>13 ساعت</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="footer">
                                    <div class="stars" data-score="2"></div>
                                    <div>11 <i class="fa fa-user"></i></div>
                                </div>
                            </aside>
                        </div>
                        <!-- page_courses__item -->
                    </div>
                </div>
            </div>
            <!-- page_courses__content -->
        </article>
        <!-- page_courses__slider -->
    </div>
    </section>

@endsection
