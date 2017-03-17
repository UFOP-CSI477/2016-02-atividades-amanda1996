<?php $__env->startSection('titulo'); ?>
  Inscrição
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
    <h1>Inscrição em eventos</h1>
    <form class="" action="<?php echo e(route('postCreateRegistro')); ?>" method="POST" enctype="multipart/form-data">
      <?php echo e(csrf_field()); ?>

      <label for="atleta_id">ID do atleta: </label>
      <input type="text" name="atleta_id" value="" placeholder="ID do atleta"><br><br>
      <label for="pago">Evento: </label>
      <select class="form-control" style="width: 20%" name="evento_id">
        <option value="" selected disabled>Selecione um evento</option>
          <?php $__currentLoopData = $eventos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($e->id); ?>"><?php echo e($e->nome); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
      <br><br>
      <label for="preco">Data prevista do pagamento: </label>
      <input type="text" name="data" value="" placeholder="Data">
      <?php echo e(($errors->has('data')) ? $errors->first('data') : ''); ?><br><br>
      <label for="pago">Status do pagamento: </label>
      <select class="form-control" style="width: 20%" name="pago">
        <option value="" selected disabled>Selecione uma opção</option>
        <option value=1>Sim</option>
        <option value=0>Não</option>
      </select>
      <br><br>
      <input type="submit" name="name" value="Finalizar inscrição">
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>