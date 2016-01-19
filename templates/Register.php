<div class="uk-vertical-align uk-text-center uk-height-1-1">
  <div class="uk-vertical-align-middle" style="width: 300px;">
    <a href="/"><img class="uk-margin-bottom" src="/img/logo.svg" alt /></a>
<?= indent($error, 2) ?>    <form class="uk-panel uk-panel-box uk-form" method="POST">
<?= indent($message, 3) ?>      <div class="uk-form-row">
        <div class="uk-form-icon uk-width-1-1">
          <i class="uk-icon-circle-thin"></i>
          <input autocomplete="off" class="uk-form-large uk-width-1-1" name="username" placeholder="Username" style="font-family: Courier;" type="text" unverified />
        </div>
      </div>
      <div class="uk-form-row">
        <div class="uk-form-icon uk-width-1-1">
          <i class="uk-icon-circle-thin"></i>
          <input autocomplete="off" class="uk-form-large uk-width-1-1" name="mail" placeholder="E-Mail" style="font-family: Courier;" type="text" unverified />
        </div>
      </div>
      <div class="uk-form-row">
        <div class="uk-form-icon uk-form-password uk-width-1-1">
          <i class="uk-icon-circle-thin"></i>
          <input autocomplete="off" class="uk-form-large uk-width-1-1" name="password" placeholder="Password" style="font-family: Courier;" type="password" unverified />
          <a href class="uk-form-password-toggle" data-uk-form-password>Show</a>
        </div>
      </div>
      <div class="uk-form-row">
        <!-- Disable button by default until password strength is verified -->
        <button class="uk-width-1-1 uk-button uk-button-primary uk-button-large" disabled>Register</button>
      </div>
    </form>
  </div>
</div>
<!-- Verify the availability of the username -->
<script type="text/javascript" src="/js/username.js"></script>
<!-- Verify the availability of the email address -->
<script type="text/javascript" src="/js/mail.js"></script>
<!-- Ensure that this form's password is verified before submission -->
<script type="text/javascript" src="/js/password.js"></script>
<script type="text/javascript">
  $(function() {
    verifyUsername('username');
    verifyMail('mail');
    verifyPassword('password');
  });
</script>
