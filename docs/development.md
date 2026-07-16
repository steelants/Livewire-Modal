# Development

This guide describes how to develop SteelAnts Livewire-Modal locally inside a Laravel application.


## Local Setup

Create a packages directory and clone the repository:

```bash
mkdir packages
git clone https://github.com/steelants/Livewire-Modal.git ./packages/Livewire-Modal
```

Update the autoload section of your application `composer.json`:

```json
"autoload": {
    "psr-4": {
        "SteelAnts\\Modal\\": "packages/Livewire-Modal/src/"
    }
}
```

Refresh the autoloader:

```bash
composer dump-autoload
```

Register the service provider in `bootstrap/providers.php`:

```php
return [
    // ...
    SteelAnts\Modal\ModalServiceProvider::class,
];
```


## Development Workflow

1. Create a feature branch.
2. Implement changes.
3. Verify the modal in a test application.
4. Merge changes into the development branch.


## Code Style

The package uses PHP_CodeSniffer with the Slevomat coding standard.

Check the code style:

```bash
composer lint
```

Fix the code style automatically:

```bash
composer format
```

Run static analysis:

```bash
composer check-static
```


## Next Steps

Continue with:

- [Usage](usage.md)
- [Installation](installation.md)
