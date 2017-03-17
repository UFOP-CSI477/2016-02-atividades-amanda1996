<?php $__env->startSection('titulo'); ?>
  Home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>

<table class="w3-table">
    <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
        </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $atletas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($a->id); ?></td>
          <td><?php echo e($a->nome); ?></td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </tbody>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>