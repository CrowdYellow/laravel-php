<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" api_token="{{ Auth::check() ? 'Bearer ' . Auth::user()->api_token : 'Bearer '  }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script>
        @if(Auth::check())
            window.Yuanwei = {
            name:"{{user()->name}}",
            photos:"{{user()->photos}}",
            token: "{{ csrf_token() }}"
        };
        @endif
    </script>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">切换导航</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand web-title" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="{{url('/questions')}}">问答</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <form method="GET" action="/" accept-charset="UTF-8" class="navbar-form navbar-left hidden-sm hidden-md">
                                <div class="form-group">
                                    <input class="form-control search-input mac-style" placeholder="搜索" name="q" type="text" value="">

                                </div>
                            </form>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">登录</a></li>
                            <li><a href="{{ route('register') }}">注册</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre><i class="fa fa-pencil"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="list-group-item">
                                        <a href="{{url('/questions/create')}}"><i class="fa fa-question-circle-o"></i> 提个问题</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="{{url('/notification/notification')}}">
                                    <span class="badge badge-fade popover-with-html">0</span>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="list-group-item"><a href="#"><i class="fa fa-newspaper-o"></i> 我的博客</a></li>
                                    <li class="list-group-item"><a href="#"><i class="fa fa-heart"></i> 我的收藏</a></li>
                                    <li class="list-group-item"><a href="{{url('/users/1')}}"><i class="fa fa-user"></i> 个人中心</a></li>
                                    <li class="list-group-item"><a href="{{url('users/1/edit')}}"><i class="fa fa-cog"></i> 编辑资料</a></li>
                                    <li class="list-group-item">
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out"></i> 退出登录
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    @yield('js')
</body>
</html>
