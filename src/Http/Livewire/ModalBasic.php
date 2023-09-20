<?php

namespace SteelAnts\Modal\Http\Livewire;

use Livewire\Component;

class ModalBasic extends Component
{
    protected $listeners = ['openModal', 'closeModal'];

    public $livewireComponents = [];

    public $modelId = null;
    public $modalId;
    public $title;

    public function openModal($livewireComponents, $title = "", $modelId = null){
        $this->livewireComponents = $livewireComponents;
        $this->modelId = $modelId;
        $this->title = $title;

    }

    public function closeModal(){
        $this->reset('livewireComponents');
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
