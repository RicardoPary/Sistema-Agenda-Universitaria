<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Agenda Universitaria</title>
<link rel="stylesheet" href="Estudiante.css" type="text/css" /> 
<link href="Jquery-ui/jquery-ui.css" rel="stylesheet">
<link rel="stylesheet" href="js/jquery.mCustomScrollbar.css">

<script src="js/jquery.js"></script>
<script src="js/jquery-1.11.0.min.js"></script>


  
<script>window.jQuery || document.write('<script src="../js/minified/jquery-1.11.0.min.js"><\/script>')</script>  
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>  

<link rel="stylesheet"  href="css/Inicio.css" />
</head>

<script src="js/jquery.js"></script>
<script src="js/jquery-1.11.0.min.js"></script>




<body>


<div id="Cabeza">
  <img src="Imagenes/mi_umsa.jpg" width="218" height="71" style="float:left; margin-left:40px; margin-top: 5px;"/>
  <img src="Imagenes/Agenda.jpg" width="315" height="71" style="float:left; margin-left:80px;margin-top:9px;"/>
  


 
  
  
</div>

<div id="Antes">

</div>

<div id="Menu1">


 <ul id="menu">
 
   <table >   
     <tr>       
       
  <td width="100">

    
  <li><strong><a href="inicio.php">Home</a></strong>
    
  </li>  </td>

  <td width="0">
     <li><strong><a href="evenA.html">Eventos Academicos</a></strong>       
         <ul id="nav">
           <li> <a href="">Crear Usuario</a></li>
         </ul>
     </li> 

      </td>

      <td width="130">    
  <li><strong><a href="evenS.php">EventosSociales</a></strong>
     <ul >
   <li> <a href="">Configurar</a></li>
   </ul>
  </li>  </td>  
  </tr>
  </table>
</ul> 
</div>


<div id="Cuerpo"></div>


<tr>
       <td height="22" scope="row">&nbsp;</td>
       <td scope="row"><label for="label3">Codigo Evento Academmico :</label></td>
       <td width="25" height="32" scope="row">&nbsp;</td>
  
       <td><input type="text" name="T2" id="email22" size="30" maxlength="128" /></td>
       <td>&nbsp;</td>
       <td width="96"><input type="submit" name="submit" id="submit" value="Buscar" class="submit"/></td>
  <td width="28">&nbsp;</td>
   </tr>



  <form class="form" action="Crear.php?id=<?php echo $Codigo;?>" method="post" enctype="multipart/form-data">

  <fieldset>
  <legend><strong>Modificar Informacion Del Evento Academico</strong></legend>
  <table width="487" height="208" border="0" cellpadding="2" cellspacing="0">
   
            
   <tr>
       <td scope="row">&nbsp;</td>
       <td height="26" scope="row"><label for="label">Codigo de Feria:</label></td>
       <td><input type="text" name="T1"  size="30" maxlength="32" /></td>
       <td>&nbsp;</td>
   </tr>
            
   <tr>
       <td height="22" scope="row">&nbsp;</td>
       <td scope="row"><label for="label3">Nombre De La Feria:</label></td>
       <td><input type="text" name="T2" id="email22" size="30" maxlength="128" /></td>
       <td>&nbsp;</td>
   </tr>
            
   <tr>
       <td scope="row">&nbsp;</td>
       <td height="22" scope="row"><label for="label">Fecha de la Feria:</label></td>
       <td><input type="text" name="T3" id="password4" size="30" maxlength="32" /></td>
       <td>&nbsp;</td>
   </tr>
     
   <tr>
       <td scope="row">&nbsp;</td>
       <td height="22" scope="row"><label for="label2">Detalle De la Feria:<label></td>
       <td><input type="text" name="T4" id="password5" size="30" maxlength="32" /></td>
       <td>&nbsp;</td>
   </tr>
         
   <tr>
       <td scope="row">&nbsp;</td>
       <td height="22" scope="row"><label for="label2">Ubicacion de la Feria:</label></td>
       <td><input type="text" name="T4" id="password5" size="30" maxlength="32" /></td>
       <td>&nbsp;</td>   
   </tr>
           
   <tr>
       <td scope="row">&nbsp;</td>
       <td height="22" scope="row"><label for="label2">Direccion de la Feria:</label></td>
       <td><input type="text" name="T5" id="password11" size="30" maxlength="32" /></td>
       <td>&nbsp;</td>
   </tr>
                     
   <tr>
       <td scope="row">&nbsp;</td>
       <td width="180"><label for="label">hora Inicio:</label></td>
       <td width="246"><input type="text" name="T7" id="password7" size="30" maxlength="32" /></td>
       <td scope="row">&nbsp;</td>
   </tr>
   
   <tr>
       <td scope="row">&nbsp;</td>
       <td><label for="label2">hora Fin:</label></td>
       <td><input name="T8"  type="text" id="password8" value="" size="30" /></td>
       <td scope="row">&nbsp;</td>
   </tr>
           
   <tr>
       <td scope="row">&nbsp;</td>
       <td><label for="label2">Tipo de Feria:</label></td>
       <td><input type="text" name="T9" id="password9" size="30" maxlength="32" /></td>
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
  <td width="96"><input type="submit" name="submit" id="submit" value="MODIFICAR" class="submit"/></td>
  <td width="28">&nbsp;</td>

  <td width="96"><input type="submit" name="submit" id="submit" value="ELIMINAR" class="submit"/></td>
  <td width="28">&nbsp;</td>
 </tr>
 </table>
 </fieldset>
</form>
</body>
</html>















