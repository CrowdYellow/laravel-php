@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            {{--侧边栏 start--}}
            <div class="col-md-3">
                <div class="box">
                    <div class="padding-md ">
                        <div class="list-group text-center">
                            <a href="{{url('notification/message')}}" class="list-group-item">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                &nbsp;私信
                            </a>
                            <a href="{{url('notification/notification')}}" class="list-group-item active">
                                <i class="fa fa-bell" aria-hidden="true"></i>
                                &nbsp;通知
                            </a>
                            <a href="https://laravel-china.org/users/31393/edit_email_notify" class="list-group-item ">
                                <i class="fa fa-building" aria-hidden="true"></i>
                                &nbsp;系统
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            {{--侧边栏 end--}}

            {{--主体部分 start--}}
            <div class="col-md-9">
                <div class="panel panel-default">

                    <div class="panel-heading"><h4><i class="text-md fa fa-bell" aria-hidden="true"></i> 我的提醒</h4></div>

                    <div class="panel-body">

                        <ul class="list-group row">
                            @foreach($user->notifications as $notification)
                                @include('notification.'.snake_case(class_basename($notification->type)))
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            {{--主体部分 end--}}
        </div>
    </div>
@endsection
