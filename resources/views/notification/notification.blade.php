@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('notification.nav')

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
