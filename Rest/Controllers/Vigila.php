<?php
require 'Models/VigilaModel.php';
class Vigila {

  private $vigilaModel;

  /*
   * RECURSO URL: http://vigilatuobra.qroo.gob.mx/Obras/GetAll?EjercicioFiscal=2019
   */

  /************************
  GET Vigila
  URL: http://localhost:2145/vigilaTuObra/Rest/Vigila/getAllVigila/
  *************************/


  public function get($parametros){
    //echo var_dump($parametros);
    $this->vigilaModel = new VigilaModel();
    if(!empty($parametros[0])){
      switch($parametros[0]){

        case 'getAllVigila':
        return $this->vigilaModel->getAllVigila();
        break;

        default:
        return [ "error"=>"No hay parámetros para buscar una solicitud"];
        break;
      }
    }
  }

  /************************
  POST Vigila
  URL: http://localhost:2145/vigilaTuObra/Rest/Vigila/insertVigila/
  *************************/

  public function post($parametros){
    $this->vigilaModel = new VigilaModel();
    // Se obtiene el JSON
    $cuerpo = file_get_contents('php://input');
    //Se decodifica el JSON para volverlo como una arreglo
    $array = json_decode($cuerpo);
    //echo $array['user'];
    //Se busca el recurso pedido por el usuario

    switch($parametros[0]){
      case 'insertVigila':
      return $this->vigilaModel->insertVigila($array);
      break;

      default:
      echo 'Error';
      break;
    }
  }
}
?>
