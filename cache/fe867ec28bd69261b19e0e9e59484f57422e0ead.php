<?php if(get_field('modules') > 0): ?>
<div class="block block--type-accordion block--colour-grey">
  <div class="container">
    <h2>
      What will you learn?
    </h2>
    <div class="accordion">
      <?php $i = 0; ?>
      <?php $__currentLoopData = get_field('modules'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="accordion__title <?php echo $i == 0 ? 'active' : false; ?>">
          <h4><i class="far <?php echo $i == 0 ? 'fa-minus' : 'fa-plus'; ?>"></i> <?php echo e($module['module_title']); ?></h4>
        </div>
        <div class="accordion__content <?php echo $i == 0 ? 'active' : false; ?>">
          <?php echo $module['module_overview']; ?>

        </div>
        <hr/>        
        <?php $i++; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</div>
<?php endif; ?>