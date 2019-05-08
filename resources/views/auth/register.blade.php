@extends('frontend.layouts.master')

@section('content')

<div class="singup">
    <div class="singup_content">
        <div class="container">
            <div class="row">

                <article class="singup-forms col-md-7 col-sm-7 col-xs-12 pull-right">

                    <h4>ثبت نام</h4>
                    <form action="{{route('user.register')}}" method="post">
                        @csrf
                        <div class="row">

                            <div class="col-md-6 col-xs-12 pull-right" style="margin-bottom: 10px;">
                                <select name="salutation" class="form-control">
                                    <option>عنوان</option>
                                    <option value="دکتر">دکتر</option>
                                    <option value="پروفسور">پروفسور</option>
                                    <option value="آقای">آقای</option>
                                    <option value="خانم">خانم</option>
                                </select>
                                {{--<input class="form-control" name="salutation" type="text" value="" placeholder="عنوان">                            --}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-12 pull-right">
                                <input class="form-control" name="name" type="text" value="" placeholder="نام">
                                <input class="form-control" name="last_name" type="text" value="" placeholder="نام خانوادگی">
                                <input class="form-control" name="email" type="text" value="" placeholder="آدرس ایمیل">
                            </div>
                            <div class="col-md-6 col-xs-12 pull-right">
                                <input class="form-control" name="password" type="text" value="" placeholder="کلمه عبور">
                                <input class="form-control" name="password_confirmation" type="text" value="" placeholder="تکرار کلمه عبور">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-md-6 col-xs-12 pull-right">
                                <select name="salutation" class="form-control">
                                    <option>تحصیلات</option>
                                    <option value="دکترای تخصصی">دکترای تخصصی</option>
                                    <option value="دکترای پزشکی">دکترای پزشکی</option>
                                    <option value="کارشناسی ارشد">کارشناسی ارشد</option>
                                    <option value="دانشجوی کارشناسی ارشد">دانشجوی کارشناسی ارشد</option>
                                    <option value="کارشناسی">کارشناسی</option>
                                    <option value="سایر">سایر</option>
                                </select>

                                {{--<input class="form-control" name="contact_type" type="text" value="" placeholder="تحصیلات">--}}
                                <input class="form-control" name="degree" type="text" value="" placeholder="رتبه علمی">
                                <input class="form-control" name="discipline" type="text" value="" placeholder="رشته تخصصی">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-md-6 col-xs-12 pull-right">
                                <input class="form-control" name="phone" type="text" value="" placeholder="شماره تلفن">
                                <input class="form-control" name="mobile" type="text" value="" placeholder="تلفن همراه">
                                <input class="form-control" name="fax" type="text" value="" placeholder="دورنگار">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-md-6 col-xs-12 pull-right">
                                <input class="form-control" name="province" type="text" value="" placeholder="استان">
                                <input class="form-control" name="city" type="text" value="" placeholder="شهر">
                                <input class="form-control" name="mailing_address" type="text" value="" placeholder="آدرس پستی">
                                <input class="form-control" name="zip_code" type="text" value="" placeholder="کد پستی">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <button class="button">ثبت نام</button>
                        </div>
                    </form>
                </article>
            </div>
        </div>

    </div>




    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
