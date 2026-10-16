<div align="center">

<a href="https://steelants.cz">
	<picture>
		<source
			media="(prefers-color-scheme: dark)"
			srcset="https://steelants.cz/wp-content/uploads/2026/07/white_3.png">
		<img
			src="https://steelants.cz/wp-content/themes/wp_steelants_v5/img/logo.png"
			alt="SteelAnts"
			width="180">
	</picture>
</a>

<h1>Livewire-Modal</h1>

[![Latest Version on Packagist](https://img.shields.io/packagist/v/steelants/modal.svg?style=flat-square)](https://packagist.org/packages/steelants/modal) [![Total Downloads](https://img.shields.io/packagist/dt/steelants/modal.svg?style=flat-square)](https://packagist.org/packages/steelants/modal)

<p>
Package for opening any Livewire component inside a modal. Powered by Livewire 3 and Bootstrap 5.
</p>

<p>
Created by <a href="https://steelants.cz">SteelAnts s.r.o.</a>
</p>

</div>

> [!WARNING]
> **This package is deprecated and the repository is archived.**
>
> Livewire-Modal was merged into [Laravel-Boilerplate](https://github.com/steelants/Laravel-Boilerplate)
> and is no longer developed or released separately.
>
> **Migration:**
>
> 1. `composer remove steelants/modal` and make sure `steelants/laravel-boilerplate` is at `^2.7`.
> 2. Remove `SteelAnts\Modal\ModalServiceProvider::class` from `bootstrap/providers.php` -
>    `BoilerplateServiceProvider` registers the modal.
> 3. Replace `use SteelAnts\Modal\Livewire\Attributes\AllowInModal;` with
>    `use SteelAnts\LaravelBoilerplate\Attributes\AllowInModal;`.
> 4. Optionally rename the component in your layout from `modal-basic` to `boilerplate.modal.basic`
>    (the old name stays registered).
>
> See the [modal documentation](https://github.com/steelants/Laravel-Boilerplate/blob/main/docs/components/modal.md)
> and the [upgrade guide](https://github.com/steelants/Laravel-Boilerplate/blob/main/docs/updates/upgrade-2_7.md).

## Features

SteelAnts Livewire-Modal provides:

- Opening any Livewire component in a Bootstrap modal
- Opening from Blade, JavaScript or Livewire components
- Multiple components in one modal
- Component parameters
- Modal sizes
- Static and dismissible backdrop
- Dynamic modal title

## Documentation

- [Installation](docs/installation.md)
- [Usage](docs/usage.md)
- [Development](docs/development.md)

## Contributors

<a href="https://github.com/steelants/Livewire-Modal/graphs/contributors">
  <img src="https://contrib.rocks/image?repo=steelants/Livewire-Modal" />
</a>

## Other Packages

- [Laravel-Auth](https://github.com/steelants/Laravel-Auth)
- [Livewire-DataTable](https://github.com/steelants/Livewire-DataTable)
- [Laravel-Boilerplate.Warehouse](https://github.com/steelants/Laravel-Boilerplate.Warehouse)
- [Laravel-Boilerplate](https://github.com/steelants/Laravel-Boilerplate)
- [Laravel-Form](https://github.com/steelants/Laravel-Form)
- [Livewire-Form](https://github.com/steelants/Livewire-Form)
- [Laravel-General](https://github.com/steelants/Laravel-General)
- [Laravel-Tenant](https://github.com/steelants/Laravel-Tenant)

## License

This package is open-sourced software licensed under the [MIT license](LICENSE).
