<?php

namespace SteelAnts\Modal\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;

class ModalBasic extends Component
{
    protected $listeners = ['openModal', 'closeModal'];

    public $livewireComponents = [];

    public $model = null;
    public $parameters = [];

    public $modalId;
    public $title;

    public function openModal($livewireComponents, $title = "", $model = null, ...$parameters){
        $this->livewireComponents = $livewireComponents;
        $this->model = $model;
        $this->parameters = $parameters;
        $this->title = $title;
    }

    public function closeModal(){
        $this->reset('livewireComponents');
        $this->reset('model');
        $this->reset('title');
    }

    public function mount()
    {
        $this->modalId = ('m'.Str::random(5));
    }

    public function render()
    {
        return view('modal::modal-basic');
    }
}
