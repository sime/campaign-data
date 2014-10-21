<ul>
<?php foreach($dates as $date): ?>
  <li>
    <?= $this->Html->link($date['NstatsImp']['datep'], ['action' => 'report', $id, $date['NstatsImp']['datep']]); ?>
  </li>
<?php endforeach; ?>
</ul>
