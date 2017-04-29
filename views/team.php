<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Team</title>
    <link rel="icon" type="image/png" href="../images/icons/zero.png" />
    <link rel="stylesheet" type="text/css" href="../css/basic.css">
    <link rel="stylesheet" type="text/css" href="../css/team.css">
    <script type="text/javascript" src="../js/basic.js"></script>
    <script type="text/javascript" src="../js/team.js"></script>
    <script type="text/javascript" src="../js/lit/lit-EN.js"></script>
  </head>

  <body>

    <!-- WRAPPER CLASS -->
    <div id="wrapper">

      <!-- HEADER CLASS -->
      <?php
      include '../php/navbar.php';
       ?>


		<!-- CONTENT CLASS -->
		<div id="content">

			<div id="barraImagenes">
				<ul>
          <li>
            <div class="photo" onclick="loadText('Sergio')">
								<img id="sergio">
	          </div>
	            		  	<!-- <span>
	            		  		Azahara
	            		  	</span> -->
					</li>

					<li>
            <div class="photo" onclick="loadText('Diego')">
								<img id="diego">
	          </div>
	            		  	<!-- <span>
	            		  		Azahara
	            		  	</span> -->
					</li>

          <li>
            <div class="photo" onclick="loadText('Azahara')">
								<img id="azahara">
	          </div>
	            		  	<!-- <span>
	            		  		Azahara
	            		  	</span> -->
					</li>

          <li>
            <div class="photo" onclick="loadText('Julio')">
								<img id="julio">
	          </div>
	            		  	<!-- <span>
	            		  		Azahara
	            		  	</span> -->
					</li>
          <li>
            <div class="photo" onclick="loadText('Javier')">
								<img id="javier">
	          </div>
	            		  	<!-- <span>
	            		  		Azahara
	            		  	</span> -->
					</li>
				</ul>
			</div>

