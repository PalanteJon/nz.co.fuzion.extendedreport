<?php

/**
 * Class CRM_Extendedreport_Form_Report_Contact_Extendedcontact.
 *
 * This class generates a pivot report - due to _customGroupAggregates being set
 * to true based on the civicrm_contact table.
 */
class CRM_Extendedreport_Form_Report_Contact_Extendedcontact extends CRM_Extendedreport_Form_Report_ExtendedReport {
  protected $_baseTable = 'civicrm_contact';
  protected $skipACL = TRUE;
  protected $_customGroupAggregates = TRUE;
  protected $isPivot = TRUE;
  protected $_noFields = TRUE;


  /**
   * Class constructor.
   */
  public function __construct() {
    $this->_columns = $this->getColumns('Contact', [
        'fields' => FALSE,
        'order_by' => FALSE,
      ]
    );
    $this->_columns['civicrm_contact']['fields']['id']['required'] = TRUE;
    $this->_aggregateColumnHeaderFields = [
      'civicrm_contact:gender_id' => 'Gender',
    ];
    $this->_aggregateRowFields = [
      'civicrm_contact:gender_id' => 'Gender',
    ];
    parent::__construct();
  }
}
