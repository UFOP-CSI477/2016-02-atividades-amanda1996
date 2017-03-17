<?php $__env->startSection('titulo'); ?>
  Registros
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
<table class="w3-table">
    <thead>
        <tr>
          <th>Atleta</th>
          <th>Evento</th>
          <th>Data</th>
        </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $registros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($r->nomeAtleta); ?></td>
          <td><?php echo e($r->nomeEvento); ?></td>
          <td><?php echo e($r->data); ?></td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>