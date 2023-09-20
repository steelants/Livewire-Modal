<?php

namespace SteelAnts\Modal\Http\Livewire;

use Livewire\Component;

class ModalPrefab extends Component
{
    protected $listeners = ['openModal', 'closeModal'];

    public $livewireComponentName;
    public $modelId = null;

    public $modalId = "test";

    public $title;

    public function openModal($argument, $modelId = null){
        $this->livewireComponentName = $argument;
        $this->modelId = $modelId;
    }

    public function closeModal(){
        $this->reset('livewireComponentName');
        $this->reset('modelId');
        $this->reset('title');
    }

    public function mount()
    {
        $this->modalId = substr(md5(uniqid(mt_rand(), true)), 0, 5);
    }

    public function render()
    {
        return view('modal::modal-basic');
    }
}
