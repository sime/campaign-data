<ul>
<?php foreach($campaigns as $campaign): ?>
  <li>
    <?= $this->Html->link($campaign['NstatsImp']['CaID'], ['action' => 'analysis', $id, $campaign['NstatsImp']['CaID']]); ?>
  </li>
<?php endforeach; ?>
</ul>
