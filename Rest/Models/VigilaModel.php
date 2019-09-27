<?php
require_once('core/db_abstract_model.php');
class VigilaModel extends DBAbstractModel{

  public function __construct() {}

    /************************
    GET Vigila
    *************************/

    public function getAllVigila(){
      $this->query="SELECT * FROM vto";
      $this->get_results_from_query();
      if(count($this->rows) > 0){
        return [
          "datos"=>$this->rows
        ];
      }
    }

    /************************
    POST Vigila
    *************************/

    function insertVigila($array){
      if(!empty($array)){
        $consulta = "INSERT INTO `Vigila` (`Cedula`,`EjercicioFiscal`, `NombreObraPublica`,`SectorInversion`,`Etapa`,`InstanciaEjecutora`,
                                           `FondoPrograma`,`TipoAdjudicacion`,`Municipio`,`Localidad`,`Colonia`,`Calle`,`ModalidadEjecucion`,
                                           `Contratista`,`NoContrato`,`FechaInicioContrato`,`FechaFinContrato`,`InversionContratada`,`Residente`,
                                           `Latitud`,`Longitud`,`PorcentajeAvance`,`Supervisor`)
        VALUES (
          '$array->Cedula',
          '$array->EjercicioFiscal',
          '$array->NombreObraPublica',
          '$array->SectorInversion',
          '$array->Etapa',
          '$array->InstanciaEjecutora',
          '$array->FondoPrograma',
          '$array->TipoAdjudicacion',
          '$array->Municipio',
          '$array->Localidad',
          '$array->Colonia',
          '$array->Calle',
          '$array->ModalidadEjecucion',
          '$array->Contratista',
          '$array->NoContrato',
          '$array->FechaInicioContrato',
          '$array->FechaFinContrato',
          '$array->InversionContratada',
          '$array->Residente',
          '$array->Latitud',
          '$array->Longitud',
          '$array->PorcentajeAvance',
          '$array->Supervisor');";
        }
        $this->query = $consulta;
        // Ejecutar sentencia preparada
        $result = $this->execute_single_query();
        if ($result['mensaje'] == "Registrado"){
          return [
            "datos" =>"Se ha registrado el usuario"
          ];
        }else{
          return [
            "error"=>"Error en el JSON"
          ];
        }
      }



}
?>
