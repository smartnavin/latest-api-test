<!DOCTYPE html>
<html lang="en">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="description" content="Themeforest Template Polo, html template">
      <link rel="icon" type="image/png" href="images/favicon.png">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Purchase Invoice</title>
   </head>
   <body>
      <div class="body-inner">
         <?php require_once '../include/header.php'; ?>
		 <section id="page-content">
            <div class="container">
               <div class="heading-text heading-line text-center">
                  <h4>Upload Documents</h4>
               </div>
			   <div class="row justify-content-center">
                  <div class="content col-md-11">
                     <div class="card">
                        <div class="card-body">
              <div class="dropzone dropzone-previews" id="my-awesome-dropzone">
               <div class="fallback">
                  <input name="file[]" type="file" multiple>
               </div>
            </div>
			</div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
          <?php require_once '../include/footer.php'; ?>
      </div>
      <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
   </body>
</html>
<script type="text/javascript">
   Dropzone.options.myAwesomeDropzone = {
      url: "upload.php",
      autoProcessQueue: true,
      autoDiscover: false,
      uploadMultiple: false,
      parallelUploads: 100,
      accepted : true,
      previewsContainer: ".dropzone-previews",
      maxFilesize: 50, //MB
      maxFiles: 100,
      acceptedFiles: "image/*, application/pdf, .doc, .docx",
      addRemoveLinks: true,
      dictRemoveFile: 'Remove',
      dictFileTooBig: 'File is bigger than 50MB',
      accept: function(file, done) {  //console.log(done);
          console.log("uploaded");
          done();
      },
      error: function(file, msg){
          alert(msg);
      },
      init: function () {
          var myDropzone = this;
          $('input[type=submit]').on("click", function(e){
              e.preventDefault();
              e.stopPropagation();
              myDropzone.processQueue();
          });
          this.on("sendingmultiple", function() {
              $("#upload-forms").submit();
          });
          this.on("successmultiple", function(files, response) {
          });
          this.on("errormultiple", function(files, response) {
          });
      }
   }
   
</script>