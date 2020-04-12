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
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{ $categorias->id }}</th>
                            <td>{{ $categorias->name }}</td>
                        </tr>
                    </tbody>
                </table>
            @endforeach
        </div>
    </div>
@endsection
