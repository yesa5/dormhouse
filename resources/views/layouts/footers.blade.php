@section('footer-one')

            <section class="flat-columns" style="padding: 10px 0 30px;">
                <div class="container">
                    <div class="row wrap-column">
                        <div class="col-md-7">
                            <h6 style="font-size:16px;">What is Lorem Ipsum?</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                        <div class="col-md-5">
                            <h6 style="font-size:16px;">Из какого вы города?</h6>
                            <ul class="list-styles style1">
                                <?php
                                    $a1 = ['Актау', 'Актобе', 'Алматы', 'Астана', 'Атырау', 'Балхаш', ];
                                    $a4 = ['Жезказган', 'Караганда', 'Кокшетау', 'Костанай', 'Кызылорда', ];
                                    $a2 = ['Павлодар', 'Петропавловск', 'Рудный', 'Семей', 'Талдыкорган', ];
                                    $a3 = ['Тараз', 'Темиртау', 'Туркестан', 'Уральск', 'Усть-Каменогорск',];
                                    $a5 = [ 'Ушарал', 'Шымкент', 'Экибастуз'];
                                ?>
                                @foreach ($a1 as $a)
                                    <li style="display: inline;"><a href="#" title=""><i class="font-size-14" aria-hidden="true"></i>{{$a}}</a></li>
                                @endforeach
                                
                            </ul>
                            <ul class="list-styles style1">
                                @foreach ($a4 as $a)
                                    <li style="display: inline;"><a href="#" title=""><i class="font-size-14" aria-hidden="true"></i>{{$a}}</a></li>
                                @endforeach
                            </ul>
                            <ul class="list-styles style1">
                                @foreach ($a2 as $a)
                                    <li style="display: inline;"><a href="#" title=""><i class="font-size-14" aria-hidden="true"></i>{{$a}}</a></li>
                                @endforeach
                            </ul>
                            <ul class="list-styles style1">
                                @foreach ($a3 as $a)
                                    <li style="display: inline;"><a href="#" title=""><i class="font-size-14" aria-hidden="true"></i>{{$a}}</a></li>
                                @endforeach
                            </ul>
                            <ul class="list-styles style1">
                                @foreach ($a5 as $a)
                                    <li style="display: inline;"><a href="#" title=""><i class="font-size-14" aria-hidden="true"></i>{{$a}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="flat-actions style1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="call-action style2">
                                <div class="row">
                                    <div class="col-md-7 col-sm-12">
                                        <div class="text-action" style="padding-top:14px;">
                                            <h5>Подпишитесь на нашу рассылку</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-12">
                                        <div class="form-action">
                                            <form action="#" method="get" accept-charset="utf-8">
                                                <div class="row">
                                                    <div class="col-md-7 nothing-one">
                                                        <input class="search-input border-left" type="text" name="email" placeholder="Ваш адрес электронной почты">
                                                    </div>
                                                    <div class="col-md-5 nothing">
                                                        <button id="subscribe-button" style="width:100%;" class="bg-black" type="button">ПОДПИСЫВАТЬСЯ</button>
                                                    </div>
                                                </div>                                    
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <footer class="style1">
                <div class="footer-menu">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="wrap-footer">
                                    <div class="nav-footer float-left">
                                        <ul class="mainnav-ft">
                                            <li>
                                                <a href="#" title="">Карта сайта</a>
                                            </li>
                                            <li>
                                                <a href="#" title="">Написать нам письмо</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <script type="text/javascript" src="{{asset('javascript/jquery.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('javascript/tether.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('javascript/bootstrap.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('javascript/jquery-validate.js')}}"></script>
            <script type="text/javascript" src="{{asset('javascript/waypoints.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('javascript/easing.js')}}"></script>
            <script type="text/javascript" src="{{asset('javascript/jquery.flexslider-min.js')}}"></script>
            <script type="text/javascript" src="{{asset('javascript/owl.carousel.js')}}"></script>
             
            <script src="{{asset('select2/js/select2.min.js')}}" type="text/javascript"></script>

            <script type="text/javascript" src="{{asset('javascript/jquery.final-countdown.js')}}"></script>
            <script type="text/javascript" src="{{asset('javascript/jquery.cookie.js')}}"></script>

            <script type="text/javascript" src="{{asset('javascript/main.js')}}"></script>

            <script type="text/javascript" src="{{asset('css/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('css/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('css/revolution/js/slider.js')}}"></script>
       
            <script type="text/javascript" src="{{asset('css/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('css/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('css/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('css/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('css/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('css/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('css/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('css/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('css/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>

            <script type="text/javascript">
                jQuery(document).ready(function () {

                    // Select2
                    $(".select2").select2();

                    $(".select2-limiting").select2({
                        maximumSelectionLength: 2
                    });

                    $('.selectpicker').selectpicker();
                    $(":file").filestyle({input: false});
                });
            </script>
        </div>
    </body>
@show