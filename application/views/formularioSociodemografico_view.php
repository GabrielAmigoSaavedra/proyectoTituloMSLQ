


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
<link href="<?=base_url('assets/bootstrap.min.css')?>"
      rel="stylesheet">

    <title>Encuesta de Estrategias Motivacionales y de Aprendizaje</title>
</head>


<body >

<div class="container">
	
    <h1>Formulario Sociodemografico:</h1>

    <br>

    <form action="<?=base_url('formularioRespuesta')?>" method="POST">



    <!--Ingresar Rut-->
    <section class="row">

        <div class="col-md-4">
            <label  for = "formularioSociodemografico_rut" 
                    class = "form-label"  >
                *RUT:
            </label>
            <input  type = "text"
                    class = "form-control" 
                    id = "formularioSociodemografico_rut" 
                    placeholder = "Ingresar RUT en formato 12345678-9" 
                    name = "rut" 
                    >
    
            <div class="invalid-feedback"></div><!--mensaje de error LLENAR CAMPO-->

        </div>
    </section>

<br><br>

    <section class="row">

    <!--Ingresar Nombre-->
        <div class="col-md-4 form-group">
        
                <label  for = "formularioSociodemografico_nombre"
                        class = "form-label">
                    *Nombre:
                </label>
                <input  type = "text" 
                        class = "form-control" 
                        id = "formularioSociodemografico_nombre" 
                        placeholder = "Ingresar Nombre" 
                        name = "nombre" 
                    >
            
                <div class="invalid-feedback"></div><!--mensaje de error LLENAR CAMPO-->
        </div>

<!--Ingresar Apellido Paterno-->

        <div class="form-group col-md-4">
            
            <label  for = "formularioSociodemografico_apellidoPaterno" 
                    class = "form-label">
                *Apellido Paterno:
            </label>
            <input  type = "text" 
                    class = "form-control" 
                    id = "formularioSociodemografico_apellidoPaterno" 
                    placeholder="Ingresar Apellido Paterno" 
                    name="apellidoPaterno" 
                    >

            <div class="invalid-feedback"></div><!--mensaje de error LLENAR CAMPO-->
        
        </div>

<!--Ingresar Apellido Materno-->

        <div class="col-md-4 form-group">

            <label  for="formularioSociodemografico_apellidoMaterno" 
                    class="form-label">
                *Apellido Materno:
            </label>
            <input  type="text" 
                    class="form-control" 
                    id="formularioSociodemografico_apellidoMaterno" 
                    placeholder="Ingresar Apellido Materno" 
                    name="apellidoMaterno" 
                    >
        
            <div class="invalid-feedback"></div><!--mensaje de error LLENAR CAMPO-->
        </div>
    </section>

<!--Fin Ingresar Apellidos-->

<br><br><br>
    
    <section class="row form-group">

        
    
        <div class="col-md-4 ">
            <div class=" form-group">
                <label  for = "formularioSociodemografico_nacionalidad">
                    * Nacionalidad:
                </label>
                <input  type = "text" 
                        class = "form-control"
                        id = "formularioSociodemografico_nacionalidad" 
                        placeholder = "Ingresar Nacionalidad" 
                        name = "nacionalidad"
                        >

                <div class="invalid-feedback"></div><!--mensaje de error LLENAR CAMPO-->
            </div>
        </div>
    
        <div class="col-md-4 ">
        
            <label for="formularioSociodemografico_edad">
                * Edad:
            </label>
            <input  type="number" class="form-control" 
                    id="formularioSociodemografico_edad" 
                    placeholder="Ingresar Edad" 
                    name="edad" 
                    >
        
            <div class="invalid-feedback"></div><!--mensaje de error LLENAR CAMPO-->
    
        </div>

    </section>

