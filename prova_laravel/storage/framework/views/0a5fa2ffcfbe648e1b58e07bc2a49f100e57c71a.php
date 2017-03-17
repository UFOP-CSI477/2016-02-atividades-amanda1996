<?php $__env->startSection('titulo'); ?>
  Relatório
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>

<h1>Relatório de Eventos</h1>

<table class="w3-table">
        <thead>
          <tr>
            <th>Evento</th>
            <th>Quantidade de inscrições</th>
            <th>Valor total</th>
          </tr>
        </thead>
        <?php $__currentLoopData = $eventos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($e->nome); ?></td>
            <td><?php echo e($e->qtd); ?></td>
            <td><?php echo $e->qtd*$e->total ?></td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<br><br>
<h1>Relatório de Atletas</h1>

<table class="w3-table">
  <thead>
    <tr>
      <th>Atleta</th>
      <th>Quantidade de inscrições</th>
      <th>Valor total</th>
    </tr>
  </thead>
  <?php $__currentLoopData = $atletas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($a->nome); ?></td>
      <td><?php echo e($a->qtd); ?></td>
      <td><?php echo $a->total ?></td>
    </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>