<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Qumin Test</title>
    <meta name="author" content="Eamon Taylor"/>
    <meta name="description" content="Qumin"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- <link rel="preload" href="css/main.css" as="style"> -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet " type="text/css" href="css/main.css?<?php echo time(); ?>"/>
</head>
<body>

<div>
  <header>
    <div class="nav-container container no-guttter">
      <nav class="navbar navbar-expand-md navbar-toggleable-lg navbar-light bg-faded">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="img/logo.png" /></a>
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto mr-5">
            <a class="nav-item nav-link" href="#">主页</a>
            <a class="nav-item nav-link" href="#">年轻学员学校</a>
            <a class="nav-item nav-link" href="#">成人学校</a>
            <a class="nav-item nav-link" href="#">年轻学员课程</a>
            <a class="nav-item nav-link" href="#">预订</a>
            <a class="nav-item nav-link" href="#">活动</a>
            <a class="nav-item nav-link" href="#">关于</a>
            <a class="nav-item nav-link" href="#">联系人</a>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <div class="hero-panel">
    <div class="col-md-8 col-lg-5 mr-auto ml-auto hero-panel__content">
      <h1 class="text-highlight">与世界上最好的学习英语的今天</h1>
      <p>•••</p>
      <span class="hero-panel__play-button">
        <img src="img/play-button.png" />
      </span>
      <button class="hero-panel__button mr-auto ml-auto">预订</button>
      <span class="hero-panel__down-arrow">
        <img src="img/down_white.png" />
      </span>
    </div>
  </div>


  <div class="listing-panel container">
    <span class="listing-panel__panel-heading mt-5">有什么新的</span>
    <p class="listing-panel__dots">•••</p>
    <div class="row">
      <div id="album-container" class="col-sm-8">
        <div class="row">
        <div id="albums" class="col-sm-6">
          <ul>
            <album-link
              v-for="albumitem in albumDataList"
              v-bind:albumlist="albumitem"
              v-bind:key="albumitem.id">
            </album-link>
          </ul>
        </div>
        <div id="photos" class="col-sm-6">
          <thumb
              v-for="photoItem in photoDataList"
              v-bind:thumbnail="photoItem"
              v-bind:key="photoItem.id">
            </thumb>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <h2 class="listing-panel__section-heading">50% OFF</h2>
        <p>CAPE TOWN RESIDENCE</p>
        <p>Cape Town English language school students can enjoy 50% off all bed and breakfast accommodation in our on-site and off-site residences for bookings confirmed from today for any arrivals from 05 December 2017 to 31 March 2018, for any length of stay for any course</p>
      </div>
    </div>
    <span class="listing-panel__down-arrow">
      <img src="img/down_arrow.png" />
    </span>
  </div>


  <div class="detail-panel">
    <div class="container">
    <span class="detail-panel__panel-heading pt-5">为什么是我们</span>
    <div class="row mt-5" id="latest-posts">
        <latest-post
          v-for="item in latestPostsList"
          v-bind:post="item"
          v-bind:key="item.id">
        </latest-post>
    </div>
    <span class="detail-panel__up-arrow">
      <img src="img/up_black.png" />
    </span>
  </div>
  </div>

  <footer>
    <div class="footer container pt-5">
      <div class="row">
        <div class="col-md-3">
          <div class="footer__copyright">&copy; Copyright 2017 <span class="footer__copyright-name">Qumin Ltd</span></div>
          <div class="footer__social mt-3"><img src="img/social.png"></div>
        </div>
        <div class="ml-auto">
          <div class="nav">
            <a class="nav-item nav-link" href="#">主页</a>
            <a class="nav-item nav-link" href="#">年轻学员学校</a>
            <a class="nav-item nav-link" href="#">成人学校</a>
            <a class="nav-item nav-link" href="#">年轻学员课程</a>
            <a class="nav-item nav-link" href="#">预订</a>
            <a class="nav-item nav-link" href="#">活动</a>
            <a class="nav-item nav-link" href="#">关于</a>
            <a class="nav-item nav-link" href="#">联系人</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>


  <script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
  <script src="js/bootstrap.bundle.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="js/vue.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
