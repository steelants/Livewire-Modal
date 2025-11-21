<?php

namespace SteelAnts\Modal\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Locked;
use Livewire\Mechanisms\ComponentRegistry;
use Illuminate\Support\Facades\Gate;
use SteelAnts\Modal\Livewire\Attributes\AllowInModal;

class ModalBasic extends Component
{
    protected $listeners = [
        'openModal',
        'closeModal',
    ];

	#[Locked]
    public $_livewireComponents = [];
	#[Locked]
    public $_livewireComponentParameters = [];

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
		foreach((array) $livewireComponents as $component){
			if(!$this->canOpenComponent($component)){
				return;
			}
		}

        $this->_livewireComponents = $livewireComponents;
        $this->_livewireComponentParameters = $parameters;
        $this->title = $title;
        $this->size = $size;
        $this->static = $static;
    }

    public function closeModal()
    {
        $this->reset('_livewireComponents');
        $this->reset('_livewireComponentParameters');
        $this->reset('title');
    }

    public function mount()
    {
        $this->modalId = ('modal-' . Str::random(5));
    }

    public function render()
    {
		foreach((array) $this->_livewireComponents as $component){
			if(!$this->canOpenComponent($component)){
				$this->dispatch('closeModal');
				return view('modal::modal-basic', [
					'livewireComponents' => [],
					'livewireComponentParameters' => [],
				]);
			}
		}
		return view('modal::modal-basic', [
			'livewireComponents' => $this->_livewireComponents,
			'livewireComponentParameters' => $this->_livewireComponentParameters,
		]);
    }

	private function canOpenComponent(string $alias): bool
	{
		$class = app(ComponentRegistry::class)->getClass($alias);
		if (! $class) return false;

		$attr = collect((new \ReflectionClass($class))
			->getAttributes(AllowInModal::class))
			->first()?->newInstance();

		if (!$attr) {
			return auth()->check();
		}

		if ($attr->ability) {
			return Gate::allows($attr->ability, $attr->arguments);
		}

		return $attr->asGuest || auth()->check();
	}
}
