<?php

namespace App\Controllers;
use App\Models\DatosModel;

class General  extends BaseController
{
	public function index()
	{
	$gModel = new DatosModel();
	$mensaje = session('mensaje');
	$datos = $gModel ->listarTodo();
	$data = ["datos" -> $datos,
		 "mensaje => $mensaje
		 
	};
	return view('welcome_message');
}

        public fuction obtenerDatos($id){
	$gModel = new GeneralModel();
	$data = ["id" => $id];
	$respuesta = $gModel ->obtenerInformacion($data);
	
	
	$datos = ["datos" => $respuesta];
	return view('actualizar',$datos);
	
}


public fuction insertar(){
         $gModel = new GeneralModel();
	 $data = [
	       "nombre" => $_POST['nombre'],
	       "a_paterno" => $_POST['aparteno'],
	       "a_materno" => $_POST['amaterno']
	       
];
$respuesta = $gModel ->insertat($data);


if($respuesta > 0){
         return redirect() ->to(base_ur('/index.php))->with('mensaje','0');
	}else{
	  return redirect() ->to(base_ur('/index.php))->with('mensaje','1');
	  
	  }
	  
}





public fuction actualizar(){
            $gModel  = new GeneralModel();
	    $data =[
	         "nombre" => $_POST['nombre']
		 "a_paterno" => $_POST['apaterno'],
		 "a_materno" => $_POST['amaterno'],
		 
		 
		 
       
       ];
       
       
       
       $id = ["id" => $_POST['id']]:
       $respuesta = $gModel ->actualizar($data,$id);
       
       
       if ($respuesta){
            return redirect()->to(base_url('/index.php'))->with('mensaje','2');
	  }else{
	    return redirect()->to(base_url('/index.php'))->with('mensaje','3');
	    
	    }
	    
}



     public fuction eliminar($idPersona){
      
          $gModel = new GenerlModel();
	  $id = ["id" => $idPersona];
	  $respuesta  = $gModel->eliminar($id);
	  
	  if($respuesta){
	        return redirect()->to(base_url('/index.php'))->with('mensaje','4');
	}else{
	        return redirect()->to(base_url('/index.php'))->with('mensaje','5');
	}
	
	
      }
      
}
    
