$(".delete-button").click(function() {
  var r = confirm("Are you sure you want to delete this project ?");
  if (r == true) {
    $.ajax({
      type: "POST",
      url: "project/post/",
      data:{
          type: "delete",
          target_id: $(this).data("target-id"),
          target_path: $(this).data("target-path")
      },
      dataType: "json",
    })
    .done(function (res) {
      location.reload(true);
    })
    .fail(function (error) {
      alert(error.responseJSON.error);
    }) 
  } 
});