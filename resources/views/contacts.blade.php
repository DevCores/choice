@extends('layouts.app')
<div class="banner-fixed-height">
    <div class="container absolute w-container"></div>
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
    <div class="container neg-margin-80 w-container">
      <div class="banner-grid">
        <div class="algin-center">
          <h1 class="heading-banner"><strong class="bold-text-8">Контакты</strong><br/></h1></div>
      </div>
    </div>
  </div>
  <div class="section contact">
    <div class="container w-container">
      <div class="margin-page half _80">
        <div class="_70 center _80">
          <div class="rich-text-wrapper">
            <div>
              {!!setting('kontakty.contacts')!!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="container w-container">
      <div class="margin-page half _80">
        <div class="_70 center _80">
          <div class="rich-text-wrapper">
            <div>
              {!!setting('kontakty.faq')!!}
              <h3>FAQ</h3>
              <p><strong>Hoeveel betaal ik voor Choice? En wat krijg ik hiervoor?<br/></strong>Choice is een gratis persoonlijke tv-gids. Met Choice kan je snel en gemakkelijk kiezen uit het overweldigend online aanbod aan video en tv-programma’s. Daarnaast kan je ook profiteren van de groepskortingen die Choice onderhandelt voor haar leden.<strong><br/>‍<br/>Welke tv-zenders ontvang ik?<br/></strong>Via de groepsaankopen van Choice kan je je abonneren op de basiszenders in Vlaanderen voor €10 per maand. Dit pakket omvat de drie grote Vlaamse zendergroepen, aangevuld met een 20-tal internationale kanalen waarmee we nog in confidentiële onderhandeling zijn.
                <br/>‍<strong><br/>Wat met Franstalige zenders? <br/></strong>Daar werken we ook aan: als de publieke plaatsing een succes is, brengen we de Franstalige zenders enkele maanden later.
                <br/>‍<strong><br/>Zijn jullie ook actief in Brussel en Wallonië? Indien nee, staat dit op de planning?<br/></strong>Jazeker, Choice bestaat ook in het Frans en het Engels. Voor het afsluiten van groepsaankopen met Franstalige partners is het wel nog een paar maanden wachten, tot na het succesvol afsluiten van onze crowdfundingcampagne in aanloop naar onze beursnotering.<strong><br/>‍<br/>Kan Choice ook geïntegreerd worden in mijn Apple TV?<br/></strong>Jazeker, dat vraagt wel om een aparte app, die begin volgend jaar uitkomt.
                <br/><strong>‍<br/>Hoe slagen jullie erin om tegen bodemtarieven vergelijkbare diensten aan te bieden?<br/></strong>De Choice-coöperatie biedt een groepsaankoopdienst aan haar leden of de mensen die e-vouchers van leden kopen. Dit levert groepskortingen op, maar bodemtarieven worden pas mogelijk door gebruik te maken van gereguleerde tarieven. Wanneer de consumentenprijs gealigneerd wordt met deze tarieven, bereik je de bodem van wat mogelijk is in de markt.<strong><br/>‍<br/>Jullie rekenen ongeveer €250 aan voor installatiekosten en een nieuwe modem. Maar kan ik ook met mijn eigen modem aan de slag? Kan ik ook zelf de installatie doen?<br/></strong>Je kan met sommige andere modems aan de slag, op onze website vind je welke. Verder is er een vaste aansluitingskost die doorgestort moet worden aan Proximus, waar je niet onderuit komt. Hoeft er niemand langs te komen? Dan kan je de ‘doe-het-zelfkit’ gebruiken die je op de website terugvindt. Maar als er iemand moet langskomen, ben je al zonder stress gesteld voor €250. En door de jaarlijkse besparing van €250 op grond van het verschil tussen de prijs van de “Choice TV &amp; Internet”-bundel en de prijs bij de dominante marktspelers in Vlaanderen, heb je het op één jaar al terugverdiend.
                <br/>
              </p>
              <p><strong>Jullie stellen dat consumenten gemakkelijk tot €250 per jaar kunnen besparen op hun tv- en internetkosten dankzij Choice. Hoezo?<br/></strong>Dat is het verschil op jaarbasis tussen de prijs van hoogwaardig, onbeperkt internet en tv, inclusief 7 dagen uitgesteld kijken, in de bundel via Choice en de prijs bij de dominante marktspelers in Vlaanderen.
                <br/><strong>‍<br/>Jullie kondigden aan dat mensen die investeerden in Bhaalu gratis of tegen een fikse korting in Choice kunnen meestappen. Om hoeveel mensen gaat dat? Hoe moeten zij dat doen nu Choice op gang komt?<br/></strong>We hebben in het verleden inderdaad een speciale actie gedaan voor de 100.000 ex-Bhaalu leden, door hen 1 tot 12 maanden gratis tv aan te bieden, afhankelijk van wat ze in het verleden gekocht hadden, en dit bij de release van de Basis TV-module. Zij die zich toen ingeschreven hebben zullen dat krijgen, wanneer de module binnenkort gereleased wordt.
                <br/>
                <br/>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>