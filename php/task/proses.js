

    $(document).ready(function(){
        $("#simpan2").click(function(){
            var data = $('#posting').serialize();
            $.ajax({
            type: 'POST',
            url: "../../php/task/proses.php",
            data: data,
            success: function() {
            $('#tabelupdate').load("../../php/task/update.php");

            }
        });
        });

        $("#updatetask").click(function(){
            var data = $('#posting').serialize();
            $.ajax({
            type: 'POST',
            url: "../../php/task/proses.php",
            data: data,
            success: function() {
            $('#tabelupdate').load("../../php/task/update.php");

            }
        });
        });

           
    });;
