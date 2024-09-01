<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Yuji+Boku&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=New+Amsterdam&display=swap" rel="stylesheet">
  <title>
    <?php if ( is_home() ) :?>
    <?php bloginfo('name'); ?>
    <?php else : ?>
    <?php wp_title(''); ?> | <?php bloginfo('name'); ?>
    <?php endif; ?>
  </title>

  <?php wp_head(); ?>
</head>

<body>
  <header>

    <nav class="navbar navbar-expand-md bg-nav" data-bs-theme="dark">
      <div class="container-xl">
        <a class="navbar-brand nav-text" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <h1><?php bloginfo('name'); ?></h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
          aria-controls="navbar" aria-expanded="false" aria-label="ナビゲーションの切替">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav-ul">

            <li class="nav-item">
              <a class="nav-link nav-textlink" href="<?php echo esc_url( home_url( '/' ) ); ?>#news">お知らせ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-textlink" href="<?php echo esc_url( home_url( '/' ) ); ?>#kyoukai">協会について</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-textlink" href="<?php echo esc_url( home_url( '/' ) ); ?>#active">活動内容</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-textlink" href="<?php echo esc_url( home_url( '/' ) ); ?>#ivent">ご案内</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
  </header>