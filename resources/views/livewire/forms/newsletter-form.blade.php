<div>
    @if($subscribed)
        <p class="text-success">Đăng ký thành công!</p>
    @else
        <form wire:submit.prevent="subscribe">
            <div class="input-group input-group-lg newsletter">
                <input type="email" wire:model="email" class="subscribe__input" placeholder="Địa chỉ email">
                <button type="submit" class="subs_btn" wire:loading.attr="disabled">Đăng ký</button>
            </div>
            @error('email') <span class="text-danger small d-block mt-1">{{ $message }}</span> @enderror
        </form>
    @endif
</div>
