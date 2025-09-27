<div class="container">
    <h3>Phản hồi liên hệ: <?php echo e($contact->fullname); ?></h3>

    <form action="<?php echo e(route('contacts.reply.send', $contact->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div class="form-group">
            <label>Email người gửi:</label>
            <input type="text" class="form-control" value="<?php echo e($contact->email); ?>" readonly>
        </div>

        <div class="form-group">
            <label>Chủ đề:</label>
            <input type="text" class="form-control" value="<?php echo e($contact->subject); ?>" readonly>
        </div>

        <div class="form-group">
            <label>Nội dung phản hồi:</label>
            <textarea name="reply_message" class="form-control" rows="6" required><?php echo e(old('reply_message')); ?></textarea>
        </div>

        <button type="submit" class="btn btn-success">Gửi phản hồi</button>
        <a href="<?php echo e(route('contacts.index')); ?>" class="btn btn-secondary">Quay lại</a>
    </form>
</div>
<?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/contacts/reply.blade.php ENDPATH**/ ?>