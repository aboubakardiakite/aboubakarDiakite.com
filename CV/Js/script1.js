$(function(){
    $(".navbar a,footer a").on("click",function(e){
        e.preventDefault();
        var hash = this.hash;
        $('body').animate({scrollTop:$(hash).offset().top},900,function(){
            window.location.hash = hash;
            console.log("dshkdzde");
        })
    });
})