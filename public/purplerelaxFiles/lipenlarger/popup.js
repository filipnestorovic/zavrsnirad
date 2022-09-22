
var orderModal = document.getElementById("orderModal");

$(document).ready(function(){
    $(".fform").click(function() {
        orderModal.style.display = "block";
    });
    var closeSpan = document.getElementsByClassName("close")[0];
    closeSpan.onclick = function() {
        orderModal.style.display = "none";
    };
});
