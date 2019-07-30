@extends('frontend.layouts.master')

@section('content')
    <div class="container">
        <div class="col-md-12" style="width: 1200px; margin: 10px auto; background-color: #fff; border-radius: 4px; box-shadow: 0 1px 3px #eee; padding: 10px; height: 840px;">
            <div class="col-md-3 pull-right">
                <div class="menu_right" style="width: 100%;float: right;border: 1px solid #cccccc;">
                    <ul style="padding: 0; margin: 0;">
                        <li style="margin: auto">
                            <a href="users.html" style="padding-right: 15px; display: block;padding:3px;padding-right:3px; font-size:11pt; border-bottom:1px dashed #cccccc;">
                                <i class="fas fa-user fontsm" style="margin: 5px; list-style: none;"></i>
                                داشبورد
                            </a>
                        </li>

                        <li>
                            <a class="odd">
                                <i class="fas fa-chevron-circle-down"></i>
                                نقش های کاربر
                            </a>
                            <ul class="inner">

                                <li>
                                    <a href="writer.html" style="padding-right: 15px;">
                                        <i class="fas fa-chevron-circle-left"></i>

                                        نویسنده
                                    </a>
                                </li>
                                <li>
                                    <a href="" style="padding-right: 15px;">
                                        <i class="fas fa-chevron-circle-left"></i>
                                        داور
                                    </a>
                                </li>
                                <li>
                                    <a href="" style="padding-right: 15px;">
                                        <i class="fas fa-chevron-circle-left"></i>
                                        کارشناس نشریه
                                    </a>
                                </li>
                                <li>
                                    <a href="" style="padding-right: 15px;">
                                        <i class="fas fa-chevron-circle-left"></i>
                                        سردبیر
                                    </a>
                                </li>
                                <li>
                                    <a href="" style="padding-right: 15px;">
                                        <i class="fas fa-chevron-circle-left"></i>
                                        دبیر تخصصی
                                    </a>
                                </li>
                                <li>
                                    <a href="" style="padding-right: 15px;">
                                        <i class="fas fa-chevron-circle-left"></i>
                                        اعضای هیئت تحریره
                                    </a>
                                </li>
                                <li>
                                    <a href="" style="padding-right: 15px;">
                                        <i class="fas fa-chevron-circle-left"></i>
                                        ناشر
                                    </a>
                                </li>
                                <li>
                                    <a href="" style="padding-right: 15px;">
                                        <i class="fas fa-chevron-circle-left"></i>
                                        ویراستار فنی
                                    </a>
                                </li>
                                <li>
                                    <a href="" style="padding-right: 15px;">
                                        <i class="fas fa-chevron-circle-left"></i>
                                        ویراستار ادبی
                                    </a>
                                </li>
                                <li>
                                    <a href="" style="padding-right: 15px;">
                                        <i class="fas fa-chevron-circle-left"></i>
                                        صفحه آرا
                                    </a>
                                </li>
                                <li>
                                    <a href="admin.html" style="padding-right: 15px;">
                                        <i class="fas fa-chevron-circle-left"></i>
                                        مدیریت سامانه
                                    </a>
                                </li>

                            </ul>

                        </li>


                    </ul>
                </div>

            </div>
            <div class="col-md-9 pull-left">
                <div class="content" >
                    {{--<p class="title">--}}
                        {{--مشخصات کاربری--}}
                    {{--</p>--}}
                    <h3>مشخصات کاربری</h3>
                    <div class="col-md-7 pull-right">
                        <ul>
                            <li>
                                <div class="params__list-key"><span class="block">نام و نام خانوادگی</span></div>
                                <div class="params__list-value"><span class="block">حجم</span></div>
                            </li>
                            <li>
                                <div class="params__list-key"><span class="block">پست الکترونیکی</span></div>
                                <div class="params__list-value"><span class="block">حجم</span></div>
                            </li>
                            <li>
                                <div class="params__list-key"><span class="block">تحصیلات</span></div>
                                <div class="params__list-value"><span class="block">حجم</span></div>
                            </li>
                            <li>
                                <div class="params__list-key"><span class="block">رتبه علمی</span></div>
                                <div class="params__list-value"><span class="block">حجم</span></div>
                            </li>
                            <li>
                                <div class="params__list-key"><span class="block">رشته تخصصی</span></div>
                                <div class="params__list-value"><span class="block">حجم</span></div>
                            </li>
                            <li>
                                <div class="params__list-key"><span class="block">تلفن همراه</span></div>
                                <div class="params__list-value"><span class="block">حجم</span></div>
                            </li>
                            <li>
                                <div class="params__list-key"><span class="block">شماره تلفن</span></div>
                                <div class="params__list-value"><span class="block">حجم</span></div>
                            </li>
                            <li>
                                <div class="params__list-key"><span class="block">دورنگار</span></div>
                                <div class="params__list-value"><span class="block">حجم</span></div>
                            </li>
                            <li>
                                <div class="params__list-key"><span class="block">شهر</span></div>
                                <div class="params__list-value"><span class="block">حجم</span></div>
                            </li>
                            <li>
                                <div class="params__list-key"><span class="block">استان</span></div>
                                <div class="params__list-value"><span class="block">حجم</span></div>
                            </li>
                            <li>
                                <div class="params__list-key"><span class="block">تاریخ ثبت نام</span></div>
                                <div class="params__list-value"><span class="block">حجم</span></div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 pull-left"></div>
                </div>

            </div>
        </div>
    </div>
@endsection