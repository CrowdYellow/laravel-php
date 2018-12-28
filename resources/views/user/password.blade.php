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

                        <form class="form-horizontal" method="POST" action="{{url('users/'.user()->id.'/password')}}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">邮箱</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ user()->email }}" readonly required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('old_password') ? ' has-error' : '' }}">
                                <label for="old_password" class="col-md-4 control-label">原始密码</label>
                                <div class="col-md-6">
                                    <input id="old_password" type="password" class="form-control" name="old_password" value="{{ old('old_password') }}" required>
                                    @if ($errors->has('old_password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('old_password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">输入新密码</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">确认新密码</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-lg-offset-4">
                                    <button type="submit" class="btn btn-lg btn-primary btn-block">确认修改</button>
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
