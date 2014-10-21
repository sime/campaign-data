<?php
class NstatShell extends AppShell {
    public $uses = ['Nstat', 'NstatsImp', 'NstatsLead'];
    public function main() {

      $this->Nstat->query('TRUNCATE TABLE nstats');
      $totalClicks = $this->NstatsImp->find('count');
      $limit = 1000;
      $pages = ceil($totalClicks / $limit);
      for ($i = 0; $i < $pages; $i++) {
        $this->out($i);
        $clicks = $this->NstatsImp->find('all', ['limit' => $limit, 'page' => $i]);
        foreach ($clicks as $click) {
          $this->Nstat->create();
          $leads = $this->NstatsLead->field(
            'numLeads',
            [
              'datep' => $click['NstatsImp']['datep'],
              'CoID' => $click['NstatsImp']['CoID'],
              'CaID' => $click['NstatsImp']['CaID'],
              'BaID' => $click['NstatsImp']['BaID'],
            ]
          );
          $click['NstatsImp']['numLeads'] = ($leads) ? $leads : 0;
          $this->Nstat->save($click['NstatsImp']);
          $this->Nstat->clear();
        }
      }

    }
}
