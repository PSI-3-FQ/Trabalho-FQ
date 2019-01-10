//Slides
var slideIndex = 0;
showSlides();      
 function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");                
    
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slideIndex++;

    if (slideIndex > slides.length) {
        slideIndex = 1
    }                               
    slides[slideIndex-1].style.display = "block";                
    setTimeout(showSlides, 5000);
}

//Tabela Elementos

//Slider
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000); // Change image every 2 seconds
}
