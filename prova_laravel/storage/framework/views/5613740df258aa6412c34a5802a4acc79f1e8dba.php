<?php $__env->startSection('titulo'); ?>
  Área administrativa
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
<button type="submit" class="w3-btn-block" onclick="window.location='<?php echo e(route ('getRegistrosIndex')); ?>'">Lista de registros</button>
<br><br>
<button type="submit" class="w3-btn-block" onclick="window.location='<?php echo e(route ('getAtletas')); ?>'">Lista de atletas</button>
<br><br>
<button type="submit" class="w3-btn-block" onclick="window.location='<?php echo e(route ('getRelatorio')); ?>'">Lista de registros/atletas</button>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>