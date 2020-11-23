


window.addEventListener('load',function(){
    
    var imagenes=[]
    imagenes[0]='../img/img1.jpg';
    imagenes[1]='../img/img2.jpg';
    imagenes[2]='../img/img3.jpg';
    imagenes[3]='../img/img4.jpg';
    var i=0;
    function cambiar(){
        document.slider.src =imagenes[i];
        
        if(i<3){
            i++;
        }
        else{
            i=0;
        }



    }
    setInterval(cambiar ,4000);
});


$(function(){
    $(window).scroll(function(){
        var winTop = $(window).scrollTop();
        if(winTop>=30)
        {
            $("body").addClass("sticky-header");
           

        }else{
            $("body").removeClass("sticky-header")
        }
    })
})