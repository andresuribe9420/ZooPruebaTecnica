$(document).ready(()=>{
    //Intancia de componentes
    $('#myTable').DataTable({
        destroy: true,
        dom: 'Bfrtip',
        buttons: [            
            {
                extend: 'excel',
                exportOptions: {
                columns: ":not(.notexportar)"
                },
                text: 'Excel <i class="material-icons left">save</i>',
                className:'btn teal darken-4'                
            },
            {
                extend: 'pdf',
                exportOptions: {
                columns: ":not(.notexportar)"
                },
                text: 'PDF <i class="material-icons left">save</i>',
                className:'btn red darken-4'                
            },
            {
                extend: 'print',
                exportOptions: {
                columns: ":not(.notexportar)"
                },
                text: 'Imprimir <i class="material-icons left">local_printshop</i>',
                className:'btn blue darken-4',
                title:'SIGMA'                
            }
        ],language: {
            search: "Buscar:",
            "searchPlaceholder": "Término de búsqueda",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            },
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoPostFix": "",
            "aria": {
                "sortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sortDescending": ": Activar para ordenar la columna de manera descendente"
            },
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
        }  
    });

    $('select').formSelect();
    $('.sidenav').sidenav({
        edge:'right'
    });
    
    $('.modal').modal({
        startingTop:'4%',
        endingTop: '10%'
        ,dismissible: false
        
    });
    
    $('.tabs').tabs();

    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-left",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

})



