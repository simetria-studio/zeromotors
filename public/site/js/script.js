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
$(document).on('click', '.btn-add-foto', function (e) {
    e.preventDefault();
    $(this).parent().find('.add-foto').trigger('click');
});
$(document).on('change', '.add-foto', function () {
    $(this).removeClass('add-foto');

    $(this).parent().find('.btn-add-foto').removeClass('btn-custom-1 btn-add-foto').addClass('btn-custom-1 btn-remove-foto').html('x');

    $(this).parent().parent().append(
        '<div class="col-6 col-md-3 mb-2 preview-foto">' +
        '<button type="button" class="btn btn-custom-1 btn-add-foto mb-3">+</button>' +
        '<input type="file" class="d-none add-foto" name="foto[]">' +
        '<div class="foto"></div>' +
        '</div>'
    );

    var form_img = $(this).parent();

    var preview = form_img.find('.foto');
    var files = $(this).prop('files');

    function readAndPreview(file) {
        // Make sure file.name matches our extensions criteria
        if (/.(jpe?g|png|gif)$/i.test(file.name)) {
            var reader = new FileReader();

            reader.addEventListener("load", function () {
                var image = new Image();
                image.classList = 'rounded img-fluid';
                // image.height = 180;
                image.title = file.name;
                image.src = this.result;
                preview.append(image);
            }, false);

            reader.readAsDataURL(file);
        }
    }

    if (files) {
        [].forEach.call(files, readAndPreview);
    }
});
$(document).on('click', '.btn-remove-foto', function () {
    $(this).parent().remove();
});



$(document).ready(function () {

    $.ajax({
        url: "marcas",
        success: function (data) {
            console.log(data)
            $.each(data, (key, value) => {
                $("#marca").append(`<option data-val="${value.codigo}" value="${value.nome}">${value.nome}</option>`);
            });
        }
    });
    $("#marca").on('change', function () {
        $('#modelo').empty();
        var optionSelected = $(this).find("option:selected");
        var valor = optionSelected.data('val');
        $.ajax({
            url: "modelos",
            data: { valor: valor },
            success: function (data) {
                $.each(data[0].modelos, (key, value) => {
                    $("#modelo").append(`<option data-marca="${data[1]}" data-val="${value.codigo}" value="${value.nome}">${value.nome}</option>`);

                });

            }
        });
    });
    $("#modelo").on('change', function () {
        $('#ano').empty();
        var optionSelected = $(this).find("option:selected");
        var valor = optionSelected.data('val');
        var marca = optionSelected.data('marca');
        // console.log(marca);
        $.ajax({
            url: "ano",
            data: { valor: valor, marca: marca },
            success: function (data) {
                // console.log(data);
                $.each(data[0], (key, value) => {
                    // console.log(value)
                    $("#ano").append(`<option data-marca="${data[1]}" data-val="${value.codigo}" data-modelo="${data[2]}"  value="${value.nome}">${value.nome}</option>`);

                });

            }
        });
    });
    $("#ano").on('change', function () {
        // $('#ano').empty();
        var optionSelected = $(this).find("option:selected");
        var valor = optionSelected.data('val');
        var marca = optionSelected.data('marca');
        var modelo = optionSelected.data('modelo');
        // console.log(marca);
        // console.log(marca);

        $.ajax({
            url: "info",
            data: { valor: valor, marca: marca, modelo: modelo },
            success: function (data) {
                console.log(data);
                $('#fipe').val(data.Valor)
            }
        });
    });
});
$('#buscar').mask('99999-999');
$('#whatsapp').mask('(99) 99999-9999');
$('#whatsapp1').mask('(99) 99999-9999');
$('#whatsapp2').mask('(99) 99999-9999');
$('#cpf').mask('999.999.999-47');
$('#rg').mask('99.999.999-99');
$('#data_rg').mask('99/99/9999');





$('#buscar').on('blur keyup', function () {
    $value = $(this).val();
    $.ajax({
        type: 'get',
        url: 'buscarCep',
        data: {
            'search': $value
        },
        success: function (data) {
            console.log(data);
            $('#endereco').val(data.street);
            $('#bairro').val(data.district);
            $('#cidade').val(data.city);
            $('#estado').val(data.uf);
        }
    });
})
