<?php

namespace SteelAnts\Modal\Livewire\Attributes;

#[\Attribute(\Attribute::TARGET_CLASS)]
class AllowInModal
{
    public function __construct(
        public bool $asGuest = false,
        public ?string $ability = null,
        public mixed $arguments = null,
    ) {}
}
