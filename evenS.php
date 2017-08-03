<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Agenda Universitaria</title>
<link rel="stylesheet"  href="css/Inicio.css" />
<link rel="stylesheet" type="text/css" media="all" href="Registro.css" />
</head>

<script src="js/jquery.js"></script>
<script src="js/jquery-1.11.0.min.js"></script>




<body>
<div id="Cabeza">
  <img src="Imagenes/mi_umsa.jpg" title="Tu Agenda Universitaria" width="218" height="71" style="float:left; margin-left:40px; margin-top: 5px;"/>
</div>
<div id="Logo">
  <marquee><img src="Imagenes/Agenda.jpg" width="315" height="71" style="float:left; margin-left:40px; margin-top: 5px;"/></marquee>
</div>

<div id="Antes">

</div>

<div id="Menu1">


  <ul id="Menu">
    <li><a href="inicio.php">Home</a></li> 
      <li> <a href="evenA.php">Eventos Acad&eacutemicos</a></li> 
      <li> <a href="evenS.php">Eventos sociales</a></li>
        <li> <a href="feria.php">Feria Muldidisciplinaria</a></li> 
           
         
  </ul>

</div>
<div id="uno">
  <img src="Imagenes/umsa.png" title="Universidad Mayor de San Andres" width="15%" height="25%" style="float:left; margin-left:40px; margin-top: 140px;"/>
</div>

<div id="Cuerpo">









<center>
  <form class="form" action="CrearSocial.php" method="post" enctype="multipart/form-data">

  <fieldset>
  <legend><strong><center>Formulario Evento Social</center></strong></legend>
  <table width="487" height="208" border="0" cellpadding="2" cellspacing="0">
   
            
   <tr>
       <td scope="row">&nbsp;</td>
       <td height="26" scope="row"><label for="label">Codigo de Evento Social:</label></td>
       <td><input type="text" name="T1"  size="30" maxlength="32" /></td>
       <td>&nbsp;</td>
   </tr>
            
   <tr>
       <td height="22" scope="row">&nbsp;</td>
       <td scope="row"><label for="label3">Nombre Del Evento Social:</label></td>
       <td><input type="text" name="T2" id="email22" size="30" maxlength="128" /></td>
       <td>&nbsp;</td>
   </tr>
            
   <tr>
       <td scope="row">&nbsp;</td>
       <td height="22" scope="row"><label for="label">Fecha del Evento Social:</label></td>
       <td><input type="text" name="T3" id="password4" size="30" maxlength="32" /></td>
       <td>&nbsp;</td>
   </tr>
     
   <tr>
       <td scope="row">&nbsp;</td>
       <td height="22" scope="row"><label for="label2">Detalle Del Evento:<label></td>
       <td><input type="text" name="T4" id="password5" size="30" maxlength="32" /></td>
       <td>&nbsp;</td>
   </tr>
         
 
           
   <tr>
       <td scope="row">&nbsp;</td>
       <td height="22" scope="row"><label for="label2">ubicacion del Evento:</label></td>
       <td><input type="text" name="T5" id="password11" size="30" maxlength="32" /></td>
       <td>&nbsp;</td>
   </tr>
           
   <tr>
       <td scope="row">&nbsp;</td>
       <td height="26" scope="row"><label for="label2">Direccion Del Evento:</label></td>
       <td><input type="text" name="T6" id="password6" size="30" maxlength="32" /></td>
       <td>&nbsp;</td>
   </tr>
           
   <tr>
       <td scope="row">&nbsp;</td>
       <td width="180"><label for="label">Hora Inicio:</label></td>
       <td width="246"><input type="text" name="T7" id="password7" size="30" maxlength="32" /></td>
       <td scope="row">&nbsp;</td>
   </tr>
   
   <tr>
       <td scope="row">&nbsp;</td>
       <td><label for="label2">Hora Fin :</label></td>
       <td><input name="T8"  type="text" id="password8" value="" size="30" /></td>
       <td scope="row">&nbsp;</td>
   </tr>
           
   <tr>
       <td scope="row">&nbsp;</td>
       <td><label for="label2">Tipo de Evento Social:</label></td>
       <td><input type="text" name="T9" id="password9" size="30" maxlength="32" /></td>
       <td scope="row">&nbsp;</td>
   </tr>
            
   
   <tr>
      <td scope="row">&nbsp;</td>
              <td><label for="label2">Cronograma del Evento:</label></td>
            <td><input type="text" name="T10" id="password5" size="30" maxlength="32" /></td> 


          
    <td scope="row">&nbsp;</td>
 </tr>
      
         <tr>
            <td scope="row">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td scope="row">&nbsp;</td>
         </tr>
          
      <tr></tr>
      
   </table>
</fieldset>
  
  
 <fieldset>
 <table width="495" height="34" border="0" cellpadding="0" cellspacing="0">
   
 <tr>
  <td width="25" height="32" scope="row">&nbsp;</td>
  <td width="96"><input type="submit" name="submit" id="submit" value="Crear" class="submit"/></td>
  <td width="28">&nbsp;</td>
  <td width="99"><input type="reset" name="submit12"id="submit12"value="Limpiar"class="submit"/></td>
  <td width="247">&nbsp;</td>
 </tr>
 </table>
 </fieldset>
</form>
</center>
</div>
</body>
</html>















