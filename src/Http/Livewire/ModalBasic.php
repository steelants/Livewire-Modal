<?php

namespace SteelAnts\Modal\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;

class ModalBasic extends Component
{
    protected $listeners = ['openModal', 'closeModal'];

    public $livewireComponents = [];
    public $livewireComponentParameters = [];

    public $model = null;
    public $parameters = [];

    public $modalId;
    public $title;

    public function openModal($livewireComponents, $title = "", $model = null, ...$parameters){
        $this->livewireComponents = $livewireComponents;
        $this->title = $title;

        if (!empty($model) && $model != null){
            $this->livewireComponentParameters['model'] = $model;
        }

        $this->livewireComponentParameters['parameters'] = $parameters;
    }

    public function closeModal(){
        $this->reset('livewireComponents');
        $this->reset('livewireComponentParameters');
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
