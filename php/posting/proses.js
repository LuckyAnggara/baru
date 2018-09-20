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

function deletePost(no){
    console.log("cek");
    showConfirmMessageDeletePost(no);          
};

//     $('#delete').on('click', function () {
//         var type = $(this).data('type');
//         var id = $(this).data('id');
//         if (type === 'confirm') {
//             showConfirmMessageDelete(id);
//         }
//     });
// });


function showConfirmMessageDeletePost(no) {
    swal({
        title:"Apa Anda Yakin?",
        text: "Posting anda akan hilang!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false
    }, function () {
        swal("Deleted!", "Posting anda telah di delete.", "success");
        $.ajax({
            type: 'POST',
            url: "php/posting/proses_delete.php",
            data: 'no='+no,
            success: function() {
            $('#postingfeed').load("php/posting/update.php");
            }
            });

    });
}

// posting notification



// document.addEventListener('keydown', (event) => {
//   const keyName = event.key;
//   alert('keydown event\n\n' + 'key: ' + keyName);
// });
