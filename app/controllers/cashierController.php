<?php

    namespace app\controllers;
    use app\models\mainModel;

    class cashierController extends mainModel{

        /*----------  Controlador registrar caja  ----------*/
        public function registrarCajaControlador(){

            # Almacenando datos#
            $numero=$this->limpiarCadena($_POST['caja_numero']);
            $nombre=$this->limpiarCadena($_POST['caja_nombre']);
		    $efectivo=$this->limpiarCadena($_POST['caja_efectivo']);

            # Verificando campos obligatorios #
            if($numero=="" || $nombre=="" || $efectivo==""){
                $alerta=[
                    "tipo"=>"simple",
                    "titulo"=>"Ocurrió un error inesperado",
                    "texto"=>"No has llenado todos los campos que son obligatorios",
                    "icono"=>"error"
                ];
                return json_encode($alerta);
                exit();
            }

            # Verificando integridad de los datos #
            if($this->verificarDatos("[0-9]{1,5}",$numero)){
                $alerta=[
                    "tipo"=>"simple",
                    "titulo"=>"Ocurrió un error inesperado",
                    "texto"=>"El NUMERO DE CAJA no coincide con el formato solicitado",
                    "icono"=>"error"
                ];
                return json_encode($alerta);
                exit();
            }

            if($this->verificarDatos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ:# ]{3,70}",$nombre)){
		    	$alerta=[
					"tipo"=>"simple",
					"titulo"=>"Ocurrió un error inesperado",
					"texto"=>"El NOMBRE DE CAJA no coincide con el formato solicitado",
					"icono"=>"error"
				];
				return json_encode($alerta);
		        exit();
		    }

		    if($this->verificarDatos("[0-9.]{1,25}",$efectivo)){
		    	$alerta=[
					"tipo"=>"simple",
					"titulo"=>"Ocurrió un error inesperado",
					"texto"=>"El EFECTIVO DE CAJA no coincide con el formato solicitado",
					"icono"=>"error"
				];
				return json_encode($alerta);
		        exit();
		    }

            # Comprobando numero de caja #
            $check_numero=$this->ejecutarConsulta("SELECT caja_numero FROM caja WHERE caja_numero='$numero'");
            if($check_numero->rowCount()>0){
                $alerta=[
					"tipo"=>"simple",
					"titulo"=>"Ocurrió un error inesperado",
					"texto"=>"El número de caja ingresado ya se encuentra registrado en el sistema",
					"icono"=>"error"
				];
				return json_encode($alerta);
		        exit();
            }

            # Comprobando nombre de caja #
            $check_nombre=$this->ejecutarConsulta("SELECT caja_nombre FROM caja WHERE caja_nombre='$nombre'");
            if($check_nombre->rowCount()>0){
                $alerta=[
					"tipo"=>"simple",
					"titulo"=>"Ocurrió un error inesperado",
					"texto"=>"El nombre o código de caja ingresado ya se encuentra registrado en el sistema",
					"icono"=>"error"
				];
				return json_encode($alerta);
		        exit();
            }


            # Comprobando que el efectivo sea mayor o igual a 0 #
            $efectivo=number_format($efectivo,2,'.','');
            if($efectivo<0){
                $alerta=[
					"tipo"=>"simple",
					"titulo"=>"Ocurrió un error inesperado",
					"texto"=>"No puedes colocar una cantidad de efectivo menor a 0",
					"icono"=>"error"
				];
				return json_encode($alerta);
		        exit();
            }

            $caja_datos_reg=[
                [
                    "campo_nombre"=>"caja_numero",
                    "campo_valor"=>$numero
                ],
                [
					"campo_nombre"=>"caja_nombre",
					"campo_valor"=>$nombre
				],
                [
					"campo_nombre"=>"caja_efectivo",
					"campo_valor"=>$efectivo
				]
            ];

            $registrar_caja=$this->guardarDatos("caja",$caja_datos_reg);

            if($registrar_caja){

                $registrar_caja->commit();

                $alerta=[
					"tipo"=>"limpiar",
					"titulo"=>"Caja registrada",
					"texto"=>"La caja ".$nombre." #".$numero." se registro con exito",
					"icono"=>"success"
				];

            }else{

                $registrar_caja->rollBack();

                $alerta=[
					"tipo"=>"simple",
					"titulo"=>"Ocurrió un error inesperado",
					"texto"=>"No se pudo registrar la caja, por favor intente nuevamente",
					"icono"=>"error"
				];

            }

            return json_encode($alerta);
        }
        
    }