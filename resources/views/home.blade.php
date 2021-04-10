@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
        @foreach($usuarioArray as $usuario)
        <div class="col-md-6">
            <ul class="list-group mt-2">
                <li class="list-group-item active">Nombre: {{$usuario['name']}}</li>
                <li class="list-group-item">Correo: {{$usuario['email']}}</li>
                <li class="list-group-item">Telefono: {{$usuario['phone']}}</li>
                <li class="list-group-item">WEB: {{$usuario['website']}}</li>
                <li class="list-group-item">Empresa: {{$usuario['company']['name']}}</li>
            </ul>
        </div>
        @endforeach
    </div
    </div>
</div>
@endsection