<br><br><br>

    <section class="row">
        
        <div class="col-md-4 form-group">
            <p id="formularioSociodemografico_genero">
                * Género:
            </p>

            <label  for="formularioSociodemografico_generoFemenino">
                <input  class="form-check-input"
                        type="radio" 
                        name="genero" 
                        id="formularioSociodemografico_generoFemenino"
                        value="femenino"
                        >
                        Femenino
            </label>
        <br>
        
            <label  for="formularioSociodemografico_generoMasculino">
                <input  class="form-check-input"
                        type="radio" 
                        name="genero" 
                        id="formularioSociodemografico_generoMasculino"
                        value="masculino"
                        >
                        Masculino
            </label>
        <br>
           
            <label  for="formularioSociodemografico_generoNoResonder">
                <input  class="form-check-input"
                        type="radio" 
                        name="genero" 
                        id="formularioSociodemografico_generoNoResonder"
                        value=">noResonder"
                        >
                        Prefiero no responder
            </label>


            <div class="invalid-feedback"></div><!--mensaje de error LLENAR CAMPO-->
        
        </div>
        
    </section>
    <br>
    <br>
    <br>
    <section class="row">
        <div class="col-md-4 ">

            <p id="formularioSociodemografico_carreraActual">
                * Seleccionar su carrera actual:
            </p>
            
            <label   for="formularioSociodemografico_carreraActualCivil">
                <input  class="form-check-input"
                        type="radio" 
                        name="carreraActual" 
                        id="formularioSociodemografico_carreraActualCivil"
                        value="ingCivilInf"
                        >
                        Ingeniería Civil en Informática
            </label>
            <br>
            
            <label  for="formularioSociodemografico_carreraActualInf">
                <input  class="form-check-input"
                        type="radio" 
                        name="carreraActual" 
                        id="formularioSociodemografico_carreraActualInf"
                        value="ingInf"
                        >
                        Ingeniería en Informática
            </label>
            <br>
            
            <label  for="formularioSociodemografico_carreraActualCivilCiencia">
                <input  class="form-check-input"
                        type="radio" 
                        name="carreraActual" 
                        id="formularioSociodemografico_carreraActualCivilCiencia"
                        value="ingCivilCiencia"
                        >
                        Ingeniería Civil en Ciencia de Datos
            </label>
        
        
            <div class="invalid-feedback"></div><!--mensaje de error LLENAR CAMPO-->
        </div>

    </section>


<br><br><br>

    <section class="row">
        <div class="col-md-8 form-group">
        
        <p id="formularioSociodemografico_carreraPrimeraOpcionSiNo">
            * ¿La carrera a la cual te has inscrito fue tu primera opción?:
        </p>

            <div class="form-check form-check-inline">
                
                <label  class="form-check-label"
                        for="formularioSociodemografico_carreraPrimeraOpcionSi">
                    <input  class="form-check-input"
                            type="radio"
                            name="carreraPrimeraOpcion" 
                            id="formularioSociodemografico_carreraPrimeraOpcionSi" 
                            value="Si"
                            >
                        Si
                </label>

            </div>
            
            <div class="form-check form-check-inline">
                
                <label  class="form-check-label"
                        for="formularioSociodemografico_carreraPrimeraOpcionNo">
                    <input  class="form-check-input"
                            type="radio"
                            name="carreraPrimeraOpcion" 
                            id="formularioSociodemografico_carreraPrimeraOpcionNo" 
                            value="No"
                            >
                        No
                </label>

            </div>
            
            <div class="invalid-feedback"></div><!--mensaje de error RESPONDER RADIO-->



            <div    class="col-md-4 form-group" 
                    id="formularioSociodemografico_carreraPrimeraOpcion">

                <label  for="formularioSociodemografico_carreraPrimeraOpcionOtro">
                        * Cúal es la carrera:
                </label>
                <input  type="text"
                        class="form-control"
                        id="formularioSociodemografico_carreraPrimeraOpcionOtro" 
                        name = carreraPrimeraOpcionOtro
                        >
            </div>

            <div class="invalid-feedback"></div><!--mensaje de error LLENAR CAMPO-->
        </div>
    </section>

<br><br><br>


    <section class="row">
        
        <div class="col-md-4 ">

            <p id="formularioSociodemografico_convivencia">
                * ¿Con quién vive?
            </p>
            
            <label   for="formularioSociodemografico_convivenciaFamilia">
                <input  class="form-check-input"
                        type="radio" 
                        name="convivencia" 
                        id="formularioSociodemografico_convivenciaFamilia"
                        value="familia"
                        >
                        Con mi familia
            </label>
            <br>

            <label  for="formularioSociodemografico_convivenciaPension">
                <input  class="form-check-input"
                        type="radio" 
                        name="convivencia" 
                        id="formularioSociodemografico_convivenciaPension"
                        value="pension"
                        >
                        Pensión
            </label>
            <br>
            
            <label  for="formularioSociodemografico_convivenciaPareja">
                <input  class="form-check-input"
                        type="radio" 
                        name="convivencia" 
                        id="formularioSociodemografico_convivenciaPareja"
                        value="pareja"
                        >
                        Pareja
            </label>
            <br>
            
            <label  for="formularioSociodemografico_convivenciaSolo">
                <input  class="form-check-input"
                        type="radio" 
                        name="convivencia" 
                        id="formularioSociodemografico_convivenciaSolo"
                        value="solo"
                        >
                        Soltero(a)
            </label>
        </div>
        
        <div class="invalid-feedback"></div><!--mensaje de error LLENAR CAMPO-->

        
    </section>

