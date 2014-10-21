<?php
App::uses('AppController', 'Controller');
class StatsController extends AppController {

  public $uses = [ 'NstatsImp', 'NstatsLead', 'Partner', 'Nstat' ];

  public function index() {
    $this->Partner->recursive = -2;
    $this->set('partners', $this->Partner->find('all'));
  }

  public function view($id) {
    $dates = $this->NstatsImp->find(
      'all',
      [
        'conditions' => [
          'CoID' => $id,
        ],
        'fields' => ['DISTINCT datep'],
      ]
    );
    $this->set('dates', $dates);
    $this->set('id', $id);
  }

  public function report($id, $date) {
    $clicks = $this->Nstat->find(
      'all',
      [
        'conditions' => [
          'CoID' => $id,
          'datep' => $date,
        ],
      ]
    );

    $this->set('clicks', $clicks);
    $this->set('id', $id);
    $this->set('date', $date);
  }

  public function campaign($id, $date, $caid) {
    $report = $this->Nstat->find(
      'first',
      [
        'conditions' => [
          'CoID' => $id,
          'datep' => $date,
          'CaID' => $caid,
        ],
      ]
    );

    $this->set('report', $report);

    $yesterday = date('Y-m-d', (strtotime('-1 day', strtotime($date))));
    $previous = $this->Nstat->find(
      'first',
      [
        'conditions' => [
          'CoID' => $id,
          'datep' => $yesterday,
          'CaID' => $caid,
        ],
      ]
    );

    $this->set('previous', $previous);
  }

  public function all($id) {
    $campaigns = $this->NstatsImp->find(
      'all',
      [
        'conditions' => [
          'CoID' => $id,
        ],
        'fields' => [
          'DISTINCT CaID',
        ]
      ]
    );
    $this->set('campaigns', $campaigns);
    $this->set('id', $id);
  }

  public function analysis($id, $caid) {
    $campaign = $this->Nstat->find(
      'all',
      [
        'conditions' => [
          'CoID' => $id,
          'CaID' => $caid,
        ],
      ]
    );

    $avg = $this->Nstat->find(
      'all',
      [
        'conditions' => [
          'CoID' => $id,
          'CaID' => $caid,
        ],
        'fields' => [
          'AVG(numImps) as avg_imps',
          'AVG(numLeads) as avg_leads',
        ]
      ]
    );
    $this->set('campaign', $campaign);
    $this->set('avg', $avg);
  }

  public function build_partners() {
    $partners = $this->NstatsImp->find(
      'all',
      [
        'fields' => ['DISTINCT CoID']
      ]
    );

    foreach($partners as $partner) { $this->Partner->create();
      $this->Partner->id = $partner['NstatsImp']['CoID'];
      $this->Partner->save(['id' => $partner['NstatsImp']['CoID']]);
      $this->Partner->clear();
    }
  }

}
