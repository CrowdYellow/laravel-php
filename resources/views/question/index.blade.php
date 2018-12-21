@extends('layouts.app')

@section('content')

    {{--内容区域 start--}}
    <div class="container">
        <div class="row">
            {{--主体部分 start--}}
            <div class="col-md-9">
                {{--问题区域 start--}}
                <div class="panel panel-default">
                    <div class="panel-heading border-hide">
                        <i class="fa fa-tags"></i>
                        <a href="#" class="topic">健身</a>
                        <a href="#" class="topic">生活</a>
                    </div>
                    <div class="panel-heading font-b">
                        厉害的人是怎么分析问题的？
                    </div>

                    <div class="panel-body"><p>有哪些典型的学生思维？有哪些典型的学生思维？</p></div>
                    <div class="panel-footer-set">
                        <a href="#">编辑</a>
                        <a href="#">删除</a>
                    </div>
                </div>
                {{--问题区域 end--}}

                {{--回答区域 start--}}
                <div class="panel panel-default">
                    <div class="panel-heading">1个回答</div>
                    <div class="panel-body">
                        <div class="media">
                            <div class="media-left">
                                <button class="btn btn-default">0</button>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">admin</a></h4>
                                <div class="media-body">有条件固定的话，固定还是有好处的，关键是我们的学习和工作环境没那么理想化。</div>
                            </div>
                            <div class="media-bottom"><a href="#">0评论</a></div>
                        </div>
                    </div>
                </div>
                {{--回答区域 end--}}

                {{--编辑回答 start--}}
                <div class="panel panel-default">
                    <div class="panel-body">
                    </div>
                </div>
                {{--编辑回答 end--}}
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
                                <h4 class="media-heading">
                                    <a href="#">Taylor Swift</a>
                                    <i class="fa fa-edit"></i>
                                </h4>
                                <div class="media-body">
                                    1234567890@qwe.com
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h5 class="content">网站公告</h5>
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