<br><br><br>
        
    <section class = "row">
        <div class = "col-md-6 form-group">
            <p  id = "formularioSociodemografico_tiempoDeTraslado">
                Normalmente, ¿Cuánto tarda en llegar a la Escuela de Ingeniería Informática?
            </p>
        </div>

        <label   for="formularioSociodemografico_tiempoDeTrasladoMenosDe30">
            <input  class="form-check-input"
                    type="radio" 
                    name="tiempoDeTraslado" 
                    id="formularioSociodemografico_tiempoDeTrasladoMenosDe30"
                    value="<30"
                    >
                    Menos de 30 minutos
        </label>
        <br>

        <label  for="formularioSociodemografico_tiempoDeTrasladoIgual30">
            <input  class="form-check-input"
                    type="radio" 
                    name="tiempoDeTraslado" 
                    id="formularioSociodemografico_tiempoDeTrasladoIgual30"
                    value="=30"
                    >
                    30 minutos
        </label>
        <br>
        
        <label  for="formularioSociodemografico_tiempoDeTrasladoMasDe30">
            <input  class="form-check-input"
                    type="radio" 
                    name="tiempoDeTraslado" 
                    id="formularioSociodemografico_tiempoDeTrasladoMasDe30"
                    value=">30"
                    >
                    Más de 30 minutos
        </label>
        <br>
           
        <label  for="formularioSociodemografico_tiempoDeTrasladoMasDeUnaHora">
            <input  class="form-check-input"
                    type="radio" 
                    name="tiempoDeTraslado" 
                    id="formularioSociodemografico_tiempoDeTrasladoMasDeUnaHora"
                    value=">60"
                    >
                    Más de una hora
        </label>
        
        <div class="invalid-feedback"></div><!--mensaje de error LLENAR CAMPO-->

    </section>

<br><br><br>
      
        
    <section class="row">
        <div class="col-md-4 "><!--form-control-->
            <p id="formularioSociodemografico_carreraDePrecedenciaSiNo">
                *¿Provienes de otra carrera? 
            </p>

                <div class="form-check form-check-inline">

                    <label  class="form-check-label"
                            for="formularioSociodemografico_carreraDePrecedenciaSi">

                        <input  id="formularioSociodemografico_carreraDePrecedenciaSi"
                                class="form-check-input"
                                type="radio" 
                                name="carreraDePrecedencia" 
                                value="Si"
                                >
                                Si
                    </label>
                </div>
            
                <div class="form-check form-check-inline">
                    
                    <label  class="form-check-label"
                            for="formularioSociodemografico_carreraDePrecedenciaNo">

                        <input  id="formularioSociodemografico_carreraDePrecedenciaNo"
                                class="form-check-input"
                                type="radio"
                                name="carreraDePrecedencia" 
                                value="No"
                                >
                                No
                    </label>
                </div>
        </div>

        <div class="col-md-4 " id ="formularioSociodemografico_carreraDePrecedencia">
            <label for="formularioSociodemografico_carreraDePrecedenciaOtra">
                * Cúal fue la carrera de la que provienes:
            </label>
            <input  type="text" 
                    class="form-control" 
                    id="formularioSociodemografico_carreraDePrecedenciaOtra" 
                    name = "carreraDePrecedenciaNombreOtraCarrera"
                    >
        </div>       
    </section>

