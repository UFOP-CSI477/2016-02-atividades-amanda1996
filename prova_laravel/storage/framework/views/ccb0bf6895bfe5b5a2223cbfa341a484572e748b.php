<?php $__env->startSection('titulo'); ?>
  Home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>

<table class="w3-table">
  <thead>
        <tr>
          <th>Evento</th>
          <th>Data</th>
          <th>Status</th>
        </tr>
    </thead>
    <tbody>
      <?php $qtd = 0;
            $total = 0;
      ?>
      <?php $__currentLoopData = $eventos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($r->nome); ?></td>
          <td><?php echo e($r->data); ?></td>
          <td><?php echo e($r->pago); ?></td>
          <?php $qtd = $qtd + $r->qtd ?>
          <?php $total = $total + ($r->qtd*$r->total) ?>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </tbody>
   <tfoot>
     <tr>
       <td><b>Total de inscrições: <?php echo $qtd ?></b></td>
       <td><b>Valor total: <?php echo $total ?></b></td>
     </tr>
   </tfoot>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>