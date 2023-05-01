

const scrolling1 = document.querySelector(".wrapper1");
const scrolling2 = document.querySelector(".wrapper2");
//Hacemos la llamada y traemos los datos del JSON

fetch('http://localhost/Ranking40/canciones.json')
  .then(response => response.json())
  .then(datos => {
   //Capturamos las listas de objetos y las guardamos
    const canciones1 = datos.canciones1;
    const canciones2 = datos.canciones2;

  //Arreglo que se asignará como clase que define los colores
   const colores =["black", "purple", "red"]
   let i = 0

   //Recorremos la primer lista de objetos
    canciones1.forEach((item, i) => {
        const cardContainer = document.createElement("div");
        cardContainer.classList.add("card-container");
   
        
    //Agregamos las canciones a nuestro HTML


        cardContainer.innerHTML = `
        <div class="card">
           <img src="lista/${item.foto}.jpg" alt=${item.foto}>
           <div class="text-container ${colores[i % colores.length]}">
             <h2 class="artist-name">${item.artista}</h2>
             <p class="artist-song">${item.tema}</p>
             <a href=${item.url} target="_blank"> Ver en Youtube </a>
            </div>
        </div> `;
      /*  console.log(1,colores[i % colores.length])
        console.log(2,[i % colores.length])
        console.log(3,i)
        console.log(4,colores.length)
       console.log(item.foto)
       console.log(item.artista)
       console.log(item.tema)*/

       
        scrolling1.appendChild(cardContainer);


        
      });


       //Recorremos la segunda lista de objetos
      canciones2.forEach((item, i) => {
      const cardContainer = document.createElement("div");
      cardContainer.classList.add("card-container");
 //Agregamos las canciones a nuestro HTML


      cardContainer.innerHTML = `
      <div class="card">
         <img src="lista/${item.foto}.jpg" alt=${item.foto}>
         <div class="text-container ${colores[i % colores.length]}">
           <h2 class="artist-name">${item.artista}</h2>
           <p class="artist-song">${item.tema}</p>
           <a href=${item.url} target="_blank"> Ver en Youtube </a>
          </div>
      </div> `;
    /*  console.log(1,colores[i % colores.length])
      console.log(2,[i % colores.length])
      console.log(3,i)
      console.log(4,colores.length)
     console.log(item.foto)
     console.log(item.artista)
     console.log(item.tema)*/

     
      scrolling2.appendChild(cardContainer);


      
    });

      
    }
 
   
  );


  //Búsqueda de canciones de la sección votar

/*const searchInput = document.querySelector('.search-song');
const songsSelect = document.querySelector('.search-select');


searchInput.addEventListener('input', () => {
  const searchQuery = searchInput.value.toLowerCase();
  
  for (let i = 0; i < songsSelect.options.length; i++) {
    const option = songsSelect.options[i];
    const optionText = option.text.toLowerCase();
    
    if (optionText.includes(searchQuery)) {
      option.style.display = '';
    } else {
      option.style.display = 'none';
    }
  }
});*/


const searchInputs = document.querySelectorAll('.search-song');
const songsSelects = document.querySelectorAll('.search-select');

searchInputs.forEach((searchInput, index) => {
  const songsSelect = songsSelects[index];
  
  searchInput.addEventListener('input', () => {
    const searchQuery = searchInput.value.toLowerCase();

    for (let i = 0; i < songsSelect.options.length; i++) {
      const option = songsSelect.options[i];
      const optionText = option.text.toLowerCase();

      if (optionText.includes(searchQuery)) {
        option.style.display = '';
      } else {
        option.style.display = 'none';
      }
    }
  });
});













    

