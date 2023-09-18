<!DOCTYPE html>
<html data-wf-domain="corp.watchchoice.tv" data-wf-page="5f7eca7e101d09311e5cd414" data-wf-site="5f7ea94782a7b99c39f34980" data-wf-status="1" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <meta content="Webflow" name="generator" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="@yield('description')">
  <meta name="keywords" content="@yield('keywords')">
  <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous" />
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <link href="{{asset('images/favicon.png')}}" rel="shortcut icon" type="image/x-icon" />
  <link href="{{asset('images/webclip.png')}}" rel="apple-touch-icon" />
  <link href="{{asset('mediabox/mediabox.css')}}" rel="stylesheet">
  <style>
  .page-content {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }
  
  .w-lightbox-backdrop {
    background: rgba(29, 60, 113, .9);
  }
  </style>
</head>

<body>
  <div class="page-content">
    @yield('content')
    <div class="footer">
      <div class="container w-container">
        <div class="footer-gird">
          <div class="footer-column">
            <h3 class="footer-title">Choice NV</h3>
            <p class="paragraph-3">Geldenaaksevest 2
              <br/>3000 Leuven
              <br/>BE 0748.659.757
              <br/>
            </p>
          </div>
          <div>
            <h3 class="footer-title">Меню</h3>
            <div class="top-margin more verical">
              {{menu('footermenu','menu.footer')}}
            </div>
          </div>
          <div>
            <div>
              <h3 class="footer-title">Инструменты<br/></h3></div>
            <div class="top-margin more verical">
              {{menu('footertools','menu.footer')}}
            </div>
          </div>
          <div>
            <div>
              <h3 class="footer-title">Полезная информация<br/></h3></div>
            <div class="top-margin more verical">
              {{menu('footerinfo','menu.footer')}}
            </div>
          </div>
        </div>
        <div class="line-divider"></div>
        <div>
          <div class="top-margin _30px">
            <div class="social-wrapper">
              <div class="div-block-3">
                <a href="https://www.facebook.com/choicetv.be/" target="_blank" class="social-icon dark w-inline-block"><img src="https://uploads-ssl.webflow.com/5f7ea94782a7b99c39f34980/5f8424d32616241221da9102_facebook.svg" height="16" alt="" /></a>
                <a href="https://twitter.com/Choicetv_be" target="_blank" class="social-icon dark w-inline-block"><img src="https://uploads-ssl.webflow.com/5f7ea94782a7b99c39f34980/5f8424d333feee593b0c0024_twitter.svg" loading="lazy" width="16" alt="" /></a>
                <a href="https://www.instagram.com/choicetv.be/" target="_blank" class="social-icon dark w-inline-block"><img src="https://uploads-ssl.webflow.com/5f7ea94782a7b99c39f34980/5f8424d389944e55da523c59_instagram.svg" width="16" alt="" /></a>
                <a href="https://www.linkedin.com/company/choicetv-be/" target="_blank" class="social-icon dark w-inline-block"><img src="https://uploads-ssl.webflow.com/5f7ea94782a7b99c39f34980/5f8fcc5532ecf35ffc236d46_linkedin.svg" width="16" alt="" /></a>
              </div>
              <div class="div-block-4">
                <div class="nav-text-footer"><a href="/disclaimer" class="link-3 this">Disclaimer</a></div>
                <div class="nav-text-footer"><a href="/tou" class="link-3 this">Terms of Use</a><span> </span>
                  <a href="https://www.choice.be/tou"> </a>
                </div>
                <div class="nav-text-footer"><a href="/privacy-policy" class="link-3">Политика конфиденциальности</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5f7ea94782a7b99c39f34980" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="{{asset('js/webflow.js')}}" type="text/javascript"></script>
  <script src="{{asset('mediabox/mediabox.js')}}" type="text/javascript"></script>
  <script>
    MediaBox('.mediabox');
  </script>

</body>

</html>