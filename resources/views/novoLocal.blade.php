@extends('layout')
@section('content')
<div class="card border">
    <div class="card-body">
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
                <h1 class="mt-5 text-center">CADASTRE UMA VIAGEM REALIZADA</h1>
            </div>
        </div>
        <form action="{{route('gravaNovaViagem')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="local">Local:</label>
                <input type="text" class="form-control" name="local" 
                       placeholder="Informe o nome do local">
            </div>
            <div class="form-group">
                <label for="date">Data da viagem:</label>
                <input type="date" name="data"/>
            </div>
            
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='{{route('inicio')}}';" type="button" 
                    class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div> 
</div> 
@endsection