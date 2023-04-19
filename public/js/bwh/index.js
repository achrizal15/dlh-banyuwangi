const successStory = () => {
    if ($('#cerita-success').length == 0) return false;
    let owl = $('.cerita-success').owlCarousel({
        margin: 10,
        items: 3,
        loop:true,
        dots:false,
        autoplay: true,
        autoplayTimeout: 2000,
        responsive:{
            0:{
                items:1
            },
            700:{
                items:2,
            },
            1000:{
                items:3
            }
        }
    })
    $(document).on("click","#back-cerita-success",function(){
        owl.trigger('prev.owl.carousel');
    })
    $(document).on("click","#next-cerita-success",function(){
        owl.trigger('next.owl.carousel');
    })
}
const tentang = () => {
    if ($('#tentang-kita').length == 0) return false;
   $('#tentang-kita').owlCarousel({
        items: 1,
        autoHeight: false,
        autoHeightClass: 'owl-height',
        loop:true,
        autoplay: false,
    })
$(".base-content").removeClass("h-screen")
}

$(document).ready(function () {
    successStory()
    tentang()
})