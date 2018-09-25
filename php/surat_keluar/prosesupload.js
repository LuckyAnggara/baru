function view(no){
            $.ajax({
            type: 'POST',
            url: "../../../php/surat_keluar/fetchnomor.php",
            data: 'no='+no,
            success: function() {
                console.log(no);
                $('.modal-body-2').load("../../../php/surat_keluar/show.php");
            }
            });
        };
function upload(no){
            $.ajax({
            type: 'POST',
            url: "../../../php/surat_keluar/fetchnomor.php",
            data: 'no='+no,
            success: function(){
            $('#upload_form').load("../../../php/surat_keluar/upload_form.php");
            }
        });
        }

function closeUpload(){
              
            $('#tabelupdate').load("../../../php/surat_keluar/update.php"); 
    
        }


       
