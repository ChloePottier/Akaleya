   // variables
   let prev = document.querySelector('.slider-prev');
   let next = document.querySelector('.slider-next');
//    let play = document.querySelector('.slider-play');
   let sliderWrapper = document.querySelector('.slider-wrapper');
   // querySelectorAll les recup tous, permet de les compter
   let slide = document.querySelectorAll('.slider-items')
   //longueur du tableau. combien de items ?
   let sliderLength = slide.length;
   console.log(sliderLength);
   //état initiale du compteur pour ensuite l'incrémenter
   let counter = 0;
   //on ajoute la class 'active' sur le slide
   
   slide[counter].classList.add('active');
   //decleche la fct sliding tout les .... sec = autoplay
   let delay = setInterval(sliding, 2000);
   //Bouton next
   next.addEventListener('click', function(){
       //si on clic on arrete l'autoplay
       clearInterval(delay);
    //   alert('next')
      //on suppr active du slide pour passer au suiv
      slide[counter].classList.remove('active')
      //on incrémente de 1
      counter++;
      //si le compteur est supp ou égale à la longueur du tableau
      if(counter >= sliderLength){
          //retourne au début
          counter = 0;
      }
      // on ajoute la class active au nvo slide
      slide[counter].classList.add('active')
   });
   //bouton Précédent
   prev.addEventListener('click', function(){
       clearInterval(delay);
      // alert('prev')
      slide[counter].classList.remove('active')
      //on incrémente de 1
      counter--;
      //si le compteur est supp ou égale à la longueur du tableau
      if(counter < 0){
          //retourne au début
          counter = sliderLength - 1;
      }
      slide[counter].classList.add('active')
   });
   // relancer l'autoplay
//    play.addEventListener('click', () => {
//        delay = setInterval(sliding, 1000);
//    });

   // au survole (quand la souris entre dans le slide) 
   sliderWrapper.addEventListener('mouseenter', () => {
       clearInterval(delay);
   });
   // quand je sors du survole (quand la souris sort du slide) 
   sliderWrapper.addEventListener('mouseleave', () => {
       delay = setInterval(sliding, 2000);
   });
   function sliding(){
       slide[counter].classList.remove('active')
      //on incrémente de 1
      counter++;
      //si le compteur est supp ou égale à la longueur du tableau
      if(counter >= sliderLength){
          //retourne au début
          counter = 0;
      }
      slide[counter].classList.add('active')
   }
   