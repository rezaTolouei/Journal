@extends('admin.layouts.master')


@section('content')

    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-form-center">ثبت کاربر جدید</h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                            <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                            <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                            <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">
                        {!! Form::open(['method'=>'POST','action'=>'Admin\AdminUserController@store']) !!}
                        <div class="col-md-6">
                            <h4 class="form-section"><i class="icon-head"></i> مشخصات شخصی</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('fname','نام :') !!}
                                        {!! Form::text('fname',null, ['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('lname','نام خانوادگی :') !!}
                                        {!! Form::text('lname',null, ['class'=>'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('email','پست الکترونیک :') !!}
                                        {!! Form::text('email',null, ['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('phone','شماره تماس :') !!}
                                        {!! Form::text('phone',null, ['class'=>'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <h4 class="form-section"><i class="icon-book"></i> مشخصات تخصصی و تحصیلی</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('fname','تحصیلات :') !!}
                                        {!! Form::select('lnam2e',[1=>'دکتر',0=>'مهندس'],0, ['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('lname','رتبه علمی :') !!}
                                        {!! Form::select('lnam2e',[1=>'دکتر',0=>'مهندس'],0, ['class'=>'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                                <div class="form-group">
                                    {!! Form::label('email','رشته تخصصی :') !!}
                                    {!! Form::text('email',null, ['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('phone','زمینه مورد علاقه پژوهش :') !!}
                                    {!! Form::text('phone',null, ['class'=>'form-control']) !!}
                                </div>
                        </div>
                        <div class="col-md-6">
                            <h4 class="form-section"><i class="icon-book"></i> بارگزاری عکس پروفایل</h4>

                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection