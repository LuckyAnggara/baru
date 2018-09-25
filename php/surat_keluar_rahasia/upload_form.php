



                        <div class="modal-body"  id="form_upload">
                        <!-- File Upload | Drag & Drop OR With Click & Choose -->
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">
                                       <form action ="upload.php" id="uploadForm">
                                          <div class="form-group">
                                            <label for="exampleFormControlFile1">Pilih File Nya</label>
                                            <input type="file" class="form-control-file" name="fileUpload" id="fileUpload">
                                            <button type="submit" class="btn btn-link waves-effect pull-left">Upload</button>
                                          </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <!-- #END# File Upload | Drag & Drop OR With Click & Choose -->                                 
                        </div>                        
                        

<script>
    $(document).ready(function (e) {
    $("#uploadForm").on('submit',(function(e) {
        e.preventDefault();
        ext = $('#fileUpload').val().split('.').pop().toLowerCase();
        sizee = $("#fileUpload")[0].files[0].size; //file size in bytes
       //Type File yang Diperbolehkan
       if($.inArray(ext, ['pdf','jpg','jpeg']) == -1) {
           alert('Tipe File salah, (.pdf .jpg .jpeg)');
           $('#fileUpload').val("");
           $('#fileUpload').html("");
           return false;
       }
       else
       {
        if (sizee > 10000000) {
        alert("Size File Maximum 10 Mb");
        return false;
        }
        else
        {
            $.ajax({
            url: "../../../php/surat_keluar_rahasia/upload.php",
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data)
            {
            alert("Upload File Sukess!");
            },
            error: function() 
            {
            alert("Upload File Gagal!");
            },           
            });
        }
       }
}));
});  

</script>