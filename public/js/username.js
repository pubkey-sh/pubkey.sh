function verifyUsername(selector) {
  // Add the unverified property to the password field
  $(selector).attr('unverified', true);
  // Register an event handler on input to verify the username is available
  $(selector).on('input', function() {
    // Select the icon for the form field
    var icon   = $(this).siblings('i');
    // Remove the icon's classes
    icon.removeClass(function(index, css) {
      return (css.match(/(^|\s)uk-icon-\S+/g) || []).join(' ');
    });
    // Fetch the query result from the API
    $.getJSON('/user/available', $(this).val(), function(data) {
      console.log(JSON.stringify(data));
    });
  });
}
