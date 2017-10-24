<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="">
    <meta name="author" content="">
    <title>media - </title>
    <?php echo $this->Html->script('bundle.js'); ?>
    <?php echo $this->Html->css('style.css'); ?>
    <?php echo $this->Html->css('https://fonts.googleapis.com/icon?family=Material+Icons'); ?>
  </head>
  <body>
    <!-- layout of header -->
    <header class="l-header">
      <section class="grey lighten-2 js-window-top">
        <div class="container">
          <h1 class="t-font-size--small l-m0 l-p1">東京で働くフリーランスエンジニアが、フロントエンド技術/バックエンド技術/案件情報/個人事業 を詳しく解説するメディア</h1>
        </div>
      </section>
      <nav class="l-nav white" style="z-index:99999;">
        <div class="container nav-wrapper">
          <a href="/" class="brand-logo t-color--default"><span class="t-color--primary">★</span>Logo</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse right"><i class="material-icons">menu</i></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li>
              <?php echo $this->Html->link('<i class="fa fa-user-circle"></i> プロフィール',['action' => 'profile'], ['class' => 't-color--default', 'escape' => false]); ?>
            </li>
            <li>
              <?php echo $this->Html->link('<i class="fa fa-th-large"></i> カテゴリー',['action' => 'category'], ['class' => 't-color--default dropdown-button', 'data-activates' => 'dropdown-category', 'escape' => false]); ?>
            </li>
            <li>
              <?php echo $this->Html->link('<i class="fa fa-envelope"></i> お問い合わせ',['action' => 'information'], ['class' => 't-color--default', 'escape' => false]); ?>
            </li>
          </ul>
          <ul class="side-nav" id="mobile-demo">
            <li><a id="homeMenu" href="#">Home</a></li>
            <li><a id="searchMenu" href="#">Matches</a></li>
            <li><a id="profileMenu" href="#">Profile</a></li>
            <li><a id="loginMenu" href="#">Login</a></li>
            <li><a id="logoutMenu" href="#">Logout</a></li>
          </ul>
        </div>
      </nav>
      <!-- Dropdown Structure -->
      <ul id="dropdown-category" class="dropdown-content">
        <li>
          <?php echo $this->Html->link('Java',['action' => 'category', '1'], ['class' => 't-color--default', 'escape' => false]); ?>
        </li>
        <li>
          <?php echo $this->Html->link('PHP',['action' => 'category', '1'], ['class' => 't-color--default', 'escape' => false]); ?>
        </li>
        <li>
          <?php echo $this->Html->link('CakePHP3',['action' => 'category', '1'], ['class' => 't-color--default', 'escape' => false]); ?>
        </li>
      </ul>
      <div class="parallax-container" style="width: 100%;">
        <div class="container valign-wrapper center-align" style="height: 100%;">
          <div style="width:100%;">
            <p class="l-mb4">
              <span class="l-display--block white-text t-font-size--3rem">大きな挑戦をして人生を変えるのが人生。</span>
              <span class="l-display--block white-text t-font-size--default">就職後4年で脱サラした年収700万円のWebアプリエンジニアの話。</span>
            </p>
            <p>
              <a class="waves-effect waves-light btn-large grey darken-3 white-text">
                <i class="material-icons right white-text">send</i>もっと詳しく聞いてみる
              </a>
            </p>
          </div>
        </div>
        <div class="parallax">
          <?php echo $this->Html->image('header-background.jpg', ['alt' => '', 'title' => '', 'style'=>'width: 100%;']); ?>
        </div>
      </div>
    </header>
    
    <!-- layout of contents -->
    <article class="l-pt4 l-pb4">
      <?= $this->fetch('content') ?>
    </article>

    <!-- layout of footer -->
    <footer class="page-footer grey darken-2">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">最後に...</h5>
            <p class="grey-text text-lighten-4">
              このメディアを読んでくださった方の生活水準が少しでも上がれば嬉しい限りです。<br>
              最後までご覧いただきありがとうございました。<br>
            </p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">カテゴリー</h5>
            <ul>
              <li>
                <?php echo $this->Html->link('Java',['action' => 'category', '1'], ['class' => 'grey-text text-lighten-4', 'escape' => false]); ?>
              </li>
              <li>
                <?php echo $this->Html->link('PHP',['action' => 'category', '1'], ['class' => 'grey-text text-lighten-4', 'escape' => false]); ?>
              </li>
              <li>
                <?php echo $this->Html->link('CakePHP3',['action' => 'category', '1'], ['class' => 'grey-text text-lighten-4', 'escape' => false]); ?>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container center-align grey-text text-lighten-4">
        © 2017 Copyright Inc., All right reserve.
        </div>
      </div>
    </footer>
  </body>
</html>