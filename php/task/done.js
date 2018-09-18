
// $(document).ready(function(){
// 	$("#task").click(function(){
// 	    var id = $('#task').data('id');
// 	    console.log(id);
// 	});
// });

	function selesai(no){
			showConfirmMessage(no);          

      };

    function showConfirmMessage(no) {
    swal({
        title: "Pekerjaan Selesai?",
        text: "Apa kau yakin pekerjaanmu telah selesai??",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Ya, Pekerjaan Selesai!!",
        closeOnConfirm: false
    }, function () {
        swal("DONE!!", "Selamat Pekerjaanmu Selesai!!", "success");
        $.ajax({
            type: 'POST',
            url: "php/task/proses_task.php",
            data: 'no='+no,
            success: function() {
                console.log(no);
                $('#updatetask').load("php/task/update_task.php");
         }
        });
    });
}