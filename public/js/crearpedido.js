$(function() {
    $("#cantidad").change(function() {
        var valor = document.getElementById("valor").value;
        var cantidad = document.getElementById("cantidad").value;
        var valor_total = valor * cantidad;
        document.getElementById("valor_total").value = valor_total;
    });
});

$(function() {
    $("#producto_id").on("change", valor);
});

function valor() {
    var id_producto = $(this).val();
    $.get(`/api/valor/${id_producto}`);
}
