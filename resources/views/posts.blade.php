@extends('layouts.app')
@section('title', setting('site.title'))
@section('description', setting('site.description'))
@section('keywords', setting('site.keywords'))
@section('content')
<div class="banner-fixed-height">
      <div class="container absolute w-container"></div>
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
        <div class="banner-grid">
          <div class="algin-center">
            <h1 class="heading-banner"><strong class="bold-text-8">Новости</strong><br/></h1></div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container w-container">
        <div class="legal-wrapper">
          <div class="w-dyn-list">
            <div role="list" class="blog-grid _1-column w-dyn-items">
            	@foreach($posts as $post)
            		<div role="listitem" class="w-dyn-item">
	                <a href="/post/{{$post->id}}" class="blog-wrapper center w-inline-block">
	                  <div class="blog-content-gray">
	                    <div>
	                      <h2 class="blog-title">{!!$post->title!!}</h2></div>
	                    <div class="top-margin-2 _15px">
	                      <p>{!!$post->excerpt!!}</p>
	                    </div>
	                    <div class="top-margin _30px">
	                      <div class="button-small left">
	                        <div class="button-small-text">Читать больше<strong class="bold-text-6">→</strong></div>
	                      </div>
	                    </div>
	                  </div>
	                </a>
	              </div>
            	@endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection