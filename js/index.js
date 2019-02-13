$(function () {
    $('#formContacto').validate({
        errorElement: 'span', //default input error message container
        errorClass: 'help-block help-block-error', // default input error message class
        focusInvalid: true, // do not focus the last invalid input
        ignore: ":hidden", // ignore hidden elements when validating
        rules: {
          FNAME: { required: true },
          EMAIL: { required: true, email: true },
          PHONE: { required: true },
          MENSAJE: { required: true }
        },
        highlight: function (element) {
            $(element).closest('#formContacto').addClass('has-error');
        },
        unhighlight: function (element) { // revert the change done by hightlight
            $(element)
                .closest('').removeClass('has-error'); // set error class to the control group
        },
        success: function (label) {
            label
                .closest('#formContacto').removeClass('has-error'); // set success class to the control group
        },
        submitHandler: function () {
            submitForm();
        }
    });
});
function submitForm() {
    var $listID = '2f3f6f2160';
      WaitMeShow('#body');
    console.log($('#formContacto').serialize());
    var jParams = {
         fname : $('#mce-FNAME').val(),
         mensaje :  $('#mce-MENSAJE').val(),
         email : $('#mce-EMAIL').val(),
         telefono : $('#mce-PHONE').val()
    };
    console.log(jParams);
    
    
     $.ajax({
        type: 'POST',
         url: 'controller/envio_correo.php',
        //  data: $('#formContacto').serialize(),
         data: jParams,
        //  dataType: "json",
        //  contentType: "application/json; charset=utf-8",
         success: function (data) {
            console.log(data);
            
             swal({
                     title: "¡Bien hecho!",
                     text: "¡Mensaje enviado correctamente!",
                     type: "success",
                     closeOnConfirm: true,
                     allowOutSideClick: false
               
               });
             cleanTxt();
            WaitMeHide('#body');
         },
         error: function (data) {
             swal({
                 title: "¡Upsss!",
                 text: "¡Algo salio mal!",
                 type: "error",
                 closeOnConfirm: true,
                 allowOutSideClick: false
           
           });
            WaitMeHide('#body');
         }
     });
 }
 function WaitMeShow(idForm) {
    $(idForm).waitMe(
    {
        effect: 'stretch',
        text: '...Cargando...',
        bg: 'rgba(255,255,255,0.7)',
        color: '#4B02DF',
        sizeW: '',
        sizeH: '',
        source: ''
    });
};
function WaitMeHide(idForm) {
    $(idForm).waitMe('hide');
}
function cleanTxt() {
    //$('#form1')[0].reset();
    $("#formContacto").trigger('reset')
}