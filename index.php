
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Correo De Santa</title>
    <script languahe="javascript" src="js/jquery-3.6.0.min.js"></script>
    <link rel="shortcut icon" href="img/sobre.png" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <header>
        <nav>
            <a href="index.php#nosotros"><b>Conocenos</b></a>
            <a href="index.php#servicios"><b>Nuestros Pasteles</b></a>
           
        </nav>
        <section class="textos-header">
            
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
    <main>
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end mb-4">
            </div>
        </div>
       
        <section class="contenedor sobre-nosotros" id="nosotros">
            <h2 class="titulo"> <i>BIENVENIDO A UN LUGAR LLENO DE DULCES TENTACIONES</i> </h2>
            <div class="contenedor-sobre-nosotros" >
                <img src="img/aaaaa.png" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                <br>
                <br>
                <br>
                    <h3><span>1</span>Nuestra Mision</h3>
                    <p><b>Acercar a tu mesa postres inigualables, que te hagan caer en nuestra dulce tentacion.</b>
                    </p>
                    <h3><span>2</span>Nuestra Vision</h3>
                    <p><b>Ofrecer a nuestro clientes alta reposteria, de la mejor calidad.</b>
                    </p>
                </div>
            </div>
        </section>

        <section class="clientes contenedor" id="servicios">
        <h2 class="titulo"> <i>Nuestros Pasteles</i> </h2>
            <div class="cards">
                <div class="card">
                    <img src="img/rv.png" alt="">
                    <div class="contenido-texto-card">
                        <h4> <i>RED VELVET</i></h4>
                        <p>Nuestro biscocho insignia, rojo y rico como el infierno pruebalo con su covertura de mantqeuilla y queso crema o convinalo como mas te guste.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/VN.png" alt="">
                    <div class="contenido-texto-card">
                        <h4><i>VAINILLA</i></h4>
                        <p>Esponjoso y listo para comer, asi es nuestro biscocho de vainilla que llevara la cielo a tu papaldar.</p>

                    </div>
                </div>
            </div>
            <br>
            <div class="cards">
                <div class="card">
                    <img src="img/ch.jfif" alt="">
                    <div class="contenido-texto-card">
                        <h4><I>CHOCOLATE</I></h4>
                        <p>Otro de los clasicos, que nuenca puede faltar.
                        </p>
                       
                    </div>
                </div>
                <div class="card">
                    <img src="img/tl.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4><i>TRES LECHE</i></h4>
                        <p>Uno de los clasicos de la reposteria, pero ehco a nuestro modo (guiño, guiño).</p>
                    </div>
                </div>
            </div>
              <br>
            
        </section>
        <div class="contenedor">
                <h2 class="titulo">Reservaciones</h2>
                <div class="formulario__grupo" id="grupo__nombre">
					<label for="nombre" class="formulario__label">Nombre Completo</label>
					<div class="formulario__grupo-input">
						<input type="text" class="formulario__input" name="nombre" placeholder="Juanito Perez" required>
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__input-error">El nombre solo de contener letras</p>
				</div>
                <!--Grupo: Apellido-->
                <div class="formulario__grupo" id="grupo__apellido">
					<label for="apellido" class="formulario__label">Tipo de biscocho y tus ingredientes</label>
					<div class="formulario__grupo-input">
						<input type="text" class="formulario__input" name="apellido" placeholder="Vainilla, crema de almedras, fresas, ect." required>
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
				</div>

				<!-- Grupo: Correo -->
				<div class="formulario__grupo" id="grupo__correo">
					<label for="correo" class="formulario__label">Correo</label>
					<div class="formulario__grupo-input">
						<input type="text" class="formulario__input" name="correo"  placeholder="Correo" required>
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
				</div>

                <!-- Grupo: Telefono -->
				<div class="formulario__grupo" id="grupo__tel">
					<label for="telefono" class="formulario__label">Telefono</label>
					<div class="formulario__grupo-input">
						<input type="text" class="formulario__input" name="telefono"  placeholder="### ### ####" required>
						
					</div>
				</div>
                
                <!-- Grupo: fecha de llegada -->
                <div class="formulario__grupo" id="grupo__finicio">
					<label for="finicio" class="formulario__label">Fecha de entrega</label>
					<div class="formulario__grupo-input">
						<input type="date" class="formulario__input" name="finicio" placeholder="Fecha de llegada" required>
					</div>
				</div>

				<br>

                <div class="formulario__grupo formulario__grupo-btn-enviar">
                    <button type="submit" class="formulario__btn">Ordenar</button>
                </div>  
            </div> 

    </main>
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Telefono</h4>
                <p>123-456-7891</p>
            </div>
            <div class="content-foo">
                <h4>Correo</h4>
                <p>devilsfood@hell.nvd</p>
            </div>
            <div class="content-foo">
                <h4>Direccion</h4>
               <p>Inferno  #666, A un lado del pinguino congelado</p>
            </div>
        </div>
        <br>
        
    </footer>
</body>

</html>