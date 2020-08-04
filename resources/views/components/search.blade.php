{{--
    Esse componente é utilizado pesquisa
    a única dependência dela é o a rota de pesquisa

    EXEMPLO DE USO:
    @component('components.search')
       @slot('route', route('employeer.search'))
    @endcomponent

--}}
<div class="row ml-2 text-center">
    <form action="{{ $route }}" class="form-inline" method="GET">
        <input type="text" name="search" class="form-control w-75 mr-1" placeholder="Digite sua busca">
        <input type="hidden" name="profile" value="{{ $profile ?? '' }}">
        <button class="btn btn-outline-primary">
            <i class="ti-search"></i>
        </button>
    </form>
</div>
