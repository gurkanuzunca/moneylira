/**
 * Monelira project
 * 
 * Created date 27/03/2016
 */
 
var animating = false;
var masteranimate = false;

$(function() {
// Initialize multiple switches
if (Array.prototype.forEach) {
    var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
    elems.forEach(function(html) {
        var switcherys = new Switchery(html, {size: 'small'});
    });
}
else {
    var elems = document.querySelectorAll('.js-switch');
    for (var i = 0; i < elems.length; i++) {
        var switcherys = new Switchery(elems[i], {size: 'small'});
    }
}

$('.js-chkChange').change( function(e){
    masteranimate = true;
    if (!animating){
        var masterStatus = $(this).prop('checked');
        $('.js-check-change').each(function(index){
            var switchStatus = $('.js-check-change')[index].checked;
            if(switchStatus != masterStatus){
                 $(this).trigger('click');
            }
        });
    }
    masteranimate = false;
});
$('.js-check-change').change(function(e){
   animating = true;
   if ( !masteranimate ){
       if( !$('.js-chkChange').prop('checked') ){
           $('.js-chkChange').trigger('click');
       }
       var goinoff = true;
       $('.js-check-change').each(function(index){
            if( $('.js-check-change')[index].checked ){
                goinoff = false;
            }
       });
       if(goinoff){
          $('.js-chkChange').trigger('click');
       }
   }
   animating = false;

});
});