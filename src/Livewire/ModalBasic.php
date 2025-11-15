<?php

namespace SteelAnts\Modal\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;

class ModalBasic extends Component
{
    protected $listeners = [
        'openModal',
        'closeModal',
    ];

    public $livewireComponents = [];
    public $livewireComponentParameters = [];

    public $model = null;
    public $parameters = [];

    public $modalId;
    public $title;

    public $size;
    public $static;

    /**
     * Open modal
     *
     * @param string|Array $livewireComponents Component name, can be array
     * @param string $title Modal title
     * @param array $parameters Component parameters
     * @return void
     */
    public function openModal($livewireComponents, $title = "", $parameters = [], $size = 'md', $static = true)
    {
        $this->livewireComponents = $livewireComponents;
        $this->title = $title;
        $this->livewireComponentParameters = $parameters;
        $this->size = $size;
        $this->static = $static;
    }

    public function closeModal()
    {
        $this->reset('livewireComponents');
        $this->reset('livewireComponentParameters');
        $this->reset('title');
    }

    public function mount()
    {
        $this->modalId = ('modal-' . Str::random(5));
    }

    public function render()
    {
        return view('modal::modal-basic');
    }
}
