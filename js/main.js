$('.btnNav').click(function(){
    $('#modalSide').modal('show');
    $('.sidenav').css('width','250px');
});

$('#closeNav').click(function(){
    $('#modalSide').modal('hide');
    $('.sidenav').css('width','0');
});