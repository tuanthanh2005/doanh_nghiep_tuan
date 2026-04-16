<x-mail::message>
# Thông tin liên hệ mới

Dưới đây là thông tin chi tiết từ khách hàng gửi qua website:

**Họ và tên:** {{ $data['name'] }}  
**Email:** {{ $data['email'] }}  
**Chủ đề:** {{ $data['subject'] }}  

**Nội dung:**  
{{ $data['message'] }}

<x-mail::button :url="config('app.url') . '/admin/contacts'">
Xem trên bảng quản trị
</x-mail::button>

Cảm ơn,<br>
{{ config('app.name') }}
</x-mail::message>
