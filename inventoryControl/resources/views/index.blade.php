@extends('layoutDefault', ['current' => 'home'])

@section('body')
    <div class="d-flex flex-row justify-content-around">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Cadastro de produtos</h5>
                <p class="card-text">
                    Cadastro de produtos, clique para ir no formulario.
                </p>
                <a href="#" class="btn btn-primary">click</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Cadastro de categoria</h5>
                <p class="card-text">
                    Cadastro de categoria, clique para ir no formulario.
                </p>
                <a href="#" class="btn btn-primary">click</a>
            </div>
        </div>
    </div>
@endsection
