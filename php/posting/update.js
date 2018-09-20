$(function () {
initLoading();
});

//Init Loading
function initLoading() {
$('[data-toggle="cardloading"]').on('click', function () {
var effect = $(this).data('loadingEffect');
var color = $.AdminBSB.options.colors[$(this).data('loadingColor')];

var $loading = $(this).parents('.card').waitMe({
        effect: effect,
        text: 'Loading...',
        bg: 'rgba(255,255,255,0.90)',
        color: color
        });

        setTimeout(function () {
        //Loading hide
        $('#postingfeed').load("php/posting/update.php");
        $loading.waitMe('hide');
                        
        }, 1600);
    });
}


$("#load").click(function(){
 $('#postingfeed').load("php/posting/updatelimit.php");
});



    