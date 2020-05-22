<!DOCTYPE html>
<html lang="en">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="author" content="INSPIRO" />
      <meta name="description" content="Themeforest Template Polo, html template">
      <link rel="icon" type="image/png" href="images/favicon.png">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Employee</title>
   </head>
   <body>
      <div class="body-inner">
         <!-- Header Here... -->
         <?php require_once '../include/header.php'; ?>
         <?php require_once '../include/master.php'; ?>
         <!-- Form Start Here..... -->
         <section id="page-content">
            <div class="container">
               <div class="heading-text heading-line text-center">
                  <h4>Employee</h4>
               </div>
               <div class="row justify-content-center">
                  <div class="content col-md-11">
                     <div class="card">
                        <div class="card-body">
                           <form  id="wizard1" class="wizard" enctype='application/json'>
                              <h3>Information</h3>
                              <div class="wizard-content">
                                 <div class="h5 mb-4">Please fill with your personal details</div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="EmployeeName">Employee Name <span  style='color:red'>*</span> </label>
                                       <div class="form-row">
                                          <div class="form-group col-md-3">
                                             <select class="form-control required" name="title" id="title">
                                               <option value=""></option>
                                                   <?php if(!empty($title)){ foreach ($title as $value) { ?>
                                                      <option value="<?php echo $value.'.'; ?>"><?php echo $value.'.'; ?></option>
                                                  <?php }}?>
                                             </select>
                                          </div>
                                          <div class="form-group col-md-9">
                                             <input type="text" class="form-control required" id="name" name="name">
                                          </div>
                                       </div>
                                    </div>
                                     <div class="form-group col-md-6">
                                       <label for="MobileNumber">Mobile Number <span style='color:red'>*</span></label>
                                       <input class="form-control required" name="mobile" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');"  id="mobile" type="text">
                                    </div>
                                 </div>
                                 <div class="form-row">
                                   
                                    <div class="form-group col-md-6">
                                       <label for="Email">Email <span style='color:red'>*</span></label>
                                       <input class="form-control required" name="email" id="email" type="email">
                                    </div>
                                     <div class="form-group col-md-6">
                                       <label for="Pan">PAN</label>
                                       <input class="form-control" name="pan_number" id="pan_number" type="text">
                                    </div>
                                 </div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="Aadhaar">Aadhaar</label>
                                       <input class="form-control" name="aadhaar_number"  id="aadhaar_number"  type="text">
                                    </div>
                                 </div>
                              </div>
                              <h3>Address</h3>
                              <div class="wizard-content">
                                 <div class="h5 mb-4">Please fill with your address info</div>
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
                                       <label for="bcity">City</label>
                                       <input type="text" class="form-control" name="bcity" id="bcity">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="Pincode">Pincode</label>
                                       <input class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');"  id="bpincode"  name="bpincode">
                                    </div>
                                 </div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="bstate">State</label>
                                       <select class="form-control" name="bstate" id="bstate">
                                            <option value=""></option>
                                             <?php if(!empty($state)){ foreach ($state as $value) { ?>
                                             <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                          <?php }} ?>
                                     </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="bcountry">Country</label>
                                       <select class="form-control" name="bcountry" id="bcountry">
                                            <option value=""> </option>
                                         <?php if(!empty($countries)){ foreach ($countries as $value) { ?>
                                          <option value="<?php echo strtoupper($value); ?>"><?php echo strtoupper($value); ?></option>
                                        <?php }} ?> 
                                     </select>
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
                                          <option value="1">Current Account</option>
                                          <option value="2">Savings Account</option>
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
                                       <input type="text" class="form-control" name="bank_acc_no" id="bank_acc_no">
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
                                       <input type="text" class="form-control" name="bank_city" id="bank_city">
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