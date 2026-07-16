# Usage

SteelAnts Livewire-Modal opens any Livewire component inside a Bootstrap modal.

The modal is controlled by the `openModal` and `closeModal` Livewire events.


## Opening from Blade or JavaScript

```html
<button onclick="Livewire.dispatch('openModal', {livewireComponents: 'user-form', title: 'Create user'})">
    Create User
</button>
```

With component parameters:

```html
<button onclick="Livewire.dispatch('openModal', {livewireComponents: 'user-form', title: 'Edit user', parameters: {user: 2}})">
    Edit User
</button>
```


## Opening from a Livewire Component

```php
$this->dispatch(
    'openModal',
    livewireComponents: 'user-form',
    title: __('Edit user'),
    parameters: ['user' => $userId],
);
```


## Parameters

| Parameter | Default | Description |
|---|---|---|
| `livewireComponents` | - | Component name; can be an array of names |
| `title` | `""` | Modal title |
| `parameters` | `[]` | Parameters passed to the component `mount()` |
| `size` | `md` | Modal size (`sm`, `md`, `lg`, `xl`) |
| `static` | `true` | Static backdrop; the modal cannot be closed by clicking outside or pressing escape |


## Component Parameters

Parameters are passed to the `mount()` method of the opened component:

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


## Multiple Components

You can open several components in one modal:

```php
$this->dispatch(
    'openModal',
    livewireComponents: ['user-form', 'user-limitation'],
    title: __('User'),
);
```

The components are rendered in the given order.


## Closing the Modal

Close the modal from any Livewire component:

```php
$this->dispatch('closeModal');
```

Closing the modal resets the opened components, parameters and title.


## Changing the Title

Update the title of an open modal:

```php
$this->dispatch('set-modal-title', title: __('New title'));
```


## Next Steps

Continue with:

- [Installation](installation.md)
- [Development](development.md)
