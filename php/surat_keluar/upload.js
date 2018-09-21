 $(document).ready(function (e) {
    $("#uploadForm").on('submit',(function(e) {
        e.preventDefault();

        // var ext = $('#fileUpload').val().split('.').pop().toLowerCase();
        // //Allowed file types
        // if($.inArray(ext, ['pdf','jpg','jpeg']) == -1) {
        // alert('The file type is invalid!');
        // $('#fileUpload').val("");
        // $('#fileUpload').html("");
        // }
         
        //Tested in Firefox and Google Chorme
        sizee = $("#fileUpload")[0].files[0].size; //file size in bytes
        sizee = sizee / 1024; //file size in Kb
        sizee = sizee / 1024; //file size in Mb
        console.log(sizee);
        //file size more than 10Mb
        if (sizee == 10) {
        alert("Maximum file size is 10Mb");
        return false;
        }  else {
            console.log('tai');

        }

        
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
            alert("Upload GAGAL ANJING");
            },
                       
       });

}));
});  