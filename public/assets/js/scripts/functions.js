export function countProduct(url){
    $('#product').DataTable({
        "paging": true, 
        "ajax":url,
        "dom": 'BFtip',
       "buttons": [
            {
                extend: 'excel',
                html: '<button type="button" rel="tooltip" class="btn btn-success p-2 "><i class="material-icons">person</i></button>',
            },
            {
                extend: 'pdf',
                html: '<button type="button" rel="tooltip" class="btn btn-danger p-2 mr-2"><i class="material-icons">person</i></button>',
            }
        ],
        "paging":false,
        "info":false,
        "columns":[
            {data:"nombres"}, 
            {data:"apellido_paterno"},
            {data:"apellido_materno"},
            {data:"dni"},
            {data:"nombre_ganaderia"},
            {
            render: function(data, type, row) {
                return '<button type="button" rel="tooltip" class="btn btn-info p-2"><i class="material-icons">person</i></button><button type="button" rel="tooltip" data-toggle="modal" data-target="#exampleModal" class=" editar btn btn-success p-2"><i class="material-icons">edit</i></button><button type="button" rel="tooltip" class="eliminar btn btn-danger p-2"><i class="material-icons">close</i></button>'
            },
            orderable: false,
            }
        ]
    });
}
export function countLlama(url){
    $('#llamas').DataTable({
        "ajax":url,
        "dom": 'Bftip',
       "buttons": [
            {
                extend: 'excel',
                html: '<button type="button" rel="tooltip" class="btn btn-success p-2 "><i class="material-icons">person</i></button>',
            },
            {
                extend: 'pdf',
                html: '<button type="button" rel="tooltip" class="btn btn-danger p-2 mr-2"><i class="material-icons">person</i></button>',
            }
        ],
        "paging":false,
        "info":false,
        "columns":[
            {data:"id_llama"}, 
            {data:"nombre"},
            {data:"fecha_nacimiento"},
            {data:"peso_vivo"},
            {data:"peso_nacimiento"},
            {data:"peso_destete"},
            {
            render: function(data, type, row) {
                 return '<button type="button" rel="tooltip" class="btn btn-info p-2"><i class="material-icons">person</i></button><button type="button" rel="tooltip" class="btn btn-success p-2"><i class="material-icons">edit</i></button><button type="button" rel="tooltip" class="btn btn-danger p-2"><i class="material-icons">close</i></button>'
            },
            orderable: false,
            }
        ]
    });
}