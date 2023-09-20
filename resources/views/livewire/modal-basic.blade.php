<div>
    <!-- Modal -->
    <div aria-hidden="true" aria-labelledby="{{ $modalId }}-label" class="modal fade" id="{{ $modalId }}" tabindex="-1" wire:ignore.self>
        <div class="modal-dialog modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    @yield('modal-header')
                    <h5 class="modal-title" id="{{ $modalId }}-label">{{ $title }}</h5>
                    <button aria-label="Close" class="btn-close btn-close-white text-white" data-bs-dismiss="modal" type="button"></button>
                </div>
                <div class="modal-body">

                    <div class="spinner-border" role="status" wire:loading.delay.short>
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    @if (isset($livewireComponents))
                        @foreach ((array) $livewireComponents as $livewireComponentName)
                            @livewire($livewireComponentName, ['model' => $model], key($livewireComponentName))
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            window.addEventListener('close-modal', function() {
                $("#{{ $modalId }}").modal('hide');
            })
            const myModalEl = document.getElementById('{{ $modalId }}')
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
