<?php

session_start();

include 'access_db.php';//incluimos el acceso a la base de datos
include '../libraries/PHPMailer-master/class.phpmailer.php';//incluir libreria para correo
include '../libraries/PHPMailer-master/class.smtp.php';//incluir libreria para correo


$itNombre = $mysqli->real_escape_string($_POST["itNombre"]);//validar sql injection
$taDescripcion = $mysqli->real_escape_string($_POST["taDescripcion"]);//validar sql injection
$itLink = $mysqli->real_escape_string($_POST["itLink"]);//validar sql injection
$correos = $_POST["correo"];

$concatCorreos="";


foreach( $correos as $key => $n) 
{
 
    $concatCorreos.=$n."|";
}
$rutas2 = $concatCorreos;
    $ruta2 = explode('|', $rutas2);
    $a2 = 1;
    
    $correo1="";
    $correo2="";
    $correo3="";
    foreach ($ruta2 as $value2) 
    {
        if ($a2 <= (count($ruta2) - 1)) 
        {
            if($a2==1)
            {
                $correo1=$value2;
            }elseif($a2==2)
            {
                $correo2=$value2;
            }elseif($a2==3)
            {
                $correo3=$value2;
            }
            $a2++;
        }
    }

//echo $concatCorreos;
 //echo "<br>correo 1:".$correo1."<br>";
   // echo "<br>correo 2:".$correo2."<br>";
   // echo "<br>correo 3:".$correo3."<br>";
    
//echo "<br><hr>";

$resultPrinci = $mysqli->query("UPDATE tbl_plantillas SET nombre_aldia='".$itNombre."', descripcion_aldia='".$taDescripcion."', link_aldia='".$itLink."', "
                . " correo1='".$correo1."',correo2='".$correo2."',correo3='".$correo3."',"
                . " fecha_aldia_modificacion=now() WHERE id=".$_POST["id"]."");

