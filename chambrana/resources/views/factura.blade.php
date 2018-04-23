@extends('layouts.app')
@section('styles')
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
    @endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h1>Factura</h1></div>

                    <h2>PRODUCTOS</h2>

                    <table>
                        <tr>
                            <th>Referencia</th>
                            <th>Nombre</th>
                            <th>Valor</th>
                        </tr>
                        <tr>
                            <td>Alfreds Futterkiste</td>
                            <td>Maria Anders</td>
                            <td>Germany</td>
                        </tr>
                    </table>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label text-md-right">Producto</label>

                                <div class="col-md-6">
                                    <select class="js-example-basic-single" name="state" style="width: 90%">
                                        @foreach($productos as $producto)
                                            <option value="{{$producto->id}}">{{$producto->nombre}} - ${{$producto->precio}}</option>
                                            @endforeach
                                    </select>
                                </div>

                            </div>

                            <div class="form-group row">
                                <label disabled for="email" class="col-sm-4 col-form-label text-md-right">Referencia</label>

                                <div class="col-md-6">
                                    <input disabled  id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $factura->id}}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                            </div>
                            <div class="form-group row">
                                <label  for="email" class="col-sm-4 col-form-label text-md-right">Mesa</label>

                                <div class="col-md-6">
                                    <input disabled  id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $factura->mesa->id}}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">TOTAL</label>

                                <div class="col-md-6">
                                    <input id="total" disabled type=number step=0.01 class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" value="{{$factura->total}}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Iniciar Sesion
                                    </button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Olvido su contraseña?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>

    @endsection