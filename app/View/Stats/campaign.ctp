<?php // Rushed and messy ?>
<strong><?= $report['Nstat']['datep'] ?></strong>
<p>
  Partner <?= $report['Nstat']['CoID']; ?> for CaID:<?= $report['Nstat']['CaID'] ?> did <?= $report['Nstat']['numImps'] ?>/<?= $report['Nstat']['numLeads'] ?> (click/leads).
</p>
<?php if (empty($previous)): ?>
<p> Unable to compare, not stats to previous day </p>
<?php else: ?>
  <?php 
  if ($report['Nstat']['numLeads'] == 0 || $report['Nstat']['numLeads'] == 0) {
    $imps_diff = 0;
  } else {
    $imps_diff = ($report['Nstat']['numImps'] / $previous['Nstat']['numImps']);
  }
  if ($report['Nstat']['numLeads'] == 0 || $report['Nstat']['numLeads'] == 0) {
    $leads_diff = 0;
  } else {
    $leads_diff = $report['Nstat']['numLeads'] / $previous['Nstat']['numLeads'];
  }
?>
  <p>
  Click trend: <?php
    switch(true) {
    case ($imps_diff > 1.5):
      echo 'NEW';
      break;
    case ($imps_diff > 1.1):
      echo 'GROWTH';
      break;
    case ($imps_diff >= 0.9 && $imps_diff <= 1.1):
      echo 'STABLE';
      break;
    case ($imps_diff < 0.9):
      echo 'DROP';
      break;
    case ($imps_diff < 0.15):
      echo 'STOP';
      break;
    default:
      echo 'Unable to compare';
    }
  ?>
  </p>

  <p>
  Converstion trend: <?php
    switch(true) {
    case ($leads_diff > 1.5):
      echo 'NEW';
      break;
    case ($leads_diff > 1.1):
      echo 'GROWTH';
      break;
    case ($leads_diff >= 0.9 && $leads_diff <= 1.1):
      echo 'STABLE';
      break;
    case ($leads_diff < 0.9):
      echo 'DROP';
      break;
    case ($leads_diff < 0.15):
      echo 'STOP';
      break;
    default:
      echo 'Unable to compare';
    }
  ?>
  </p>
<?php endif; ?>
