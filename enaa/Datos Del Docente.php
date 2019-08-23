<html>
    <head>
        <title>Datos Del Docente</title>
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
#titulo, #titulo2, #labelnombres, #textonombres, #labelapellidos, #textoapellidos, #labelcedula, #textocedula, #labeledad, #textoedad, #labelfechadenacimiento, #textofechadenacimiento, #labelpais, #textopais, #labelciudad, #textociudad, #labelprovincia, #textoprovincia, #labeltelefono, #textotelefono, #labeldireccion, #textodireccion, #labelsexo, #textosexo, #labelprofesion, #textoprofesion, #labelposgrado, #textoposgrado, #btningresar, #btnmodificar, #btnbuscar, #btnsalir {
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
 #labelnombres, #labelapellidos, #labelcedula, #labeledad, #labelfechadenacimiento, #labelpais, #labelciudad, #labelprovincia, #labeltelefono, #labeldireccion, #labelsexo, #labelprofesion, #textoposgrado {
    
    width:500px;   
}
 #textonombres, #textoapellidos, #textocedula, #textoedad, #textofechadenacimiento, #textopais, #textociudad, #textoprovincia, #textotelefono, #textodireccion, #textosexo, #textoprofesion, #textoposgrado
{
    width:130px;
    border:1px solid black;
}
#labelnombres {
    top:90px;
    left:30px;
}
#textonombres {
    top:90px;
    left:180px;
}
#labelapellidos {
    top:130px;
    left:30px;
}
#textoapellidos {
    top:130px;
    left:180px;
}
#labelcedula {
    top:170px;
    left:30px;
}
#textocedula {
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
#labelprofesion {
    top:290px;
    left:380px;
}
#textoprofesion {
    top:290px;
    left:450px;
}
#labelposgrado {
    top:330px;
    left:380px;
}
#textoposgrado {
    top:330px;
    left:450px;
}
#btningresar {
    width:90px;
    top:390px;
    left:40px;
    height:30px;
    cursor:pointer;
}
#btnmodificar {
    width:90px;
    top:390px;
    Right:345px;
    height:30px;
    cursor:pointer;
}        
#btnbuscar {
    width:90px;
    top:390px;
    Right:200px;
    height:30px;
    cursor:pointer;
}  
#btnsalir {
    width:90px;
    top:390px;
    Right:55px;
    height:30px;
    cursor:pointer;
}  
    </style>
    <body>
        <div id="contenedor">
            <div id="titulo">Ingresar y Modificar Datos Del Docente</div>
             <form id="form1" name="form1" action="#" method="post">
                 
                 <div id="titulo2">Datos del Docente</div> 
                 
                 <label id="labelnombres" name="nombres" >Nombres:</label>
                 <input id="textonombres" name="nombres" type="text" placeholder="Ingresar Nombres" /> 
 
                 <label id="labelapellidos" name="apellidos">Apellidos:</label>
                 <input id="textoapellidos" name="apellidos" type="text" placeholder="Ingresar Apellidos" />
                 
                 <label id="labelcedula" name="cedula" >Cedula:</label>
                 <input id="textocedula" name="cedula" type="text" placeholder="Ingresar Cedula" />
                 
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
                 
                 <label id="labelprofesion" name="profesion">Profesion:</label>
                 <input id="textoprofesion" name="profesion" type="text" placeholder="Ingresar Profesion" />
                 
                 <label id="labelposgrado" name="posgrado">Posgrado:</label>
                 <input id="textoposgrado" name="posgrado" type="text" placeholder="Ingresar Posgrado" />
 
                 <input type="submit" id="btningresar" name="btningresar" value="Ingresar"/>    
                 
                 <input type="reset" id="btnmodificar" name="btnmodificar" value="Modificar"/>
                 
                 <input type="reset" id="btnbuscar" name="btnbuscar" value="Buscar"/>
                 
                 <button type="button" id="btnsalir" onclick="window.location.href='Menu Principal.php';">Salir</button>
                 
             </form>
        </div>
    </body>
</html>