@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            {{--侧边栏 start--}}
            <div class="col-md-3">
                <div class="box">
                    <div class="padding-md ">
                        <div class="list-group text-center">
                            <a href="{{url('users/1/edit')}}" class="list-group-item active">
                                <i class="fa fa-list-alt" aria-hidden="true"></i>
                                &nbsp;个人信息
                            </a>
                            <a href="{{url('users/1/avatar')}}" class="list-group-item ">
                                <i class="fa fa-picture-o" aria-hidden="true"></i>
                                &nbsp;修改头像
                            </a>
                            <a href="https://laravel-china.org/users/31393/edit_email_notify" class="list-group-item ">
                                <i class="fa fa-bell" aria-hidden="true"></i>
                                &nbsp;消息通知
                            </a>
                            <a href="https://laravel-china.org/users/31393/edit_social_binding" class="list-group-item ">
                                <i class="fa fa-flask" aria-hidden="true"></i>
                                &nbsp;账号绑定
                            </a>
                            <a href="https://laravel-china.org/users/31393/edit_password" class="list-group-item ">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                                &nbsp;修改密码
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            {{--侧边栏 end--}}

            {{--主体部分 start--}}
            <div class="col-md-9">
                <div class="panel panel-default padding-md">

                    <div class="panel-body ">

                        <h2><i class="fa fa-cog" aria-hidden="true"></i> 编辑个人资料</h2>
                        <hr>


                        <form class="form-horizontal" method="POST" action="{{url('users/1')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('PUT')}}

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">用户名</label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="name" type="text" value="crowdYellow">
                                </div>

                                <div class="col-sm-4 help-block">
                                    用户名只能修改一次，请谨慎操作
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">性别</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="gender">
                                        <option value="unselected" selected="">未选择</option>
                                        <option value="male">男</option>
                                        <option value="female">女</option>
                                    </select>
                                </div>

                                <div class="col-sm-4 help-block"></div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">邮 箱</label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="email" type="text" value="echo61546@gmail.com">
                                </div>
                                <div class="col-sm-4 help-block">
                                    如：name@website.com
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">城市</label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="city" type="text" value="">
                                </div>
                                <div class="col-sm-4 help-block">
                                    如：北京、广州
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">个人简介</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" rows="3" name="introduction" cols="50" style="overflow: hidden; overflow-wrap: break-word; resize: horizontal; height: 104px;"></textarea>
                                </div>
                                <div class="col-sm-4 help-block">
                                    请一句话介绍你自己，大部分情况下会在你的头像和名字旁边显示
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
