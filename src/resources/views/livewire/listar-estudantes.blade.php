<div>
    Estudantes

    <ul>
        @foreach ($estudantes as $estudante)
            <li>{{ $estudante->nome }} - {{ $estudante->email }} - {{ $estudante->secao->nome }} - {{ $estudante->Secao->classe->nome }}</li>
        @endforeach
        {{ $estudantes->links() }}
    </ul>
</div>
