@extends('layout.master')


@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('/plugins/css/dataTables/datatables.min.css') }}">


<script src="{{ asset('/plugins/js/dataTables/datatables.min.js') }}"></script>

<div class="row">
    <div class="col-lg-12">

        <div class="panel-group">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Titulo
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="tabla" class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                                <tr>
                                    <th>Fecha y Hora</th>
                                    <th>Temperatura</th>
                                    <th>Humedad</th>
                                    <th>UV</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($data as $reg)
                                <tr>
                                    <td> {{ $reg->Fecha_Hora }} </td>
                                    <td> {{ $reg->Temperatura }} </td>
                                    <td> {{ $reg->Humedad }} </td>
                                    <td> {{ $reg->UV }} </td>
                                </tr>
                              @endforeach
                            </tbody>
                            <tfoot>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<style>
    .buscador {
        color: black;
    }
</style>


<script>
    $(document).ready(function () {

        $('#tabla thead th').each(function (i) {
            var title = $('#tabla thead th').eq($(this).index()).text();
            $(this).append('<input class="buscador" type="text" style="width: 100%" data-index="' + i + '" />');
        });

        var table = $('.dataTables-example').DataTable({
            bSort: false,
            scrollY: 400,
            scrollX: true,
            "language": {
                "url": "{{ asset('/plugins/jsons/dataTablesSpanish.json') }}"
            },
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
            { extend: 'copy', text: 'Copiar' },
            //{ extend: 'csv', text: 'CSV', title: 'MuestraCSV_' },
            { extend: 'excel', text: 'Excel', title: 'MuestraExcel_' },
            { extend: 'pdf', text: 'PDF', title: 'MuestraPdf_' },

            {
                extend: 'print',
                text: 'Imprimir',
                customize: function (win) {
                    $(win.document.body).addClass('white-bg');
                    $(win.document.body).css('font-size', '10px');

                    $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                }
            },
            ],

            "columnDefs": [{
                "defaultContent": "-",
                "targets": "_all"
            }],

            "initComplete": function (settings, json) {

            }

        });

        //Apply the search

        table.columns().eq(0).each(function (colIdx) {
            $('input', table.column(colIdx).header()).on('keyup change', function () {
                //regExSearch = '^\\s' + this.value + '||TOTAL*' + '\\s*$';
                if (colIdx != 0)
                    table.column(colIdx).search(this.value).draw();
                else {
                    //regexs = "^(" + this.value + "|(TOTAL " + this.value + "))$";
                    table.column(colIdx).search(this.value, true, false).draw();
                }
            });
        });
    });
</script>


@endsection
