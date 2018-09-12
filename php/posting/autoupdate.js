    $(document).ready(function(){
        $("#post").click(function(){
            var data = $('#posting').serialize();
            $.ajax({
            type: 'POST',
            url: "php/posting/proses.php",
            data: data,
            success: function() {
            document.getElementById("post").value = "";
            $('#postingfeed').load("php/posting/update.php");
            
            }
            });
        
        });          
    });

    var auto_refresh = setInterval(
    function () {
       $('#postingfeed').load('php/posting/update.php').fadeIn("slow");
    }, 100); // refresh setiap 10000 milliseconds

    $("#refresh").click(function(){
        $('#postingfeed').load("php/posting/update.php");
    });