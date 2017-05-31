$(function () {
  let linkScrollButton = $(".scrollButton");

  linkScrollButton.click(function(e) {
    e.preventDefault();
    $("html, body").animate(
      {
        scrollTop: $(this.hash).offset().top - 150
      },
      750
    );
  });
});
