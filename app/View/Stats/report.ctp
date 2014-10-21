<ul>
<?php foreach($clicks as $click): ?>

  <li>
    Campaign 
    <?= $click['Nstat']['CaID'] ?> had
    <?= $click['Nstat']['numImps'] ?> clicks and
    <?= $click['Nstat']['numLeads'] ?>
    <?= $this->Html->link('Diff', ['action' => 'campaign', $id, $date, $click['Nstat']['CaID']]); ?>
  </li>

<?php endforeach; ?>
</ul>
