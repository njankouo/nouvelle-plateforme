$(document).ready(function(){
    /*$('.mask_sidenav').sidenav({
        
    });
    $('.stick_sidenav').sidenav({
        
    });*/
   
    //ici je joue juste avec les propriétés de sidenav fixed
    var exp=$('#exp_nav')
    var expUl=$('#exp_nav_ul')
    var mbody=$('#body')


    var con=$('#con_nav')
    var conUl=$('#con_nav_ul')


    exp.on('click', function(e) {
        //e.preventDefault();
        //$('html, body').animate({scrollTop:0}, '300');
        //ikiééé
        conUl.addClass('sidenav-fixed','small_trans')
        
        expUl.removeClass('sidenav-fixed','small_trans')
        
        mbody.removeClass('modif_body')
    });
    con.on('click', function(e) {
        e.preventDefault();
        //alert("bjr")
        
        expUl.addClass('sidenav-fixed','small_trans')
        
        conUl.removeClass('sidenav-fixed','small_trans')
        mbody.addClass('modif_body')
    });





    
})