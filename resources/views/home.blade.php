@extends('adminlte::page')
@section('plugins.Sweetalert2', true)
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status')==TRUE)
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>    
Swal.fire(
  'Bienvenido',
  'Está es la página de inicio',
  'success'
)
</script>
@endsection
