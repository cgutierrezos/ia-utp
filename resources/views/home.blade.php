@extends('layouts.app')

@section('title', "Bienvenido")

@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido <?php echo $usuario ?></div>

                <div class="panel-body">
                    <p style="color:green ">
                        Registro exitoso, Intenta loguearte con tu correo y password!
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
