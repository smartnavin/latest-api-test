 var form = $("#wizard1").show();
 form.steps({
 headerTag: 'h3',
 bodyTag: '.wizard-content',
 autoFocus: true,
 enableAllSteps: true,
 saveState: true,
 titleTemplate: '<span class="number">#index#</span><span class="title">#title#</span>',
 onStepChanging: function (event, currentIndex, newIndex)
 {
 if (currentIndex > newIndex)
 {
 return true;
 }
 
 if (currentIndex < newIndex)
 {
 form.find(".body:eq(" + newIndex + ") label.error").remove();
 form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
 }
 form.validate().settings.ignore = ":disabled,:hidden";
 return form.valid();
 },
 onStepChanged: function (event, currentIndex, priorIndex)
 {
 if (currentIndex === 2 && priorIndex === 3)
 {
 form.steps("previous");
 }
 },
 onFinishing: function (event, currentIndex)
 {
 form.validate().settings.ignore = ":disabled";
 return form.valid();
 },
 onFinished: function (event, currentIndex) {
 return getFormData();
 }
 
 }).validate({
 errorPlacement: function errorPlacement(error, element) { element.before(error); 
 }
 });
  $('.wizard').find(".actions ul > li > a").addClass("btn");