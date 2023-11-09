@extends('layouts.app')
@section('title', setting('site.title'))
@section('description', setting('site.description'))
@section('keywords', setting('site.keywords'))
@section('content')
<div class="banner">
      <div class="container absolute w-container"></div>
      <div data-animation="default" class="navbar w-nav" data-easing2="ease" data-easing="ease" data-collapse="medium" data-w-id="ab3d6dd9-2604-1cb1-fff6-edda379048ae" role="banner" data-no-scroll="1" data-duration="400" data-doc-height="1">
        <div class="container flex w-container">
          <div class="main">
            <a href="{{route('index')}}" aria-current="page" class="brand-first w-nav-brand w--current"><img src="/storage/{{setting('site.logo')}}" loading="lazy" width="130" alt="" class="image-101" /></a>
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
      <div class="container neg-margin-80 w-container">
        <div class="div-block this"></div>
        <div class="banner-grid">
          <div class="algin-center">
            <h1 class="heading-banner"><strong class="bold-text-8">{{setting('glavnaya.1-title')}}</strong><br/></h1></div>
        </div>
        @if(setting('glavnaya.1-button-link') && setting('glavnaya.1-button'))
        <div class="div-block this"><a href="{{setting('glavnaya.1-button-link')}}" target="_blank" class="button color-button align-center w-button">{{setting('glavnaya.1-button')}}</a></div>
        @endif
        <div class="div-block this">
          <a href="{{setting('glavnaya.1-button-image-link')}}" class="mediabox w-inline-block"><img src="/storage/{{setting('glavnaya.1-button-image')}}" loading="lazy" width="250" height="250" alt="" /></a>
        </div>
      </div>
      
    </div>
    <!-- <div class="section extra-banner">
      <div class="container w-container">
        <div class="top-title-copy">
          <h3 class="top-title-text home"><strong>{{setting('glavnaya.2-title')}}</strong><br/></h3>
          <div class="rich-text-wrapper">
            <div class="div-block-5"><a href="{{setting('glavnaya.2-button-link')}}" class="button color-button align-center w-button">{{setting('glavnaya.2-button')}}</a></div>
          </div>
        </div>
      </div>
    </div> -->
    <div class="section gray">
      <div class="container w-container">
        <div class="top-title-copy">
          <h3 class="top-title-text _50"><strong class="bold-text-10">{{setting('glavnaya.3-title')}}</strong><br/></h3>
          <div class="rich-text-wrapper">
            <div>
              <p class="align-left">{!!setting('glavnaya.3-desc')!!}</p>
            </div>
          </div>
        </div>
        <!-- <div class="w-layout-grid grid-2">
          <div>
            <h4 class="heading-14">{{setting('glavnaya.3-video-left-title')}}<br/></h4>
            <a href="{{setting('glavnaya.3-video-left-link')}}" class="mediabox lightbox-link w-inline-block w-lightbox"><img src="/storage/{{setting('glavnaya.3-video-left-image')}}" alt="" sizes="90vw" class="image-radius" />
              <div class="play"><img src="{{asset('images/das.svg')}}" width="18" alt="" /></div>
            </a>
          </div>
          <div>
            <h4 class="heading-14">{{setting('glavnaya.3-video-right-title')}}</h4>
            <a href="{{setting('glavnaya.3-video-right-link')}}" class="mediabox lightbox-link w-inline-block w-lightbox"><img src="/storage/{{setting('glavnaya.3-video-right-image')}}" alt="" sizes="90vw" class="image-radius" />
              <div class="play"><img src="{{asset('images/das.svg')}}" width="18" alt="" /></div>
            </a>
          </div>
        </div> -->
        <!-- <div class="margin-page half">
          <div class="core-grid-3">
            <div class="core-wrapper">
              <div class="top-margin more">
                <h2 class="core-title">{{setting('glavnaya.3-left-title')}}<br/></h2><img src="{{asset('images/dots.svg')}}" loading="lazy" height="5" alt="" class="core-dots" />
                <p>{!!setting('glavnaya.3-left-desc')!!}</p>
              </div>
            </div>
            <div class="core-wrapper">
              <div class="top-margin more">
                <h2 class="core-title">{{setting('glavnaya.3-center-title')}}<br/></h2><img src="{{asset('images/dots.svg')}}" loading="lazy" height="5" alt="" class="core-dots" />
                <p>{!!setting('glavnaya.3-center-desc')!!}</p>
              </div>
            </div>
            <div class="core-wrapper">
              <div class="top-margin more">
                <h2 class="core-title">{{setting('glavnaya.3-right-title')}}<br/></h2><img src="{{asset('images/dots.svg')}}" loading="lazy" height="5" alt="" class="core-dots" />
                <p>{!!setting('glavnaya.3-right-desc')!!}</p>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
    <!-- <div class="section this">
      <div class="container w-container">
        <div class="top-title-copy">
          <div class="rich-text-wrapper">
            <div>
              <p class="align-left">{!!setting('glavnaya.video-desc')!!}
              </p>
            </div>
          </div>
        </div>
        <div class="margin-page">
          <div class="features-grid">
            @if(setting('glavnaya.video-left-link') && setting('glavnaya.video-left-image'))
            <a href="{{setting('glavnaya.video-left-link')}}" class="mediabox lightbox-link this w-inline-block w-lightbox"><img src="/storage/{{setting('glavnaya.video-left-image')}}" alt="" class="image-radius" />
              <div class="play"><img src="{{asset('images/das.svg')}}" width="18" alt="" /></div>
            </a>
            @endif
            @if(setting('glavnaya.video-center-link') && setting('glavnaya.video-center-image'))
            <a href="{{setting('glavnaya.video-center-link')}}" class="mediabox lightbox-link this w-inline-block w-lightbox"><img src="/storage/{{setting('glavnaya.video-center-image')}}" alt=""class="image-radius" />
              <div class="play"><img src="{{asset('images/das.svg')}}" width="18" alt="" /></div>
            </a>
            @endif
            @if(setting('glavnaya.video-right-link') && setting('glavnaya.video-right-image'))
            <a href="{{setting('glavnaya.video-right-link')}}" class="mediabox lightbox-link this w-inline-block w-lightbox"><img src="/storage/{{setting('glavnaya.video-right-image')}}" alt="" class="image-radius" />
              <div class="play"><img src="{{asset('images/das.svg')}}" width="18" alt="" /></div>
            </a>
            @endif
          </div>
        </div>
      </div>
    </div> -->
    <!-- <div class="section">
      <div class="container w-container">
        <div class="top-title-copy">
          <h3 class="top-title-text _50"><strong>{{setting('glavnaya.4-title')}}</strong><br/></h3>
          <div class="rich-text-wrapper">
            <div>
              <p class="align-left">{!!setting('glavnaya.4-desc')!!}</p>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <div class="section gray home">
      <div class="container w-container">
        <div class="top-title-copy">
          <h3 class="top-title-text _50"><strong>Download de app</strong><br/></h3>
          <p>Download de Choice-app voor Android in de Google Play Store.
            <br/>
          </p>
          <a href="https://play.google.com/store/apps/details?id=be.choice.unicorn" target="_blank" class="w-inline-block"><img src="https://uploads-ssl.webflow.com/5f7ea94782a7b99c39f34980/5f809e0ec466767374b84b44_google-play-badge.png" loading="lazy" width="250" alt="" srcset="https://uploads-ssl.webflow.com/5f7ea94782a7b99c39f34980/5f809e0ec466767374b84b44_google-play-badge-p-500.png 500w, https://uploads-ssl.webflow.com/5f7ea94782a7b99c39f34980/5f809e0ec466767374b84b44_google-play-badge.png 646w" sizes="100vw" /></a>
          <p class="paragraph-4">De apps voor Mac en iPhone volgen begin 2021
            <br/>
          </p>
        </div>
      </div>
    </div>
@endsection