<div class="uk-vertical-align uk-text-center uk-height-1-1">
  <div class="uk-vertical-align-middle" style="width: 300px;">
    <a href="/"><img class="uk-margin-bottom" src="/img/logo.svg" alt /></a>
<?= indent($error, 2) ?>    <form class="uk-panel uk-panel-box uk-form" method="POST">
<?= indent($message, 3) ?>      <div class="uk-form-row">
        <input autocomplete="off" class="uk-form-large uk-width-1-1" name="username" placeholder="Username" style="font-family: Courier;" type="text" />
      </div>
      <div class="uk-form-row">
        <input autocomplete="off" class="uk-form-large uk-width-1-1" name="password" placeholder="Password" style="font-family: Courier;" type="password" />
      </div>
      <div class="uk-form-row">
        <button class="uk-width-1-1 uk-button uk-button-primary uk-button-large">Login</button>
      </div>
      <div class="uk-form-row uk-text-small">Lost Password?</div>
    </form>
  </div>
</div>
