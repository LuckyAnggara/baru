var auto_refresh = setInterval(
    function () {

       $('#postingfeed').load('php/posting/update.php').fadeIn("slow");

    }, 10000); // refresh setiap 10000 milliseconds

    $("#refresh").click(function(){

        $('#postingfeed').load("php/posting/update.php");
    });