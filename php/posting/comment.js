    

    document.getElementById("comment").addEventListener('keydown', (event) => {
    if (event.key == "Enter") {
    event.preventDefault();
            if(document.getElementById("comment").value ===""){
                console.log("kosong"); 
                }else{

                var data = document.getElementById("comment").value;
                var id = $('#comment').data('id');
                
                $.ajax({
                    type: 'POST',
                    url: "php/posting/prosescomment.php",
                    data: {id:id, data:data},
                success: function() { 
                    $('#postingfeed').load("php/posting/update.php");
                    document.getElementById("comment").value = "";
                    event.preventDefault();      
                }
                });
                }                
            }    
    });
