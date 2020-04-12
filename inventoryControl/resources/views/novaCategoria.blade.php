@extends('layoutDefault', ['current' => 'categorias'])

@section('body')
    <div class="card border shadow">
        <div class="card-body">
            <form action="/categorias" method="post">
                @csrf
                <div class="form-group">
                    <label for="idNome">nome da categoria</label>
                    <input
                        type="text"
                        required
                        class="form-control"
                        id="idNome"
                        name="name"
                        placeholder="Nome da categoria"
                    >
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="submit" class="btn btn-danger ml-1">Cancelar</button>
            </form>
        </div>
    </div>
@endsection
