@extends('layouts.app')

@section('content')
<div class="banner-fixed-height">
  <div data-animation="default" class="navbar w-nav" data-easing2="ease" data-easing="ease" data-collapse="medium" data-w-id="ab3d6dd9-2604-1cb1-fff6-edda379048ae" role="banner" data-no-scroll="1" data-duration="400" data-doc-height="1">
    <div class="container flex w-container">
      <div class="main">
        <a href="{{route('index')}}" class="brand-first w-nav-brand"><img src="/storage/{{setting('site.logo')}}" loading="lazy" width="130" alt="" class="image-101" /></a>
        <nav role="navigation" class="nav-menu w-nav-menu">
          {{menu('main','menu.main')}}
        </nav>
        <div class="div-block-2">
          <div class="menu-order">
            <div class="menu-button w-nav-button">
              <div data-w-id="4227ed56-541b-b62e-0b47-59f715ead01e" data-is-ix2-target="1" class="lottie-animation-2" data-animation-type="lottie" data-src="https://uploads-ssl.webflow.com/5f7ea94782a7b99c39f34980/5f84557799580b5d6f14b3eb_lottieflow-menu-nav-01-ffffff-easey.json" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="4.28" data-duration="4.28" data-ix2-initial-state="0"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container w-container">
    <div>
      <div class="sub-grid in-blog-post">
        <div id="w-node-_599ffb83-6bb0-3ce1-757d-2a1d1fb2a6a4-8d708b6b" class="algin-center">
          <h1 class="heading-banner sub-heading in-blog-post">Авторизация</h1></div>
      </div>
    </div>
  </div>
</div>
<div class="block block-min-height">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Вход</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control " name="email" value="" required="" autocomplete="email" autofocus="">

                                                                        </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Пароль</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control " name="password" required="" autocomplete="current-password">

                                                                        </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            Запомнить меня
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Войти
                                    </button>

                                                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                            Забыли пароль?
                                        </a>
                                                                        </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <!--<div class="card-header">Nog geen lid?</div>-->
                    <!--<div class="card-body"><a href="/register">U kan hier lid worden en uw account aanmaken.</a></div>-->
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
