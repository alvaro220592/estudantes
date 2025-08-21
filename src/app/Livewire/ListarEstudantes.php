<?php

namespace App\Livewire;

use App\Models\Estudante;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class ListarEstudantes extends Component
{
    use WithPagination;

    #[Layout('layouts.app')]
    public function render()
    {
        $estudantes = Estudante::paginate();
        return view('livewire.listar-estudantes', [
            'estudantes' => $estudantes
        ]);
    }
}
