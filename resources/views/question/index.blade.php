@extends('layouts.app')

@section('content')
    {{--内容区域 start--}}
    <div class="container">
        <div class="row">
            {{--主体部分 start--}}
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading border-hide">
                        <ul class="nav nav-tabs">
                            <li role="presentation" class="active">
                                <a href="#"><i class="fa fa-bell-o"></i>说书人</a>
                            </li>
                            <li role="presentation">
                                <a href="#"><i class="fa fa-star-o"></i>生僻字</a>
                            </li>
                            <li role="presentation">
                                <a href="#"><i class="fa fa-calendar-minus-o"></i>苏幕遮</a>
                            </li>
                        </ul>
                    </div>

                    <div class="panel-body content">
                        <div class="media list-group-item border-bottom">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object img-thumbnail img-circle img-50" src="{{asset('images/user/lv.jpg')}}" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <i class="fa fa-file-text-o"></i>
                                    <a href="#">Taylor Swift</a>
                                    发布了文章
                                    <a href="{{url('questions/1')}}">精彩视频，就在黄瓜app</a>
                                </div>
                                <div class="media-body padding-tb-0">
                                    <a class="content" href="{{url('questions/1')}}">我倒是觉得快速开发、方便拓展是最重要的，过度设计和过度优化是万恶之源，等遇到瓶颈先加机器配置，再优化也来得及，还有电商整个流程最浪费性能的绝不是订单查询</a>
                                </div>
                            </div>
                        </div>
                        <div class="pull-right">
                            <nav aria-label="...">
                                <ul class="pagination">
                                    <li class="disabled">
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            {{--主体部分 end--}}

            {{--侧边栏 start--}}
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object img-thumbnail img-circle img-50" alt="Taylor Swift" src="{{asset('images/user/TaylorSwift.jpg')}}">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <a href="#" class="font-b">Taylor Swift</a>
                                    <i class="fa fa-edit"></i>
                                </div>
                                <div class="media-body">
                                    123@qwe
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <div class="content">网站公告</div>
                    </div>
                    <div class="panel-body">
                        <ol>
                            <li><a href="#">小巷茶楼，人影错落</a></li>
                            <li><a href="#">路边传来，两三声吆喝</a></li>
                        </ol>
                    </div>
                </div>
            </div>
            {{--侧边栏 end--}}
        </div>
    </div>
    {{--内容区域 end--}}
@endsection
