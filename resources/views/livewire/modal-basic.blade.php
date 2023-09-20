<div >
    <!-- Modal -->
    <div wire:ignore.self aria-hidden="true" aria-labelledby="{{ $modalId }}Label" class="modal fade" id="{{ $modalId }}" tabindex="-1">
        <div class="modal-dialog modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="{{ $modalId }}Label">{{ $title }}</h5>
                    <button aria-label="Close" class="btn-close btn-close-white text-white" data-bs-dismiss="modal" type="button"></button>
                </div>
                <div class="modal-body">
                    @dump($livewireComponentName)
                    @if (isset($livewireComponentName))
                        @livewire($livewireComponentName, ["modelId" => $modelId], key($livewireComponentName))
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
        Livewire.on('openModal', event => {
            (new bootstrap.Modal('#{{ $modalId }}')).show()
        })
    })
</script>
</div>

@push('scripts')
@endpush
