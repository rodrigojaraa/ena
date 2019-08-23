<html>
    <head>
        <title>Datos Del Modulo</title>
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
#titulo, #titulo2, #labelnombre, #textonombre, #labelcarrera, #textocarrera, #labelsemestre, #textosemestre, #labelsede, #textosede, #labelcodigomodulo, #textocodigomodulo, #labelinicio, #textoinicio, #labeltermino, #textotermino, #labelsala, #textosala, #labelbloque, #textobloque, #btningresarmodulo, #btnguardar, #btnbuscar, #btnsalir, #btnimprimir {
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
 #labelnombre, #labelcarrera, #labelsemestre, #labelsede, #labelcodigomodulo, #labelinicio, #labeltermino, #labelsala, #labelbloque {
    
    width:500px;   
}
 #textonombre, #textocarrera, #textosemestre, #textosede, #textocodigomodulo, #textoinicio, #textotermino, #textosala, #textobloque
{
    width:130px;
    border:1px solid black;
}
#labelnombre {
    top:140px;
    left:30px;
}
#textonombre {
    top:140px;
    left:180px;
}
#labelcarrera {
    top:180px;
    left:30px;
}
#textocarrera {
    top:180px;
    left:180px;
}
#labelsemestre {
    top:220px;
    left:30px;
}
#textosemestre {
    top:220px;
    left:180px;
}
#labelsede{
    top:260px;
    left:30px;
}
#textosede {
    top:260px;
    left:180px;
}
#labelcodigomodulo {
    top:100px;
    left:170px;
}
#textocodigomodulo {
    top:100px;
    left:310px;
}
#labelinicio {
    top:158px;
    left:380px;
}
#textoinicio {
    top:158px;
    left:450px;
}
#labeltermino {
    top:200px;
    left:380px;
}
#textotermino {
    top:200px;
    left:450px;
}
#labelsala {
    top:242px;
    left:380px;
}
#textosala {
    top:242px;
    left:450px;
}
#labelbloque {
    top:320px;
    left:220px;
}
#textobloque {
    top:320px;
    left:290px;
}
#btningresarmodulo {
    width:110px;
    top:390px;
    left:40px;
    height:30px;
    cursor:pointer;
}
#btnguardar {
    width:110px;
    top:390px;
    Right:327px;
    height:30px;
    cursor:pointer;
}        
#btnbuscar {
    width:110px;
    top:390px;
    Right:185px;
    height:30px;
    cursor:pointer;
}  
#btnsalir {
    width:110px;
    top:390px;
    Right:43px;
    height:30px;
    cursor:pointer;
}  
#btnimprimir {
    width:120px;
    top:440px;
    Right:20px;
    height:30px;
    cursor:pointer;
}
    </style>
    <body>
        <div id="contenedor">
            <div id="titulo">Ingresar y Modificar Datos Del Modulo</div>
             <form id="form1" name="form1" action="#" method="post">
                 
                 <div id="titulo2">Datos del Modulo</div> 
                 
                 <label id="labelnombre" name="nombre" >Nombre:</label>
                 <input id="textonombre" name="nombre" type="text" placeholder="Ingresar Nombre" /> 
 
                 <label id="labelcarrera" name="carrera">Carrera:</label>
                 <input id="textocarrera" name="carrera" type="text" placeholder="Ingresar Carrera" />
                 
                 <label id="labelsemestre" name="semestre" >Semestre:</label>
                 <input id="textosemestre" name="semestre" type="text" placeholder="Ingresar Semestre" />
                 
                 <label id="labelsede" name="sede">Sede:</label>
                 <input id="textosede" name="sede" type="text" placeholder="Ingresar Sede" />
                 
                 <label id="labelcodigomodulo" name="codigomodulo">Codigo del Modulo:</label>
                 <input id="textocodigomodulo" name="codigomodulo" type="text" placeholder="Ingresar Codigo del Modulo." />
                 
                 <label id="labelinicio" name="inicio">Inicio:</label>
                 <input id="textoinicio" name="inicio" type="text" placeholder="Ingresar Inicio" />
                 
                 <label id="labeltermino" name="termino">Termino:</label>
                 <input id="textotermino" name="termino" type="text" placeholder="Ingresar Termino" />
                 
                 <label id="labelsala" name="sala">Sala:</label>
                 <input id="textosala" name="sala" type="text" placeholder="Ingresar Sala" />
                 
                 <label id="labelbloque" name="bloque">Bloque:</label>
                 <select id="textobloque">
                 <option value="Masculino">Diurno</option>
                 <option value="Femenino">Vespertino</option>
                 </select>
 
                 <input type="submit" id="btningresarmodulo" name="btningresarmodulo" value="Ingresar Modulo"/>    
                 <input type="reset" id="btnguardar" name="btnguardar" placeholder="Guardar"/>
                 
                 <input type="reset" id="btnbuscar" name="btnbuscar" value="Buscar"/>
                 
                 <button type="button" id="btnsalir" onclick="window.location.href='Menu Principal.php';">Salir</button>
                 
                 <input type="button" id="btnimprimir" src="imprimir.jpg" name="btnimprimir" value="Imprimir" onclick="javascript:window.print()"> 

                                                                                
             </form>
        </div>
    </body>
</html>