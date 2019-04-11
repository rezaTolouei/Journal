@extends('admin.layouts.master')


@section('content')

    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">لیست کاربران</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <div class="card-block">
                    <p>مجموع فاکتورهای پرداخت شده 240, unpaid 150. <span class="float-xs-right"><a href="#">Invoice Summary <i class="icon-arrow-right2"></i></a></span></p>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                        <tr>
                            <th>نام</th>
                            <th>پست الکترونیک</th>
                            <th>تاریخ عضویت</th>
                            <th>نقش های کاربر</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td class="text-truncate">{{$user->name}}</td>
                            <td class="text-truncate">{{$user->email}}</td>
                            <td class="text-truncate">{{$user->created_at}}</td>
                            <td class="text-truncate">{{\Hekmatinasser\Verta\Verta::instance($user->created_at)}}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td class="text-truncate"><a href="#">INV-001012</a></td>
                            <td class="text-truncate">Andrew D.</td>
                            <td class="text-truncate"><span class="tag tag-default tag-success">Paid</span></td>
                            <td class="text-truncate">20/07/2016</td>
                        </tr>
                        <tr>
                            <td class="text-truncate"><a href="#">INV-001401</a></td>
                            <td class="text-truncate">Megan S.</td>
                            <td class="text-truncate"><span class="tag tag-default tag-success">Paid</span></td>
                            <td class="text-truncate">16/11/2016</td>
                        </tr>
                        <tr>
                            <td class="text-truncate"><a href="#">INV-01112</a></td>
                            <td class="text-truncate">Doris R.</td>
                            <td class="text-truncate"><span class="tag tag-default tag-warning">Overdue</span></td>
                            <td class="text-truncate">11/12/2016</td>
                        </tr>
                        <tr>
                            <td class="text-truncate"><a href="#">INV-008101</a></td>
                            <td class="text-truncate">Walter R.</td>
                            <td class="text-truncate"><span class="tag tag-default tag-warning">Overdue</span></td>
                            <td class="text-truncate">18/05/2016</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>


@endsection