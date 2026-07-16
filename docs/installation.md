# Installation

SteelAnts Livewire-Modal is installed using Composer.


## Requirements

- Laravel 11 or 12
- Livewire 3
- Bootstrap 5 (including the Bootstrap JavaScript bundle)


## Install the Package

Install the package using Composer:

```bash
composer require steelants/modal
```

Laravel automatically discovers the service provider.

Currently the package does not require additional configuration files.


## Include the Modal

Add the modal component to your layout:

```blade
@livewire('modal-basic', key('modal'))
```

The component renders the Bootstrap modal markup and listens for the open and close events.


## Next Steps

Continue with:

- [Usage](usage.md)
