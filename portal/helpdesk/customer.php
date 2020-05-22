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
   <body>
      <div class="body-inner">
         <!--  Header Here... -->
         <?php require_once '../include/header.php'; ?>
         <?php require_once '../include/master.php'; ?>
         <!-- Form Start Here..... -->
         <section id="page-content">
            <div class="container">
                <div class="heading-text heading-line text-center">
                  <h4>Customer</h4>
               </div>
               <div class="row justify-content-center">
                  <div class="content col-md-11">
                     <div class="card">
                        <div class="card-body">
                           <form  id="wizard1" class="wizard" enctype='application/json'>
                              <h3>Information</h3>
                              <div class="wizard-content">
                                 <div class="h5 mb-4">Please fill with your information details</div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="custgstin">GSTIN</label>
                                       <input type="text" class="form-control" maxlength="15" id="custgstin" name="gstin" >
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="GSTRegName">GST Registered Name</label>
                                       <input type="text" class="form-control" id="replace_gstin" value="Company" readonly="readonly" name="replace_gstin" >
                                    </div>
                                 </div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="customerName">Customer Name  <span style='color:red'>*</span></label>
                                       <div class="form-row">
                                          <div class="form-group col-md-4">
                                             <select class="form-control required" name="title" id="title">
                                                <option value=""></option>
                                                   <?php if(!empty($title)){ foreach ($title as $value) { ?>
                                                      <option value="<?php echo $value.'.'; ?>"><?php echo $value.'.'; ?></option>
                                                  <?php }}?>
                                             </select>
                                          </div>
                                          <div class="form-group col-md-8">
                                             <input type="text" class="form-control required" id="name" name="name" >
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="entity">Type <span  style='color:red'>*</span></label>
                                       <select class="form-control required" name="entity" id="entity">
                                          <option value=""></option>
                                          <?php if(!empty($type)){  foreach ($type as $value){ ?>
                                          <option value="<?php echo $value; ?> "><?php echo $value; ?></option>
                                          <?php }} ?>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="businessName">Business Name</label>
                                       <input type="text" class="form-control" id="business_name" name="business_name">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="display_name">Display Name</label>
                                       <input class="form-control" name="display_name"  id="display_name" type="text">
                                    </div>
                                 </div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="email">Email</label>
                                       <input class="form-control" name="email"  id="email"  type="email">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="mobile">Mobile Number <span style='color:red'>*</span></label>
                                       <input class="form-control required" name="mobile"  maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="mobile" type="text">
                                    </div>
                                 </div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="phoneNumer">Phone Number</label>
                                       <input class="form-control" name="phone" oninput="this.value=this.value.replace(/[^0-9]/g,'');"   id="phone"  type="text">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="fax">Fax</label>
                                       <input class="form-control" name="fax"  id="fax" type="text">
                                    </div>
                                 </div>
                              </div>

                              <h3>Address</h3>
                              <div class="wizard-content">
                                 <div class="h5 mb-4">Billing Address</div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="baddr1">Address Line1</label>
                                       <input type="text" class="form-control" name="baddr1" id="baddr1">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="baddr2">Address Line2</label>
                                       <input type="text" class="form-control" name="baddr2" id="baddr2">
                                    </div>
                                 </div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="bbranch">Branch</label>
                                       <input type="text" class="form-control" name="bbranch" id="bbranch" >
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="bgstin">GSTIN</label>
                                       <input type="text" class="form-control" name="bgstin" id="bgstin">
                                    </div>
                                 </div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="bcity">City</label>
                                       <input type="text" class="form-control" name="bcity" id="bcity" >
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="bpincode">Pincode</label>
                                       <input class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');"  id="bpincode"  name="bpincode">
                                    </div>
                                 </div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="bstate">State <span  style='color:red'>*</span></label>
                                       <select class="form-control required" name="bstate" id="bstate">
                                             <option value=""></option>
                                             <?php if(!empty($state)){ foreach ($state as $value) { ?>
                                             <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                          <?php }} ?>
                                       </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="bcountry">Country <span  style='color:red'>*</span></label>
                                       <select class="form-control required" name="bcountry" id="bcountry">
                                         <option value=""> </option>
                                         <?php if(!empty($countries)){ foreach ($countries as $value) { ?>
                                          <option value="<?php echo strtoupper($value); ?>"><?php echo strtoupper($value); ?></option>
                                        <?php }} ?> 
                                       </select>
                                    </div>
                                 </div>
                                 <div class="form-row">
                                    <div class="form-group col-md-4">
                                       <small class="form-text text-muted">Shipping address is same as billing address</small>
                                    </div>  
                                    <div class="form-group col-md-1">
                                       <input type="checkbox" name="same_address" id="same_address">
                                       <span>Yes</span>                                   
                                    </div> 
                                    <div class="form-group col-md-1">
                                       <input type="checkbox" name="nonsame_address" id="nonsame_address">
                                       <span>No</span>                                   
                                    </div>
                                 </div>
                                 <div class="shippingAddress" style="display: none;">
                                    <div class="h5 mb-4">Shipping Address</div>
                                        <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="saddr1">Address Line1</label>
                                       <input type="text" class="form-control" name="saddr1" id="saddr1">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="saddr2">Address Line2</label>
                                       <input type="text" class="form-control" name="saddr2" id="saddr2">
                                    </div>
                                 </div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="sbranch">Branch</label>
                                       <input type="text" class="form-control" name="sbranch" id="sbranch" >
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="sgstin">GSTIN</label>
                                       <input type="text" class="form-control" name="sgstin" id="sgstin">
                                    </div>
                                 </div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="scity">City</label>
                                       <input type="text" class="form-control" name="scity" id="scity" >
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="spincode">Pincode</label>
                                       <input class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');"  id="spincode"  name="spincode">
                                    </div>
                                 </div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="sstate">State</label>
                                       <select class="form-control" name="sstate" id="sstate">
                                             <option value=""></option>
                                             <?php if(!empty($state)){ foreach ($state as $value) { ?>
                                             <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                          <?php }} ?>
                                       </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="scountry">Country</label>
                                       <select class="form-control" name="scountry" id="scountry">
                                          <option value=""> </option>
                                         <?php if(!empty($countries)){ foreach ($countries as $value) { ?>
                                          <option value="<?php echo strtoupper($value); ?>"><?php echo strtoupper($value); ?></option>
                                        <?php }} ?> 
                                       </select>
                                    </div>
                                 </div>
                                 </div>
                              </div>
                              <h3>Tax</h3>
                              <div class="wizard-content">
                                 <div class="h5 mb-4">Tax Details</div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="pan">PAN</label>
                                       <input type="text" class="form-control" name="pan" id="pan" >
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="tan">TAN</label>
                                       <input type="text" class="form-control" name="tan" id="tan" >
                                    </div>
                                 </div>
                              </div>
                              <h3>Bank</h3>
                              <div class="wizard-content">
                                 <div class="h5 mb-4">Bank Details</div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="account_type">Type of account</label>
                                       <select class="form-control" name="account_type" id="account_type">
                                          <option value=""></option>
                                          <!-- <option value="1">Current Account</option> -->
                                          <option value="2">Savings Account</option>
                                          <!-- <option value="3">Overdraft Account</option> -->
                                       </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="bank_acc_name">A/C Holder Name</label>
                                       <input type="text" class="form-control" name="bank_acc_name" id="bank_acc_name">
                                    </div>
                                 </div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="bank_acc_no">A/C Number</label>
                                       <input type="text" class="form-control" name="bank_acc_no" id="bank_acc_no" >
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="bank_name">Bank Name</label>
                                       <select class="form-control" name="bank_name" id="bank_name">
                                          <option value=""></option>
                                          <?php if(!empty($banks)){  foreach ($banks as $value) { ?>
                                          <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                          <?php }} ?>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="branch_name">Branch Name</label>
                                       <input type="text" class="form-control" name="branch_name" id="branch_name" >
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="ifsc_code">IFSC Number</label>
                                       <input type="text" class="form-control" name="ifsc_code" id="ifsc_code">
                                    </div>
                                 </div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="bank_city">City</label>
                                       <input type="text" class="form-control" name="bank_city" id="bank_city" >
                                    </div>
                                 </div>
                              </div>
                        </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
      </div>
      </div>
      </div>
      </div>
      </section>
      <!-- Footer Here... -->
      <?php require_once 'otp.php'; ?>
      <?php require_once '../include/footer.php'; ?>
      </div> 
      <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
      <script> 

         $('input[name="nonsame_address"]').change(function () {
            if (this.checked) {
               $(".shippingAddress").css("display","block");
               $("#same_address"). prop("checked", false);
            }
         });
          
          $('input[name="same_address"]').change(function () {
            if (this.checked) {
               $(".shippingAddress").css("display","none");
               $("#nonsame_address"). prop("checked", false);

            }
         });

         function getFormData(){ 
            var formdata = $("#wizard1").serializeArray();
            var data = {};
               $(formdata ).each(function(index, obj){  
                  data[obj.name] = obj.value;
               });
                  $('#modalLoginAvatar').modal('toggle');
                  $("#mobileNumber").val($("#mobile").val());     
                 //Here is the output (data)
                 console.log(data);
         }
      </script>
   </body>
</html>