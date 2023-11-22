<div>
    <!-- Modal -->
    <div aria-hidden="true" aria-labelledby="{{ $modalId }}-label" class="modal fade" id="{{ $modalId }}"
        tabindex="-1" wire:ignore.self>
        <div class="modal-dialog modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    @yield('modal-header')
                    <h5 class="modal-title" id="{{ $modalId }}-label">{{ $title }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (isset($livewireComponents))
                        @foreach ((array) $livewireComponents as $livewireComponentName)
                            @livewire($livewireComponentName, $livewireComponentsParameters, key($livewireComponentName))
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const myModalEl = document.getElementById('{{ $modalId }}')
            window.addEventListener('close-modal', function() {
                (bootstrap.Modal.getInstance(myModalEl)).hide();
            })
            myModalEl.addEventListener('hidden.bs.modal', event => {
                Livewire.emit('closeModal');
            })
            Livewire.on('openModal', event => {
                (new bootstrap.Modal('#{{ $modalId }}')).show()
            })
        })
    </script>
</div>

@push('scripts')
@endpush
