<div>
    Estudantes
    <div x-data="{ isMobile: /Mobi|Android/i.test(navigator.userAgent) }">

        {{-- Scroll infinito se for mobile --}}
        <div x-show="isMobile">
            @foreach($estudantes as $estudante)
                <div class="bg-base-200 p-2 my-3 flex justify-between items-center rounded">
                    <div class="flex flex-col">
                        <span>{{ $estudante->nome }}</span>
                        <span>{{ $estudante->email }}</span>
                    </div>
                    <x-mary-button icon="o-trash" wire:click="excluirEstudante({{ $estudante->id }})" spinner class="btn-sm" />
                </div>
            @endforeach

            {{-- Sentinela para carregar mais --}}
            <div x-intersect.full="$wire.carregarMais()" class="h-1"></div>
        </div>

        {{-- Paginação tradicional se for desktop --}}
        <div x-show="!isMobile">
            <div class="overflow-x-auto overflow-y-auto" style="height: 50vh">
                <table class="table table-pin-rows table-pin-cols">
                    <thead>
                        <tr>
                            <td>Nome</td>
                            <td>Email</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($estudantes as $estudante)
                            <tr>
                                <th>{{ $estudante->nome }}</th>
                                <th>{{ $estudante->email }}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $estudantes->links() }}
        </div>

    </div>

</div>
