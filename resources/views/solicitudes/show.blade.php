@extends('adminlte::page')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h2>{{ __('Actualizar DATOS Solicitud') }}</h2>
            </div>

            <div class="card-body">
                <form action="{{route('solicitud.update', $solicitud)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form group m-2 ml-5">
                        <div class="row form group m-2">
                            <div class="col-4">Folio de Req.:</div>
                            <div class="col-7">
                                <input type="text" value="{{$solicitud->FOLIO_REQUISICIÓN}}" name="folio" id="folio">
                                @error('folio')
                                <br>
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row form group m-2">
                            <div class="col-4">Equipo:</div>
                            <div class="col-7"> <input type="text" value="{{$solicitud->EQUIPO}}" name="equipo" id="equipo">
                                @error('equipo')
                                <br>
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row form group m-2">
                            <div class="col-4">Marca:</div>
                            <div class="col-7">
                                <input type="text" value="{{$solicitud->MARCA}}" name="marca" id="marca">
                                @error('marca')
                                <br>
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row form group m-2">
                            <div class="col-4">Modelo:</div>
                            <div class="col-7"><input type="text" value="{{$solicitud->MODELO}}" name="modelo" id="modelo">
                                @error('modelo')
                                <br>
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row form group m-2">
                            <div class="col-4">Empresa:</div>
                            <div class="col-7"><input type="text" value="{{$solicitud->EMPRESA}}" name="empresa" id="empresa">
                                @error('empresa')
                                <br>
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row form group m-2">
                            <div class="col-4">Sucursal:</div>
                            <div class="col-7"><input type="text" value="{{$solicitud->SUCURSAL}}" name="sucursal" id="sucursal">
                                @error('sucursal')
                                <br>
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row form group m-2">
                            <div class="col-4">Usuario Final:</div>
                            <div class="col-7"><input type="text" value="{{$solicitud->USUARIO_FINAL}}" name="usuariof" id="usuariof">
                                @error('usuariof')
                                <br>
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row form group m-2">
                            <div class="col-4">Dpto./Área:</div>
                            <div class="col-7"><input type="text" value="{{$solicitud->DEPARTAMENTO_AREA}}" name="dptoarea" id="dptoarea">
                                @error('dptoarea')
                                <br>
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row form group m-2">
                            <div class="col-4">Cantidad:</div>
                            <div class="col-7"><input type="numerc" value="{{$solicitud->CANTIDAD}}" name="cantidad" id="cantidad">
                                @error('cantidad')
                                <br>
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
            </form>
        </div>
        <div class="card-footer">
        </div>
    </div>
</div>
@endsection