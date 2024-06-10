<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormularioSociodemografico_controller extends CI_Controller {


	public function __construct(){ //
		parent::__construct();
		//$this->load->helper(array('getReglasDeFormularioSociodemografico'));
		$this->load->library('form_validation');
		$this->load->helper(array('autenticaciones/reglasDeFormularioSociodemografico'));
	
	}

	public function index(){
		$this->load->view('formularioSociodemografico_view');
	}

	public function validarFormularioSociodemografico(){
		
		
		

		$reglasDeFormularioSociodemografico	= getReglasDeFormularioSociodemografico();

		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules($reglasDeFormularioSociodemografico);

		//$this->form_validation->set_rules('rut', 'Cars', 'required');
		
		//$this->form_validation->set_rules('abc', 'Cars', 'required');
		
		//si en el formulario login no se ingresan los datos requeridos lanza los mensajes de error
		if(	 $this->form_validation->run() === FALSE){

			//en caso de que los campos esten vacios lanza los errores de "campos vacios"
			
			$this->output->set_status_header( 400 );

			$errores  =  array(

        	/**form_error('ATRIBUTO name DE LA ETIQUETA <input>') */

			/**ERRORES EN LLA INFORMACION INGRESADA
			 * SI ESTA VACIO O SI NO CUMPLE CON LO ESPECIFICADO
			 */
			/**error campo rut */
			
        		'formularioSociodemografico_rut' 
				=> form_error('rut'),

			/**error campo nombre */
        		'formularioSociodemografico_nombre' 
				=> form_error('nombre'),

			/**error campo apellidoPaterno */
        		'formularioSociodemografico_apellidoPaterno' 
				=> form_error('apellidoPaterno'),
				
			/**error campo apellidoMaterno */
        		'formularioSociodemografico_apellidoMaterno'  
				=>  form_error('apellidoMaterno'),
        		
			/**error campo nacionalidad */
        		'formularioSociodemografico_nacionalidad'  
				=>  form_error('nacionalidad'),
			
			/**error campo edad */
        		'formularioSociodemografico_edad'  
				=>  form_error('edad'),
			
			/**error campo genero */
        		'formularioSociodemografico_genero'  
				=>  form_error('genero'),
			
			/**error campo carreraActual */
        		'formularioSociodemografico_carreraActual'  
				=>  form_error('carreraActual'),

			
			/**error campo carreraPrimeraOpcion */
        		'formularioSociodemografico_carreraPrimeraOpcionSiNo'  
				=>  form_error('carreraPrimeraOpcion'),

			/**error campo convivencia */
        		'formularioSociodemografico_convivencia'  
				=>  form_error('convivencia'),

			/**error campo tiempoDeTraslado */
        		'formularioSociodemografico_tiempoDeTraslado'  
				=>  form_error('tiempoDeTraslado'),
        	
			/**error campo carreraDePrecedencia */
				'formularioSociodemografico_carreraDePrecedenciaSiNo'  
				=>  form_error('carreraDePrecedencia'),

			/**error campo carreraDePrecedencia */
				'formularioSociodemografico_razonParaElegirLaCarreraActual'  
				=>  form_error('razonParaElegirLaCarreraActual'),
        		
				'formularioSociodemografico_razonParaElegirLaCarreraActualOtroMotivo'  
				=>  form_error('razonParaElegirLaCarreraActualOtroMotivo'),

        		'formularioSociodemografico_enfermedadMentalDiagnosticada'  
				=>  form_error('enfermedadDiagnosticada'),

        		'formularioSociodemografico_beneficioGratuidad'  
				=>  form_error('beneficioGratuidad'),
        
      		);
/**validar input radio ingresados  */

		/**validar input radio  */
		if($this->input->post('carreraPrimeraOpcion')==='No'){
			
			echo "carreraPrimeraOpcion";
			$errores+=['formularioSociodemografico_carreraPrimeraOpcionNo' 
			=> form_error('carreraPrimeraOpcion')];
		}


		/**validar si presiono Si en el input radio sobre su carrera de precedencia */
		if($this->input->post('carreraDePrecedencia')==='Si'){
				
			echo "carreraDePrecedenciaNombreOtraCarrera";
			$errores+=['formularioSociodemografico_carreraDePrecedenciaOtra' 
			=> form_error('carreraDePrecedenciaNombreOtraCarrera')];
		}
		/**validar  otroMotivo*/
		if($this->input->post('otroMotivo')==='otroMotivo'){
				
			echo "razonParaElegirLaCarreraActualOtroMotivo";
			$errores+=['formularioSociodemografico_razonParaElegirLaCarreraActualMotivo' 
			=> form_error('razonParaElegirLaCarreraActualOtroMotivo')];
		}




		/**validar si presiono Si en el input radio sobre su carrera de precedencia */
		/** */
		if($this->input->post('enfermedadMentalDiagnosticadaPregunta')==='Si'){
			echo "enfermedadMentalDiagnosticadaPregunta";
			$errores+=['formularioSociodemografico_enfermedadMentalDiagnosticada' 
			=> form_error('enfermedadMentalDiagnosticadaPregunta')];
		}

		$rut=$this->input->post('rut');
		if( preg_match( '/^[0-9]+-[0-9kK]{1}$/' , $rut ) ){
			/**rut ingresado exitosamente */
			echo "rutExito/";

			echo gettype( $rut );
			echo strlen( $rut );
			echo strtolower($rut);
		}


			var_dump($errores);
      		
			echo json_encode( $errores );
			

		
		}
		
	}



}
