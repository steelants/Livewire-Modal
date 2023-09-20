<?php

namespace SteelAnts\Modal;

use Illuminate\Support\ServiceProvider;
use SteelAnts\Modal\Http\Livewire\ModalPrefab;
use Livewire\Livewire;

class ModalServiceProvider extends ServiceProvider
{

    public function boot()
    {
        Livewire::component('modal-prefab', ModalPrefab::class);
        $this->loadViewsFrom(__DIR__ . '/../resources/views/livewire', 'modal');
        // $this->publishes([
        //     __DIR__ . '/../resources/views/livewire/' => resource_path('views/vendor/modal'),
        // ]);
    }

    public function register()
    {
    }
}
