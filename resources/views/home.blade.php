@extends('layouts.app')
@section('title', 'Личный кабинет')
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
          <h1 class="heading-banner sub-heading in-blog-post">Личный кабинет</h1></div>
      </div>
    </div>
  </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Вы авторизованы
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
