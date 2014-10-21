<?php
App::uses('AppModel', 'Model');
class Partner extends AppModel {

  public $hasMany = [
    'NstatsImp' => [
      'foreignKey' => 'CoID',
    ],
    'NstatsLead' => [
      'foreignKey' => 'CoID',
    ],
  ];
}

