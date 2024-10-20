# Livevire Modal

Package for opening any Livewire component inside modal. Powered by Livewire 3 and Bootstrap 5.

### Created by: [SteelAnts s.r.o.](https://www.steelants.cz/)

[![Total Downloads](https://img.shields.io/packagist/dt/steelants/modal.svg?style=flat-square)](https://packagist.org/packages/steelants/modal)

## Usage

### Include modal in layout
```blade
@livewire('modal-basic', key('modal'))
```

### Opening modal from blade or JavaScript
```html
<button onclick="Livewire.dispatch('openModal', 'livewire-component-name', 'Modal title', [componentParameters])">Open modal</button>
```

### Opening modal from component
```php
$this->dispatch('openModal', 'livewire-component-name', 'Modal title', $componentParameters)
```

## openModal parameters
```php
/**
 * Open modal
 *
 * @param string|Array $livewireComponents Component name, can be array
 * @param string $title Modal title
 * @param array $parameters Component parameters
 * @return void
 */
public function openModal($livewireComponents, $title = "", $parameters = [])
```

## Example
```html
<button onclick="Livewire.dispatch('openModal', 'user-form', 'Create user')">Create User</button>

<button onclick="Livewire.dispatch('openModal', 'user-form', 'Edit user', , parameters: {'user_id' : {{ $user->id }})">Edit User</button>
```

```php
use Livewire\Component;

class UserForm extends Component
{
  public function mount(User $user)
  {
    $this->user = $user;
  }
}
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
