    $(document).ready(function(){
        $("#post").click(function(){
            var data = $('#posting').serialize();
            $.ajax({
            type: 'POST',
            url: "php/posting/proses.php",
            data: data,
            success: function() {
            document.getElementById("post_text").value = "";
            $('#postingfeed').load("php/posting/update.php");
            
            }
            });
        
        });          
    });


    var auto_refresh = setInterval(
    function () {

       $('#postingfeed').load('php/posting/update.php').fadeIn("slow");

    }, 10000); // refresh setiap 10000 milliseconds

    $("#refresh").click(function(){

        $('#postingfeed').load("php/posting/update.php");
    });

    var input = document.getElementById("comment");
    input.addEventListener("keyup", function(e) {
    e.preventDefault();
    if (e.keyCode === 13) {
    console.log("GOOD");
           
        
  
        
    }
    });