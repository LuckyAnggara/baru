$(function () {
    $('.js-sweetalert button').on('click', function () {
        var type = $(this).data('type');
        if (type === 'success') {
            if(document.getElementById("instansi").value == "" ){
            showWithTitleMessage();
            }else{
            document.getElementById("instansi").value = "";
            document.getElementById("tanggal").value = "";
            document.getElementById("pic").value = "";
            document.getElementById("nohp").value = "";
            document.getElementById("resume").value = "";
            showSuccessMessage();
            }
        }
    });
    });

    function showSuccessMessage() {
    swal("Good job!", "Data Telah Tersimpan!", "success");
    }

   function showWithTitleMessage() {
    swal("Ahhh!!", "Data Gagal Disimpan, Karena Belum Lengkap! :(");
}