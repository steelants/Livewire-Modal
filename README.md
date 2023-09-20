# LV-Modal
### Created by: [SteelAnts s.r.o.](https://www.steelants.cz/)

[![Total Downloads](https://img.shields.io/packagist/dt/steelants/modal.svg?style=flat-square)](https://packagist.org/packages/steelants/modal)

## Include in your layout
like this
```blade
...
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @livewire('modals.test-modal', [ 'title' => "Super Modal" ], key('modal'))
</body>
...
```
## Examples
```php
namespace App\Http\Livewire\Modals;

use Livewire\Component;
use SteelAnts\Modal\Http\Livewire\ModalPrefab;

class TestModal extends ModalPrefab
{

}
```
```html
<button onclick="Livewire.emit('openModal', 'livewire-component-name', 'title', '?modelId')">Edit User</button>
```
```shell
git tag x.x.x
git push --tags
```
