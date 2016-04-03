<!DOCTYPE html>
<html class="uk-height-1-1">
  <head>
    <title><?= $title ?> | pubkey.sh</title>
    <!-- Define page contents, character set, and viewport -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    <!-- Load jQuery -->
    <script type="text/javascript" src="/resources/jquery/dist/jquery.min.js"></script>

    <!-- Load password strength verification library -->
    <script type="text/javascript" src="/resources/zxcvbn/dist/zxcvbn.js"></script>

    <!-- Load library for username/password verification -->
    <script type="text/javascript" src="/js/fieldMutateState.js"></script>

    <!-- Load UIKit requirements -->
    <link rel="stylesheet" href="/resources/uikit/css/uikit.almost-flat.min.css" />
    <link rel="stylesheet" href="/resources/uikit/css/components/form-password.almost-flat.min.css" />
    <script type="text/javascript" src="/resources/uikit/js/uikit.min.js"></script>
    <script type="text/javascript" src="/resources/uikit/js/components/form-password.min.js"></script>

    <!-- Load UIKit CSS patches -->
    <link rel="stylesheet" href="/css/uikit.patches.css" />

    <!-- Set the favorite icon -->
    <link rel="icon" href="/img/favicon.gif" />
    <link rel="apple-touch-icon" href="/img/favicon.gif" />
  </head>
  <body class="uk-height-1-1">
<?= indent($contents, 2) ?>  </body>
</html>
