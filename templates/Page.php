<!DOCTYPE html>
<html class="uk-height-1-1">
  <head>
    <title><?= $title ?> | pubkey.sh</title>
    <!-- Define page contents and character set -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Load jQuery -->
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <!-- Load UIKit requirements -->
    <link rel="stylesheet" href="/uikit/css/uikit.almost-flat.min.css" />
    <script type="text/javascript" src="/uikit/js/uikit.min.js"></script>
  </head>
  <body class="uk-height-1-1">
    <?php if ($shownav == true) { ?><nav class="uk-navbar uk-navbar-attached" style="padding-top: 15px; padding-bottom: 15px;">
      <div class="uk-container uk-container-center">
        <div class="uk-hidden-small uk-navbar-brand" href="/">
          <img height="40" width="210" src="/img/logo.svg" alt />
        </div>
        <div class="uk-visible-small uk-navbar-brand uk-navbar-center" href="/">
          <img height="40" width="210" src="/img/logo.svg" alt />
        </div>
        <ul class="uk-align-right uk-hidden-small uk-margin-remove uk-navbar-nav">
          <li><a href="/login">Login</a></li>
        </ul>
      </div>
    </nav><?php } ?>
<?= $contents ?>
  </body>
</html>
