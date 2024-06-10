<?php 
function getReglasDePrueba(){

    return  array(
        array(
                'field' => 'inputRadioPruebaName',
                'label' => 'radio prueba',
                'rules' => 'required|trim|alpha|exact_length[2]|regex_match[/si|no|ns/]',//
                'errors'=> array(
                    'required'      => 'El campo %s es requerido.',
                    'exact_length'    => 'Error en %s: valor no corresponde al establecido',
                    'alpha'    => 'Ingresar una %s válida alpha',
                    'regex_match' => 'regex_match sino'
                    )
        ),
         array(
                'field' => 'inputTextPruebaName',
                'label' => 'prueba texto',
                'rules' => 'required|alpha_numeric|trim|min_length[0]|max_length[15]',
                'errors'=> array(
                    'required'      => 'El campo %s es requerido.',
                    'alpha_numeric' => 'Ingresar una %s válida',
                    'min_length'    => 'Ingresar una %s válida',
                    'max_length'    => 'Ingresar una %s válida',
                    )
        ),
    );

}


?>