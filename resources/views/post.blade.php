@extends('layouts.app')
<div class="banner-fixed-height">
      <div data-animation="default" class="navbar w-nav" data-easing2="ease" data-easing="ease" data-collapse="medium" data-w-id="ab3d6dd9-2604-1cb1-fff6-edda379048ae" role="banner" data-no-scroll="1" data-duration="400" data-doc-height="1">
        <div class="container flex w-container">
          <div class="main">
            <a href="{{route('index')}}" class="brand-first w-nav-brand"><img src="https://uploads-ssl.webflow.com/5f7ea94782a7b99c39f34980/5f7f0298739c0dd1f82397e3_choice_white.png" loading="lazy" width="130" alt="" srcset="https://uploads-ssl.webflow.com/5f7ea94782a7b99c39f34980/5f7f0298739c0dd1f82397e3_choice_white-p-500.png 500w, https://uploads-ssl.webflow.com/5f7ea94782a7b99c39f34980/5f7f0298739c0dd1f82397e3_choice_white-p-800.png 800w, https://uploads-ssl.webflow.com/5f7ea94782a7b99c39f34980/5f7f0298739c0dd1f82397e3_choice_white-p-1080.png 1080w, https://uploads-ssl.webflow.com/5f7ea94782a7b99c39f34980/5f7f0298739c0dd1f82397e3_choice_white-p-1600.png 1600w, https://uploads-ssl.webflow.com/5f7ea94782a7b99c39f34980/5f7f0298739c0dd1f82397e3_choice_white-p-2000.png 2000w, https://uploads-ssl.webflow.com/5f7ea94782a7b99c39f34980/5f7f0298739c0dd1f82397e3_choice_white.png 2712w" sizes="(max-width: 479px) 37vw, (max-width: 767px) 104px, 130px" class="image-101" /></a>
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
              <h1 class="heading-banner sub-heading in-blog-post">{!!$post->title!!}</h1></div>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container w-container">
        <div class="legal-wrapper">
          <div>
            <div>
              <div class="blog-image"><img src="analyse-van-de-risicos-voor-choice-nv-bij-het-faillissement-van-de-alpha-11-belgium-groep-die-geen-deel-uit-maakt-van-de-choice-groep.html" alt="" class="image-100 w-dyn-bind-empty" /></div>
              <div class="top-margin more">
                <div class="w-richtext">
                  {!!$post->body!!}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>