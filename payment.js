$(function() {
  $("form.require-validation").bind("submit", function(e) {
    var $form = $(e.target).closest("form"),
      inputSelector = [
        "input[type=email]",
        "input[type=password]",
        "input[type=text]",
        "input[type=file]",
        "textarea"
      ].join(", "),
      $inputs = $form.find(".required").find(inputSelector),
      $errorMessage = $form.find("div.error"),
      valid = true;

    $errorMessage.addClass("hide");
    $(".has-error").removeClass("has-error");
    $inputs.each(function(i, el) {
      var $input = $(el);
      if ($input.val() === "") {
        $input.parent().addClass("has-error");
        $errorMessage.removeClass("hide");
        e.preventDefault(); // cancel on first error
      }
    });
  });
});
