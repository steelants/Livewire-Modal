# Livevire Modal
## Currently WIP
### Created by: [SteelAnts s.r.o.](https://www.steelants.cz/)

[![Total Downloads](https://img.shields.io/packagist/dt/steelants/modal.svg?style=flat-square)](https://packagist.org/packages/steelants/modal)

## Include in layout
```blade
@livewire('modal-basic', key('modal'))
```
## Open modal from blade
```html
<button onclick="Livewire.emit('openModal', 'livewire-component-name', 'title', '?modelId')">Edit User</button>
```

## Open modal from controller
```php
$this->emit('openModal', 'livewire-component-name', 'title', '?modelId')
```

## Contributors
<a href="https://github.com/steelants/livewire-modal/graphs/contributors">
  <img src="https://contrib.rocks/image?repo=steelants/livewire-modal" />
</a>

## Other Packages
[steelants/datatable](https://github.com/steelants/Livewire-DataTable)

[steelants/form](https://github.com/steelants/Laravel-Form)

[steelants/boilerplate](https://github.com/steelants/Laravel-Boilerplate)

[steelants/auth](https://github.com/steelants/laravel-auth)
