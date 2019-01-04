@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('.user.nav')
            {{--主体部分 start--}}
            <div class="col-md-9">
                <div class="panel panel-default padding-md">

                    <div class="panel-body ">

                        <h2><i class="fa fa-cog" aria-hidden="true"></i> 编辑个人资料</h2>
                        <hr>


                        <form class="form-horizontal" method="POST" action="{{url('/users/'.user()->id.'/edit')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">用户名</label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="name" type="text" value="{{user()->name}}">
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('sex') ? ' has-error' : '' }}">
                                <label for="" class="col-sm-2 control-label">性别</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="sex" id="">
                                        <option value="1" @if(user()->settings['sex'] == 1) selected @endif>男</option>
                                        <option value="0" @if(user()->settings['sex'] == 0) selected @endif>女</option>
                                    </select>
                                    @if ($errors->has('sex'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('sex') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="col-sm-4 help-block"></div>
                            </div>

                            <div class="form-group {{ $errors->has('city') ? ' has-error' : '' }}">
                                <label for="" class="col-sm-2 control-label">城市</label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="city" type="text"
                                           value="{{user()->settings['city']}}" placeholder="如：北京、广州">
                                    @if ($errors->has('city'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('desc') ? ' has-error' : '' }}">
                                <label for="" class="col-sm-2 control-label">个人简介</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" name="desc" id="" cols="50" rows="3" style="overflow: hidden; overflow-wrap: break-word; resize: horizontal; height: 104px;" placeholder="请一句话介绍你自己，大部分情况下会在你的头像和名字旁边显示">{{user()->settings['desc']}}</textarea>
                                    @if ($errors->has('desc'))
                                        <span class="help-block"><strong>{{ $errors->first('desc') }}</strong></span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-6">
                                    <input class="btn btn-primary" id="user-edit-submit" type="submit" value="应用修改">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{--主体部分 end--}}
        </div>
    </div>
@endsection
