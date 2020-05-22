<!DOCTYPE html>
<html lang="en">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="author" content="INSPIRO" />
      <meta name="description" content="Themeforest Template Polo, html template">
      <link rel="icon" type="image/png" href="images/favicon.png">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Ticketing</title>
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
                  <h4>Ticketing</h4>
               </div>
               <div class="row justify-content-center">
                  <div class="content col-md-11">
                     <div class="card">
                        <div class="card-body">
                           <form  id="wizard1" class="wizard" enctype='application/json'>                             
                              <h3>Ticket</h3>
                              <div class="wizard-content">
                                 <div class="h5 mb-4">Ticket Details</div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="ticket_type">Type <span style="color: red">*</span> </label>
                                       <select class="form-control required" name="ticket_type" id="ticket_type">
                                          <option value=""></option>
                                          <option value="Customer">Customer</option>
                                          <option value="Employee">Employee</option>
                                          <option value="Supplier">Supplier</option>
                                          <option value="purchaseinvoice">purchaseinvoice</option>
                                          <option value="supplierbill">supplierbill</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="subject">Subject <span style="color: red">*</span> </label>
                                       <input type="text" class="form-control required" name="subject" id="subject">
                                    </div>
                                 </div>                                 
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="priority">Priority</label>
                                       <select class="form-control" name="priority" id="priority">
                                          <option value=""></option>
                                          <option value="Low">Low</option>
                                          <option value="Medium">Medium</option>
                                          <option value="High">High</option>
                                          <option value="Urgent">Urgent</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                    <label for="group">Group</label>
                                       <select class="form-control" name="group" id="group">
                                          <option value=""></option>
                                          <option value="IT">IT</option>
                                          <option value="Sales">Sales</option>
                                          <option value="Network">Network</option>
                                          <option value="Others">Others</option>
                                       </select>
                                    </div>
                                 </div>

                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="mobile">Mobile <span style="color: red">*</span> </label>
                                          <input type="text" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control required" name="mobile" id="mobile">
                                    </div>   
                                    <div class="form-group col-md-6">
                                       <label for="email">Email <span style="color: red">*</span> </label>
                                          <input type="email" class="form-control required" name="email" id="email">
                                    </div>
                                 </div>    
                                 <div class="form-row">
                                    <div class="form-group col-md-12">
                                       <label for="description">Description</label>
                                       <textarea  class="form-control" rows="3" name="description" id="Description" ></textarea>
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
      <?php  require_once 'otp.php'; ?>
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