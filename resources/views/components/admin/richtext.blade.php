@props(['model'])

<div wire:ignore>
    <textarea id="summernote-{{ str_replace('.', '-', $model) }}" class="form-control" wire:model="{{ $model }}"></textarea>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        function initSummernote() {
            var el = $('#summernote-{{ str_replace('.', '-', $model) }}');
            if (el.length && !el.hasClass('summernote-initialized')) {
                el.summernote({
                    height: 300,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture', 'video']],
                        ['view', ['fullscreen', 'codeview', 'help']]
                    ],
                    callbacks: {
                        onChange: function(contents, $editable) {
                            @this.set('{{ $model }}', contents);
                        }
                    }
                }).addClass('summernote-initialized');
            }
        }
        
        // standard DOM
        initSummernote();

        // livewire 2 + 3 hooks
        if (typeof document.addEventListener !== 'undefined') {
            document.addEventListener('livewire:load', initSummernote);
            document.addEventListener('livewire:init', initSummernote);
        }
    });
</script>
@endpush
