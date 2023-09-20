<?php

namespace SteelAnts\Modal\Http\Livewire;

use Livewire\Component;

class ModalPrefab extends Component
{
    protected $listeners = ['openModal'];

    public $livewireComponentName;
    public $modelId = null;

    public $modalId = "test";

    public $title;

    public function openModal($argument, $modelId = null){
        $this->livewireComponentName = $argument;
        $this->modelId = $modelId;
    }

    public function render()
    {
        return view('modal::modal-basic');
    }
}
