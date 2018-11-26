//event tombol hamburger di klik (untuk mobile navigation)
$('.btnNav').click(function(){
    $('#modalSide').modal('show');
    $('.sidenav').css('width','250px');
});

//event tombol close di klik(untuk desktop navigation)
$('#closeNav').click(function(){
    $('#modalSide').modal('hide');
    $('.sidenav').css('width','0');
});

$('#modalSide').on('hide.bs.modal', function(e){
    $('.sidenav').css('width','0');
});

$('.btnLogout').click(function(){
    $('#modalSide').modal('hide');
    $('.sidenav').css('width','0');

    $('#modalLogout').modal('show');
})