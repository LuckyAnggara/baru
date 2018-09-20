function prosesComment(no){
var data = no;
console.log(data);
document.getElementById(data).addEventListener('keydown', (event) => {

console.log("ketik");
    
    if (event.key == "Enter") {
        console.log("ENTER SUKSES");
        event.preventDefault();
        if(document.getElementById(data).value ===""){
                                                                    
        }else{

        var value = $('#post_comment'+no).serialize();                                               
         $.ajax({
         type: 'POST',
         url: "php/posting/prosescomment.php",
         data: {id:data, value},
         success: function() {
         $('#postingfeed').load("php/posting/update.php");
         console.log(value);
         event.preventDefault();      
         }
         });               
    }
    }    
});
}

       
//                                                         var nofeed= <?php echo json_encode($count); ?>;
//                                                         var comment = "#"+nofeed;
                                                        
//                                                         document.getElementById(nofeed).addEventListener('keydown', (event) => {

//                                                         if (event.key == "Enter") {
//                                                             event.preventDefault();
//                                                             if(document.getElementById(nofeed).value ===""){
                                                                                                                        
//                                                             }else{

//                                                             var data = document.getElementById(nofeed).value;
//                                                             var id = $(comment).data('id');
                                                                                                                        
//                                                             $.ajax({
//                                                             type: 'POST',
//                                                             url: "php/posting/prosescomment.php",
//                                                             data: {id:id, data:data},
//                                                             success: function() {
//                                                             console.log(nofeed);  
//                                                             $('#postingfeed').load("php/posting/update.php");

//                                                             document.getElementById(nofeed).value = "";
//                                                             event.preventDefault();      
//                                                             }
//                                                             });
//                                                         }                
//                                                         }    
//                                                     });

//                                                         function prosesComment(nofeed){
// console.log(nofeed);
// document.getElementById(nofeed).addEventListener('keydown', (event) => {

//     if (event.key == "Enter") {
//         event.preventDefault();
//         if(document.getElementById(nofeed).value ===""){
                                                                    
//         }else{

//         var data = document.getElementById(nofeed).value;
//         var id = $(comment).data('id');
                                                                    
//         $.ajax({
//         type: 'POST',
//         url: "php/posting/prosescomment.php",
//         data: {id:id, data:data},
//         success: function() {
//         console.log(nofeed);  
//         $('#postingfeed').load("php/posting/update.php");

//         document.getElementById(nofeed).value = "";
//         event.preventDefault();      
//         }
//         });
//     }                
//     }    
// });
// }
                                