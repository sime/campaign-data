<p>
  Average number of clicks: <?= $avg[0][0]['avg_imps'] ?> and conversions <?= $avg[0][0]['avg_leads']; ?>
</p>
<table>
  <thead>
    <tr>
      <td>Date</td>
      <td>Clicks</td>
      <td>Leads</td>
    </tr>
  </thead>
<?php foreach($campaign as $day): ?>
  <tr>
    <td><?= $day['Nstat']['datep'] ?></td>
    <td><?= $day['Nstat']['numImps'] ?></td>
    <td><?= $day['Nstat']['numLeads'] ?></td>
  </tr>
<?php endforeach; ?>

</table>
