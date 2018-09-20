$(document).ready(function (e) {
    $("#uploadForm").on('submit',(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../../../php/surat_keluar/upload.php",
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data)
            {
            alert("Upload File Sukess");
            },
            error: function() 
            {
            }           
       });
    }));
});