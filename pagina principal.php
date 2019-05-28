<?php
   echo "<script>muestraAdmi();</script>"
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>popmania</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">        
<link rel='stylesheet' href='tema.css' type='text/css' media=screen>



<script type="text/javascript">

    function muestraAdmi()
    {
        var x = document.getElementById("idDeseos");
        
        if(x.style.visibility=="hidden")
        {
            x.style.visibility="visible";
            
        }
    }

    function abreBuscar()
    {
        var cambio = document.getElementById("idSearch");
        if(cambio.style.visibility = 'hidden'){
            cambio.style.visibility = 'visible';      
        }
    }

    function cierraBuscar()
    {
        var cambio = document.getElementById("idSearch");
        if(cambio.style.visibility = 'visible'){
            cambio.style.visibility = 'hidden';      
        }
    }

    function abreSesion()
    {
        var cambio = document.getElementById("idRegistro");
        if(cambio.style.visibility = 'hidden'){
            cambio.style.visibility = 'visible';      
        }
    }

    function cierraSesion()
    {
        var cambio = document.getElementById("idRegistro");
        if(cambio.style.visibility = 'visible'){
            cambio.style.visibility = 'hidden';      
        }
    }

    </script>
</head>

<body>
    
    <div class="botonesSuperioresA" >
        <a href="pagina principal.html"> <img src="logito.png" style="float:left;margin-left: 40px; margin-top: 10px;" width="70px" > </a>            
        <a href="Ofertas.html"> <h3>ofertas </h3> </a>
        <a href="catalogo.html"> <h3>catalogo </h3></a>
        <a href="listaDeseados.html"> <h3 style="visibility:hidden" id="idDeseos">lista de deseados </h3></a>
        <a href="Administrador.html"> <h3>Administrador </h3></a> 
        <a href="#"> <img src="picPerfil.png" style="float: right;margin-right: 20px;margin-top:5px;" onmouseover="muestraAdmi()" width="70px"> </a>
        <div class="jejeje">
        <a href="#"> <h3 style="float:right;" onmouseover="abreSesion()">Iniciar Sesión</h3></a>
        </div>
        <a href="#"> <i class="fas fa-search" style="color:white; float:right;padding: 25px;margin-top: 5px;" onclick="abreBuscar()"></i> </a>
    </div>
    

    <div class="slider">
        <ul>
            <li><img src="fondo.jpg" style="width: 100%;height: 320px;" alt=""></li>
            <li><img src="fondo3.jpg" style="width: 100%;height: 320px;" alt=""></li>
            <li><img src="fondo4.jpg" style="width: 100%;height: 320px;" alt=""></li>
            <li><img src="fondo2.jpg" style="width: 100%;height: 320px;" alt=""></li>
        </ul>  

        <div class="buscador" id="idSearch" >
            <input type="text" class="textbox" size="95" placeholder="buscar">
            <button name="button" class="btnBuscar" >Buscar</button>
            <a href="#"><i class="fas fa-times" onclick="cierraBuscar()"></i></a>
        </div>       

        <div class="registroOP" id="idRegistro">
        <input type="text" class="textbox" size="18" placeholder="correo">
        <input type="password" class="textbox" size="18" placeholder="contraseña">
        <br>
        <button name="button" class="btnBuscar" style="margin-top:10px;font-size: 15px;" onclick="guardarCambios" >Iniciar</button>
        <p>
        <a href="pagina2.html">aun no tienes una cuenta? <br>crea una aqui</a>
        </p>
        </div>
    </div>        

    <div class="contenedor">
        <section id="menu">
            <ul>
                <a href="#"><li>Disney</li></a> 
                <a href="#"><li>Marvel</li></a>
                <a href="#"><li>DC</li></a>
                <a href="#"><li>Rick & Morty</li></a>
                <a href="#"><li>Overwatch</li></a>
                <a href="#"><li>The Simpsons</li></a> 
            </ul>
        </section>

        <div class="example">
            <div class="funko">
                <a href="#"><div class="fotoFunko"></div></a>
                <div class="nombreFunko"><h1>FUNKO POP! Peter Parker SPIDERMAN ANIMATED</h1></div>
                <div class="precioFunko"> <h2> $299.00</h2> <br>
                <a href="#"><i class="far fa-star" style="color:blue; margin-top:-40px;"></i></a>
                <a href="#"><i class="fas fa-cart-plus" style="color:yellowgreen;margin-top:-30px;"></i>
                </div></a>   
            </div>
        
            <div class="funko">
                <a href="#"><div class="fotoFunko"></div></a>
                <div class="nombreFunko"><h1>FUNKO POP! Peter Parker SPIDERMAN ANIMATED</h1></div>
                <div class="precioFunko"> <h2> $299.00</h2> <br>
                <a href="#"><i class="far fa-star" style="color:blue; margin-top:-40px;"></i></a>
                <a href="#"><i class="fas fa-cart-plus" style="color:yellowgreen;margin-top:-30px;"></i></div></a>
            </div>

            <div class="funko">
                <a href="#"><div class="fotoFunko"></div></a>
                <div class="nombreFunko"><h1>FUNKO POP! Peter Parker SPIDERMAN ANIMATED</h1></div>
                <div class="precioFunko"> <h2> $299.00</h2> <br>
                <a href="#"><i class="far fa-star" style="color:blue; margin-top:-40px;"></i></a>
                <a href="#"><i class="fas fa-cart-plus" style="color:yellowgreen;margin-top:-30px;"></i></div></a>
            </div>
            <a href="#"> <img src="descuentos.jpg" class="bordeImagenes" > </a>   

            <a href="#"> <img src="envio.jpg" class="bordeImagenes" > </a>
            <div class="funko">
                <a href="#"><div class="fotoFunko"></div></a>
                <div class="nombreFunko"><h1>FUNKO POP! Peter Parker SPIDERMAN ANIMATED</h1></div>
                <div class="precioFunko"> <h2> $299.00</h2> <br>
                <a href="#"><i class="far fa-star" style="color:blue; margin-top:-40px;"></i></a>
                <a href="#"><i class="fas fa-cart-plus" style="color:yellowgreen;margin-top:-30px;"></i></div></a>
            </div>

            
            
            <div class="funko">
                <a href="#"><div class="fotoFunko"></div></a>
                <div class="nombreFunko"><h1>FUNKO POP! Peter Parker SPIDERMAN ANIMATED</h1></div>
                <div class="precioFunko"> <h2> $299.00</h2> <br>
                <a href="#"><i class="far fa-star" style="color:blue; margin-top:-40px;"></i></a>
                <a href="#"><i class="fas fa-cart-plus" style="color:yellowgreen;margin-top:-30px;"></i>
                </div></a>
            </div>
            
            <div class="funko">
                <a href="#"><div class="fotoFunko"></div></a>
                <div class="nombreFunko"><h1>FUNKO POP! Peter Parker SPIDERMAN ANIMATED</h1></div>
                <div class="precioFunko"> <h2> $299.00</h2> <br>
                <a href="#"><i class="far fa-star" style="color:blue; margin-top:-40px;"></i></a>
                <a href="#"><i class="fas fa-cart-plus" style="color:yellowgreen;margin-top:-30px;"></i></div></a>
            </div>
    
            
            <img src="bannner.png" width="100%" style="margin-top: 562px;">

            </div>
           
    </div>

    <div class="Creditos">
        <a href="#"> <img src="logito.png" style="float:left; padding-left: 50px; padding-top: 20px;" width="85px"> </a>
        <div class="subCreditos">
                <a href="#"><h2>Servicio Al Cliente</h2></a>
                <br><br><br>
                <a href="#"><h2>Quienes somos?</h2></a>
                <a href="#"><h2>Politicas</h2></a>
                <a href="#"><h2>Cancelaciones</h2></a>
                <a href="#"><h2>Avisos de Privacidad</h2></a>
        </div>
        <div class="subCreditos2">
                <a href="#"><h2>Contactanos</h2></a>
                <br>
                <a href="https://www.facebook.com/ferykudou/?ref=bookmarks"> <img src="face.png" alt="logo"  width="60px"> </a>
                <a href="https://www.youtube.com/channel/UCmnr56AWGWtLv2lBHlr3OVQ?view_as=subscriber"> <img src="youtube.png" alt="logo"  width="60px"> </a>
                <a href="https://www.instagram.com/ferykudou/"> <img src="insta.png" alt="logo"  width="60px"> </a>
                <a href="#"> <h2>popmania@gmail.com</h2></a>
        </div>
        
    </div>
</body>
</html> 