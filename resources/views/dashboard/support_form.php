<!--======== START MODAL FOR CONTACT US MODAL  ========================-->
<div class="modal fade modalMainBackground" id="support" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-header" style="border: none;">
    <h1 class="applicationTitle" >Quick Support Form</h1>
    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true" class="topCloseBtn">×</span>
    </button>
  </div>
  <div class="changeDialog card shadow" role="document" style="border: none;">
    <div class="">
      <div class="modal-header">
        <h3 class="modal-title">Fill the required fields</h3>
        <br><br>
      </div>
      <div class="float-shapes"></div>
      <p class="alert alert-info shadow infoMSg backendFeedbackinfo reset"></p>
      <p class="alert alert-danger shadow ErrorMSg backendFeedbackinfo reset" style="display: none;"></p>
      <div class="modal-body formContainer">
        <form action="#" method="post" class="contact_form">
          <input type="hidden" name="crfToken" value="<?php echo $crfToken;?>">
          <div class=" d-flex  inputDiv">
            <input type="text" class="shadow form-control" placeholder="Fullname" name="fullname">
          </div>
          <div class=" d-flex  inputDiv">
            <input type="text" class="shadow form-control check_phone" placeholder="Phone number" name="phoneNumber">
          </div>
          <div class=" d-flex  inputDiv">
            <input type="text" class="shadow form-control" placeholder="Email address" name="email">
          </div>
          <div class=" d-flex  inputDiv">
            <select class="shadow form-control">
              <option>First Option</option>
              <option>First Option</option>
              <option>First Option</option>
              <option>First Option</option>
              <option>First Option</option>
              <option>First Option</option>
            </select>
          </div>
          <div class="d-flex inputDiv">
            <textarea name="message"  class="form-control" placeholder="Write your message."  style="max-height: 200px; min-height: 200px;"></textarea>
          </div>
          <div class='SubmitbuttonDiv shadow inputDiv'>
            <input type="hidden" name="submit_contact">
            <input type="submit" value="Send Message" name="submit_contact"  class="btnSubmit closeBtn"/>
          </div>
          <div class="SubmitLoader contactLoader" style="margin-top:-38px; float:right; margin-right:10px; display: none;">
          </div>
        </form>
      </div>
      <p class="alert alert-info shadow infoMSg backendFeedbackinfo reset"></p>
      <p class="alert alert-danger shadow ErrorMSg backendFeedbackinfo reset" style="display: none;"></p>
      <div class="modal-footer">
        <br>
        <span class="modal-dialog"></span>
        <div class="closeModalButtonDown">
          <input type="button" name="" value="Cancel" class="btnDownClose closeBtn formReset" data-dismiss="modal" aria-label="Close"/>
        </div>
      </div>
    </div>
  </div>
</div>



<script type="text/javascript">
$(document).ready(function(){
$(".contact_form").on("submit", (function(e){
e.preventDefault();
$(".sendHide").hide();
$(".contactLoader").show();
$(".sendingMsg").show();

$.ajaxSetup({
  headers:{
    "X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")
  }
});

$.ajax({
url:'<?php echo APP_URI?>/contact/create',
method:'POST',
data:new FormData(this),
contentType:false,
processData:false,
success:function(data){
$(".sendHide").show();
$(".contactLoader").hide();
$(".sendingMsg").hide();
if(data == "Your message has been sent Successfully"){
  $('.infoMSg').show();
  $('.ErrorMSg').hide();
  $('.infoMSg').html(data);
$(".contact_form")[0].reset();
}
else{
  $('.infoMSg').hide();
  $('.ErrorMSg').show();
  $('.ErrorMSg').html(data);
}
}
})
}))
})


</script>

<!--=============== END MODAL FOR CONTACT US MODAL =================-->
