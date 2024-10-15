export function countProduct(url){
    $('#product').DataTable({
        "ajax":url,
        "dom": 'Bftip',
       "buttons": [
            {
                extend: 'excel',
                html: '<button type="button" rel="tooltip" class="btn btn-success p-2"><i class="material-icons">person</i></button>',
            },
            {
                extend: 'pdf',
                html: '<button type="button" rel="tooltip" class="btn btn-danger p-2"><i class="material-icons">person</i></button>',
            }
        ],
        "paging":false,
        "info":false,
        "columns":[
            {
                "orderable": false,
                "data": null,
                "defaultContent": '<i class="fa fa-line-chart"></i>'
            },
            {data:"nombres"}, 
            {data:"apellido_paterno"},
            {data:"apellido_materno"},
            {data:"dni"},
            {data:"nombre_ganaderia"},
            {
            render: function(data, type, row) {
                return '<button type="button" rel="tooltip" class="btn btn-info"><i class="material-icons">person</i></button><button type="button" rel="tooltip" class="btn btn-success"><i class="material-icons">edit</i></button><button type="button" rel="tooltip" class="btn btn-danger"><i class="material-icons">close</i></button>'
            },
            orderable: false,
            }
        ]
    });
}