 <div class="footer">
  Copyright &copy yatra.com |Privacy Policy| Terms of Use<br><br>
  Email-id:yatra.yt@gmail.com<br>
  Phone Number:984567890
  </div>
 <script>
  var slideIndex = 0;
  showSlides();
function showSlides() 
{
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); 
    
}
function plusslides(n)
 {
  showSlides(slideIndex += n);
}

function currentSlides(n) 
{
  showslides(slideIndex = n);
}

function phoneValidator(elem)
{ var phoneExp = /^9+([7-8][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]+)/; if(elem.val().match(phoneExp) && elem.val().length==10) { return true;  } else  { return false; }
}
</script>  