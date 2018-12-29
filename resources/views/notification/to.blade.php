@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('notification.nav')
            {{--主体部分 start--}}
            <div class="col-md-9">
                <div class="panel panel-default">

                    <div class="panel-heading"><h4>发私信</h4></div>

                    <div class="panel-body">
                        <div class="panel-heading">
                            <a href="{{url('users/'.$user->id)}}" title="Summer">
                                <img width="40" class="img-circle" alt="{{$user->name}}" src="{{asset($user->photos)}}">
                                &nbsp;&nbsp;{{$user->name}}
                            </a>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="{{url('/message/store/'.$user->id)}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                                    <div class="col-md-12">
                                        <textarea class="form-control" rows="5" name="body" cols="50" id="reply_content" data-emojiable="converted" data-type="original-input" style="overflow: hidden; overflow-wrap: break-word; resize: horizontal; height: 164px;"></textarea>
                                        @if ($errors->has('body'))
                                            <span class="help-block"><strong>{{ $errors->first('body') }}</strong></span>
                                        @endif
                                    </div>
                                </div>

                                <button class="btn btn-primary btn-sm pull-right" type="submit"><i class="fa fa-send"></i> 发送</button>
                            </form>
                        </div>
                        <hr>
                        <div class="panel-body">
                            <ul class="list-group row">
                                @foreach($messages as $message)
                                <li class="list-group-item media " style="margin-top: 0;">
                                    <div class="avatar pull-left">
                                        <a href="{{url('users/'.$message->fromUser->id)}}">
                                            <img class="media-object img-circle img-thumbnail" alt="iVerywang" src="{{ $message->fromUser->photos }}" style="width:48px;height:48px;">
                                        </a>
                                    </div>

                                    <div class="info">
                                        <div class="media-heading">
                                            @if(user()->id == $message->fromUser->id)
                                                我
                                            @else
                                            <a href="{{url('users/'.$message->fromUser->id)}}">{{$message->fromUser->name}}</a>
                                            @endif
                                            ：</div>
                                        <div class="media-body content-body"><p>{{$message->body}}</p></div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            {{--主体部分 end--}}
        </div>
    </div>
@endsection
