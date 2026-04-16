<div class="contact">
    @if($sent)
        <div class="alert alert-success">Tin nhắn đã được gửi thành công!</div>
    @else
        <form wire:submit.prevent="submit">
            <div class="row">
                <div class="form-group col-md-6 mb-3">
                    <input type="text" wire:model="name" class="form-control @error('name') is-invalid @enderror" placeholder="Họ và tên *">
                    @error('name') <span class="text-danger small">{{ $message }}</span> @enderror
                </div>
                <div class="form-group col-md-6 mb-3">
                    <input type="email" wire:model="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email liên hệ *">
                    @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
                </div>
                <div class="form-group col-md-12 mb-3">
                    <input type="text" wire:model="subject" class="form-control @error('subject') is-invalid @enderror" placeholder="Chủ đề / Website của bạn">
                    @error('subject') <span class="text-danger small">{{ $message }}</span> @enderror
                </div>
                <div class="form-group col-md-12 mb-3">
                    <textarea rows="5" wire:model="message" class="form-control @error('message') is-invalid @enderror" placeholder="Yêu cầu tư vấn chi tiết..."></textarea>
                    @error('message') <span class="text-danger small">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-12 text-center mt-2">
                    <button type="submit" class="btn btn-primary w-100 fw-bold py-2" style="border-radius: 8px;" wire:loading.attr="disabled">
                        <span wire:loading.remove>Gửi Yêu Cầu Chuyên Gia</span>
                        <span wire:loading>Đang gửi...</span>
                    </button>
                </div>
            </div>
        </form>
    @endif
</div>
