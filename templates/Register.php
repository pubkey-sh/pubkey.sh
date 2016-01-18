<div class="uk-vertical-align uk-text-center uk-height-1-1">
  <div class="uk-vertical-align-middle" style="width: 300px;">
    <a href="/"><img class="uk-margin-bottom" src="/img/logo.svg" alt /></a>
    <form class="uk-panel uk-panel-box uk-form" method="POST">
      <?php if (!is_string($error) || strlen(trim($error)) == 0) $error = "This form will display your password on submission."; ?>
      <?php if (is_string($error) && strlen(trim($error)) > 0) { ?><div class="uk-alert uk-alert-danger uk-text-left" data-uk-alert>
        <a class="uk-alert-close uk-close" href></a>
        <p><?= htmlspecialchars(trim($error), ENT_HTML401 | ENT_QUOTES) ?></p>
      </div><?php } ?>
      <div class="uk-form-row">
        <input autocomplete="off" class="uk-form-large uk-width-1-1" name="username" placeholder="Username" style="font-family: Courier;" type="text" />
      </div>
      <div class="uk-form-row">
        <div class="uk-form-password uk-width-1-1">
          <input autocomplete="off" class="uk-form-large uk-width-1-1" name="password" placeholder="Password" style="font-family: Courier;" type="password" />
          <a href class="uk-form-password-toggle" data-uk-form-password>Show</a>
        </div>
      </div>
      <div class="uk-form-row">
        <button class="uk-width-1-1 uk-button uk-button-primary uk-button-large">Register</button>
      </div>
    </form>
  </div>
</div>
