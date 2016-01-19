function verifyUsername(selector) {
  // Add the unverified property to the password field
  $("input[name=" + selector + "]").attr('unverified', true);
  // Register an event handler on input to verify the username is available
  $("input[name=" + selector + "]").change(function() {
    // Select the icon for the form field
    var field  = $(this);
    var icon   = $(this).siblings('i');
    // Remove the icon's classes
    icon.removeClass(function(index, css) {
      return (css.match(/(^|\s)uk-icon-\S+/g) || []).join(' ');
    });
    // Fetch the query result from the API
    field.addClass('uk-form-refresh');
    $.post('/user/available', {"username": $(this).val()}, function(data) {
      // Remove the icon's classes
      icon.removeClass(function(index, css) {
        return (css.match(/(^|\s)uk-icon-\S+/g) || []).join(' ');
      });
      available = $.parseJSON(data)["available"];
      if (available) {
        // Change the state of the username field to show success
        field.removeAttr('unverified');
        field.removeClass('uk-form-danger');
        field.addClass('uk-form-success');
        icon.addClass('uk-icon-check');
        // Enable form submission if appropriate
        if (form.find('input[unverified]').length == 0)
          form.find('button').prop('disabled', false);
      }
      else {
        // Change the state of the password field to show failure
        field.attr('unverified', true);
        field.removeClass('uk-form-success');
        field.addClass('uk-form-danger');
        icon.addClass('uk-icon-close');
        // Disable form submission
        form.find('button').prop('disabled', true);
      }
    });
  });
}
