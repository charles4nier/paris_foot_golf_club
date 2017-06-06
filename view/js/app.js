$(function () {
  


  let linkScrollButton = $(".scrollSpy");

  linkScrollButton.click(function(e) {
    e.preventDefault();
    $("html, body").animate(
      {
        scrollTop: $(this.hash).offset().top - 150
      },
      750
    );
  });



  $('.test').click(function() {
    alert($(this).attr("data-id"));
  });

});
