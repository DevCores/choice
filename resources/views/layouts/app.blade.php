<!DOCTYPE html>
<html data-wf-domain="corp.watchchoice.tv" data-wf-page="5f7eca7e101d09311e5cd414" data-wf-site="5f7ea94782a7b99c39f34980" data-wf-status="1" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <meta content="Webflow" name="generator" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
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
            <h3 class="footer-title">Menu</h3>
            <div class="top-margin more verical">
              <a href="{{route('index')}}" aria-current="page" class="navlink w-inline-block w--current">
                <div class="nav-text-footer">Wat is Choice?</div>
              </a>
              <a href="crowdfunding.html" class="navlink w-inline-block">
                <div class="nav-text-footer">Crowdfunding</div>
              </a>
              <a href="corporate-investor-relations.html" class="navlink w-inline-block">
                <div class="nav-text-footer"><strong>Corporate &amp; Investor relations<br/></strong></div>
              </a>
              <a href="contacteer-ons.html" class="navlink w-inline-block">
                <div class="nav-text-footer"><strong>Contact<br/></strong></div>
              </a>
            </div>
          </div>
          <div>
            <div>
              <h3 class="footer-title">Tools<br/></h3></div>
            <div class="top-margin more verical">
              <a href="http://my.choice.be/" target="_blank" class="navlink w-inline-block">
                <div class="nav-text-footer">Login</div>
              </a>
              <a href="http://my.choice.be/publiekeplaatsing" class="navlink w-inline-block">
                <div class="nav-text-footer">Crowdfunding</div>
              </a>
            </div>
          </div>
          <div>
            <div>
              <h3 class="footer-title">Wettelijke informatie<br/></h3></div>
            <div class="top-margin more verical">
              <a href="av-coop.html" class="navlink w-inline-block"></a>
              <a href="https://uploads-ssl.webflow.com/5f7ea94782a7b99c39f34980/623486007293d89903d23bd9_Financial%20Report%202021%20Choice%20publiction%20version.pdf" target="_blank" class="navlink w-inline-block">
                <div class="nav-text-footer">Choice NV - Financial Report 2021 </div>
              </a>
              <a href="https://uploads-ssl.webflow.com/5f7ea94782a7b99c39f34980/60f05a273620696fd7bff26e_CHOICE%20NV%20-%20jaarrekening%202020.pdf" target="_blank" class="navlink w-inline-block">
                <div class="nav-text-footer">Choice NV - goedgekeurde jaarrekening 2020</div>
              </a>
              <a href="https://uploads-ssl.webflow.com/5f7ea94782a7b99c39f34980/6042303fe090a1a7c4572363_Choice%20NV%20-%20Listing%20Nota.pdf" target="_blank" class="navlink w-inline-block">
                <div class="nav-text-footer">Choice NV - Listing Nota</div>
              </a>
              <a href="https://uploads-ssl.webflow.com/5f7ea94782a7b99c39f34980/604b6ddc294a814fc2c49d8e_Statuten%20Choice%20NV.pdf" class="navlink w-inline-block">
                <div class="nav-text-footer">Choice NV Statuten</div>
              </a>
              <a href="https://uploads-ssl.webflow.com/5f7ea94782a7b99c39f34980/604230ba6de4af340ab70a77_Choice%20Trust%20Info%20Nota%20en%20Aanvulling.pdf" class="navlink w-inline-block"></a>
              <a href="https://uploads-ssl.webflow.com/5f7ea94782a7b99c39f34980/604b6ddcfe8447d33d7fc15a_Choice%20Trust%20Certification%20Agreement.pdf" class="navlink w-inline-block"></a>
              <a href="https://uploads-ssl.webflow.com/5f7ea94782a7b99c39f34980/604b6ddcfe8447d33d7fc15a_Choice%20Trust%20Certification%20Agreement.pdf" class="navlink w-inline-block"></a>
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
                <div class="nav-text-footer"><a href="disclaimer.html" class="link-3 this">Disclaimer</a></div>
                <div class="nav-text-footer"><a href="tou.html" class="link-3 this">Terms of Use</a><span> </span>
                  <a href="https://www.choice.be/tou"> </a>
                </div>
                <div class="nav-text-footer"><a href="privacy-policy.html" class="link-3"> Privacy Policy</a></div>
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