<?php
class control_contenido
{

    





    public function verInformacion($datos){

        $num = $datos['nombre'];
        $micarpeta = '../archivos/'.$num;
        $directorio = '../archivos';
        $ficheros1  = scandir($directorio);
        




        if (!file_exists($micarpeta)) {
            mkdir($micarpeta);
            $valor="se creo el directorio". $micarpeta;
            }else{
                $valor="error, existe el directorio";
            exit;
            }

            // print_r($datos);
     return $valor;
        }    
   
     

    
    










 


    public function obtenerArchivos()
    {
        $directorio = "../archivos/";
        $archivos = scandir($directorio, 1);
        return $archivos;
    }


  











public function subirArchivo($datos)
{
 
$v = $datos['clave'];

if($v == 0){

    $target_dir = "../PWD/Nro1213DriveV2/archivos/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
   // echo $target_file."\n";


    $target_file2 =basename($_FILES["fileToUpload"]["name"]);
 //   echo $target_file2."\n";  

    
    $uploadOk = 1;
    $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $FileType=$_FILES['fileToUpload']['type'];
  // echo $FileType."<br>";
  // $iFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//echo $iFileType;


    $valor=null;

    if($FileType != "application/msword " && $FileType != "application/pdf" && $FileType != "image/jpg" && $FileType != "image/png" && $FileType != "image/gif" && $FileType != "application/vnd.ms-excel" && $FileType != "application/zip") {
        $valor= "Perdon, se requiere de una extension indicada.";
        $uploadOk = 0;  
    }



    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      $valor= "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {

      if (copy($_FILES["fileToUpload"]["tmp_name"], "../archivos/".$target_file2)) {
        $valor= "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
        $valor= "Sorry, there was an error uploading your file.";
        }
    }  

    
    

}else if($v == 1){
    $valor="FUTURAS MODIFICACIONES";
    }

    return $valor;
}

}

    
    






    function mostrarIcono($nombre) {
    /* Según un nombre de archivo, elige un ícono acorde a la extensión
     * @param String $nombre 
     * @return String $icono El código de icono correspondiente a Font Awesome
     */
    switch ($nombre) {
        case preg_match('/(.*?)\.(jpg|png|gif|bmp|tiff|jpeg|webp)$/i', $nombre):
            $icono = "fas fa-file-image"; // #icono en amarchivo.php = img
            break;
        case preg_match('/(.*?)\.(zip|rar|7z|tar|gz|bin)$/i', $nombre):
            $icono = "fas fa-file-archive"; // #icono en amarchivo.php = zip
            break;
        case preg_match('/(.*?)\.(docx|doc|odt|rtf|txt|docm|dot|dotx|dotm)$/i', $nombre):
            $icono = "fas fa-file-word"; // #icono en amarchivo.php = doc
            break;
        case preg_match('/(.*?)\.(pdf)$/i', $nombre):
            $icono = "fas fa-file-pdf"; // #icono en amarchivo.php = pdf
            break;
        case preg_match('/(.*?)\.(xls|xlsx|xlsm|xltx|xlt|ods)$/i', $nombre):
            $icono = "fas fas fa-file-excel"; // #icono en amarchivo.php = xls
            break;
        default: $icono = "fas fa-file";
            break;
        }
    return $icono;
}
?>