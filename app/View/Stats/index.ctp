<h1>Partners</h1>
<ul>
<?php foreach ($partners as $partner): ?>
  <li><?= $this->Html->link($partner['Partner']['id'], ['action' => 'view', $partner['Partner']['id']]); ?>. <?= $this->Html->link('All Campaigns', ['action' => 'all', $partner['Partner']['id']]) ?></li>
<?php endforeach; ?>
</ul>
