<!DOCTYPE html>
<html lang="en">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="author" content="INSPIRO" />
      <meta name="description" content="Themeforest Template Polo, html template">
      <link rel="icon" type="image/png" href="images/favicon.png">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Customer</title>
   </head>
   <style type="text/css">
      .otpForm {
      border-radius:3px;
      border:1px solid #e6e8eb;
      width: 60px;
      border-color: lightgray;
      }
   </style>
   <body>
      <div class="body-inner">
         <!--  Header Here... -->
         <?php require_once '../include/header.php'; ?>
         <div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="myModalLabel"
            aria-hidden="false">
            <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <img src="../img/inbox.png" alt="avatar" style="height: 260px;" class="rounded-circle img-responsive">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true" style="color: block">&times;</span>
                  </button>
                   <label style="font-weight: bold;margin-left:67px ">OTP Verification</label>
                  </div>
                     <div class="modal-body text-center mb-1 sendOTP">
                        <div class="md-form ml-0 mr-0">
                           <label data-error="wrong" data-success="right" for="form29" class="ml-0">Mobile Number <span style="color: red"> * </span></label>
                           <input type="text"  disabled="disabled" name="mobile" id="mobileNumber" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control form-control-sm validate ml-0 require" maxlength="10" >
                           <span style="font-size: 11px;color: red; font-weight: bold;" class="requireMobile"></span>
                        </div>
                        <div class="text-center mt-4">
                           <button class="btn btn-cyan mt-1" name="sendOTP" value="submit" onclick="sendOTP()" >Send OTP<i class="fas fa-sign-in ml-1"></i></button>
                        </div>
                     </div>

                     <div class="modal-body text-center mb-1 verifyOTP" style="display: none;" >
                        <div class="md-form ml-0 mr-0">
                           <label data-error="wrong" data-success="right" for="form29" class="ml-0">Please enter the 4-digit verification code</label>
                           <div class="form-group">
                              <input type="text" id="otp1"  class="otpForm" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                              <input type="text" id="otp2"  class="otpForm" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                              <input type="text" id="otp3"  class="otpForm" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                              <input type="text" id="otp4"  class="otpForm" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                               <span style="font-size: 11px;color: red; font-weight: bold;" class="requireOTP"></span>
                           </div>
                        </div>
                        <div class="text-center mt-4">
                           <button class="btn btn-cyan mt-1" id="verifyOTP" onclick='verifyOTP()' name="btnVerify">Verify OTP<i class="fas fa-sign-in ml-1"></i></button>
                        </div>
                        <div>
                           Didn't receive the code?<br />
                           <a href="#" onclick='sendOTP()'>Send code again</a><br />
                        </div>
                     </div>
               </div>
            </div>
         </div>
         <!-- Footer Here... -->
         <?php require_once '../include/footer.php'; ?>
      </div>
      <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
   </body>
</html>

<script type="text/javascript">
   $(function() {
      'use strict';
      var body = $('body');
      function goToNextInput(e) {
         var key = e.which,
         t = $(e.target),
         sib = t.next('input');
         if (key != 9 && (key < 48 || key > 57)) {
            e.preventDefault();
            return false;
         }
         if (key === 9) {
            return true;
         }
         if (!sib || !sib.length) {
            sib = body.find('input').eq(0);
         }
            sib.select().focus();
      }
         body.on('keyup', 'input', goToNextInput);
   });


   function sendOTP()
   {
      if($("#mobileNumber").val()==''){
      $(".requireMobile").text('Please enter the mobile number');
         return false;
      }
      $.ajax({
         type : 'POST',
         data : {'Mobile' : $("#mobileNumber").val(), 'key' : 'sendotp' },
         url: "curl.php", 
         dataType :'json',
         success: function(result){ 
            if(result.type=="success"){
               $('.verifyOTP').css('display','block');
               $('.sendOTP').css('display','none');
               return false;
            }else{
               alert("Error, Please try again later"); 
               //INSPIRO.elements.notification("Submited","Error, Please try again later.", "danger");
               return false;
            }
         }
      });
   }

     function verifyOTP()
   {
          if($("#otp1").val()=='' || $("#otp2").val()=='' || $("#otp3").val()=='' || $("#otp4").val()=='' ){
             $(".requireOTP").text('Please enter the valid OTP');
             return false;
          }
         var OTP = $("#otp1").val()+$("#otp2").val()+$("#otp3").val()+$("#otp4").val();
         var mobileNumber = $("#mobileNumber").val();
         $.ajax({
         type : 'POST',
         data : {'Mobile' : mobileNumber, "OTP" : OTP, 'key' : 'verifyotp' },
         url: "curl.php?do=toVerifyOTP", 
         dataType :'json',
         success: function(result){  
            if(result.type=="error"){
               $(".requireOTP").text('Please enter the valid OTP');
                return false;               
            }else if(result.type=="success"){
               alert('Successfully created');
               window.location.reload();
               return false;
            }
         }
      });

 }

</script>