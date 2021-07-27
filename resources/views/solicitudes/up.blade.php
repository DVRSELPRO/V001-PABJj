@extends('adminlte::page')
@section('content')
<div class="col-md-8">
    <div class="card">
        <div class="card-header">
            <h1>{{ __('Cargar solicitud') }}</h1>
        </div>

        <div class="card-body">
            <form action="{{route('solicitud.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div div class="col-10">
                    <div class="row form group m-2">
                        <div class="col-4">Folio de Req.:</div>
                        <div class="col-7">
                            <input type="text" name="folio" id="folio">
                            @error('folio')
                            <br>
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row form group m-2">
                        <div class="col-4">Equipo:</div>
                        <div class="col-7"> <input type="text" name="equipo" id="equipo">
                            @error('equipo')
                            <br>
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row form group m-2">
                        <div class="col-4">Marca:</div>
                        <div class="col-7">
                        <input type="text" name="marca" id="marca">
                        @error('marca')
                        <br>
                        <small class="text-danger">{{$message}}</small>
                        @enderror</div>
                    </div>
                    <div class="row form group m-2">
                        <div class="col-4">Modelo:</div>
                        <div class="col-7"><input type="text" name="modelo" id="modelo">
                        @error('modelo')
                        <br>
                        <small class="text-danger">{{$message}}</small>
                        @enderror</div>
                    </div>
                    <div class="row form group m-2">
                        <div class="col-4">Empresa:</div>
                        <div class="col-7"><input type="text" name="empresa" id="empresa">
                        @error('empresa')
                        <br>
                        <small class="text-danger">{{$message}}</small>
                        @enderror</div>
                    </div>
                    <div class="row form group m-2">
                        <div class="col-4">Sucursal:</div>
                        <div class="col-7"><input type="text" name="sucursal" id="sucursal">
                        @error('sucursal')
                        <br>
                        <small class="text-danger">{{$message}}</small>
                        @enderror</div>
                    </div>
                    <div class="row form group m-2">
                        <div class="col-4">Usuario Final:</div>
                        <div class="col-7"><input type="text" name="usuariof" id="usuariof">
                        @error('usuariof')
                        <br>
                        <small class="text-danger">{{$message}}</small>
                        @enderror</div>
                    </div>
                    <div class="row form group m-2">
                        <div class="col-4">Dpto./Área:</div>
                        <div class="col-7"><input type="text" name="dptoarea" id="dptoarea">
                        @error('dptoarea')
                        <br>
                        <small class="text-danger">{{$message}}</small>
                        @enderror</div>
                    </div>
                    <div class="row form group m-2">
                        <div class="col-4">Cantidad:</div>
                        <div class="col-7"><input type="numerc" name="cantidad" id="cantidad">
                        @error('cantidad')
                        <br>
                        <small class="text-danger">{{$message}}</small>
                        @enderror</div>
                    </div>
                </div>
                <div class="row justify-content-center col-10">
                <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
        <div class="card-footer">

        </div>
    </div>
</div>
@endsection