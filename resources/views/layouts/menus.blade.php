@section('menu-one') 
    <body class="header_sticky ">
        <div class="boxed style1">
            <section id="header" class="header style2 v5">
                <div id="logo" class="logo float-left">
                    <a href="{{route('home')}}" title="Yolo">
                        SDU
                    </a>
                </div>
                <ul class="flat-unstyled float-right">
                    @guest
                    <li class="money">
                        <a href="#" title="">Помощь</a>
                        <ul class="unstyled border-radius-5 box-shadow">
                            <li><a href="#" title="">Какие нужны документы?</a></li>
                            <li><a href="#" title="">Реквезиты</a></li>
                            <li><a href="#" title="">Прочие вопросы</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('login') }}"><button style="width:200px;" class="no-border-radius">Регистрация</button></a>
                            <a href="{{ route('login') }}"><button style="width:200px;" class="no-border-radius">Войти</button></a>
                        <li class="nav-item">
                            <a href="{{ route('addDiscussion') }}"><button class="no-border-radius btn-success">Вопросы и предложения</button></a>
                        </li>
                        @else

                        @if (Auth::user()->is_admin)
                            <li class="nav-item">
                                <a href="{{ route('admin') }}"><button class="btn-warning no-border-radius">Админ панель</button></a>
                            </li>
                        @endif

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>

                        @endguest
                    </li>
                </ul>
                <div class="nav-wrap">
                    <div class="btn-menu">
                        <span></span>
                    </div>
                </div>
                <div class="clearfix"></div>
            </section>

            @guest
                @else
            <section class="flat-actions">
                <div class="call-action background-blue">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="text-action float-left padding-left-48">
                                <h4 class="color-white">Поиск</h4>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="form-action">
                                <form action="/search" method="get" accept-charset="utf-8">
                                    <div class="row">
                                        <div class="col-md-3 nothing">
                                            <select class="select2 search-input" >
                                                <option selected disabled>Блок</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                            </select>
                                        </div>
                                        <div class="col-md-7 nothing">
                                        <input type="text" name="contact-email" placeholder="Искать"  class="search-input border-left"/>
                                        </div>
                                        <div class="col-md-2 nothing">
                                            <button type="submit" style="width:100%;" class="no-border-radius bg-black">Найти</button>
                                        </div>
                                    </div>                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                @endguest
    @yield('content')

@show