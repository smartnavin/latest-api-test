<!DOCTYPE html>
<html lang="en">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="author" content="INSPIRO" />
      <meta name="description" content="Themeforest Template Polo, html template">
      <link rel="icon" type="image/png" href="images/favicon.png">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Supplier</title>
   </head>
   <body>
      <div class="body-inner">
         <!-- Header Here.... -->
         <?php require_once '../include/header.php'; ?>
         <?php require_once '../include/master.php'; ?>
         <!-- Form Start Here..... -->
         <section id="page-content">
            <div class="container">
                <div class="heading-text heading-line text-center">
                  <h4>Supplier</h4>
               </div>
               <div class="row justify-content-center">
                  <div class="content col-md-11">
                     <div class="card">
                        <div class="card-body">
                           <form id="wizard1" class="wizard">
                              <h3>Information</h3>
                              <div class="wizard-content">
                                 <div class="h5 mb-4">Information</div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="supplier_gstin">GSTIN</label>
                                       <input type="text" class="form-control" name="supplier_gstin" id="supplier_gstin" >
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="username">GST Registered Name <span style="color: red">*</span></label>
                                       <input type="text" class="form-control required"  name="gst_registered_name" id="gst_registered_name" >
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
                                             <input type="text" class="form-control required" name="supplier_name" id="supplier_name" >
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="type">Type<span style="color: red">*</span></label>
                                       <select name="type" id="type" class="form-control required">
                                            <option value=""></option>
                                          <?php if(!empty($type)){  foreach ($type as $value){ ?>
                                          <option value="<?php echo $value; ?> "><?php echo $value; ?></option>
                                          <?php }} ?>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="business_name"> Business Name</label>
                                       <input type="text" class="form-control" name="business_name" id="business_name">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="display_name">Display Name</label>
                                       <input type="text" class="form-control" name="display_name" id="display_name" >
                                    </div>
                                 </div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="email">Email<span style="color: red">*</span></label>
                                       <input type="email" class="form-control required" name="email" id="email" >
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="mobile">Mobile Number <span style='color:red'>*</span></label>
                                       <input type="text" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control required" name="mobile" id="mobile" >
                                    </div>
                                 </div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="phone">Phone Number</label>
                                       <input type="text" class="form-control" name="phone" id="phone">
                                    </div>

                                    <div class="form-group col-md-6">
                                       <label for="reg_type"> Registration Type <span style="color: red">*</span></label>
                                       <select name="reg_type" id="reg_type" class="form-control required">
                                          <option value="">  </option>
                                          <option value="Composition">Composition</option>
                                          <option value="Consumer">Consumer</option>
                                          <option value="Regular" >Regular</option>
                                          <option value="Unregistered">Unregistered</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="fax">Fax</label>
                                       <input type="text" class="form-control" name="fax" id="fax" >
                                    </div>
                                 </div>
                              </div>
                              <h3>Billing Address</h3>
                              <div class="wizard-content">
                                 <div class="h5 mb-4">Billing Address</div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="address">Address Line1</label>
                                       <input type="text" class="form-control" name="address" id="address">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="address2">Address Line2</label>
                                       <input type="text" class="form-control" name="address2" id="address2" >
                                    </div>
                                 </div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="branch">Branch</label>
                                       <input type="text" class="form-control" name="branch" id="branch">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="gstin">GSTIN</label>
                                       <input type="text" class="form-control" name="gstin" id="gstin">
                                    </div>
                                 </div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="city">City</label>
                                       <input type="text" class="form-control" name="city" id="city">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label>Pincode:</label>
                                       <input type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');"  class="form-control" name="zip" id="zip" value="">
                                    </div>
                                 </div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="state">State <span style="color: red">*</span></label>
                                          <select name="state" id="state" class="form-control required">
                                              <option value=""></option>
                                             <?php if(!empty($state)){ foreach ($state as $value) { ?>
                                             <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                          <?php }} ?>
                                          </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="country">Country <span style="color: red">*</span></label>
                                       <select name="country" id="country" class="form-control required">
                                           <option value=""> </option>
                                         <?php if(!empty($countries)){ foreach ($countries as $value) { ?>
                                          <option value="<?php echo strtoupper($value); ?>"><?php echo strtoupper($value); ?></option>
                                        <?php }} ?> 
                                       </select>
                                    </div>
                                 </div>
                                 <label class="mt-checkbox">
                                 <input type="checkbox" id="same_address" checked=""> Shipping address is same as billing address
                                 <span></span>
                                 <input type="hidden" value="on" id="checkbox_addr" name="same_address">
                                 </label>
                              </div>
                              <h3>Tax</h3>
                              <div class="wizard-content">
                                 <div class="h5 mb-4">Tax Details</div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="pan">PAN</label>
                                       <input type="text" class="form-control" id="pan" name="pan">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="supplier_tan">TAN</label>
                                       <input type="text" class="form-control" name="supplier_tan" id="supplier_tan" >
                                    </div>
                                 </div>
                              </div>
                              <h3>Bank</h3>
                              <div class="wizard-content">
                                 <div class="h5 mb-4">Bank Details</div>
                                 <div class="form-row">

                                     <div class="form-group col-md-6">
                                       <label for="account">Types of Account</label>
                                       <select name="account" class="form-control">
                                          <option></option>
                                          <option value="">Please Select</option>
                                          <option value="2" >Savings Account</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="holder_name">A/C Holder Name</label>
                                       <input type="text" class="form-control" name="holder_name">
                                    </div>
                                 </div>
                                 <div class="form-row">

                                     <div class="form-group col-md-6">
                                       <label for="acc_no">Brank A/C No</label>
                                       <input type="text" class="form-control" name="acc_no" >
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="bank_name">Bank name</label>
                                       <select name="bank_name" class="form-control">
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
                                       <input type="text" class="form-control" name="branch_name">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label>IFSC Code:</label>
                                       <input type="text" class="form-control" name="zip" >
                                    </div>
                                 </div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="city">City</label>
                                       <input type="text" class="form-control" name="city">
                                    </div>
                                 </div>
                              </div>
                              <h3>Confirmation</h3>
                              <div class="wizard-content">
                                 <div class="h5 mb-4">Confimration</div>
                                 <p>Customize your experience by confirming your personalization settings and the
                                    data
                                    stored with your account. You can always learn more about these options,
                                    adjust
                                    them, and review your activity in your Account
                                 </p>
                                 <p>These settings apply wherever you are signed in to your new Account.</p>
                                 <div class="form-group mb-1 mt-5">
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" name="reminders" id="reminders1" class="custom-control-input required">
                                       <label class="custom-control-label" for="reminders1">Send me occasional
                                       reminders
                                       about these settings</a></label>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" name="terms_conditions" id="terms_conditions1" class="custom-control-input required">
                                       <label class="custom-control-label" for="terms_conditions1">By checking
                                       this
                                       option, you agree to acceot with the <a href="#">Terms and
                                       Conditions</a>.</label>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Form End Here... -->
         <!-- Footer Here... -->
         <?php require_once 'otp.php'; ?>
         <?php require_once '../include/footer.php'; ?>
      </div>
      <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
      <script>
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