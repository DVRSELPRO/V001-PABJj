@extends('adminlte::page')
@section('content')
@section('plugins.Sweetalert2', true)
<!-- Dynamic Table Full -->
    <!-- <div class=""><a href="{{route('solicitud.create')}}"><i class="fas fa-user-plus"></i> Agregar <small>nuevo</small></a>
    </div> -->
    <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/tables_datatables.js -->
    <div class="col-12 mt-3">
        <table class="table table-hover table-striped table-vcenter" border="2">
            <thead style="color:crimson">
                <TR>
                    <TD class="text-center">ID</TD>
                    <td class="text-center">Folio</td>
                    <td class="text-center">Equipo</td>
                    <td class="text-center">Marca</td>
                    <td class="d-none text-center d-sm-table-cell" style="width: 15%;">Modelo</td>
                    <td class="d-none text-center d-sm-table-cell" style="width: 50%;">fecha Solicitud</td>
                    <td class="d-none text-center d-sm-table-cell" style="width: 10%;">Empresa</td>
                    <td class="d-none text-center d-sm-table-cell" style="width: 10%;">Sucursal</td>
                    <td class="d-none text-center d-sm-table-cell" style="width: 10%;">Usuario Final</td>
                    <td class="d-none text-center d-sm-table-cell" style="width: 20%;">Departamento / Área</td>
                    <td>Cantidad</td>
                    <td class="d-none text-center d-sm-table-cell" style="width: 50%;"> Imágen </td>
                    <td class="d-none text-center d-sm-table-cell" style="width: 50%;"> Acciones </td>
                </TR>
            </thead>
            @foreach ($soli as $solicitud)
            <tbody>
                <TR>
                    <TD><a href="{{route('solicitud.show', $solicitud->id)}}">
                    {{$solicitud->id}}
                    </a>
                    </td>
                    <td><a href="{{route('solicitud.show', $solicitud->id)}}">
                    {{$solicitud->FOLIO_REQUISICION}}
                    </a></td>
                    <td class="font-w300"><a href="{{route('solicitud.show', $solicitud->id)}}">
                    {{$solicitud->EQUIPO}}
                    </a></td>
                    <td><a href="{{route('solicitud.show', $solicitud->id)}}">
                    {{$solicitud->MARCA}}</a></td>
                    <td><a href="{{route('solicitud.show', $solicitud->id)}}">
                    {{$solicitud->MODELO}}</a></td>
                    @if($solicitud->created_at != 'Null')
                    <td><a href="{{route('solicitud.show', $solicitud->id)}}">
                    {{$solicitud->created_at}}</a></td>
                    @else
                    <td>sin fecha</td>
                    @endif
                    <td><a href="{{route('solicitud.show', $solicitud->id)}}">
                    {{$solicitud->EMPRESA}}</a></td>
                    <td><a href="{{route('solicitud.show', $solicitud->id)}}">
                    {{$solicitud->SUCURSAL}}</a></td>
                    <td><a href="{{route('solicitud.show', $solicitud->id)}}">
                    {{$solicitud->USUARIO_FINAL}}</a></td>
                    <td class="d-none text-center d-sm-table-cell"><a href="{{route('solicitud.show', $solicitud->id)}}">
                    {{$solicitud->DEPARTAMENTO_AREA}}</a</td>
                    <td><a href="{{route('solicitud.show', $solicitud->id)}}">
                    {{$solicitud->CANTIDAD}}</a></td>
                    <td><a href="{{route('solicitud.show', $solicitud->id)}}">
                    <img class="card-img-top" src="{{asset($solicitud->IMAGEN)}}" alt="Foto"></img>
                    </a></td>
                    <td class="d-none text-center d-sm-table-cell" style="width: 50%;">
                        <div class="row">
                            <DIV class="col-5 mr-1">
                                <a href="{{route('solicitud.show', $solicitud->id)}}">
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                        <!--<i class="fa fa-pencil"></i>  -->
                                        <em class="fa fa-edit"></em>
                                    </button>
                                </a>
                            </DIV>
                            <div class="col-5 ml-1">
                                <form class="eliminar" action="{{route('solicitud.destroy', $solicitud)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('Delete')
                                    <button class="btn btn-sm btn-danger" alt="eliminar" data-toggle="tooltip" title="Delete"> <em class="fa fa-times"></em> </button>
                                </form>
                            </div>
                        </div>
                    </td>
                </TR>
         </tbody>
          @endforeach
        </table>
    </div>
<!-- END Dynamic Table Full -->
@endsection

@section('js')
<script>
    $(".eliminar").click(function(e) {
        e.preventDefault();

        Swal.fire({
            title: 'Confirmación',
            text: "¿Eliminar el registro?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'No',
            confirmButtonText: 'Si'
        }).then((result) => {
            if (result.value == true) {
                //console.log(result);
                Swal.fire(
                    'Deleted!',
                    'Your item has been deleted.',
                    "Success"
                )
                this.submit()
            } else if (result.dismiss == 'cancel') {
                //console.log(result);
                Swal.fire(
                    "Cancelled", "Your item is safe :)", "error"
                )
            }
        });

    });
</script>
@endsection