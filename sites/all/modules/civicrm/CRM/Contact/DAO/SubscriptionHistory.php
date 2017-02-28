<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.7                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2017                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2017
 *
 * Generated from xml/schema/CRM/Contact/SubscriptionHistory.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:ec4a81f7d1a8999051ec7292f499b4c1)
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
/**
 * CRM_Contact_DAO_SubscriptionHistory constructor.
 */
class CRM_Contact_DAO_SubscriptionHistory extends CRM_Core_DAO {
  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_subscription_history';
  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var boolean
   */
  static $_log = true;
  /**
   * Internal Id
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Contact Id
   *
   * @var int unsigned
   */
  public $contact_id;
  /**
   * Group Id
   *
   * @var int unsigned
   */
  public $group_id;
  /**
   * Date of the (un)subscription
   *
   * @var datetime
   */
  public $date;
  /**
   * How the (un)subscription was triggered
   *
   * @var string
   */
  public $method;
  /**
   * The state of the contact within the group
   *
   * @var string
   */
  public $status;
  /**
   * IP address or other tracking info
   *
   * @var string
   */
  public $tracking;
  /**
   * Class constructor.
   */
  function __construct() {
    $this->__table = 'civicrm_subscription_history';
    parent::__construct();
  }
  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static ::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'contact_id', 'civicrm_contact', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'group_id', 'civicrm_group', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Group Membership History ID') ,
          'description' => 'Internal Id',
          'required' => true,
          'table_name' => 'civicrm_subscription_history',
          'entity' => 'SubscriptionHistory',
          'bao' => 'CRM_Contact_BAO_SubscriptionHistory',
        ) ,
        'contact_id' => array(
          'name' => 'contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Contact ID') ,
          'description' => 'Contact Id',
          'required' => true,
          'table_name' => 'civicrm_subscription_history',
          'entity' => 'SubscriptionHistory',
          'bao' => 'CRM_Contact_BAO_SubscriptionHistory',
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ) ,
        'group_id' => array(
          'name' => 'group_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Group') ,
          'description' => 'Group Id',
          'table_name' => 'civicrm_subscription_history',
          'entity' => 'SubscriptionHistory',
          'bao' => 'CRM_Contact_BAO_SubscriptionHistory',
          'FKClassName' => 'CRM_Contact_DAO_Group',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'table' => 'civicrm_group',
            'keyColumn' => 'id',
            'labelColumn' => 'title',
          )
        ) ,
        'date' => array(
          'name' => 'date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Group Membership Action Date') ,
          'description' => 'Date of the (un)subscription',
          'required' => true,
          'table_name' => 'civicrm_subscription_history',
          'entity' => 'SubscriptionHistory',
          'bao' => 'CRM_Contact_BAO_SubscriptionHistory',
        ) ,
        'method' => array(
          'name' => 'method',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Group Membership Action') ,
          'description' => 'How the (un)subscription was triggered',
          'maxlength' => 8,
          'size' => CRM_Utils_Type::EIGHT,
          'table_name' => 'civicrm_subscription_history',
          'entity' => 'SubscriptionHistory',
          'bao' => 'CRM_Contact_BAO_SubscriptionHistory',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'callback' => 'CRM_Core_SelectValues::getSubscriptionHistoryMethods',
          )
        ) ,
        'status' => array(
          'name' => 'status',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Group Membership Status') ,
          'description' => 'The state of the contact within the group',
          'maxlength' => 8,
          'size' => CRM_Utils_Type::EIGHT,
          'table_name' => 'civicrm_subscription_history',
          'entity' => 'SubscriptionHistory',
          'bao' => 'CRM_Contact_BAO_SubscriptionHistory',
          'pseudoconstant' => array(
            'callback' => 'CRM_Core_SelectValues::groupContactStatus',
          )
        ) ,
        'tracking' => array(
          'name' => 'tracking',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Group Membership Tracking') ,
          'description' => 'IP address or other tracking info',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_subscription_history',
          'entity' => 'SubscriptionHistory',
          'bao' => 'CRM_Contact_BAO_SubscriptionHistory',
        ) ,
      );
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }
  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }
  /**
   * Returns the names of this table
   *
   * @return string
   */
  static function getTableName() {
    return self::$_tableName;
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog() {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'subscription_history', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'subscription_history', $prefix, array());
    return $r;
  }
}
