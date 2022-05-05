$(".btn-menu").click(function () {
    $(".menu-mobile").removeClass('d-none');
    $(".menu-mobile").animate({
        width: "100%",
        opacity: 1,
    }, 1500);
});
$(".btn-close").click(function () {
    $(".menu-mobile").animate({
        width: "0%",
        opacity: 0,
    }, 500);
    $(".menu-mobile").addClass('d-none');
});


/* product left start */
if ($(".product-left").length) {
    var productSlider = new Swiper('.product-slider', {
        spaceBetween: 0,
        centeredSlides: false,
        loop: true,
        direction: 'horizontal',
        loopedSlides: 5,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        resizeObserver: true,
    });
    var productThumbs = new Swiper('.product-thumbs', {
        spaceBetween: 0,
        centeredSlides: true,
        loop: true,
        slideToClickedSlide: true,
        direction: 'horizontal',
        slidesPerView: 5,
        loopedSlides: 5,
    });
    productSlider.controller.control = productThumbs;
    productThumbs.controller.control = productSlider;




}
/* 	product left end */
var clearSearch;

$('#search').on('blur keyup', function () {
    search = $(this).val();
    // clearTimeout(clearSearch);
    // if(search.length > 3){
    //     clearSearch = setTimeout(() => {
    //         window.location.href = 'filtroModelo?search='+search
    //     },1500 );
    // }
    $.ajax({
        url: "filtroModelo",
        data: { search: search },
        success: function (data) {
            $('.product-grid').html(data[0].viewRender);
        }
    });
});



// Adicionando imagem
$(document).on('click', '.btn-add-foto', function(e){
    e.preventDefault();
    $(this).parent().find('.add-foto').trigger('click');
});
$(document).on('change', '.add-foto', function(){
    $(this).removeClass('add-foto');

    $(this).parent().find('.btn-add-foto').removeClass('btn-custom-1 btn-add-foto').addClass('btn-custom-1 btn-remove-foto').html('x');

    $(this).parent().parent().append(
        '<div class="col-6 col-md-3 mb-2">'+
            '<button type="button" class="btn btn-custom-1 btn-add-foto mb-3">+</button>'+
            '<input type="file" class="d-none add-foto" name="foto[]">'+
            '<div class="foto"></div>'+
        '</div>'
    );

    var form_img = $(this).parent();

    var preview = form_img.find('.foto');
    var files   = $(this).prop('files');

    function readAndPreview(file) {
        // Make sure file.name matches our extensions criteria
        if ( /.(jpe?g|png|gif)$/i.test(file.name) ) {
            var reader = new FileReader();

            reader.addEventListener("load", function () {
            var image = new Image();
            image.classList = 'rounded img-fluid';
            // image.height = 180;
            image.title = file.name;
            image.src = this.result;
            preview.append( image );
            }, false);

            reader.readAsDataURL(file);
        }
    }

    if (files) {
        [].forEach.call(files, readAndPreview);
    }
});
$(document).on('click', '.btn-remove-foto', function(){
    $(this).parent().remove();
});