<br><br><br>

    <section class="row">
        <div class="col-md-4 form-group">
            <p id="formularioSociodemografico_razonParaElegirLaCarreraActual">
                ¿Cómo y por qué eligió la carrera que cursa?
            </p>

            <label   for="formularioSociodemografico_razonParaElegirLaCarreraActualEleccionLibre">
                <input  class="form-check-input"
                        type="radio" 
                        name="razonParaElegirLaCarreraActual" 
                        id="formularioSociodemografico_razonParaElegirLaCarreraActualEleccionLibre"
                        value="eleccionLibre"
                        >
                        Fue elección libre
            </label>
        <br>

            <label  for="formularioSociodemografico_razonParaElegirLaCarreraActualPrimeraPreferencia">
                <input  class="form-check-input"
                        type="radio" 
                        name="razonParaElegirLaCarreraActual" 
                        id="formularioSociodemografico_razonParaElegirLaCarreraActualPrimeraPreferencia"
                        value="primeraPreferencia"
                        >
                        Fue primera preferencia
            </label>
        <br>
        
            <label  for="formularioSociodemografico_razonParaElegirLaCarreraActualTradicionFamiliar">
                <input  class="form-check-input"
                        type="radio" 
                        name="razonParaElegirLaCarreraActual" 
                        id="formularioSociodemografico_razonParaElegirLaCarreraActualTradicionFamiliar"
                        value="tradicionFamiliar"
                        >
                        Es una tradición familiar
            </label>
        <br>
           
            <label  for="formularioSociodemografico_razonParaElegirLaCarreraActualDescarte">
                <input  class="form-check-input"
                        type="radio" 
                        name="razonParaElegirLaCarreraActual" 
                        id="formularioSociodemografico_razonParaElegirLaCarreraActualDescarte"
                        value=">descarte"
                        >
                        Por descarte
            </label>
        <br>
            <label  for="formularioSociodemografico_razonParaElegirLaCarreraActualOtroMotivo">
                <input  class="form-check-input"
                        type="radio" 
                        name="razonParaElegirLaCarreraActual" 
                        id="formularioSociodemografico_razonParaElegirLaCarreraActualOtroMotivo"
                        value=">otroMotivo"
                        >
                        Otro motivo:
            </label>

        </div>
    
        <div class="col-md-5 form-group">
            
            <label for="formularioSociodemografico_razonParaElegirLaCarreraActualMotivo">
                * Otro motivo:
            </label>
            <input  type="text"
                    class="form-control" 
                    id="formularioSociodemografico_razonParaElegirLaCarreraActualMotivo"
                    name = "razonParaElegirLaCarreraActualOtroMotivo"
                    >
        </div>
    </section>

<br><br><br>

    <section class="row">
        <div class="col-md-5 form-group">
            <p id="formularioSociodemografico_enfermedadMentalDiagnosticada">
                ¿Tiene algún tipo de enfermedad mental diagnosticada? 
            </p>

            <div class="col-md-2 ">
                <label  for="formularioSociodemografico_enfermedadMentalDiagnosticadaSi">
                    <input  class="form-check-input radio" 
                            type="radio" 
                            id="formularioSociodemografico_enfermedadMentalDiagnosticadaSi" 
                            value="Si"
                            name="enfermedadMentalDiagnosticadaPregunta"                 
                            >
                            Si
                </label>
            </div>
      
            <div class="col-md-2">
                <label  for="formularioSociodemografico_enfermedadMentalDiagnosticadaNo">
                    <input  class="form-check-input radio"
                            type="radio" 
                            id="formularioSociodemografico_enfermedadMentalDiagnosticadaNo" 
                            value="No"
                            name="enfermedadMentalDiagnosticadaPregunta" 
                            >
                            No
                </label>
            </div>
      
            <div class="col-md-5">
                <label for="formularioSociodemografico_enfermedadMentalDiagnosticadaNoSe">
                    <input  class="form-check-input radio" 
                            type="radio" 
                            name="enfermedadMentalDiagnosticadaPregunta" 
                            id="formularioSociodemografico_enfermedadMentalDiagnosticadaNoSe" 
                            value="NOSE"
                            >
                        No estoy seguro
                </label>
                
                
            </div>

        </div>
        
        <div class="col-md-6 form-group" id="opcionalCualEsSuEnfermedad">
        
            <label  for = "formularioSociodemografico_enfermedadMentalDiagnosticadaEspecifica"
                    class = "form-label" >
                *¿Cuál es su enfermedad?
            </label>

            <input  type="text"
                    class="form-control" 
                    id="formularioSociodemografico_enfermedadMentalDiagnosticadaEspecifica"
                    name = "enfermedadMentalDiagnosticada"
                    >
            <div class="invalid-feedback"></div><!--mensaje de error LLENAR CAMPO-->
        
        </div>
    </section>        
               
