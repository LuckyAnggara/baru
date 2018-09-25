function view(no){
            $.ajax({
            type: 'POST',
            url: "../../../php/surat_keluar_rahasia/fetchnomor.php",
            data: 'no='+no,
            success: function() {
                $('.modal-body-2').load("../../../php/surat_keluar_rahasia/show.php");
            }
            });
        };
function upload(no){
            $.ajax({
            type: 'POST',
            url: "../../../php/surat_keluar_rahasia/fetchnomor.php",
            data: 'no='+no,
            success: function(){
            $('#upload_form').load("../../../php/surat_keluar_rahasia/upload_form.php");
            }
        });
        }

function closeUpload(){
              
            $('#tabelupdate').load("../../../php/surat_keluar_rahasia/update.php"); 
    
        }


       
