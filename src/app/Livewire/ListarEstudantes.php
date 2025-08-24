<?php

namespace App\Livewire;

use App\Models\Estudante;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class ListarEstudantes extends Component
{
    use WithPagination, WithoutUrlPagination;

    #[Layout('layouts.app')]
    
    public $perPage = 20;

    public function render()
    {
        $estudantes = Estudante::paginate($this->perPage);
        $headers = [
            ['key' => 'nome', 'label' => 'Nome'],
            ['key' => 'email', 'label' => 'Email'],
        ];
        return view('livewire.listar-estudantes', [
            'estudantes' => $estudantes,
            'headers' => $headers
        ]);
    }

    public function carregarMais () {
        $this->perPage += 10;
    }

    public function excluirEstudante ($id) {
        return;
    }
}