<!--
			<div id="desc" class="descripcionPersonal" style="display: none">
				<h1>Azahara Fernández Notario</h1>
				<p>
					Soy Azahara una estudiante del Grado de Ingenieria Informática de la Universidad Complutense de Madrid en la rama de Tecnologías de la Información. Aunque actualmente resido en dicha ciudad nací en Talavera de la Reina (Toledo) un 21 de Julio de 1995.
				</p>
				<p>
					Hija de Nuria y Josué, tengo tres hermanos pequeños, Yaiza, Josué y Alfredo. Me gustan el futbol, el airsoft, el rugby y los deportes en general. Además de practicar estos deportes en mi tiempo libre también me gusta leer, escuchar música o ver series.
				</p>
				<p>
					Actualmente me dedico por completo a estudiar aunque tempranamente me gustaría incorporarme al mundo laboral, en el ámbito de las aplicaciones web o la programación en general.
				</p>

				<ul class="contactIcons">
					<li>
						<a href="https://github.com/azaferna" target="_blank">
							<img src="../images/icons/git_icon.png" alt="GitHub">
						</a>
					</li>
					<li>
						<a href="https://www.facebook.com/nuria.notario.3" target="_blank">
						  <img src="../images/icons/fb_icon.png" alt="Facebook">
						</a>
					</li>
				</ul>
			</div>

			<div id="Diego" class="descripcionPersonal" style="display: none">

				<ul class="contactIcons">
					<li>
						<a href="https://github.com/Kadaiser" target="_blank">
							<img src="../images/icons/git_icon.png" alt="GitHub">
						</a>
					</li>
					<li>
						<a href="https://www.facebook.com/diego.valbuena.988" target="_blank">
							<img src="../images/icons/fb_icon.png" alt="Facebook">
						</a>
					</li>
				</ul>
			</div>

			<div id="Javier" class="descripcionPersonal" style="display: none">
				<h1>Javier de la Oliva Sanchez - Valladares </h1>
				<p>
					Soy Javier, un estudiante del Grado de Ingenieria Informática de la Universidad Complutense de Madrid en la rama de Tecnologías de la Información. Aunque actualmente resido en dicha ciudad nací en Toledo en 1991.
				</p>
				<p>
					Me gusta la música, aparte de escucharla también soy componente de varios grupos musicales. El deporte me gusta más verlo que practicarlo, entre ellos están el futbol, el tenis, y el mundo del motor en general.
				</p>
				<p>
					Poseo el título de administración de sistemas informáticos en red (ASIR), y actualmente solo me dedico a estudiar el grado de ingeniería informática.
				</p>

				<ul class="contactIcons">
					<li>
						<a href="https://github.com/javiesky" target="_blank">
							<img src="../images/icons/git_icon.png" alt="GitHub">
						</a>
					</li>
					<li>
						<a href="https://www.facebook.com/javi.esky" target="_blank">
							<img src="../images/icons/fb_icon.png" alt="Facebook">
						</a>
					</li>
				</ul>
			</div>

			<div id="Julio" class="descripcionPersonal" style="display: none">
				<h1>Enrique Julio de la Cruz Valderrama </h1>
				<p>
					Soy Julio, un estudiante del Grado de Ingenieria Informática de la Universidad Complutense de Madrid en la rama de Tecnologías de la Información. Aunque actualmente resido en dicha ciudad nací en Lima.
				</p>
				<p>
					Me encuentro cursando la carrera anteriormente mencionada, con el objetivo de complementar ciertos aspectos de mi entorno profesional.
				</p>
				<p>
					Actualmente me dedico a la consultoría de sistemas informáticos en un ámbito público.
				</p>

				<ul class="contactIcons">
					<li>
						<a href="https://github.com/endela01" target="_blank">
							<img src="../images/icons/git_icon.png" alt="GitHub">
						</a>
					</li>
					<li>
						<a href="https://www.facebook.com/" target="_blank">
							<img src="../images/icons/fb_icon.png" alt="Facebook">
						</a>
					</li>
				</ul>
			</div>

			<div id="Sergio" class="descripcionPersonal" style="display: none">
				<h1>Sergio Calero Robles</h1>
				<p>
					Soy Sergio, estudiante del Grado de Ingenieria Informática de la Universidad Complutense de Madrid en la rama de Tecnologías de la Información.
          Nací en Madrid en 1990, y aunque he vivido la mayor parte de mi vida en Alicante, he vuelto a esta ciudad para formarme y trabajar, pero me gustaría vivir en el extranjero para descubrir nuevas culturas.
				</p>
				<p>
          Actualmente trabajo en consultoría para una multinacional, participando en varios proyectos de desarrollo de aplicaciones web a jornada casi completa.
          La labor principal es desarrollo tanto de front-end como de back-end de aplicaciones basadas en Ionic, Node.js y AngularJS, que integran servicios REST y comunicación con dispositivos reales.
          A la vez, dedico el resto de mi jornada laboral a mi formación académica, así como a aprender los lenguajes del mañana, como Angular 2 para poder combinar todo el conocimiento adquirido en herramientas de futuro.
				</p>
				<p>
          Aun así, siempre queda tiempo libre para dedicarlo a disfrutar de mi novia, mi familia, mi gata y salir con los amigos.
          Me gustan los juegos de ordenador, programar, el desarrollo de videojuegos, jugar al baloncesto, viajar, los idiomas, pintar miniaturas...
				</p>
				<p>
          Necesito más tiempo. :)
				</p>


				<ul class="contactIcons">
					<li>
						<a href="https://github.com/RedParabola" target="_blank">
							<img src="../images/icons/git_icon.png" alt="GitHub">
						</a>
					</li>
					<li>
						<a href="https://www.facebook.com/search/str/Sergio-Calero-Robles" target="_blank">
							<img src="../images/icons/fb_icon.png" alt="Facebook">
						</a>
					</li>
				</ul>
			</div>
      -->

		</div>


      <!-- FOOTER CLASS -->
      <?php
        include '../php/footer.php';
       ?>

	<!-- END WRAPPER CLASS -->
	</div>

	</body>
</html>
