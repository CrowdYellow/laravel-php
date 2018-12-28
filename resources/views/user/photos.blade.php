@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('.user.nav')
            {{--主体部分 start--}}
            <div class="col-md-9">
                <div class="panel panel-default padding-md">

                    <div class="panel-body ">

                        <h2><i class="fa fa-picture-o" aria-hidden="true"></i> 修改图像</h2>
                        <hr>
                        <user-photos-edit photo="{{user()->photos}}"></user-photos-edit>
                    </div>
                </div>
            </div>
            {{--主体部分 end--}}
        </div>
    </div>
@endsection
