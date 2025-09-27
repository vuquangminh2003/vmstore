<div class="container">
    <h3>Danh sách liên hệ</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Họ tên</th>
                <th>Điện thoại</th>
                <th>Email</th>
                <th>Chủ đề</th>
                <th>Nội dung</th>
                <th>Ngày gửi</th>
                <th>Phản hồi</th>
                <th class="text-center">Thao tác</th> {{-- Thêm cột phản hồi --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->fullname }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->subject }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>{{ $contact->created_at->format('d/m/Y H:i') }}</td>
                    <td>
                        @if ($contact->is_replied)
                            <span class="text-success">Đã phản hồi</span>
                        @else
                            <span class="text-danger">Chưa phản hồi</span>
                        @endif
                    </td>
                    {{-- <td>
                        <a href="{{ route('contacts.reply', $contact->id) }}" class="btn btn-sm btn-primary">
                            Phản hồi
                        </a>
                    </td> --}}
                    <td class="text-center">
                        <a href="{{ route('contacts.reply', $contact->id) }}" class="btn btn-primary btn-sm">
                            Phản hồi
                        </a>
                         {{-- <a href="{{ route('contacts.delete', $contact->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i>
                         </a> --}}
                         {{-- <button type="button" class="btn btn-danger btn-sm btn-delete-contact" data-id="{{ $contact->id }}">
    <i class="fa fa-trash"></i>
</button> --}}

                    </td>
                    {{-- <td class="text-center"> 
                        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                        <a href="{{ route('post.delete', $post->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $contacts->links() }}
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteButtons = document.querySelectorAll('.btn-delete-contact');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function () {
                const contactId = this.getAttribute('data-id');

                if (!confirm('Bạn có chắc chắn muốn xóa liên hệ này?')) return;

                fetch(`/contacts/${contactId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'Accept': 'application/json'
                    }
                })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        alert(data.message);
                        location.reload();
                    } else {
                        alert('Không thể xóa liên hệ.');
                    }
                })
                .catch(err => {
                    alert('Lỗi trong quá trình xóa.');
                    console.error(err);
                });
            });
        });
    });
</script>

