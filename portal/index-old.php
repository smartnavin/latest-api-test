<!DOCTYPE html>
<html lang="en">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="author" content="INSPIRO" />
      <meta name="description" content="Themeforest Template Polo, html template">
      <link rel="icon" type="image/png" href="images/favicon.png">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>HelpDesk</title>
      <link rel="icon" type="image/png" href="img/leder_logo.png">
   </head>
   <body>
   
   <?php
   $bid=$_GET['bid'];
   
   $url = 'https://a1of96vih5.execute-api.ap-south-1.amazonaws.com/business-data/manage';
// Collection object
$data = [
  'op_type'=> 'search_bname',
  'bid'=> $bid
];

// Initializes a new cURL session
$curl = curl_init($url);
// Set the CURLOPT_RETURNTRANSFER option to true
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// Set the CURLOPT_POST option to true for POST request
curl_setopt($curl, CURLOPT_POST, true);
// Set the request data as JSON using json_encode function
curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($data));
// Set custom headers for RapidAPI Auth and Content-Type header
curl_setopt($curl, CURLOPT_HTTPHEADER, [
  'Content-Type: application/json'
]);
// Execute cURL request with all previous settings
$response = curl_exec($curl);
// Close cURL session
curl_close($curl);
 $response . PHP_EOL;

$arr = json_decode($response, true);

  $compny_name= $arr['Items']['0']['business_name'];
  
   ?>
   
   
   
   
      <div class="body-inner">
         <link href="assets/css/plugins.css" rel="stylesheet">
         <link href="assets/css/styles.css" rel="stylesheet">
         <link href="assets/css/dropzone.css" rel="stylesheet">
            <header id="header" data-fullwidth="true">
            <div class="header-inner">
            <div class="container">
                  <!-- Logo Here... -->
            <div id="logo"> <a href="./"><span class="logo-default"><img alt='Ledgers Logo' src="img/leder_logo.png" style="height:70px;"></span><span class="logo-dark">India Filings</span></a> </div>
            <div class="header-extras"> 
               <ul>
                   <!--  Compnay Name Here... -->
                  <li><a href="#"><?php echo $compny_name;?></a></li>
               <li>  
               <div class="p-dropdown">
                  <a href="#"><i class="fas fa-sign-out-alt"></i></a>
                  <ul class="p-dropdown-content">
                     <li>Sign out</li>
                  </ul>
               </div>
               </li>
               </ul>
            </div>
            <hr class="line">
            </div>
            </div>
            </header>
         <section>
            <div class="container">
               <div class="heading-text heading-line text-center">
                  <h4>HelpDesk</h4>
               </div>
               <div class="row icon-boxes">
                  <div class="icon-boxx col-md-4 col-6 myBox">
                     <a href="helpdesk/customer.php"><i class="icon-users"></i></a>
                     <div class="icon-box-content">
                        <h3>Customers</h3>
                        <p>There is place in the world for any business that takes care of its customers – after the sale.</p>
                     </div>
                  </div>
                  
                  <div class="icon-boxx col-md-4 col-6 myBox">
                     <a href="helpdesk/employee.php"><i class="icon-user"></i></a>
                     <div class="icon-box-content">
                        <h3>Employees</h3>
                        <p>The employed are punished by having to do what they do not love. The self-employed are punished by the opposite.</p>
                     </div>
                  </div>
                  <div class="icon-boxx col-md-4 col-6 myBox">
                     <a href="helpdesk/supplier.php"><i class="icon-eye"></i></a>
                     <div class="icon-box-content">
                        <h3>Suppliers</h3>
                        <p>Fashion is such an octopus. You're connected to so many people: suppliers, pattern makers, production teams, marketing teams, vendors.</p>
                     </div>
                  </div>
                  <div class="icon-boxx col-md-4 col-6 myBox">
                     <a href="helpdesk/purchase-bill.php"><i class="icon-droplet"></i></a>
                     <div class="icon-box-content">
                        <h3>Purchase Invoice</h3>
                        <p>An Invoice is a financial document requesting payment for work either completed or in progress.</p>
                     </div>
                  </div>
                  <div class="icon-boxx col-md-4 col-6 myBox">
                     <a href="helpdesk/supplier-bill.php"><i class="icon-heart"></i></a>
                     <div class="icon-box-content">
                        <h3>Supplier Bill</h3>
                        <p>The guiding purpose of the government regulator is to prevent rather than to create something.</p>
                     </div>
                  </div>
                  <div class="icon-boxx col-md-4 col-6 myBox">
                     <a href="helpdesk/fileupload.php"><i class="icon-life-buoy"></i></a>
                     <div class="icon-box-content">
                        <h3>File Upload</h3>
                        <p>Upload a file to here..</p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Footer Here... -->
      <footer id="footer">
         <div class="copyright-content">
         <div class="container">
            <div class="copyright-text text-center">&copy; 2020 Ledgers.Cloud. Made in &nbsp;
            <img src="img/India-Flag.png" alt="India Flag" style="height:16px;">
             &nbsp; for india.
         </div>
         </div>
         </div>
      </footer>
      <script src="assets/js/jquery.js"></script>
      <script src="assets/js/plugins.js"></script>
      <script src="assets/js/function.js"></script>
      <script src="assets/js/jquery-steps.js"></script>
      <script src="assets/js/validate.js"></script> 
      <script src="assets/js/form-validate.js"></script>
      <script src="assets/js/dropzone.js"></script>
      </div>
      <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
   </body>
</html>
<style type="text/css">
   .myBox{
       cursor: pointer;
}
</style>
<script type="text/javascript">

$(".myBox").click(function() {
  window.location = $(this).find("a").attr("href"); 
  return false;
});

</script>