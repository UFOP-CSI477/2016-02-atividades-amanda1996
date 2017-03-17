<?php $__env->startSection('titulo'); ?>
  Home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
<form role="form" method="POST" action="<?php echo e(route('selecionaAtleta')); ?>">
<?php echo e(csrf_field()); ?>


  <select class="form-control" style="width: 20%"  onchange="" id="select" name="atleta_id">
    <option value="" selected disabled>Selecione um atleta</option>
    <?php $__currentLoopData = $atletas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value="<?php echo e($a->id); ?>"><?php echo e($a->nome); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>

    <br><br>
    <button type="submit" class="w3-btn-block">Ver eventos</button>
</form>
<br><br>
<button type="submit" class="w3-btn-block" onclick="window.location='/registros/create'">Cadastrar-se em eventos</button>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>