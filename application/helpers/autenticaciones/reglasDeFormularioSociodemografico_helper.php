<?php
function getReglasDeFormularioSociodemografico(){

    return  array(

        /**campo rut */
        array(  'field' => 'rut',
                'label' => 'RUT',
            /**trim quita los espacios
             * regex_match compara lo ingresado con la expresion regular
             */
                'rules' => 'trim | required | regex_match[/^[0-9]+-[0-9kK]{1}$/]',
                'errors'=> array(
                'required' => 'El %s es requerido.',
            )
        ),
        
    );        
}

?>