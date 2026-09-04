
  
// 1. El texto que queremos que se escriba
const texto = "Hi! I am Daniela.";

// 2. Seleccionamos el elemento del HTML
const titulo = document.getElementById("titulo-animado");

// Variables de control
let indice = 0;
let borrando = false;

function efectoTipeo() {
  if (!borrando) {
    // Modo ESCRIBIENDO: Agrega una letra a la vez
    titulo.innerText = texto.substring(0, indice + 1);
    indice++;

    // Si ya escribió todo el texto
    if (indice === texto.length) {
      borrando = true;
      // Pausa de 2 segundos antes de empezar a borrar
      setTimeout(efectoTipeo, 2000);
      return;
    }
    } else {
    // Modo BORRANDO: Quita una letra a la vez
    titulo.innerText = texto.substring(0, indice - 1);
    indice--;

    // Si ya borró todo el texto
    if (indice === 0) {
      borrando = false;
      // Pausa de medio segundo antes de volver a escribir
      setTimeout(efectoTipeo, 500);
      return;
    }
  }

  // Velocidad: 100ms al escribir, 50ms al borrar (más rápido)
  const velocidad = borrando ? 50 : 100;
  setTimeout(efectoTipeo, velocidad);
}

// Iniciar la animación
efectoTipeo();




document.addEventListener('DOMContentLoaded', () => {
  const tarjetas = document.querySelectorAll('.card');

  // 1. Ocultamos todas las imágenes al cargar la página
  tarjetas.forEach((card) => {
    const imagen = card.querySelector('img');
    if (imagen) {
      imagen.classList.add('oculto');
    }
  });

  // 2. Agregamos el evento a cada título
  tarjetas.forEach((card) => {
    const titulo = card.querySelector('h4');
    const imagenActual = card.querySelector('img');

    titulo.addEventListener('click', () => {
      // Guardamos si la imagen actual ya estaba visible antes del clic
      const estaAbierta = !imagenActual.classList.contains('oculto');

      // CIERRA TODAS LAS IMÁGENES PRIMERO
      tarjetas.forEach((otraCard) => {
        const otraImagen = otraCard.querySelector('img');
        if (otraImagen) {
          otraImagen.classList.add('oculto');
        }
      });

      /* SI NO ESTABA ABIERTA, abre solo la que clickeaste*/
      /* (Si ya estaba abierta, el paso anterior ya la cerró)*/
      if (!estaAbierta) {
        imagenActual.classList.remove('oculto');
      }
    });
  });
});