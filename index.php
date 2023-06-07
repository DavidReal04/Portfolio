<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>RealDeveloper</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="stylesheet" href="styles.css">
  <script src="https://kit.fontawesome.com/caedd9e079.js" crossorigin="anonymous"></script>
  <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<header class="fixed-header">
  <nav class="navbar custom-navbar animate__animated animate__fadeInDown" role="navigation" aria-label="main navigation">
    <div class="container">
      <div class="navbar-brand">
        <a class="navbar-item" href="#">
          <img src="img/iconoR.png" alt="Icono">
          <h1 class="title is-4">Página Personal</h1>
        </a>
        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarMenu">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>
      <div id="navbarMenu" class="navbar-menu">
        <div class="navbar-start">
          <a class="navbar-item" href="#sobre-mi">Sobre Mí</a>
          <a class="navbar-item" href="#conocimientos">Conocimientos</a>          
          <a class="navbar-item" href="#habilidades">Habilidades</a>
          <a class="navbar-item" href="#repositorios">Repositorios</a>
        </div>
      </div>
    </div>
  </nav>
</header>

<body>
  <section id="sobre-mi" class="section active is-primary is-fullheight animate__animated animate__fadeInUp" onmouseover="expandSection(this)">
    <div class="section-body">    
      <div class="container has-text-centered">              
        <h2 class="title">Sobre Mí</h2>  
        <div class="columns is-centered">                
          <div class="about-text">                        
            <p>¡Hola! Mi nombre es David Real. Soy un apasionado desarrollador de software con experiencia en diversos lenguajes y tecnologías.</p>
            <p>Desde que descubrí mi pasión por la programación, he estado involucrado en proyectos emocionantes que me han permitido adquirir un amplio conjunto de habilidades y conocimientos en el campo de la informática.</p>
            <p>Me encanta enfrentar desafíos y encontrar soluciones creativas a problemas complejos. Siempre estoy buscando oportunidades para aprender y mejorar mis habilidades, y me emociona trabajar en proyectos desafiantes que me permitan aplicar mis conocimientos y contribuir al éxito de un equipo.</p>
            <p>Además de mi pasión por la programación, también disfruto del diseño de interfaces de usuario y la creación de experiencias de usuario intuitivas y atractivas.</p>
            <p>En mi tiempo libre, me gusta mantenerme actualizado sobre las últimas tendencias tecnológicas, participar en comunidades de desarrollo y disfrutar de otras actividades como los videojuegos y el fútbol.</p>
            <p>Si estás interesado en colaborar en un proyecto o simplemente quieres hablar sobre tecnología, ¡no dudes en contactarme!</p>
          </div>
          <div class="about-images">
            <div>
              <img src="img/logo.jfif" alt="Mi logo">
            </div>
            <div>
              <img src="img/Yo.png" alt="Mi foto">
            </div>
            <div>
              <img src="img/Yo2.jpg" alt="Mi foto2">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="conocimientos" class="section has-background-info animate__animated animate__fadeInUp" onmouseover="expandSection(this)" onmouseout="collapseSection(this)">
  <div class="container">
    <h2 class="title has-text-centered">Conocimientos</h2>

    <div class="columns is-multiline">
      <div class="column is-half">
        <div class="knowledge-group">
          <h3 class="subtitle ">Lenguajes de Programación</h3>
          <ul>
            <li><i class="fab fa-java"></i> Java</li>
            <li><i class="fab fa-python"></i> Python</li>
            <li><i class="fab fa-php"></i> PHP</li>
            <li><i class="fas fa-database"></i> SQL</li>
            <li><i class="fab fa-js"></i> JavaScript</li>
          </ul>
        </div>
      </div>

      <div class="column is-half">
        <div class="knowledge-group">
          <h3 class="subtitle ">Frameworks y Bibliotecas</h3>
          <ul>
            <li><i class="fab fa-node-js"></i> Node.js</li>
            <li><i class="fab fa-java"></i> Spring Boot</li>
          </ul>
        </div>
      </div>

      <div class="column is-half">
        <div class="knowledge-group">
        <h3 class="subtitle ">Bases de Datos</h3>
        <ul>
          <li><i class="fas fa-database"></i> PostgreSQL</li>
          <li><i class="fas fa-database"></i> MySQL</li>
          <li><i class="fas fa-database"></i> SQL Server</li>
          <li><i class="fas fa-database"></i> MongoDB</li>
        </ul>
      </div>
      </div>

      <div class="column is-half">
        <div class="knowledge-group">
        <h3 class="subtitle ">Desarrollo Web</h3>
        <ul>
          <li>HTML</li>
          <li>CSS</li>
          <li><i class="fab fa-js"></i> JavaScript</li>
        </ul>
      </div>
      </div>
      

      <div class="column is-half">
      <div class="knowledge-group">
        <h3 class="subtitle ">Herramientas y Tecnologías</h3>
        <ul>
          <li>Gradle</li>
          <li>Maven</li>
          <li><i class="fab fa-git"></i> Git y GitHub</li>
        </ul>
      </div>
      </div>

      <div class="column is-half">
        <div class="knowledge-group">
        <h3 class="subtitle ">Idiomas</h3>
        <ul>
          <li><i class="flag-icon flag-icon-gb"></i> Inglés (B2)</li>
          <li><i class="flag-icon flag-icon-fr"></i> Francés (A2)</li>
          <li><i class="flag-icon flag-icon-br"></i> Portugués (A1)</li>
        </ul>
      </div>
      </div>

      <div class="column is-half">
      <div class="knowledge-group">
        <h3 class="subtitle ">Redes y CISCO</h3>
        <ul>
          <li>Redes de Datos</li>
          <li>Configuración de dispositivos CISCO</li>
        </ul>
      </div>
      </div>

      <div class="column is-half">
        <div class="knowledge-group">
        <h3 class="subtitle ">Asignaturas Destacadas</h3>
        <ul>
          <li>Redes de Datos</li>
          <li>Ingeniería de Software</li>
          <li>Bases de Datos</li>
          <li>Matemáticas Aplicadas</li>
          <li>Sistemas Operativos</li>
          <li>Microprocesadores y Arquitectura del Computador</li>
        </ul>
      </div>
      </div>

    </div>

  </div>
