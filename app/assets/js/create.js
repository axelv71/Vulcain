$(document).ready(function () {
  $(".modal").addClass("hidden");
  $("#loading-overlay").hide();

  $(".modal-button").click(function () {
    $($(this).data("target")).removeClass("hidden");
  });

  $(".modal-quit").click(function () {
    $(".modal").addClass("hidden");
  });

  $(".form").submit(function () {
    event.preventDefault();
    $("#loading-overlay").show();
    
    $.ajax({
      type: "POST",
      url: "project/post/",
      data: $(this).serialize(),
      dataType: "json",
    })
    .done(function (res) {
      $("#loading-overlay").hide();
      var url = "index.php";
      console.log(res);
      $(location).attr('href',url);
    })
    .fail(function (error) {
      $("#loading-overlay").hide();
      console.log(error);
      $(".error").text(error.responseJSON.error)
    }) 
  });
});
