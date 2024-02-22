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
                        <br />
                        <br />
                        <!-- Botón para redirigir a la ruta del componente Livewire -->
                        <a href="{{ route('datos') }}" class="btn btn-primary">Ir a Datos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
