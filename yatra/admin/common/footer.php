<script type="text/javascript">
function handleFileSelect(evt) {
        var files = evt.target.files;
        var f = files[0];
        var reader = new FileReader();
         
          reader.onload = (function(theFile) {
                return function(e) {
                  document.getElementById('list').innerHTML = ['<img src="', e.target.result,'" title="', theFile.name, '" width="150" height="100" />'].join('');
                };
          })(f);
           
          reader.readAsDataURL(f);
}


if (window.FileReader) {
  document.getElementById('files').addEventListener('change', handleFileSelect, false);
} else {
  alert('This browser does not support FileReader');
}

/*Dropdown menu*/
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  var dropbtn = document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

function navFunc() {
  var x = document.getElementById("sidebar");
  var y = document.getElementById("main-content");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.width = "83%";
  } else {
    x.style.display = "none";
    y.style.width = "98%";
  }
}
</script>
