
@extends('layoutDefault', ['current' => 'categorias'])

@section('body')
    <div class="card border shadow">
        <div class="card-body">
            <h3 class="text-center mt-1">Categorias</h3>
            @foreach($Allcategorias as $categorias)
                <table class="table">
                    <thead>
                        <th scope="col">Identificador</th>
                        <th scope="col">nome</th>
                        <th scope="col">opcoes</th>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{ $categorias->id }}</th>
                            <td>{{ $categorias->name }}</td>
                            <td>
                                <a
                                    class="btn btn-primary"
                                    href="/categorias/editar/{{ $categorias->id }}"
                                    role="button"
                                >
                                    Alterar
                                </a>
                                <a
                                    class="btn btn-danger"
                                    href="/categorias/deletar/{{ $categorias->id }}"
                                    role="button"
                                >
                                    Deletar
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            @endforeach
        </div>
    </div>
@endsection