if(isset($_FILES["file_1"]["name"]) && !empty($_FILES["file_1"]["name"]))
{
    //echo "<br>archivo 1 " . $_FILES["file_1"]["name"];
    //echo "<br>hiden 1 " . $_POST["hidenFile_1"];
    
    unlink("../uploadAlDia/" . $_POST["hidenFile_1"]);
    
    if (move_uploaded_file($_FILES["file_1"]["tmp_name"], "../uploadAlDia/" . $_FILES["file_1"]["name"])) 
    {
        $path_parts = pathinfo($_FILES["file_1"]["name"]);
        $image_path = $path_parts['filename'] . '_' . time() . '.' . $path_parts['extension'];
        
        //echo "<BR>brebes subio en : " . "../uploadAlDia/" . $_FILES["file_1"]["name"];
        rename("../uploadAlDia/" . $_FILES["file_1"]["name"], "../uploadAlDia/" . $image_path);
        //echo "<br>se renombro el archivo ok";
        
        $result = $mysqli->query("UPDATE tbl_plantillas SET archivo1='".$image_path."' WHERE id=".$_POST["id"]."");
        if ($result) 
        {
           // echo "<br>!!!!!!!ACTUALIZADO EXITOSO!!!!!!!<br>";
           
        }else 
        {
           // echo "<BR>ERROR EN ACTUALIZANDO : UPDATE tbl_aldia SET archivo1='".$image_path."' WHERE id=".$_POST["id"]."";
        }
    } else 
    {
        //echo "Error subiendo el archivo \n Por favor comuniqueses con su administrador";
    }
    
    
}
if(isset($_FILES["file_2"]["name"]) && !empty($_FILES["file_2"]["name"]))
{
    //echo "<br>archivo 2 " .  $_FILES["file_2"]["name"];
    //echo "<br>hiden 2 " . $_POST["hidenFile_2"];
    
    unlink("../uploadAlDia/" . $_POST["hidenFile_2"]);
    
    if (move_uploaded_file($_FILES["file_2"]["tmp_name"], "../uploadAlDia/" . $_FILES["file_2"]["name"])) 
    {
        $path_parts = pathinfo($_FILES["file_2"]["name"]);
        $image_path = $path_parts['filename'] . '_' . time() . '.' . $path_parts['extension'];
        
        //echo "<BR>brebes subio en : " . "../uploadAlDia/" . $_FILES["file_2"]["name"];
        rename("../uploadAlDia/" . $_FILES["file_2"]["name"], "../uploadAlDia/" . $image_path);
       // echo "<br>se renombro el archivo ok";
        
        $result = $mysqli->query("UPDATE tbl_plantillas SET archivo2='".$image_path."' WHERE id=".$_POST["id"]."");if ($result) 
        {
            //echo "<br>!!!!!!!ACTUALIZADO EXITOSO!!!!!!!<br>";
           
        }else 
        {
            //echo "<BR>ERROR EN ACTUALIZANDO : UPDATE tbl_aldia SET archivo2='".$image_path."' WHERE id=".$_POST["id"]."";
        }
    } else 
    {
        //echo "Error subiendo el archivo \n Por favor comuniqueses con su administrador";
    }
    
    
}
if(isset($_FILES["file_3"]["name"]) && !empty($_FILES["file_3"]["name"]))
{
   // echo "<br>archivo 3 " . $_FILES["file_3"]["name"];
   // echo "<br>hiden 3 " . $_POST["hidenFile_3"];
    
    unlink("../uploadAlDia/" . $_POST["hidenFile_3"]);
    
    if (move_uploaded_file($_FILES["file_3"]["tmp_name"], "../uploadAlDia/" . $_FILES["file_3"]["name"])) 
    {
        $path_parts = pathinfo($_FILES["file_3"]["name"]);
        $image_path = $path_parts['filename'] . '_' . time() . '.' . $path_parts['extension'];
        
        //echo "<BR>brebes subio en : " . "../uploadAlDia/" . $_FILES["file_3"]["name"];
        rename("../uploadAlDia/" . $_FILES["file_3"]["name"], "../uploadAlDia/" . $image_path);
       // echo "<br>se renombro el archivo ok";
        
        $result = $mysqli->query("UPDATE tbl_plantillas SET archivo3='".$image_path."' WHERE id=".$_POST["id"]."");
        if ($result) 
        {
           // echo "<br>!!!!!!!ACTUALIZADO EXITOSO!!!!!!!<br>";
           
        }else 
        {
           // echo "<BR>ERROR EN ACTUALIZANDO : UPDATE tbl_aldia SET archivo3='".$image_path."' WHERE id=".$_POST["id"]."";
        }
    } else 
    {
        //echo "Error subiendo el archivo \n Por favor comuniqueses con su administrador";
    }
    
}




            $mail = new PHPMailer(true); // the true param means it will throw exceptions on     errors, which we need to catch
            $mail->Host       = "relay-hosting.sercureserver.net"; // SMTP server
            $mail->Port       = 25;                    // set the SMTP port
            $mail->SetFrom('desarrollo@youoneagency.com', 'Banco Popular');
            $mail->Subject = 'Plantilla Actualizada';
            $html="";

        
           /*        INICIO ENVIAR MAIL PLANTILA   */
        

            //Consulta si exite el usuario
            $result = $mysqli->query("SELECT * FROM tbl_plantillas WHERE id=".$_POST["id"].";");
            $total = $result->num_rows;
            if ($total > 0) 
            {
                $row = $result->fetch_array();
                if(utf8_encode($row["tipo"])=="Al día")
                {
                    $html .='
                    <html>
                    <head>
                    <title>Plantila al Día</title>
                    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                    </head>
                    <body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
                    <center>
                            <table style="background: #fff; margin: 0; padding: 0; border: 0; outline: none; line-height: 0 ; border-spacing: 0;" id="Table_01" width="680" bgcolor="ebebeb" border="0" cellpadding="0" cellspacing="0">
                                    <tr style="margin: 0; padding: 0; border: 0; outline: none; line-height: 0 ; border-spacing: 0;">
                                            <th style="margin: 0; padding: 0; border: 0; outline: none; line-height: 0 ; border-spacing: 0;" colspan="2">

                                                <img src="../img/sectionsAlDia/header.png"  width="688" height="157" alt=""/>
                                            </th>
                                    </tr>

                                    <tr style="margin: 0; padding: 0; border: 0; outline: none; line-height: 0 ; border-spacing: 0; ">

                                        <td style="margin: 0; padding: 0; border: 0; outline: none; line-height: 0 ; border-spacing: 0;" rowspan="8">
                                                    <img src="../img/sectionsAlDia/nav.png" width="297" height="700" alt=""/>

                                        </td>
                                        <td style="margin: 0; padding: 0; outline: none; line-height: 0 ; border-spacing: 0;   border-right-style: solid;
                      border-right-color: #AEAEAE;
                      border-right-width: 1px; "  width="385" bgcolor="#fff">

                                            <hr style="  background-color: rgba(8, 208, 8, 1);
                      height: 2px;
                      margin-top: -6px;
                      margin-bottom: 0px;
                      height: 1px;
                      width: 355px;">
                                                <p style=" padding: 4px; text-align: center; height: 34px;
                                                            font-size: 18px;
                                                            line-height: 1.42857143;
                                                            color: #555;
                                                            font-weight: bolder;">'.$row["nombre_aldia"].'</p>

                                            <hr style="    background-color: rgba(8, 208, 8, 1);
                      height: 2px;
                      margin-top: -6px;
                      margin-bottom: 0px;
                      height: 1px;
                      width: 355px;">
                                                <p style=" padding: 4px;text-align: justify; height: 34px;
                                                            font-size: 16px;
                                                            line-height: 1.42857143;
                                                            height: auto;
                                                            color: #555;   padding-right: 17px;
                      padding-left: 17px;">'.$row["descripcion_aldia"].'</p>


                                        </td>
                                    </tr>  

                                    <tr>
                                            <td style="margin: 0; padding: 0; outline: none; line-height: 0 ; border-spacing: 0;   border-right-style: solid;
                      border-right-color: #AEAEAE;
                      border-right-width: 1px; " bgcolor="#fff" >
                                                <hr style="
                                                background-color: rgba(11, 173, 11, 1);
                                                    height: 2px;
                                                    margin-top: -6px;
                                                    margin-bottom: 0px;
                                                    height: 1px;
                                                    width: 355px;">
                                                <br>
                                                <a href="'.$row["link_aldia"].'"><img style="padding: 10px;" width="365px" src="../img/clic-aqui.png" alt=""/></a>

                                                <br>
                                                <hr style="
                                                background-color: rgba(11, 173, 11, 1);
                                                    height: 2px;
                                                    margin-top: -6px;
                                                    margin-bottom: 0px;
                                                    height: 1px;
                                                    width: 355px;">
                                            </td>
                                    </tr>
                                    <tr>
                                            <td style="margin: 0; padding: 0; outline: none; line-height: 0 ; border-spacing: 0;   border-right-style: solid;
                      border-right-color: #AEAEAE;
                      border-right-width: 1px; " bgcolor="#fff" >
                                                <p style=" padding: 4px; text-align: center; height: 34px;
                                                            font-size: 18px;
                                                            line-height: 1.42857143;
                                                            color: #555;
                                                            font-weight: bolder;">Archivos Adjuntos</p>
                                                <article style="padding-bottom: 70px; padding-left:14px;">
                                                
                                                ';
                                                
                                                for($i=1; $i<=3;$i++)
                                                {
                                                    if($row["archivo".$i.""]!="")
                                                    {
                                                        $html .='<p style="display: inline-block">'.$row["archivo".$i.""].'</p>&nbsp;&nbsp;&nbsp;';
                                                    }
                                                }
                
                                            $html .=' </article>

                                                <hr style="  
                                                background-color: rgba(1, 223, 1, 1);
                                                height: 1px;
                                                margin-top: -6px;
                                                margin-bottom: 0px;
                                                width: 355px;">
                                            </td>
                                    </tr>
                                    <tr>
                                            <td style="margin: 0; padding: 0; outline: none; line-height: 0 ; border-spacing: 0;   border-right-style: solid;
                                            border-right-color: #AEAEAE;
                                            border-right-width: 1px; "  width="385" bgcolor="#fff">
                                                <br>
                                           </td>
                                    </tr>
                                    <tr>
                                            <td style="margin: 0; padding: 0; outline: none; line-height: 0 ; border-spacing: 0;   border-right-style: solid;
                                            border-right-color: #AEAEAE;
                                            border-right-width: 1px; " bgcolor="#fff" >

                                            </td>
                                    </tr>

                                    <tr>
                                            <td style="margin: 0; padding: 0; outline: none; line-height: 0 ; border-spacing: 0;   border-right-style: solid;
                      border-right-color: #AEAEAE;
                      border-right-width: 1px; " bgcolor="#fff" >

                                            </td>
                                    </tr>

                                    <tr>
                                            <td style="margin: 0; padding: 0; outline: none; line-height: 0 ; border-spacing: 0;   border-right-style: solid;
                      border-right-color: #AEAEAE;
                      border-right-width: 1px; " bgcolor="#fff" >

                                            </td>
                                    </tr>
                                    <tr>
                                            <td style="margin: 0; padding: 0; outline: none; line-height: 0 ; border-spacing: 0;   border-right-style: solid;
                      border-right-color: #AEAEAE;
                      border-right-width: 1px; " bgcolor="#fff" >

                                            </td>
                                    </tr>

                                    <tr style="margin: 0; padding: 0; border: 0; outline: none; line-height: 0 ; border-spacing: 0;">
                                            <th style="margin: 0; padding: 0; border: 0; outline: none; line-height: 0 ; border-spacing: 0;" colspan="2" >
                                            <img src="../img/sectionsAlDia/footer.png"  width="688" height="157" alt=""/>
                                            </th>
                                    </tr>

                            </table>
                    </center>
                    </body>
                    </html>'; 
                }elseif($row["tipo"]=="Actualizaciones")
                {
                    $html .='
                    <html>
                    <head>
                    <title>Plantila al Día</title>
                    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                    </head>
                    <body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
                    <center>
                            <table style="background: #fff; margin: 0; padding: 0; border: 0; outline: none; line-height: 0 ; border-spacing: 0;" id="Table_01" width="680" bgcolor="ebebeb" border="0" cellpadding="0" cellspacing="0">
                                    <tr style="margin: 0; padding: 0; border: 0; outline: none; line-height: 0 ; border-spacing: 0;">
                                            <th style="margin: 0; padding: 0; border: 0; outline: none; line-height: 0 ; border-spacing: 0;" colspan="2">

                                                <img src="../img/sectionsActualizaciones/header.png"  width="688" height="157" alt=""/>
                                            </th>
                                    </tr>

                                    <tr style="margin: 0; padding: 0; border: 0; outline: none; line-height: 0 ; border-spacing: 0; ">

                                        <td style="margin: 0; padding: 0; border: 0; outline: none; line-height: 0 ; border-spacing: 0;" rowspan="8">
                                                    <img src="../img/sectionsActualizaciones/nav.png" width="297" height="700" alt=""/>

                                        </td>
                                        <td style="margin: 0; padding: 0; outline: none; line-height: 0 ; border-spacing: 0;   border-right-style: solid;
                      border-right-color: #AEAEAE;
                      border-right-width: 1px; "  width="385" bgcolor="#fff">

                                            <hr style="  background-color: rgba(8, 208, 8, 1);
                      height: 2px;
                      margin-top: -6px;
                      margin-bottom: 0px;
                      height: 1px;
                      width: 355px;">
                                                <p style=" padding: 4px; text-align: center; height: 34px;
                                                            font-size: 18px;
                                                            line-height: 1.42857143;
                                                            color: #555;
                                                            font-weight: bolder;">'.$row["nombre_aldia"].'</p>

                                            <hr style="    background-color: rgba(8, 208, 8, 1);
                      height: 2px;
                      margin-top: -6px;
                      margin-bottom: 0px;
                      height: 1px;
                      width: 355px;">
                                                <p style=" padding: 4px;text-align: justify; height: 34px;
                                                            font-size: 16px;
                                                            line-height: 1.42857143;
                                                            height: auto;
                                                            color: #555;   padding-right: 17px;
                      padding-left: 17px;">'.$row["descripcion_aldia"].'</p>


                                        </td>
                                    </tr>  

                                    <tr>
                                            <td style="margin: 0; padding: 0; outline: none; line-height: 0 ; border-spacing: 0;   border-right-style: solid;
                      border-right-color: #AEAEAE;
                      border-right-width: 1px; " bgcolor="#fff" >
                                                <hr style="
                                                background-color: rgba(11, 173, 11, 1);
                                                    height: 2px;
                                                    margin-top: -6px;
                                                    margin-bottom: 0px;
                                                    height: 1px;
                                                    width: 355px;">
                                                <br>
                                                <a href="'.$row["link_aldia"].'"><img style="padding: 10px;" width="365px" src="../img/clic-aqui.png" alt=""/></a>

                                                <br>
                                                <hr style="
                                                background-color: rgba(11, 173, 11, 1);
                                                    height: 2px;
                                                    margin-top: -6px;
                                                    margin-bottom: 0px;
                                                    height: 1px;
                                                    width: 355px;">
                                            </td>
                                    </tr>
                                    <tr>
                                            <td style="margin: 0; padding: 0; outline: none; line-height: 0 ; border-spacing: 0;   border-right-style: solid;
                      border-right-color: #AEAEAE;
                      border-right-width: 1px; " bgcolor="#fff" >
                                                <p style=" padding: 4px; text-align: center; height: 34px;
                                                            font-size: 18px;
                                                            line-height: 1.42857143;
                                                            color: #555;
                                                            font-weight: bolder;">Archivos Adjuntos</p>
                                                <article style="padding-bottom: 70px; padding-left:14px;">
                                                
                                                ';
                                                
                                                for($i=1; $i<=3;$i++)
                                                {
                                                    if($row["archivo".$i.""]!="")
                                                    {
                                                        $html .='<p style="display: inline-block">'.$row["archivo".$i.""].'</p>&nbsp;&nbsp;&nbsp;';
                                                    }
                                                }
                
                                            $html .=' </article>

                                                <hr style="  
                                                background-color: rgba(1, 223, 1, 1);
                                                height: 1px;
                                                margin-top: -6px;
                                                margin-bottom: 0px;
                                                width: 355px;">
                                            </td>
                                    </tr>
                                    <tr>
                                            <td style="margin: 0; padding: 0; outline: none; line-height: 0 ; border-spacing: 0;   border-right-style: solid;
                                            border-right-color: #AEAEAE;
                                            border-right-width: 1px; "  width="385" bgcolor="#fff">
                                                <br>
                                           </td>
                                    </tr>
                                    <tr>
                                            <td style="margin: 0; padding: 0; outline: none; line-height: 0 ; border-spacing: 0;   border-right-style: solid;
                                            border-right-color: #AEAEAE;
                                            border-right-width: 1px; " bgcolor="#fff" >

                                            </td>
                                    </tr>

                                    <tr>
                                            <td style="margin: 0; padding: 0; outline: none; line-height: 0 ; border-spacing: 0;   border-right-style: solid;
                      border-right-color: #AEAEAE;
                      border-right-width: 1px; " bgcolor="#fff" >

                                            </td>
                                    </tr>

                                    <tr>
                                            <td style="margin: 0; padding: 0; outline: none; line-height: 0 ; border-spacing: 0;   border-right-style: solid;
                      border-right-color: #AEAEAE;
                      border-right-width: 1px; " bgcolor="#fff" >

                                            </td>
                                    </tr>
                                    <tr>
                                            <td style="margin: 0; padding: 0; outline: none; line-height: 0 ; border-spacing: 0;   border-right-style: solid;
                      border-right-color: #AEAEAE;
                      border-right-width: 1px; " bgcolor="#fff" >

                                            </td>
                                    </tr>

                                    <tr style="margin: 0; padding: 0; border: 0; outline: none; line-height: 0 ; border-spacing: 0;">
                                            <th style="margin: 0; padding: 0; border: 0; outline: none; line-height: 0 ; border-spacing: 0;" colspan="2" >
                                            <img src="../img/sectionsActualizaciones/footer.png"  width="688" height="157" alt=""/>
                                            </th>
                                    </tr>

                            </table>
                    </center>
                    </body>
                    </html>'; 
                }elseif($row["tipo"]=="Extra")
                {
                    $html .='
                    <html>
                    <head>
                    <title>Plantila al Día</title>
                    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                    </head>
                    <body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
                    <center>
                            <table style="background: #fff; margin: 0; padding: 0; border: 0; outline: none; line-height: 0 ; border-spacing: 0;" id="Table_01" width="680" bgcolor="ebebeb" border="0" cellpadding="0" cellspacing="0">
                                    <tr style="margin: 0; padding: 0; border: 0; outline: none; line-height: 0 ; border-spacing: 0;">
                                            <th style="margin: 0; padding: 0; border: 0; outline: none; line-height: 0 ; border-spacing: 0;" colspan="2">

                                                <img src="../img/sectionsExtra/header.png"  width="688" height="157" alt=""/>
                                            </th>
                                    </tr>

                                    <tr style="margin: 0; padding: 0; border: 0; outline: none; line-height: 0 ; border-spacing: 0; ">

                                        <td style="margin: 0; padding: 0; border: 0; outline: none; line-height: 0 ; border-spacing: 0;" rowspan="8">
                                                    <img src="../img/sectionsExtra/nav.png" width="297" height="700" alt=""/>

                                        </td>
                                        <td style="margin: 0; padding: 0; outline: none; line-height: 0 ; border-spacing: 0;   border-right-style: solid;
                      border-right-color: #AEAEAE;
                      border-right-width: 1px; "  width="385" bgcolor="#fff">

                                            <hr style="  background-color: rgba(8, 208, 8, 1);
                      height: 2px;
                      margin-top: -6px;
                      margin-bottom: 0px;
                      height: 1px;
                      width: 355px;">
                                                <p style=" padding: 4px; text-align: center; height: 34px;
                                                            font-size: 18px;
                                                            line-height: 1.42857143;
                                                            color: #555;
                                                            font-weight: bolder;">'.$row["nombre_aldia"].'</p>

                                            <hr style="    background-color: rgba(8, 208, 8, 1);
                      height: 2px;
                      margin-top: -6px;
                      margin-bottom: 0px;
                      height: 1px;
                      width: 355px;">
                                                <p style=" padding: 4px;text-align: justify; height: 34px;
                                                            font-size: 16px;
                                                            line-height: 1.42857143;
                                                            height: auto;
                                                            color: #555;   padding-right: 17px;
                      padding-left: 17px;">'.$row["descripcion_aldia"].'</p>


                                        </td>
                                    </tr>  

                                    <tr>
                                            <td style="margin: 0; padding: 0; outline: none; line-height: 0 ; border-spacing: 0;   border-right-style: solid;
                      border-right-color: #AEAEAE;
                      border-right-width: 1px; " bgcolor="#fff" >
                                                <hr style="
                                                background-color: rgba(11, 173, 11, 1);
                                                    height: 2px;
                                                    margin-top: -6px;
                                                    margin-bottom: 0px;
                                                    height: 1px;
                                                    width: 355px;">
                                                <br>
                                                <a href="'.$row["link_aldia"].'"><img style="padding: 10px;" width="365px" src="../img/clic-aqui.png" alt=""/></a>

                                                <br>
                                                <hr style="
                                                background-color: rgba(11, 173, 11, 1);
                                                    height: 2px;
                                                    margin-top: -6px;
                                                    margin-bottom: 0px;
                                                    height: 1px;
                                                    width: 355px;">
                                            </td>
                                    </tr>
                                    <tr>
                                            <td style="margin: 0; padding: 0; outline: none; line-height: 0 ; border-spacing: 0;   border-right-style: solid;
                      border-right-color: #AEAEAE;
                      border-right-width: 1px; " bgcolor="#fff" >
                                                <p style=" padding: 4px; text-align: center; height: 34px;
                                                            font-size: 18px;
                                                            line-height: 1.42857143;
                                                            color: #555;
                                                            font-weight: bolder;">Archivos Adjuntos</p>
                                                <article style="padding-bottom: 70px; padding-left:14px;">
                                                
                                                ';
                                                
                                                for($i=1; $i<=3;$i++)
                                                {
                                                    if($row["archivo".$i.""]!="")
                                                    {
                                                        $html .='<p style="display: inline-block">'.$row["archivo".$i.""].'</p>&nbsp;&nbsp;&nbsp;';
                                                    }
                                                }
                
                                            $html .=' </article>

                                                <hr style="  
                                                background-color: rgba(1, 223, 1, 1);
                                                height: 1px;
                                                margin-top: -6px;
                                                margin-bottom: 0px;
                                                width: 355px;">
                                            </td>
                                    </tr>
                                    <tr>
                                            <td style="margin: 0; padding: 0; outline: none; line-height: 0 ; border-spacing: 0;   border-right-style: solid;
                                            border-right-color: #AEAEAE;
                                            border-right-width: 1px; "  width="385" bgcolor="#fff">
                                                <br>
                                           </td>
                                    </tr>
                                    <tr>
                                            <td style="margin: 0; padding: 0; outline: none; line-height: 0 ; border-spacing: 0;   border-right-style: solid;
                                            border-right-color: #AEAEAE;
                                            border-right-width: 1px; " bgcolor="#fff" >

                                            </td>
                                    </tr>

                                    <tr>
                                            <td style="margin: 0; padding: 0; outline: none; line-height: 0 ; border-spacing: 0;   border-right-style: solid;
                      border-right-color: #AEAEAE;
                      border-right-width: 1px; " bgcolor="#fff" >

                                            </td>
                                    </tr>

                                    <tr>
                                            <td style="margin: 0; padding: 0; outline: none; line-height: 0 ; border-spacing: 0;   border-right-style: solid;
                      border-right-color: #AEAEAE;
                      border-right-width: 1px; " bgcolor="#fff" >

                                            </td>
                                    </tr>
                                    <tr>
                                            <td style="margin: 0; padding: 0; outline: none; line-height: 0 ; border-spacing: 0;   border-right-style: solid;
                      border-right-color: #AEAEAE;
                      border-right-width: 1px; " bgcolor="#fff" >

                                            </td>
                                    </tr>

                                    <tr style="margin: 0; padding: 0; border: 0; outline: none; line-height: 0 ; border-spacing: 0;">
                                            <th style="margin: 0; padding: 0; border: 0; outline: none; line-height: 0 ; border-spacing: 0;" colspan="2" >
                                            <img src="../img/sectionsExtra/footer.png"  width="688" height="157" alt=""/>
                                            </th>
                                    </tr>

                            </table>
                    </center>
                    </body>
                    </html>'; 
                }
                
                $mail->MsgHTML($html);
                for($i=1; $i<=3;$i++)
                {
                    if($row["archivo".$i.""]!="")
                    {
                         $mail->AddAttachment('../uploadAlDia/'.$row["archivo".$i.""].'');
                    }
                }

                
                for($i=1; $i<=3;$i++)
                {
                    if($row["correo".$i.""]!="")
                    {
                         $mail->AddAddress($row["correo".$i.""], $row["correo".$i.""]);
                    }
                }
               
                $mail->IsHTML(true);

                

                if ($mail->Send()) 
                {
/*
                    $_SESSION['ok'] = 1;
                    if(utf8_encode($row["tipo"])=="Al día")
                    {
                       
                       
                        header("Location: ../alDia.php");
                    
                    }elseif($row["tipo"]=="Actualizaciones")

                    {
                        
                      
                        header("Location: ../actualizaciones.php");
                        
                    }elseif($row["tipo"]=="Extra")
                    {
                        
                       
                        header("Location: ../extra.php");
                        
                    }    
    */
                    
                } else 
                {
                    //echo $html;
                    echo "<br>Mailer Error: " . $mail->ErrorInfo;
                }


                /*        FIN ENVIAR MAIL PLANTILA      */
           }






$_SESSION['ok_actu'] = 1;
header("Location: ../historial.php");



?>
