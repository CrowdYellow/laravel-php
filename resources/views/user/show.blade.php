@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            {{--侧边栏 start--}}
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="media">
                            <div class="media-heading text-center padding-tb-0">
                                <a href="#">
                                    <img class="img-circle img-80" alt="Taylor Swift" src="{{asset('images/user/TaylorSwift.jpg')}}">
                                </a>
                            </div>
                            <div class="media-body text-center padding-tb-0 border-bottom">
                                <div class="row padding-tb-0 border-bottom">
                                    <div class="col-md-12"><a href="#">Taylor Swift</a></div>
                                </div>
                                <div class="row margin-top-15">
                                    <div class="col-md-4">回答</div>
                                    <div class="col-md-4">问题</div>
                                    <div class="col-md-4">关注</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 user-basic-info">0</div>
                                    <div class="col-md-4 user-basic-info">0</div>
                                    <div class="col-md-4 user-basic-info">0</div>
                                </div>
                            </div>
                            <div class="media-bottom padding-tb-0">
                                <a href="{{url('/users/1/edit')}}" class="btn btn-block btn-default btn-color-blue"><i class="fa fa-edit"></i> 编辑个人资料</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--侧边栏 end--}}

            {{--主体部分 start--}}
            <div class="col-md-9">
                {{--问题区域 start--}}
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <i class="text-md fa fa-leaf"></i> 博客文章
                    </div>

                    <div class="panel-body">
                        <ul class="list-group">

                            <li class="list-group-item">
                                <a href="#" class="content">【使用技巧】你可能并不知道的骚操作之 GitHub pages https</a>
                                <span class="pull-right cm-meta"> 1 点赞 <span> ⋅ </span> 0 回复</span>
                            </li>
                        </ul>
                    </div>
                </div>
                {{--问题区域 end--}}

            </div>
            {{--主体部分 end--}}
        </div>
    </div>
@endsection
