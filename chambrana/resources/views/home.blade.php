@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cafe Bar la Chambrana</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                    <ol>
                    @if (Auth::user()->role == 'admin')
                        <li><a href="#">Caja</a></li>
                        <li><a href="#">Facturacion</a></li>
                        <li><a href="#">Inventario</a></li>
                        <li><a href="#">Contabilidad</a></li>
                    @else
                        <li><a href="#">Caja</a></li>
                    @endif
                    </ol>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
