<?php
namespace Sena\libs;
class Controller{

    /**
     * Metodo para cargar un modelo desde la carpeta mode
     * 
     * Este metodo se utiliza para cargar los modelos de forma dinamica, solo tne que mencionar el nombre del modelo
     * 
     * @param string $model Nombre del modelo
     * @access public 
     * @return object Instancia del modelo
     */
    public function model($model){
        $model = "Sena\model\\".$model;
        return new $model;
    }

    public function view($view, $data = [], $layout) {
        ob_start();
        $view = $view . ".view";
        if (file_exists('../app/views/'. $view .'.php')) {
            require_once('../app/views/'. $view .'.php');
            $contend = ob_get_clean();
            require_once('../app/views/layout/'. $layout .'.layout.php');
        } else {
            die("La vista $view no existe");
        }
    }
}