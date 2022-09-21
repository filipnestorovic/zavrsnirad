 
var modal2 = document.getElementById("myModal2");
var span9 = document.getElementsByClassName("close9")[0];
$(document).ready(function(){
    $(".fform").click(function() {
        modal2.style.display = "block";
    });
});
 
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
   
}