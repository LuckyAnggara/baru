
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

function selesaiCheck(no){
    showConfirmMessageCheck(no);          
};

function showConfirmMessageCheck(no) {
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
            url: "../../php/task/proses_task.php",
            data: 'no='+no,
            success: function() {
                console.log(no);
                $('#tabelupdate').load("../../php/task/update.php");
         }
        });
    });
}

function deleteCheck(no){
    showConfirmMessageDeleteCheck(no);          
};

function showConfirmMessageDeleteCheck(no) {
    swal({
        title: "Delete?",
        text: "Apa kau yakin akan mendelete pekerjaan ini??",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Ya, Delete!!",
        closeOnConfirm: false
    }, function () {
        swal("Delete!!", "Pekerjaanmu Telah di Delete!!", "success");
        $.ajax({
            type: 'POST',
            url: "../../php/task/delete_task.php",
            data: 'no='+no,
            success: function() {
                console.log(no);
                $('#tabelupdate').load("../../php/task/update.php");
         }
        });
    });
}

$(document).ready(function(){
    $("#filter").click(function(){
    console.log("filter");
    $('#tabelupdate').load("../../php/task/filter.php");
    });
});

$(document).ready(function(){
    $("#nofilter").click(function(){
    console.log("nofilter");
    $('#tabelupdate').load("../../php/task/update.php");
    });
});
