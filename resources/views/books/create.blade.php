<!-- resources/views/book/create.blade.php -->

@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Adicionar Livro</h3>
                    </div>
                
                    <div class="card-body">
                        <form method="POST" action="{{ route('books.store') }}">
                            @csrf
                
                            <div class="mb-3">
                                <label for="titulo" class="form-label">Título</label>
                                <input type="text" class="form-control form-control-border" id="titulo" name="titulo" placeholder="Título do livro">
                            </div>
                
                            <div class="mb-3">
                                <label for="autor" class="form-label">Autor</label>
                                <input type="text" class="form-control form-control-border" id="autor" name="autor" placeholder="Autor do livro">
                            </div>
                
                            <div class="mb-3">
                                <label for="genero" class="form-label">Gênero</label>
                                <input type="text" class="form-control form-control-border" id="genero" name="genero" placeholder="Gênero do livro">
                            </div>
                
                            <div class="mb-3">
                                <label for="quantidade_disponivel" class="form-label">Quantidade Disponível</label>
                                <input type="number" class="form-control form-control-border" id="quantidade_disponivel" name="quantidade_disponivel" placeholder="Quantidade disponível do livro">
                            </div>
                
                            <button type="submit" class="btn btn-primary">Adicionar Livro</button>
                        </form>
                    </div>
                </div>
                
@endsection
