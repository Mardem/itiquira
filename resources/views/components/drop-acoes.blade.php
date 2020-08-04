{{--
    Esse componente é utilizado para gerar um drop-down

    EXEMPLO DE USO:
    @component('components.drop-acoes', ['ver' => route('teams.show', 1), 'apagar' => route('teams.destroy', 1])
    @endcomponent

--}}

<div class="btn-group">
    <button type="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false" class="dropdown-toggle btn btn-primary">
        Ações
    </button>
    <div tabindex="-1" aria-hidden="true" role="menu" class="dropdown-menu" x-placement="bottom-start"
         style="position: absolute; will-change: transform; top: 0; left: 0; transform: translate3d(0, 38px, 0px);">
        <a href="{{ $ver }}" tabindex="0" class="dropdown-item text-success"> <i class="ti-eye"></i> Ver</a>
        <div tabindex="-1" class="dropdown-divider"></div>
        <form action="{{ $apagar}}" method="POST">
            @csrf
            @method('DELETE')
            <button tabindex="0" class="dropdown-item text-danger">
                <i class="ti-trash"></i> Apagar
            </button>
        </form>
        <div tabindex="-1" class="dropdown-divider"></div>

        {{ $content ?? '' }}
    </div>
</div>