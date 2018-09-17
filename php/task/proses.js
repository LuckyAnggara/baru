

$(document).ready(function(){
            $("#simpan2").click(function(){
            var data = $('#posting').serialize();
            $.ajax({
            type: 'POST',
            url: "../../php/task/proses.php",
            data: data,
            success: function() {

            console.log("TAI");
            }
        });
        });
           
        });;
