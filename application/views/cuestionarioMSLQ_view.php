<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('assets/bootstrap.min.css')?>"
      rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <div class="container">

    <h1>cuestionarioMSLQ_view</h1>

<br />
<hr />

<form	id="cuestionario_MSLQ"
		method="post" 
		autocomplete="off" 
		action="<?=base_url('validarCuestionarioMSLQ')?>">


<?php 
    $indicePregunta=1; 
    $indicePreguntaRadio=1; 
    
    foreach($preguntas as $pregunta):// busca las preguntas
?> 

<section class="row">
    <div class="col-md-12">
        <section class="row">
            <div class="col-md-7">
                <p id="preguntaCuestionario_<?= $indicePregunta ?>"
					class="h5">
                    <?= $indicePregunta ?>.- <?= $pregunta ?> 
                </p>
            </div>

            <div	class="col-md-5 form-group"
					id="form_group_<?=$indicePregunta?>">
            <!--opciones 1 a 7 Likert-->

            <?php $indiceLikert=1;while($indiceLikert<=7):?>
                <div class="form-check form-check-inline">
					<input  class=" h5 form-check-input "
                                type="radio" 
								name="pregunta_<?= $indicePregunta ?>"
                                id="pregunta_<?=$indicePregunta."_radio_".$indiceLikert?>" 
                                value=<?=$indiceLikert?>
                                >
                    <label  class=" h5 form-check-label "
                            for="pregunta_<?=$indicePreguntaRadio?>">
                            
                            <?=$indiceLikert?>
                    </label>
                </div>

            <?php 
				$indiceLikert++;
				$indicePreguntaRadio++; 
				endwhile; 
			?>
<div class="invalid-feedback">
<p>abcc</p>

</div>
            </div>


        </section>
    </div>
</section>

<br >
<hr >
<?php  $indicePregunta++; endforeach; ?>

<!--BOTON ENVIAR FORMULARIO-->
<section class="row">
    <div class="col-md-9  aling-items-right  ">
        <button type="submit" class="btn btn-primary">Enviar formulario</button>
    </div>
</section>

</form>



</div>
	<script src="<?= base_url('assets/jquery-3.7.1.min.js');?>"></script>
	
	<script src="<?= base_url('assets/bootstrap.bundle.min.js');?>"></script>
	<script>

/*
$("#cuestionario_MSLQ").submit(function (ev) {


	$("#mensajeDeAlerta").html("");
	
	$.ajax({
		url: "validarCuestionarioMSLQ",
		type: "post",

		data: $(this).serialize(),
		success: function (err) {
			var json = JSON.parse(err);
			console.log(json);
			//alert(json.url);
			window.location.replace(json.url);
		},
		statusCode: {
			400: function (xhr) {
				var json = JSON.parse(xhr.responseText);

				$("#form_group_rut > input").removeClass("is-invalid");
				$("#form_group_contrasena > input").removeClass("is-invalid");

				console.log(json);
				if (json.login_rut.length != 0) {
					$("#form_group_rut > div").html(json.login_rut);
					$("#form_group_rut > input").addClass("is-invalid");
				}

				if (json.login_contrasena.length != 0) {
					$("#form_group_contrasena > div").html(json.login_contrasena);
					$("#form_group_contrasena > input").addClass("is-invalid");
				}
			},

			401: function (xhr) {
				var json = JSON.parse(xhr.responseText);

				console.log(json);

				$("#mensajeDeAlerta").html(
					'<div class="alert alert-warning">' +
						json.mensajeDeCredeciales +
						"</div>"
				);
			},
		},
	});
	ev.preventDefault();
});
*/
    </script>
</body>
</html>