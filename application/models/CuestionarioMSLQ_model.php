


<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/** Clase para validar el ingreso de usuarios en la base de datos */
class CuestionarioMSLQ_model extends CI_Model {

    public function __construct(){
		parent::__construct();
		$this->load->database();


    }
    
    public function getPreguntas(){
        /**busca todas las preguntas del cuestionario guardadas en la base de datos */
    $consulta = $this->db->query("SELECT pregunta FROM preguntas_cuestionario_mslq ;");

    $indicePreguntaCuestionario=0;

    foreach ($consulta->result() as $fila){

        $pregunrasCuestionario[ $indicePreguntaCuestionario ]= $fila->pregunta;
        $indicePreguntaCuestionario++;
    }
    //return $consulta;

    return $pregunrasCuestionario;

    }
    public function getCantidadTotalDePreguntas(){

    $consulta = $this->db->query("SELECT COUNT(pregunta) AS cantidadDePreguntas FROM preguntascuestionariomslq ;");
    return $consulta;

    }



 }

