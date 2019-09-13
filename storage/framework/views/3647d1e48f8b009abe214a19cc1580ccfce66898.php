<?php if(count($errors) > 0): ?>
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo $error; ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endif; ?><?php /**PATH D:\xampp\htdocs\tutoriales\miaplicacioncrud\resources\views/alerts/request.blade.php ENDPATH**/ ?>