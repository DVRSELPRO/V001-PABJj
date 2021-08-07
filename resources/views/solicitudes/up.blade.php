@extends('adminlte::page')
@section('plugins.Sweetalert2', true)
@section('content')
<div class="col-md-8">
    <div class="card">
        <div class="card-header">
            <h1>{{ __('Cargar solicitud') }}</h1>
        </div>

        <div class="card-body">
            <form action="{{route('solicitud.store')}}" method="POST" enctype="multipart/form-data" onsubmit='return validar()'>
                @csrf
                <div div class="col-10">
                    <div class="row form group m-2">
                        <div class="col-4">Folio de Req.:</div>
                        <div class="col-7">
                            <input type="text" name="folio" id="folio" autofocus>
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
                            @enderror
                        </div>
                    </div>
                    <div class="row form group m-2">
                        <div class="col-4">Modelo:</div>
                        <div class="col-7"><input type="text" name="modelo" id="modelo">
                            @error('modelo')
                            <br>
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row form group m-2">
                        <div class="col-4">Empresa:</div>
                        <div class="col-7"><input type="text" name="empresa" id="empresa">
                            @error('empresa')
                            <br>
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row form group m-2">
                        <div class="col-4">Sucursal:</div>
                        <div class="col-7"><input type="text" name="sucursal" id="sucursal">
                            @error('sucursal')
                            <br>
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row form group m-2">
                        <div class="col-4">Usuario Final:</div>
                        <div class="col-7"><input type="text" name="usuariof" id="usuariof">
                            @error('usuariof')
                            <br>
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row form group m-2">
                        <div class="col-4">Dpto./Área:</div>
                        <div class="col-7"><input type="text" name="dptoarea" id="dptoarea">
                            @error('dptoarea')
                            <br>
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row form group m-2">
                        <div class="col-4">Cantidad:</div>
                        <div class="col-7"><input type="number" name="cantidad" id="cantidad">
                            @error('cantidad')
                            <br>
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row form group m-2">
                        <div class="col-4">Imágen:</div>
                        <div class="col-7"> <input type="file" name="img" id="" accept="image/*">
                            @error('igm')
                            <br>
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
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
@section('js')
<script type='text/javascript'>
    function validar() {

        /*creo una variable de tipo booleano que en principio tendrá un valor true(verdadero),
        y que se convertirá en false(falso) cuando la condición no se cumpla*/
        var todo_correcto = true;

        /*El primer campo a comprobar es el del nombre. Lo traemos por id y verificamos
        la condición, en este caso, por ejemplo, le decimos que tiene que tener más de dos dígitos
        para que sea un nombre válido. Si no tiene más de dos dígitos, la variable todo_correcto
        devolverá false.*/

        /* if(document.getElementById('nombre').value.length < 2 ){
            todo_correcto = false;
        } */

        /*Hacemos lo mismo con el campo dirección. En este caso le pediremos al usuario que
        introduzca al menos 10 caracteres.*/
        /* if(document.getElementById('direccion').value.length < 10 ){
            todo_correcto = false;
        } */

        /*Para comprobar la edad, utilizaremos la función isNaN(), que nos dirá si el valor
        ingresado NO es un número (NaN son las siglas de Not a Number). Si la edad no es un
        número, todo_correcto será false.*/
        if (isNaN(document.getElementById('cantidad').value)) {
            todo_correcto = false;
        }

        /*Para comprobar el email haremos uso de una expresión regular. Esto es una secuencia
        de caracteres que nos dirá si el valor ingresado por el usuario tiene estructura de
        correo electrónico. Lo que hacemos es obtener el value del campo de texto destinado
        al email, y le aplicamos el método test() del objeto global RegExp(que nos permite
        trabajar con expresiones regulares).*/
        /* var expresion = /^[a-z][\w.-]+@\w[\w.-]+\.[\w.-]*[a-z][a-z]$/i;
        var email = document.form1.email.value;
        if (!expresion.test(email)){
            todo_correcto = false;
        }
         */
        /*Para validar el select debemos añadir un value distinto a cada option. En el
        código, he asignado un value con  valor vacío al primer option. Los siguientes,
        al no estar definidos toman el valor por defecto. Por tanto, si todos tienen value,
        lo único que tenemos que comprobar es que este no sea vacío. Si es vacío, todo_correcto
        será false.*/
        /* if(document.getElementById('estudios').value == ''){
            todo_correcto = false;
        } */

        /*Validaremos también el checkbox del formulario. Todos los
        checkbox tienen una propiedad llamada checked. Entonces
        hacemos el if y decimos que si nuestro checkbox NO está
        checked, estará mal.*/
        /* if(!document.getElementById('acepto').checked){
            todo_correcto = false;
        } */

        /*Por último, y como aviso para el usuario, si no está todo bién, osea, si la variable
        todo_correcto ha devuelto false al menos una vez, generaremos una alerta advirtiendo
        al usuario de que algunos datos ingresados no son los que esperamos.*/
        if (!todo_correcto) {
            //alert('Algunos campos no están correctos, vuelva a revisarlos');
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El dato del campo cantidad debe ser número',
                footer: '<a href="">Why do I have this issue?</a>'
            })
        }

        return todo_correcto;
    }
</script>

@endsection