
<html>
    <head>
        <title>Datos Del Alumno</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">         
    </head>
    <style type="text/css">
    
    body {
    background-image: url(Fondodepantallacolegios.jpg);
    text-align:inherit;
}
#contenedor {
    position:relative;
    border: 5px solid #87ceeb;
    height:480px;
    width:620px;
    margin:30px auto;    
    background-color:#cdcdcd;
}
#titulo, #titulo2, #labelcedularut, #textocedularut, #labelnombres, #textonombres, #labelapellidos, #textoapellidos, #labeledad, #textoedad, #labelfechadenacimiento, #textofechadenacimiento, #labelpais, #textopais, #labelciudad, #textociudad, #labelprovincia, #textoprovincia, #labeltelefono, #textotelefono, #labeldireccion, #textodireccion, #labelsexo, #textosexo, #btningresar, #btnmodificar, #btnbuscar, #btnsalir, #btnimprimir {
     position:absolute;
}
#titulo {    
    height:20px;
    width:620px;
    text-align:inherit;
    font-weight:bold;
    color:#000000;
    background-color:#87ceeb;
}
#titulo2 {
    top:30px;
    left:190px;
    font-size:2em;
}
#labelcedularut, #labelnombres, #labelapellidos, #labeledad, #labelfechadenacimiento, #labelpais, #labelciudad, #labelprovincia, #labeltelefono, #labeldireccion, #labelsexo {
    
    width:500px;   
}
#textocedularut, #textonombres, #textoapellidos, #textoedad, #textofechadenacimiento, #textopais, #textociudad, #textoprovincia, #textotelefono, #textodireccion, #textosexo
{
    width:130px;
    border:1px solid black;
}
#labelcedularut {
    top:78px;
    left:95px;
}
#textocedularut {
    top:78px;
    left:180px;
}
#labelnombres {
    top:130px;
    left:30px;
}
#textonombres {
    top:130px;
    left:180px;
}
#labelapellidos {
    top:170px;
    left:30px;
}
#textoapellidos {
    top:170px;
    left:180px;
}
#labeledad {
    top:210px;
    left:30px;
}
#textoedad {
    top:210px;
    left:180px;
}
#labelfechadenacimiento {
    top:250px;
    left:30px;
}
#textofechadenacimiento {
    top:250px;
    left:180px;
}
#labelpais {
    top:290px;
    left:30px;
}
#textopais {
    top:290px;
    left:180px;
}
#labelciudad {
    top:90px;
    left:380px;
}
#textociudad {
    top:90px;
    left:450px;
}
#labelprovincia {
    top:130px;
    left:380px;
}
#textoprovincia {
    top:130px;
    left:450px;
}
#labeltelefono {
    top:170px;
    left:380px;
}
#textotelefono {
    top:170px;
    left:450px;
}
#labeldireccion {
    top:210px;
    left:380px;
}
#textodireccion {
    top:210px;
    left:450px;
}
#labelsexo {
    top:250px;
    left:380px;
}
#textosexo {
    top:250px;
    left:450px;
}
#btningresar {
    width:90px;
    top:360px;
    left:40px;
    height:30px;
    cursor:pointer;
}
#btnmodificar {
    width:90px;
    top:360px;
    Right:345px;
    height:30px;
    cursor:pointer;
}        
#btnbuscar {
    width:90px;
    top:360px;
    Right:200px;
    height:30px;
    cursor:pointer;
}  
#btnsalir {
    width:90px;
    top:360px;
    Right:55px;
    height:30px;
    cursor:pointer;
}  
#btnimprimir {
    width:90px;
    top:450px;
    Right:10px;
    height:30px;
    cursor:pointer;
}  
    </style>
    <body>
        <div id="contenedor">
            <div id="titulo">Ingresar y Modificar Datos Del Alumno</div>
             <form id="form1" name="form1" action="Registro de Alumnos.php" method="post">
                 
                 <div id="titulo2">Datos del Alumno</div>
                 
                 <label id="labelcedularut" name="cedularut" >Cedula/Rut:</label>
                 <input id="textocedularut" name="cedularut" type="text" placeholder="Ingresar Rut" /> 
                 
                 <label id="labelnombres" name="nombres" >Nombres:</label>
                 <input id="textonombres" name="nombres" type="text" placeholder="Ingresar Nombres" /> 
 
                 <label id="labelapellidos" name="apellidos">Apellidos:</label>
                 <input id="textoapellidos" name="apellidos" type="text" placeholder="Ingresar Apellidos" />
                 
                 <label id="labeledad" name="edad">Edad:</label>
                 <input id="textoedad" name="edad" type="text" placeholder="Ingresar Edad" />
                 
                 <label id="labelfechadenacimiento" name="fechadenacimiento">Fecha De Nacimiento:</label>
                 <input id="textofechadenacimiento" name="fechadenacimiento" type="text" placeholder="Ingresar Fecha de Nac." />
                 
                 <label id="labelpais" name="pais">Pais:</label>
                 <input id="textopais" name="pais" type="text" placeholder="Ingresar Pais" />
                 
                 <label id="labelciudad" name="ciudad">Ciudad:</label>
                 <input id="textociudad" name="ciudad" type="text" placeholder="Ingresar Ciudad" />
                 
                 <label id="labelprovincia" name="provincia">Provincia:</label>
                 <input id="textoprovincia" name="provincia" type="text" placeholder="Ingresar Provincia" />
                 
                 <label id="labeltelefono" name="telefono">Telefono:</label>
                 <input id="textotelefono" name="telefono" type="text" placeholder="Ingresar Telefono" />
                 
                 <label id="labeldireccion" name="direccion">Direccion:</label>
                 <input id="textodireccion" name="direccion" type="text" placeholder="Ingresar Direccion" />
                 
                 <label id="labelsexo" name="sexo">Sexo:</label>
                 <select id="textosexo">
                 <option value="Masculino">Masculino</option>
                 <option value="Femenino">Femenino</option>
                 </select>
 
                 <input type="submit" id="btningresar" name="btningresar" value="Ingresar"/>    
                 
                 <input type="reset" id="btnmodificar" name="btnmodificar" value="Modificar"/>
                 
                 <input type="reset" id="btnbuscar" name="btnbuscar" value="Buscar"/>
                 
                 <button type="button" id="btnsalir" onclick="window.location.href='Menu Principal.php';">Salir</button>
                 
                 <input type="button" id="btnimprimir" src="imprimir.jpg" name="btnimprimir" value="Imprimir" onclick="javascript:window.print()"> 
             </form>
        </div>
    </body>
</html>