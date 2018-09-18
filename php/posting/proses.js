    $(document).ready(function(){
        $("#post").click(function(){
            if(document.getElementById("post_text").value ===""){
            notiffailed();
            }else{
            var data = $('#posting').serialize();
            $.ajax({
            type: 'POST',
            url: "php/posting/proses.php",
            data: data,
            success: function() {
            document.getElementById("post_text").value = "";
            $('#postingfeed').load("php/posting/update.php");
            notifsucces();            
            }
            });
            }  
        });

        

    });

    



// document.addEventListener('keydown', (event) => {
//   const keyName = event.key;
//   alert('keydown event\n\n' + 'key: ' + keyName);
// });
