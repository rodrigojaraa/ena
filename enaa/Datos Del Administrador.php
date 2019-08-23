<html>
    <head>
        <title>Datos Del Administrador</title>
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
#titulo, #titulo2, #labelrut, #textorut, #labelnombre, #textonombre, #labelapellidos, #textoapellidos, #labelusuario, #textousuario, #labelpassword, #textopassword, #btningresar, #btnbuscar, #btnsalir {
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
    left:160px;
    font-size:2em;
}
 #labelrut, #labelnombre, #labelapellidos, #labelusuario, #labelpassword {
    
    width:500px;   
}
 #textorut, #textonombre, #textoapellidos, #textousuario, #textopassword
{
    width:130px;
    border:1px solid black;
}
#labelrut {
    top:110px;
    left:240px;
}
#textorut {
    top:110px;
    left:280px;
}
#labelnombre {
    top:180px;
    left:30px;
}
#textonombre {
    top:180px;
    left:140px;
}
#labelapellidos {
    top:220px;
    left:30px;
}
#textoapellidos {
    top:220px;
    left:140px;
}
#labelusuario {
    top:180px;
    left:360px;
}
#textousuario {
    top:180px;
    left:450px;
}
#labelpassword {
    top:220px;
    left:360px;
}
#textopassword {
     top:220px;
    left:450px;
}
#btningresar {
    width:100px;
    top:390px;
    left:40px;
    height:30px;
    cursor:pointer;
}
#btnbuscar {
    width:100px;
    top:390px;
    Right:270px;
    height:30px;
    cursor:pointer;
}        
#btnsalir {
    width:100px;
    top:390px;
    Right:50px;
    height:30px;
    cursor:pointer;
}
    </style>
    <body>
        <div id="contenedor">
            <div id="titulo">Ingresar y Modificar Administrador</div>
             <form id="form1" name="form1" action="#" method="post">
                 
                 <div id="titulo2">Datos del Administrador</div> 
                 
                 <label id="labelrut" name="rut" >Rut:</label>
                 <input id="textorut" name="rut" type="text" placeholder="Ingresar Rut" /> 
 
                 <label id="labelnombre" name="nombre">Nombre:</label>
                 <input id="textonombre" name="nombre" type="text" placeholder="Ingresar Nombre" />
                 
                 <label id="labelapellidos" name="apellidos" >Apellidos:</label>
                 <input id="textoapellidos" name="apellidos" type="text" placeholder="Ingresar Apellidos" />
                 
                 <label id="labelusuario" name="usuario">Usuario:</label>
                 <input id="textousuario" name="usuario" type="text" placeholder="Ingresar Usuario" />
                 
                 <label id="labelpassword" name="codigopasword">Password:</label>
                 <input id="textopassword" name="password" type="text" placeholder="Ingresar password" />
            
                 <input type="submit" id="btningresar" name="btningresar" placeholder="Ingresar"/>   
                 
                 <input type="reset" id="btnbuscar" name="btnbuscar" placeholder="Buscar"/>
                 
                 <button type="button" id="btnsalir" onclick="window.location.href='Menu Principal.php';">Salir</button>
                                                         
             </form>
        </div>
    </body>
</html>