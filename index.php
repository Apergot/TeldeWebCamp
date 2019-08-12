<?php include_once 'includes/templates/header.php'?>

  <section class="seccion contenedor">
    <h2>La mejor conferencia de desarrollo web en español</h2>

    <p>
      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus rerum nostrum at placeat quae, ea asperiores!
      Inventore consequatur corrupti quod quasi animi nesciunt, totam laudantium commodi consectetur, eum tenetur rem.
    </p>
  </section>

  <section class="programa">

    <div class="contenedor-video">
      <video autoplay loop poster="img/bg-talleres.jpg">
        <source src="video/video.mp4" type="video/mp4">
        <source src="video/video.webm" type="video/webm">
        <source src="video/video.ogv" type="video/ogv">
      </video>
    </div>

    <div class="contenido-programa">
      <div class="contenedor">
        <div class="programa-evento">
          <h2>Programa del evento</h2>
          <nav class="menu-programa">
            <a href="#talleres"><i class="fa fa-code" aria-hidden="true"></i>Talleres</a>
            <a href="#conferencias"><i class="fa fa-comment" aria-hidden="true"></i>Conferencias</a>
            <a href="#seminarios"><i class="fa fa-university" aria-hidden="true"></i>Seminarios</a>
          </nav>

          <div id="talleres" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>HTML5, CSS3 y Javascript</h3>
              <p><i class="fas fa-clock" aria-hidden="true"></i>XX:XX</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i>XX de XX</p>
              <p><i class="fa fa-user" aria-hidden="true"></i>Alejandro Perdomo González</p>
            </div>
            <div class="detalle-evento">
              <h3>Responsive Web Design</h3>
              <p><i class="fas fa-clock" aria-hidden="true"></i>XX:XX</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i>XX de XX</p>
              <p><i class="fa fa-user" aria-hidden="true"></i>Alejandro Perdomo González</p>
            </div>
            <a href="" class="button float-right"> Ver todos</a>
          </div>
        </div>
        <!--Para manejar con jquery posteriormente-->
        <div id="conferencias" class="infor-curso ocultar clearfix">
          <div class="detalle-evento">
            <h3>¿Cómo trabajar de freelance?</h3>
            <p><i class="fas fa-clock" aria-hidden="true"></i>XX:XX</p>
            <p><i class="fa fa-calendar" aria-hidden="true"></i>XX de XX</p>
            <p><i class="fa fa-user" aria-hidden="true"></i>Alejandro Perdomo González</p>
          </div>
          <div class="detalle-evento">
            <h3>Tecnologías del futuro</h3>
            <p><i class="fas fa-clock" aria-hidden="true"></i>XX:XX</p>
            <p><i class="fa fa-calendar" aria-hidden="true"></i>XX de XX</p>
            <p><i class="fa fa-user" aria-hidden="true"></i>Alejandro Perdomo González</p>
          </div>
        </div>
        <div id="seminarios" class="info-curso ocultar clearfix">
          <div class="detalle-evento">
            <h3>Aprende a programar en una mañana</h3>
            <p><i class="fas fa-clock" aria-hidden="true"></i>XX:XX</p>
            <p><i class="fa fa-calendar" aria-hidden="true"></i>XX de XX</p>
            <p><i class="fa fa-user" aria-hidden="true"></i>Alejandro Perdomo González</p>
          </div>
          <div class="detalle-evento">
            <h3>No te hace falta ni una mañana</h3>
            <p><i class="fas fa-clock" aria-hidden="true"></i>XX:XX</p>
            <p><i class="fa fa-calendar" aria-hidden="true"></i>XX de XX</p>
            <p><i class="fa fa-user" aria-hidden="true"></i>Alejandro Perdomo González</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="invitados contenedor seccion">
    <h2>Nuestros Ponentes</h2>
    <ul class="lista-invitados clearfix">
      <li>
        <div class="invitado">
          <img src="img/invitado1.jpg" alt="inv">
          <p class="nombre">Alejandro Perdomo</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado2.jpg" alt="inv">
          <p class="nombre">Alejandro Perdomo</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado3.jpg" alt="inv">
          <p class="nombre">Alejandro Perdomo</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado4.jpg" alt="inv">
          <p class="nombre">Alejandro Perdomo</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado5.jpg" alt="inv">
          <p class="nombre">Alejandro Perdomo</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado6.jpg" alt="inv">
          <p class="nombre">Alejandro Perdomo</p>
        </div>
      </li>
    </ul>
  </section>

  <div class="contador parallax">
    <div class="contenedor">
      <ul class="resumen-evento clearfix">
        <li>
          <p class="numero">6</p>Invitados
        </li>
        <li>
          <p class="numero">23</p>Talleres
        </li>
        <li>
          <p class="numero">3</p>Días
        </li>
        <li>
          <p class="numero">9</p>Conferencias
        </li>
      </ul>
    </div>
  </div>

  <section class="precios seccion">
    <h2>Precios</h2>
    <div class="contenedor">
      <ul class="lista-precios clearfix">
        <li>
          <div class="tabla-precio">
            <h3>Pase un día (viernes)</h3>
            <p class="numero">30€</p>
            <!--alt+0128-->
            <ul>
              <li><i class="fas fa-check"></i>Almuerzo incluido</li>
              <li><i class="fas fa-check"></i>Todas las conferencias</li>
              <li><i class="fas fa-check"></i>Todos los talleres</li>
            </ul>
            <a href="#" class="button hollow">COMPRAR</a>
          </div>
        </li>
        <li>
          <div class="tabla-precio">
            <h3>Pase para tres días</h3>
            <p class="numero">50€</p>
            <!--alt+0128-->
            <ul>
              <li><i class="fas fa-check"></i>Almuerzo incluido</li>
              <li><i class="fas fa-check"></i>Todas las conferencias</li>
              <li><i class="fas fa-check"></i>Todos los talleres</li>
            </ul>
            <a href="#" class="button">COMPRAR</a>
          </div>
        </li>
        <li>
          <div class="tabla-precio">
            <h3>Pase dos días (Viernes y sábado)</h3>
            <p class="numero">45€</p>
            <!--alt+0128-->
            <ul>
              <li><i class="fas fa-check"></i>Almuerzo y cena</li>
              <li><i class="fas fa-check"></i>Todas las conferencias</li>
              <li><i class="fas fa-check"></i>Todos los talleres</li>
            </ul>
            <a href="#" class="button hollow">COMPRAR</a>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <div id="map" class="mapa">
    
  </div>

  <section class="seccion">
    <h2>Opiniones</h2>
    <div class="opiniones contenedor clearfix">
      <div class="opinion">
        <blockquote>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, ut consequuntur doloribus sit atque
            veniam quasi.</p>
          <footer class="info-opinion clearfix">
            <img src="img/testimonial.jpg" alt="opinion">
            <cite>Alejandro Perdomo <span>Web Developer en @ZerIT</span></cite>
          </footer>
        </blockquote>
      </div>
      <div class="opinion">
        <blockquote>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, ut consequuntur doloribus sit atque
            veniam quasi.</p>
          <footer class="info-opinion clearfix">
            <img src="img/testimonial.jpg" alt="opinion">
            <cite>Alejandro Perdomo <span>Web Developer en @ZerIT</span></cite>
          </footer>
        </blockquote>
      </div>
      <div class="opinion">
        <blockquote>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, ut consequuntur doloribus sit atque
            veniam quasi.</p>
          <footer class="info-opinion clearfix">
            <img src="img/testimonial.jpg" alt="opinion">
            <cite>Alejandro Perdomo <span>Web Developer en @ZerIT</span></cite>
          </footer>
        </blockquote>
      </div>
    </div>
  </section>

  <div class="newsletter parallax">
    <div class="contenido contenedor">
      <p>Suscríbete al newsletter</p>
      <h3>TeldeWebCamp</h3>
      <br>
      <a href="#" class="button transparente">Registro</a>
    </div>
  </div>

  <section class="seccion">
    <h2>Faltan</h2>
    <div class="cuenta-atras contenedor">
      <ul class="clearfix">
        <li>
          <p class="numero">XX</p>días
        </li>
        <li>
          <p class="numero">XX</p>horas
        </li>
        <li>
          <p class="numero">XX</p>minutos
        </li>
        <li>
          <p class="numero">XX</p>segundos
        </li>
      </ul>
    </div>
  </section>

<?php include_once 'includes/templates/footer.php'?>
