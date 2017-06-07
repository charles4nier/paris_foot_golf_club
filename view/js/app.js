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



  $('.editButton').click(function() {
    let id = ($(this).attr("data-id"));
    $('#idArticle').val(id);
  });

});
