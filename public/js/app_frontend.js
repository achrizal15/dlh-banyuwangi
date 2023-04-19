const bannerCarousel = () => {
    if ($('.banner-carousel').length == 0) return false;
    $('.banner-carousel-i').owlCarousel({
        loop: true,
        items: 1,
        autoplay: true,
        autoplayTimeout: 5000
    })
    $(".banner-carousel-i .owl-dots.disabled").removeClass("disabled")
}
const galeryCarousel=()=>{
    if($('.galery-carousel').length==0)return false
    const owl=$('.galery-carousel').owlCarousel({
        center:true,
        items: 3,
        margin:10,
        loop:true,
        dots:false,
        autoplay: true,
        // autoWidth:true,
        autoplayTimeout: 5000,
     
    })
    $(document).on("click","#back-galery-carousel",function(){
        owl.trigger('prev.owl.carousel');
    })
    $(document).on("click","#next-galery-carousel",function(){
        owl.trigger('next.owl.carousel');
    })
}
$(document).ready(function () {
    bannerCarousel()
    galeryCarousel()
    $(document).on("scroll",function(){
        if(window.scrollY!=0){
            $('.navbar').css('position',"fixed")
            $('.navbar').css('zIndex',"10000")
            $('.navbar').addClass('shadow-lg')
        }else{
            $('.navbar').removeClass('shadow-lg')
            $('.navbar').css('position','relative')
        }
    })
})