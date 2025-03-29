window.addEventListener('load', function(){
    initializeDataTable("#tblSedes");
    initializeDataTable("#tblUsuarios");
});

function initializeDataTable(selector){
    $(selector).DataTable ({
        "responsive" : true,
        "autoWidth" : false,
        "lengthChange" : true,
        "lengthMenu" : [10, 25, 50, 100],
        "language" : {
            "lengthMenu" : "Mostrar _MENU_ registro",
            "zeroRecords" : "No se encontraron resultados",
            "info" : "Mostrar pagina _PAGE_ de _PAGES_",
            "infoEmpty" : "No hay registrados disponibles",
            "infoFiltered" : "(filtrado de _MAX_ total registrados)",
            "search" : "Buscar:",
            "paginate" : {
                "first" : "Primero",
                "last" : "Ultimo",
                "next" : "Siguiente",
                "previous" : "Anterior",
            }
        },
        "buttons": ["csv", "excel", "pdf"]
    }).buttons().container().appendTo(selector + '_wrapper .col-md-6:eq(0)');
}