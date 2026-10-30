<div>
    <dialog aria-labelledby="{{ $modalId }}-label" class="dialog dialog-{{ $size }} sm-down:dialog-fullscreen" id="{{ $modalId }}" wire:ignore.self>
        <div class="dialog-header">
            @yield('modal-header')
            <h5 class="dialog-title" id="{{ $modalId }}-label">{{ $title }}</h5>
            <button aria-label="Close" class="btn-close" data-bs-dismiss="dialog" type="button"></button>
        </div>
        <div class="dialog-body">
            @if (isset($livewireComponents))
                @foreach ((array) $livewireComponents as $livewireComponentName)
                    @livewire($livewireComponentName, $livewireComponentParameters, key($livewireComponentName))
                @endforeach
            @endif
        </div>
    </dialog>
    @script
        <script>
            const myModalEl = document.getElementById('{{ $modalId }}');
            Livewire.on('openModal', event => {
                // Parametr static prijde bud pojmenovane, nebo jako 5. pozicni argument.
                const staticValue = event.static ?? event[4] ?? null;
                const staticBool = (staticValue == null)
                    ? true
                    : (typeof staticValue === 'boolean')
                        ? staticValue
                        : Boolean(staticValue);
                (bootstrap.Dialog.getOrCreateInstance('#{{ $modalId }}', {'backdrop': staticBool ? 'static' : true, 'keyboard': !staticBool})).show();
            })
            Livewire.on('closeModal', event => {
                (bootstrap.Dialog.getInstance(myModalEl)).hide();
            })
            Livewire.on('set-modal-title', event => {
                $wire.title = event[0];
                document.getElementById('{{ $modalId }}-label').innerHTML = $wire.title;
            })
            window.addEventListener('close-modal', function() {
                (bootstrap.Dialog.getInstance(myModalEl)).hide();
            })
            myModalEl.addEventListener('hidden.bs.dialog', event => {
                Livewire.dispatch('closeModal', {'type' : 'close'});
            })
        </script>
    @endscript
</div>
