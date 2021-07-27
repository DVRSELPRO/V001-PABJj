@extends('adminlte::page')
@section('content')
<!-- Dynamic Table Full -->
<div class="card">
    <div class=""><a href="{{route('solicitud.create')}}"><i class="fas fa-user-plus"></i> Agregar <small>nuevo</small></a>
    </div>
    <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/tables_datatables.js -->
    <div class="">
        <table class="table table-hover table-responsive table-striped table-vcenter" border="2">
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
                    <td class="d-none text-center d-sm-table-cell" style="width: 50%;"> Acciones </td>
                </TR>
            </thead>
            @foreach ($soli as $solicitud)
            <tbody>
                <TR>
                    <TD>{{$solicitud->id}}</TD>
                    <td>{{$solicitud->FOLIO_REQUISICIÓN}}</td>
                    <td class="font-w300">{{$solicitud->EQUIPO}}</td>
                    <td>{{$solicitud->MARCA}}</td>
                    <td>{{$solicitud->MODELO}}</td>
                    @if($solicitud->created_at != 'Null')
                    <td>{{$solicitud->created_at}}</td>
                    @else
                    <td>sin fecha</td>
                    @endif
                    <td>{{$solicitud->EMPRESA}}</td>
                    <td>{{$solicitud->SUCURSAL}}</td>
                    <td>{{$solicitud->USUARIO_FINAL}}</td>
                    <td class="d-none text-center d-sm-table-cell">{{$solicitud->DEPARTAMENTO_AREA}}</td>
                    <td>{{$solicitud->CANTIDAD}}</td>
                    <td class="d-none text-center d-sm-table-cell" style="width: 50%;">
                        <div class="row">
                            <DIV class="col-6">
                                <a href="{{route('solicitud.show', $solicitud->id)}}">
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                        <!--<i class="fa fa-pencil"></i>  -->
                                        <i class="fa fa-edit "></i>
                                    </button>
                                </a>
                            </DIV>
                            <div class="col-6">
                                <form action="{{route('solicitud.destroy', $solicitud)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('Delete')
                                    <button class="btn btn-sm btn-danger" alt="eliminar" data-toggle="tooltip" title="Delete"> <i class="fa fa-times"></i> </button>
                                </form>
                            </div>
                        </div>
                    </td>
    </div>
    </TR>
    </tbody>
    @endforeach
    </table>
</div>
</div>
<!-- END Dynamic Table Full -->
@endsection