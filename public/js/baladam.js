
function show (id) {

    var ID = parseInt(id);
    $('#'+ID+'box').addClass('animated zoomOut 1100');
    $('#'+ID+'subbox').animate({
        opacity:1
    },200);

}

function show1(id) {
    var ID = parseInt(id);
    $('#'+ID+'box').removeClass('animated zoomOut');
    $('#'+ID+'box').addClass('animated zoomIn');
    $('#'+ID+'subbox').animate({
        opacity:0
    },100);

}

function move(id) {
    var ID2 = parseInt(id)
    $('#'+ID2+'box1').addClass('animated swing');
}
function move1(id) {
    var ID2 = parseInt(id)
    $('#'+ID2+'box1').removeClass('animated swing');


}