window.onscroll = function() {
    mostrarBotonVolverArriba();
  };
  
  function mostrarBotonVolverArriba() {
    var btnVolverArriba = document.getElementById("btn-volver-arriba");
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      btnVolverArriba.style.display = "block";
    } else {
      btnVolverArriba.style.display = "none";
    }
  }
  
  function scrollToTop() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });    
  }

// Obtener todas las secciones
const sections = document.getElementsByClassName('section');


// Obtén todas las burbujas de habilidades
const skillBubbles = document.querySelectorAll('.skill-bubble');

// Agrega el evento de clic a cada burbuja de habilidad
skillBubbles.forEach((bubble) => {
  bubble.addEventListener('click', () => {
    bubble.classList.toggle('active');
  });
});


function expandSection(section) {
  // Ajustar la clase de la sección activa
  section.classList.add('active');
  section.classList.remove('inactive');
}

function collapseSection(section) {
  // Ajustar la clase de la sección inactiva
  section.classList.remove('active');
  section.classList.add('inactive');
}


fetch('https://api.github.com/users/DavidReal04/repos')
  .then(response => response.json())
  .then(data => {
    const reposContainer = document.getElementById('github-repos');
    
    data.forEach(repo => {
      const repoCard = document.createElement('div');
      repoCard.classList.add('repo-card');
      
      const repoName = document.createElement('h3');
      repoName.classList.add('repo-name');
      repoName.textContent = repo.name;
      
      const repoDescription = document.createElement('p');
      repoDescription.classList.add('repo-description');
      repoDescription.textContent = repo.description;
      
      const repoLink = document.createElement('a');
      repoLink.classList.add('repo-link');
      repoLink.href = repo.html_url;
      repoLink.textContent = 'Ver en GitHub';
      
      repoCard.appendChild(repoName);
      repoCard.appendChild(repoDescription);
      repoCard.appendChild(repoLink);
      
      reposContainer.appendChild(repoCard);
    });
  });


