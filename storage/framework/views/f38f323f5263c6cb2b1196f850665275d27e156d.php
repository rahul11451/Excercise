<div class="form-outline mb-4">
    <label class="form-label" for="form4Example1"><?php echo e($label); ?></label>
    <input type="<?php echo e($type); ?>" name="<?php echo e($name); ?>" id="form4Example1" class="form-control" value="<?php echo e(old('name')); ?>" />
    <span class="text-danger">
      <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <?php echo e($message); ?>

      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </span>
  </div><?php /**PATH /home/GALAXYRADIXWEB/nensi.darji/web/laravel/public_html/resources/views/components/input.blade.php ENDPATH**/ ?>