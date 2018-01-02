<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="full-height">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Quero Vídeo - Login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{asset('css/compiled.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <style>
		strong {
            text-decoration: none;
            color: black;
        }
    </style>

</head>

<body>

<header>

    <div class="full-bg-img">
        <div class="container">
            <div class="row  pt-5 mt-3">
                <div class="col-md-12">
                    <img src="{{asset('imagens/site/logo_login.png')}}" class="mx-auto d-block img-fluid">
                    <hr>
                    <div class="row mt-5">
                        <div class="col-md-6 ml-lg-5 ml-md-3 hidden-md-down">
                            <div class="row pb-4">
                                <div class="col-2 col-lg-1">
                                    <i class="fa fa-info indigo-text fa-lg"></i>
                                </div>
                                <div class="col-10">
                                    <h4 class="feature-title"><strong>O que fazemos</strong></h4>
                                    <p class="">Plataforma para quem busca divulgar o seu negócio ou produto através de
                                        vídeos institucionais ou comemorativos.</p>
                                </div>
                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row pb-4">
                                <div class="col-2 col-lg-1">
                                    <i class="fa fa-mouse-pointer indigo-text fa-lg"></i>
                                </div>
                                <div class="col-10">
                                    <h4 class="feature-title"><strong>Praticidade</strong></h4>
                                    <p class="">Crie seus proprios anuncios de video em apenas alguns cliques.</p>
                                </div>
                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row pb-4">
                                <div class="col-2 col-lg-1">
                                    <i class="fa fa-money indigo-text fa-lg"></i>
                                </div>
                                <div class="col-10">
                                    <h4 class="feature-title"><strong>Custo beneficio</strong></h4>
                                    <p class="">Por um preço acessivel você tem uma apresentação profissional da sua empresa ou projeto</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="row pb-4 d-flex justify-content-center mb-4">
                                <h4 class="mt-3 mr-4"><strong>Entre com</strong></h4>
                                <div class="inline-ul text-center d-flex justify-content-center">
                                    <a type="button" href="{{url('/login/facebook')}}"
                                       class="btn-floating btn-small btn-fb"><i
                                                class="fa fa-facebook"></i></a>

                                    <a type="button" href="{{url('/login/google')}} "
                                       class="btn-floating btn-small btn-gplus"><i
                                                class="fa fa-google-plus"></i></a>
                                </div>
                                <h4 class="mt-3 ml-4"><strong>ou:</strong></h4>
                            </div>
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                    <div class="md-form form-gm">
                                        <i class="fa fa-envelope prefix"></i>
                                        <input type="email" id="email" class="form-control form-g {{ $errors->has('email') ? 'invalid' : '' }}" name="email"
                                               value="{{ old('email') }}" required>
                                        <label for="email"  @if ($errors->has('email'))
                                            data-error = "{{ $errors->first('email') }}"
                                        @endif >Seu e-mail</label>
                                    </div>



                                    <div class="md-form form-gm">
                                        <i class="fa fa-lock prefix"></i>
                                        <input type="password" id="password" class="form-control {{ $errors->has('password') ? ' invalid' : '' }}" name="password"
                                               value="" required>
                                         <label for="password" @if ($errors->has('password'))
                                            data-error = "{{ $errors->first('password') }}"
                                        @endif >Sua senha</label>
                                    </div>

                                <div class="form-group">
                                    <input type="checkbox" id="remember"
                                           name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember">Lembrar de mim</label>
                                </div>

                                <div class="form-group">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-indigo btn-rounded ">Login</button>
                                    </div>
                                    <br>
                                </div>
                                <a href="{{route('password.request')}}">Esqueceu sua senha?</a>
                                <a class="pull-right" href="{{route('register') }}"><strong>É novo por aqui?</strong>
                                    &nbsp;Registre-se</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

</body>
</html>
