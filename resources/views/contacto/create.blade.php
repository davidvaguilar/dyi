<div class="modal" id="mdl_correo_enviar" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"> Formulario de Contacto </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmContacto" class="needs-validation" novalidate>
          <div class="row">
            <div class="form-group col-md-6 ml-auto">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-user" aria-hidden="true"></i></span>
                </div>
                <input id="txtnombre" type="text" minlength="2" class="form-control" placeholder="Tu nombre" aria-describedby="inputGroupPrepend" required="required">
                <div class="invalid-feedback">Favor, ingrese su nombre.</div>
              </div>
            </div>
            <div class="form-group col-md-6 ml-auto">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                </div>
                  <input id="txtcorreo" type="email" pattern=".*@\w{2,}\.\w{2,}"  maxlength="65" class="form-control" placeholder="Tu correo electronico" required="required">
                <div class="invalid-feedback">Favor, ingrese correo electronico.</div>
              </div>
            </div>
            <div class="form-group col-md-6 ml-auto">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-phone" aria-hidden="true"></i></span>
                </div>
                  <input id="txttelefono" type="number" min="10000000" max="999999999999999999" class="form-control" placeholder="Tu numero telefonico" required="required" />
                <div class="invalid-feedback">Favor, ingrese numero telefonico.</div>
              </div>
            </div>
            <div class="form-group col-md-6 ml-auto">
              <div class="input-group">
                  <input id="txtasunto" type="text" class="form-control" placeholder="Tu asunto" />
              </div>
            </div>
            <div class="form-group col-md-12 ml-auto">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-pencil-alt" aria-hidden="true"></i></span>
                </div>
                  <textarea rows="3" id="txtmensaje" minlength="5" placeholder="Escribe tu comentario aquí *" class="form-control" required="required"></textarea>
                <div class="invalid-feedback">Favor ingrese un comentario.</div>
              </div>
            </div>
            <!--<div class="form-group col-md-12 ml-auto">
              <div id="divnotificacion" class="alert alert-warning alert-dismissible fade show" role="alert" style="display: none;">
                <span id="spnnotificacion"></span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>-->
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button id="btnenviarcorreo" type="button" class="btn btn-primary"><i class='fas fa-envelope'></i> Envia Mensaje</button>
        <button id="btncerrarcorreo" type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<script>
  function enviar_correo(){
    if ($("#frmContacto")[0].checkValidity() === false) {
      event.preventDefault();
      event.stopPropagation();
    } else {
      var nombre = $("#txtnombre").val()
      var correo = $("#txtcorreo").val()
      var telefono = $("#txttelefono").val()
      var asunto = $("#txtasunto").val()
      var mensaje = $("#txtmensaje").val()
      var parametros = { "vlsNombre" : nombre,
                         "vlsCorreo" : correo,
                         "vlsTelefono" : telefono,
                         "vlsAsunto" : asunto,
                         "vlsMensaje" : mensaje }
      $.ajax({
        data : parametros,
        contentType : "application/x-www-form-urlencoded; charset=iso-8859-1",
        url : "./controller/correo/enviar.php",
        type : "POST",
        dataType : "JSON",
        success : function(data){
          if( data["RESULTADO"] !== "" ){
            exito("Correo enviado correctamente, pronto le responderemos a " + data["RESULTADO"]);
            $("#txtnombre").val("");
            $("#txtcorreo").val("");
            $("#txttelefono").val("");
            $("#txtasunto").val("");
            $("#txtmensaje").val("");
          }else{
            error("Error al Enviar Mensaje, favor vuelva a intentalo.");
          }
          /*$("#spnnotificacion").text("Error al Enviar Mensaje, favor vuelva a intentalo.");
          if( data["RESULTADO"] !== "" ){
           $("#spnnotificacion").text("Correo enviado correctamente, pronto le responderemos a " + data["RESULTADO"]);
          }
          $("#divnotificacion").show();*/
        },
        error: function(XMLHttpRequest, textStatus, errorThrown){
          $("#spnnotificacion").text("./contacto.php"+XMLHttpRequest+"/"+textStatus+"/"+errorThrown);
          $("#divnotificacion").show()
        }
      });
    }
    $("#frmContacto").addClass("was-validated");
  }

</script>