</section>

  <section id="habilidades" class="section has-background-grey-light animate__animated animate__fadeInUp" onmouseover="expandSection(this)" onmouseout="collapseSection(this)">
  <div class="container">
  <h2 class="title has-text-centered">Habilidades</h2>
  <div class="skills-container">
    <div class="skill-bubble">
      <i class="fas fa-code"></i>
      <h3>Programación</h3>
    </div>
    <div class="skill-bubble">
      <i class="fas fa-database"></i>
      <h3>Bases de Datos</h3>
    </div>
    <div class="skill-bubble">
      <i class="fas fa-puzzle-piece"></i>
      <h3>Resolución de Problemas</h3>
    </div>
    <div class="skill-bubble">
      <i class="fas fa-users"></i>
      <h3>Trabajo en equipo y colaboración</h3>
    </div>
    <div class="skill-bubble">
      <i class="fas fa-sync"></i>
      <h3>Recursividad y Búsqueda de Soluciones</h3>
    </div>

  </div>
</div>

  </div>

  </section>

  <section id="repositorios" class="section has-background-warning animate__animated animate__fadeInRight" onmouseover="expandSection(this)" onmouseout="collapseSection(this)">
    <div class="container">
      <!-- Contenido de la sección repositorios -->
      <h2 class="title has-text-centered">Repositorios</h2>
      <div id="github-repos" class="repos-container"></div>
    </div>
  </section>

  <button id="btn-volver-arriba" onclick="scrollToTop()">
    <i class="fas fa-arrow-up"></i>
  </button>


  <footer class="footer">
    <div class="content has-text-centered">
      <p>Derechos de autor &copy; 2023 - David Santiago Real Rojas</p>
    </div>
  </footer>
  <script src="script.js"></script>  
</body>
</html>
