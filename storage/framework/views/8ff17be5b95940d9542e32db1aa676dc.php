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
                <th class="text-center">Thao tác</th> 
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($contact->fullname); ?></td>
                    <td><?php echo e($contact->phone); ?></td>
                    <td><?php echo e($contact->email); ?></td>
                    <td><?php echo e($contact->subject); ?></td>
                    <td><?php echo e($contact->message); ?></td>
                    <td><?php echo e($contact->created_at->format('d/m/Y H:i')); ?></td>
                    <td>
                        <?php if($contact->is_replied): ?>
                            <span class="text-success">Đã phản hồi</span>
                        <?php else: ?>
                            <span class="text-danger">Chưa phản hồi</span>
                        <?php endif; ?>
                    </td>
                    
                    <td class="text-center">
                        <a href="<?php echo e(route('contacts.reply', $contact->id)); ?>" class="btn btn-primary btn-sm">
                            Phản hồi
                        </a>
                         
                         

                    </td>
                    
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <?php echo e($contacts->links()); ?>

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

<?php /**PATH C:\xampp\htdocs\vmstore\resources\views/backend/contacts/component/table.blade.php ENDPATH**/ ?>