<!DOCTYPE html>
<html lang="en">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="description" content="Themeforest Template Polo, html template">
      <link rel="icon" type="image/png" href="images/favicon.png">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Supplier Invoice</title>
   </head>
   <body>
      <div class="body-inner">
         <?php require_once '../include/header.php'; ?>
         <section id="page-content">
            <div class="container">
               <div class="heading-text heading-line text-center">
                  <h4>Supplier Invoice</h4>
               </div>
               <div class="row justify-content-center">
                  <div class="content col-md-11">
                     <div class="card">
                        <div class="card-body">
                           <form id="wizard1" class="wizard ">
                              <h3>Supplier Invoice</h3>
                              <div class="wizard-content" >
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="sup_name">Supplier Name <span style='color:red'>*</span></label>
                                       <input type="text" class="form-control" name="sup_name" id="sup_name"  required>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="voucher_date">Voucher Date <span style='color:red'>*</span></label>
                                       <input type="date" class="form-control" name="voucher_date" id="voucher_date"  required>
                                    </div>
                                 </div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="email">Email</label>
                                       <input type="email" class="form-control" name="email" id="email" >
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="mobile">Mobile <span style='color:red'>*</span></label>
                                       <input type="text" class="form-control required"  maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="mobile" id="mobile" >
                                    </div>
                                 </div>
                                 
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="tot_amt">Total Payment Amt</label>
                                       <input type="text" class="form-control" name="tot_amt" id="tot_amt"  >
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="form-row">
                                    <div class="form-group col-md-12">
                                       <label for="supp_notes">Notes</label>
                                       <input type="text" class="form-control" name="supp_notes" id="supp_notes"  >
                                    </div>
                                 </div>
                                 
                                 
                              </div>
                              <h3>Your Bank Details(Optional)</h3>
                              <div class="wizard-content" >
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="holder_name">A/C Holder Name</label>
                                       <input type="text" class="form-control" name="holder_name" value="" >
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="acc_no">Brank A/C No</label>
                                       <input type="text" class="form-control" name="acc_no" value="" >
                                    </div>
                                 </div>
                                 <div class="form-row">
								 <div class="form-group col-md-6">
                                       <label for="account">Types of Account</label>
                                       <select name="account" class="form-control">
                                          <option>-Select Account Type- </option>
                                          <option value="">Please Select</option>
                                          <option value="1">Current Account</option>
                                          <option value="2" selected="">Savings Account</option>
                                          <option value="3">Overdraft Account</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="bank_name">Bank name</label>
                                       <select name="bank_name" class="form-control">
                                          <option value="">- Select Bank -</option>
                                          <option value="ABU DHABI COMMERCIAL BANK">ABU DHABI COMMERCIAL BANK</option>
                                          <option value="ABHYUDAYA COOPERATIVE BANK LIMITED">ABHYUDAYA COOPERATIVE BANK LIMITED</option>
                                          <option value="ALLAHABAD BANK">ALLAHABAD BANK</option>
                                          <option value="ANDHRA BANK">ANDHRA BANK</option>
                                          <option value="AXIS BANK">AXIS BANK</option>
                                          <option value="BANK OF AMERICA">BANK OF AMERICA</option>
                                          <option value="BANK OF BAHARAIN AND KUWAIT BSC">BANK OF BAHARAIN AND KUWAIT BSC</option>
                                          <option value="BANK OF BARODA">BANK OF BARODA</option>
                                          <option value="BANK OF CEYLON">BANK OF CEYLON</option>
                                          <option value="BANK OF INDIA">BANK OF INDIA</option>
                                          <option value="BANK OF MAHARASHTRA">BANK OF MAHARASHTRA</option>
                                          <option value="BANK OF TOKYO MITSUBISHI LIMITED">BANK OF TOKYO MITSUBISHI LIMITED</option>
                                          <option value="BARCLAYS BANK">BARCLAYS BANK</option>
                                          <option value="BASSEIN CATHOLIC COOPERATIVE BANK LIMITED">BASSEIN CATHOLIC COOPERATIVE BANK LIMITED</option>
                                          <option value="B N P PARIBAS">B N P PARIBAS</option>
                                          <option value="CANARA BANK">CANARA BANK</option>
                                          <option value="CATHOLIC SYRIAN BANK LIMITED">CATHOLIC SYRIAN BANK LIMITED</option>
                                          <option value="CENTRAL BANK OF INDIA">CENTRAL BANK OF INDIA</option>
                                          <option value="CHINATRUST COMMERCIAL BANK LIMITED">CHINATRUST COMMERCIAL BANK LIMITED</option>
                                          <option value="CITI BANK">CITI BANK</option>
                                          <option value="CITIZEN CREDIT COOPERATIVE BANK LIMITED">CITIZEN CREDIT COOPERATIVE BANK LIMITED</option>
                                          <option value="CITY UNION BANK LIMITED">CITY UNION BANK LIMITED</option>
                                          <option value="CORPORATION BANK">CORPORATION BANK</option>
                                          <option value="CREDIT AGRICOLE CORPORATE AND INVESTMENT BANK CALYON BANK">CREDIT AGRICOLE CORPORATE AND INVESTMENT BANK CALYON BANK</option>
                                          <option value="DEVELOPMENT BANK OF SINGAPORE">DEVELOPMENT BANK OF SINGAPORE</option>
                                          <option value="DENA BANK">DENA BANK</option>
                                          <option value="DEUSTCHE BANK">DEUSTCHE BANK</option>
                                          <option value="DCB BANK LIMITED">DCB BANK LIMITED</option>
                                          <option value="DHANALAKSHMI BANK">DHANALAKSHMI BANK</option>
                                          <option value="DEPOSIT INSURANCE AND CREDIT GUARANTEE CORPORATION">DEPOSIT INSURANCE AND CREDIT GUARANTEE CORPORATION</option>
                                          <option value="DOMBIVLI NAGARI SAHAKARI BANK LIMITED">DOMBIVLI NAGARI SAHAKARI BANK LIMITED</option>
                                          <option value="FIRSTRAND BANK LIMITED">FIRSTRAND BANK LIMITED</option>
                                          <option value="HDFC BANK">HDFC BANK</option>
                                          <option value="HSBC BANK">HSBC BANK</option>
                                          <option value="ICICI BANK LIMITED">ICICI BANK LIMITED</option>
                                          <option value="IDBI BANK">IDBI BANK</option>
                                          <option value="INDIAN BANK">INDIAN BANK</option>
                                          <option value="INDIAN OVERSEAS BANK">INDIAN OVERSEAS BANK</option>
                                          <option value="INDUSIND BANK">INDUSIND BANK</option>
                                          <option value="ING VYSYA BANK">ING VYSYA BANK</option>
                                          <option value="JANAKALYAN SAHAKARI BANK LIMITED">JANAKALYAN SAHAKARI BANK LIMITED</option>
                                          <option value="JANASEVA SAHAKARI BANK LIMITED">JANASEVA SAHAKARI BANK LIMITED</option>
                                          <option value="KAPOL COOPERATIVE BANK LIMITED">KAPOL COOPERATIVE BANK LIMITED</option>
                                          <option value="KARNATAKA BANK LIMITED">KARNATAKA BANK LIMITED</option>
                                          <option value="KARUR VYSYA BANK">KARUR VYSYA BANK</option>
                                          <option value="KOTAK MAHINDRA BANK LIMITED">KOTAK MAHINDRA BANK LIMITED</option>
                                          <option value="MAHANAGAR COOPERATIVE BANK">MAHANAGAR COOPERATIVE BANK</option>
                                          <option value="MAHARASHTRA STATE COOPERATIVE BANK">MAHARASHTRA STATE COOPERATIVE BANK</option>
                                          <option value="MASHREQBANK PSC">MASHREQBANK PSC</option>
                                          <option value="MIZUHO CORPORATE BANK LIMITED">MIZUHO CORPORATE BANK LIMITED</option>
                                          <option value="NEW INDIA COOPERATIVE BANK LIMITED">NEW INDIA COOPERATIVE BANK LIMITED</option>
                                          <option value="NKGSB COOPERATIVE BANK LIMITED">NKGSB COOPERATIVE BANK LIMITED</option>
                                          <option value="NUTAN NAGARIK SAHAKARI BANK LIMITED">NUTAN NAGARIK SAHAKARI BANK LIMITED</option>
                                          <option value="OMAN INTERNATIONAL BANK SAOG">OMAN INTERNATIONAL BANK SAOG</option>
                                          <option value="ORIENTAL BANK OF COMMERCE">ORIENTAL BANK OF COMMERCE</option>
                                          <option value="G P PARSIK BANK">G P PARSIK BANK</option>
                                          <option value="PUNJAB AND MAHARSHTRA COOPERATIVE BANK">PUNJAB AND MAHARSHTRA COOPERATIVE BANK</option>
                                          <option value="PUNJAB AND SIND BANK">PUNJAB AND SIND BANK</option>
                                          <option value="PUNJAB NATIONAL BANK">PUNJAB NATIONAL BANK</option>
                                          <option value="RAJKOT NAGRIK SAHAKARI BANK LIMITED">RAJKOT NAGRIK SAHAKARI BANK LIMITED</option>
                                          <option value="RESERVE BANK OF INDIA">RESERVE BANK OF INDIA</option>
                                          <option value="SHINHAN BANK">SHINHAN BANK</option>
                                          <option value="SOCIETE GENERALE">SOCIETE GENERALE</option>
                                          <option value="SOUTH INDIAN BANK">SOUTH INDIAN BANK</option>
                                          <option value="STANDARD CHARTERED BANK">STANDARD CHARTERED BANK</option>
                                          <option value="STATE BANK OF BIKANER AND JAIPUR">STATE BANK OF BIKANER AND JAIPUR</option>
                                          <option value="STATE BANK OF HYDERABAD">STATE BANK OF HYDERABAD</option>
                                          <option value="STATE BANK OF INDIA">STATE BANK OF INDIA</option>
                                          <option value="STATE BANK OF MAURITIUS LIMITED">STATE BANK OF MAURITIUS LIMITED</option>
                                          <option value="STATE BANK OF MYSORE">STATE BANK OF MYSORE</option>
                                          <option value="STATE BANK OF PATIALA">STATE BANK OF PATIALA</option>
                                          <option value="STATE BANK OF TRAVANCORE">STATE BANK OF TRAVANCORE</option>
                                          <option value="SYNDICATE BANK">SYNDICATE BANK</option>
                                          <option value="TAMILNAD MERCANTILE BANK LIMITED">TAMILNAD MERCANTILE BANK LIMITED</option>
                                          <option value="THE BANK OF NOVA SCOTIA">THE BANK OF NOVA SCOTIA</option>
                                          <option value="AHMEDABAD MERCANTILE COOPERATIVE BANK">AHMEDABAD MERCANTILE COOPERATIVE BANK</option>
                                          <option value="BHARAT COOPERATIVE BANK MUMBAI LIMITED">BHARAT COOPERATIVE BANK MUMBAI LIMITED</option>
                                          <option value="THE COSMOS CO OPERATIVE BANK LIMITED">THE COSMOS CO OPERATIVE BANK LIMITED</option>
                                          <option value="FEDERAL BANK">FEDERAL BANK</option>
                                          <option value="THE GREATER BOMBAY COOPERATIVE BANK LIMITED">THE GREATER BOMBAY COOPERATIVE BANK LIMITED</option>
                                          <option value="JAMMU AND KASHMIR BANK LIMITED">JAMMU AND KASHMIR BANK LIMITED</option>
                                          <option value="KALUPUR COMMERCIAL COOPERATIVE BANK">KALUPUR COMMERCIAL COOPERATIVE BANK</option>
                                          <option value="THE KARANATAKA STATE COOPERATIVE APEX BANK LIMITED">THE KARANATAKA STATE COOPERATIVE APEX BANK LIMITED</option>
                                          <option value="KALYAN JANATA SAHAKARI BANK">KALYAN JANATA SAHAKARI BANK</option>
                                          <option value="LAXMI VILAS BANK">LAXMI VILAS BANK</option>
                                          <option value="THE MEHSANA URBAN COOPERATIVE BANK">THE MEHSANA URBAN COOPERATIVE BANK</option>
                                          <option value="THE NAINITAL BANK LIMITED">THE NAINITAL BANK LIMITED</option>
                                          <option value="RBL Bank Limited">RBL Bank Limited</option>
                                          <option value="THE ROYAL BANK OF SCOTLAND N V">THE ROYAL BANK OF SCOTLAND N V</option>
                                          <option value="SARASWAT COOPERATIVE BANK LIMITED">SARASWAT COOPERATIVE BANK LIMITED</option>
                                          <option value="THE SHAMRAO VITHAL COOPERATIVE BANK">THE SHAMRAO VITHAL COOPERATIVE BANK</option>
                                          <option value="THE SURATH PEOPLES COOPERATIVE BANK LIMITED">THE SURATH PEOPLES COOPERATIVE BANK LIMITED</option>
                                          <option value="THE TAMIL NADU STATE APEX COOPERATIVE BANK">THE TAMIL NADU STATE APEX COOPERATIVE BANK</option>
                                          <option value="TJSB SAHAKARI BANK LTD">TJSB SAHAKARI BANK LTD</option>
                                          <option value="THE WEST BENGAL STATE COOPERATIVE BANK">THE WEST BENGAL STATE COOPERATIVE BANK</option>
                                          <option value="UCO BANK">UCO BANK</option>
                                          <option value="UNION BANK OF INDIA">UNION BANK OF INDIA</option>
                                          <option value="UNITED BANK OF INDIA">UNITED BANK OF INDIA</option>
                                          <option value="VIJAYA BANK">VIJAYA BANK</option>
                                          <option value="YES BANK">YES BANK</option>
                                       </select>
                                    </div>
									
                                    
                                 </div>
                                 <div class="form-row">
								 
								 <div class="form-group col-md-6">
									
                                       <label for="branch_name">Branch Name</label>
                                       <input type="text" class="form-control" name="branch_name" value="" >
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                       <label>IFSC Code:</label>
                                       <input type="number" class="form-control" name="zip"  value="">
                                    </div>
                                 </div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="city">City</label>
                                       <input type="text" class="form-control" name="city" value="" >
                                    </div>
                                 </div>
                              </div>
                              <h3>Download Acknowledgement</h3>
                              <div class="wizard-content" >
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
                                       <input type="checkbox" name="reminders" id="reminders" class="custom-control-input">
                                       <label class="custom-control-label" for="reminders">Send me occasional
                                       reminders
                                       about these settings</a></label>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" name="terms_conditions" id="terms_conditions" class="custom-control-input">
                                       <label class="custom-control-label" for="terms_conditions">By checking
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
             
         
         /*  var wizard7 = $('#     ');
         wizard7.steps({
          headerTag: "h3",
          bodyTag: '.wizard-content',
          autoFocus: true,
          enableAllSteps: true,
          titleTemplate: '<span class="number">#index#</span><span class="title">#title#</span>',
          onStepChanging: function (event, currentIndex, newIndex) {
              if (currentIndex > newIndex) {
                  return true;
              }
              return wizard7.valid();
          },
          onStepChanged: function (event, currentIndex, priorIndex) {},
          onFinishing: function (event, currentIndex) {
              return wizard7.valid();
         
          },
          onFinished: function (event, currentIndex) {
         
         var data= $("#wizard7").serializeArray();
         
         console.log(JSON.stringify(data));
         
         
         
              INSPIRO.elements.notification("Submited",
                  "Thank you, your account has been registed successfully", "success");
          }
         });
         wizard7.validate({
          errorClass: 'is-invalid',
          validClass: 'is-valid',
          errorElement: "div",
          rules: {
              username: {
                  required: true
              },
                  reminders: {
                  required: true
              },
              terms_conditions: {
                  required: true
              },
          },
          errorPlacement: function (error, element) {
              $(element).parents(".form-group").append(error);
          }
         });
         $('.wizard').find(".actions ul > li > a").addClass("btn");
         $('#country').on('change',function(){
         var optionText = $("#country option:selected").text();
         
         if(optionText == 'INDIA'){
         $("#statehtml").css({"display": "block"}); 
         $("#statehtml1").css({"display": "none"});}
         else { $("#statehtml1").css({"display": "block"}); 
         $("#statehtml").css({"display": "none"});}
         });  */    
      </script>
   </body>
</html>