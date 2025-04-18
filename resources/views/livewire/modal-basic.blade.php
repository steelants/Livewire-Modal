<div>
    <div aria-hidden="true" aria-labelledby="{{ $modalId }}-label" class="modal fade" id="{{ $modalId }}" tabindex="-1" wire:ignore.self>
        <div class="modal-dialog modal-{{ $size }} modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    @yield('modal-header')
                    <h5 class="modal-title" id="{{ $modalId }}-label">{{ $title }}</h5>
                    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
                </div>
                <div class="modal-body">
                    @if (isset($livewireComponents))
                        @foreach ((array) $livewireComponents as $livewireComponentName)
                            @livewire($livewireComponentName, $livewireComponentParameters, key($livewireComponentName))
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    @script
        <script>
            const myModalEl = document.getElementById('{{ $modalId }}');
            Livewire.on('openModal', event => {
                (bootstrap.Modal.getOrCreateInstance('#{{ $modalId }}', {'backdrop': event.static ? 'static' : true, 'keyboard': !event.static})).show();
            })
            Livewire.on('closeModal', event => {
                (bootstrap.Modal.getInstance(myModalEl)).hide();
            })
            Livewire.on('set-modal-title', event => {
                $wire.title = event[0];
                document.getElementById('{{ $modalId }}-label').innerHTML = $wire.title;
            })
            window.addEventListener('close-modal', function() {
                (bootstrap.Modal.getInstance(myModalEl)).hide();
            })
            myModalEl.addEventListener('hidden.bs.modal', event => {
                Livewire.dispatch('closeModal', {'type' : 'close'});
            })
        </script>
    @endscript
</div>