<br><br><br><br>


    <section class="row">
        <div class="col-md-6">
            <p id="formularioSociodemografico_beneficioGratuidad">
                ¿Tiene beneficio de gratuidad?
            </p>

            <div class="form-check form-check-inline">
                
                <label  class="form-check-label"
                        for="formularioSociodemografico_beneficioGratuidadSi">
                            <input  class="form-check-input" 
                            type="radio"
                            name="beneficioGratuidad" 
                            id="formularioSociodemografico_beneficioGratuidadSi" 
                            value="Si"
                            >
                            Si
                </label>
            </div>
        
            <div class="form-check form-check-inline">
                
                <label class="form-check-label" for="formularioSociodemografico_beneficioGratuidadNo">
                    <input  class="form-check-input"
                            type="radio" 
                            name="beneficioGratuidad" 
                            id="formularioSociodemografico_beneficioGratuidadNo"
                            value="No"
                            >
                            No
                </label>
            </div>
        
        </div>
    </section>


<br><br><br>


<!--BOTON ENVIAR FORMULARIO-->
    <section class="row">
        <div class="col-md-9 aling-items-right">
            <button type="submit" 
                    class="btn btn-primary">
                    Enviar formulario
            </button>
        </div>
    </section>
</div>
</form>

<br>
    
	<script src="<?= base_url('assets/jquery-3.7.1.min.js');?>"></script>

	<script src="<?= base_url('assets/bootstrap.bundle.min.js');?>"></script>

<script>
$(document).ready(function(){
    
    //$("input").prop("required", true);
/* ¿Tiene algún tipo de enfermedad mental diagnosticada? */
    $(" #opcionalCualEsSuEnfermedad > label , #opcionalCualEsSuEnfermedad > input ").hide();
    
    $(" #formularioSociodemografico_enfermedadMentalDiagnosticadaSi ").click(function(){
        $(" #opcionalCualEsSuEnfermedad > label , #opcionalCualEsSuEnfermedad > input ").show();
    }); 
    
    $(" #formularioSociodemografico_enfermedadMentalDiagnosticadaNo").click(function(){
        $(" #opcionalCualEsSuEnfermedad > label , #opcionalCualEsSuEnfermedad > input ").hide();
    });
    
    $(" #formularioSociodemografico_enfermedadMentalDiagnosticadaNoSe ").click(function(){
        $( "#opcionalCualEsSuEnfermedad > label , #opcionalCualEsSuEnfermedad > input ").hide();
    }); 

/** ¿La carrera a la cual te has inscrito fue tu primera opción?: */
    $(" #formularioSociodemografico_carreraPrimeraOpcion > label , #formularioSociodemografico_carreraPrimeraOpcion > input ").hide();
    /**SI */
    $(" #formularioSociodemografico_carreraPrimeraOpcionSi ").click(function(){
        $(" #formularioSociodemografico_carreraPrimeraOpcion > label , #formularioSociodemografico_carreraPrimeraOpcion > input ").hide();
    });
    /**NO */
    $(" #formularioSociodemografico_carreraPrimeraOpcionNo ").click(function(){
        $(" #formularioSociodemografico_carreraPrimeraOpcion > label , #formularioSociodemografico_carreraPrimeraOpcion > input ").show();
    });
    


/*¿Provienes de otra carrera?*/ 
    $(" #formularioSociodemografico_carreraDePrecedencia > label , #formularioSociodemografico_carreraDePrecedencia > input ").hide();
    
    $(" #formularioSociodemografico_carreraDePrecedenciaSi ").click(function(){
        $(" #formularioSociodemografico_carreraDePrecedencia > label , #formularioSociodemografico_carreraDePrecedencia > input ").show();
    });
      $(" #formularioSociodemografico_carreraDePrecedenciaNo ").click(function(){
        $(" #formularioSociodemografico_carreraDePrecedencia > label , #formularioSociodemografico_carreraDePrecedencia > input ").hide();
    });
});
</script>
	<script src="<?= base_url('assets/autenticar/validarFormularioSociodemografico.js');?>"></script>

</body>
</html>