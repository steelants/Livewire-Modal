<?php

namespace SteelAnts\Modal;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use SteelAnts\Modal\Http\Livewire\ModalBasic;

class ModalServiceProvider extends ServiceProvider
{

    public function boot()
    {
        Livewire::component('modal-basic', ModalBasic::class);
        $this->loadViewsFrom(__DIR__ . '/../resources/views/livewire', 'modal');
        // $this->publishes([
        //     __DIR__ . '/../resources/views/livewire/' => resource_path('views/vendor/modal'),
        // ]);
    }

    public function register()
    {
    }
}
