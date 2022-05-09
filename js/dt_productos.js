$(document).ready( function () {

$("#test01").val("TEXTO SEGUNDO");

/*
$(document).ready( function () {
    $('#myTable').DataTable();
} );
*/

var dt_doc = $('#example').DataTable({
    "serverSide": true,     //"Undefined index: columns"    -> Controllers\\ssp.class.pg.php line: 147
    //'ajax': 'producto/dt_productos'
    'ajax': 'Producto.php'
});

} );