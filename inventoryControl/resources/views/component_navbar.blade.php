<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li @if($current == 'home') class="nav-item active" @else class="nav-item"  @endIf >
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li @if($current == 'produtos') class="nav-item active" @else class="nav-item"  @endIf >
                <a class="nav-link" href="#">Produtos</a>
            </li>
            <li @if($current == 'categorias') class="nav-item active" @else class="nav-item"  @endIf >
                <a class="nav-link" href="#">Categorias</a>
            </li>
        </ul>
    </div>
</nav>
