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

                            @foreach($messages as $messageGroup)
                            <li class="list-group-item media {{ $messageGroup->first()->shouldAddUnreadClass() ? 'unread' : '' }}" style="margin-top: 0;">
                                <div class="pull-left">
                                    <a href="{{ $messageGroup->last()->toUser->id }}">
                                        @if(user()->id == $messageGroup->last()->from_user_id)
                                            <img width="40" class="media-object img-thumbnail" src="{{ $messageGroup->last()->toUser->photos }}">
                                        @else
                                            <img width="40" class="media-object img-thumbnail" src="{{ $messageGroup->last()->fromUser->photos }}">
                                        @endif
                                    </a>
                                </div>

                                <div class="info">
                                    @if($messageGroup->first()->fromUser->id == user()->id)
                                        <div class="media-heading">
                                            我发送给
                                            <a href="{{url('/users/'.$messageGroup->first()->toUser->id)}}">{{ $messageGroup->first()->toUser->name }}</a>：
                                        </div>
                                    @else
                                        <div class="media-heading">
                                            <a href="{{url('/users/'.$messageGroup->first()->toUser->id)}}">{{ $messageGroup->first()->fromUser->name }}</a>：
                                        </div>
                                    @endif

                                    <div class="media-body"><p>{{ $messageGroup->first()->body }}</p></div>

                                    <div class="message-meta"><p>
                                            @if(user()->id == $messageGroup->last()->from_user_id)
                                                <a href="{{'/message/to/'.$messageGroup->last()->to_user_id}}"><i class="fa fa-commenting-o"></i>查看对话</a>
                                            @else
                                                <a href="{{'/message/to/'.$messageGroup->last()->from_user_id}}"><i class="fa fa-commenting-o"></i>查看对话</a>
                                            @endif
                                        </p></div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            {{--主体部分 end--}}
        </div>
    </div>
@endsection

