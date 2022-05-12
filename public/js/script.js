
$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: "marcas",
        success: function (data) {
            // console.log(data.nome);

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


// Adicionando imagem
$(document).on('click', '.btn-add-foto', function (e) {
    e.preventDefault();
    $(this).parent().find('.add-foto').trigger('click');
});
$(document).on('change', '.add-foto', function () {
    $(this).removeClass('add-foto');

    $(this).parent().find('.btn-add-foto').removeClass('btn-custom-1 btn-add-foto').addClass(
        'btn-custom-1 btn-remove-foto').html('x');

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

    var foto = document.querySelector('.fotoVal').value
    console.log(foto)
    $.ajax({
        url: "/del",
        type: "POST",
        data: { value: foto, },
        success: function (data) {
            console.log(data);
        }
    });
    $(this).parent().remove();
});

$('#km').mask('999999999');
$('#potencia').mask('999999999');
$("#preco").maskMoney({
    decimal: ",",
    thousands: "."
});
$(document).ready(function () {
    $('#summernote').summernote();
});
$(document).ready(function () {
    var editor = $("#summernote");
    editor.summernote();
    $('#enviar').on('click', function () {
        $('#text-code').val(editor.summernote('code'));
    })
});

