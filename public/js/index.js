
$(document).ready(function(){
  $('.message').delay(1000).show(0);
  $('.message').delay(5000).hide(0);
  $(".el-message__closeBtn").click(function(){
    $('.message').delay('slow').hide();
  });
});
