@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            {{--侧边栏 start--}}
            <div class="col-md-3">
                <div class="box">
                    <div class="padding-md ">
                        <div class="list-group text-center">
                            <a href="{{url('notification/message')}}" class="list-group-item active">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                &nbsp;私信
                            </a>
                            <a href="{{url('notification/notification')}}" class="list-group-item">
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

                    <div class="panel-heading"><h4><i class="fa fa-envelope" aria-hidden="true"></i> 我的私信</h4></div>

                    <div class="panel-body">

                        <ul class="list-group row">

                            <li class="list-group-item media " style="margin-top: 0;">
                                <div class="pull-left">
                                    <a href="#">
                                        <img class="media-object img-thumbnail" alt="等车的猪" src="{{asset(user()->photos)}}" style="width:48px;height:48px;">
                                    </a>
                                </div>

                                <div class="info">
                                    <div class="media-heading">
                                        我发送给
                                        <a href="#">等车的猪</a>
                                        <span class="meta">⋅ 于 ⋅ <span class="timeago" title="2018-12-25 12:55:25">6秒前</span></span>：
                                    </div>
                                    {{--<div class="media-heading">--}}
                                        {{--<a href="{{url('')}}">等车的猪</a>--}}
                                        {{--<span class="meta"> ⋅ 于 ⋅ <span>3天前</span></span>：--}}
                                    {{--</div>--}}

                                    <div class="media-body"><p>设么事</p></div>

                                    <div class="message-meta"><p><a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i>查看对话</a></p></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            {{--主体部分 end--}}
        </div>
    </div>
@endsection
