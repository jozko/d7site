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
 * Generated from xml/schema/CRM/Contact/Group.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:f0c0283dd397c06e320397ca98628184)
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
/**
 * CRM_Contact_DAO_Group constructor.
 */
class CRM_Contact_DAO_Group extends CRM_Core_DAO {
  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_group';
  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var boolean
   */
  static $_log = true;
  /**
   * Group ID
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Internal name of Group.
   *
   * @var string
   */
  public $name;
  /**
   * Name of Group.
   *
   * @var string
   */
  public $title;
  /**
   * Optional verbose description of the group.
   *
   * @var text
   */
  public $description;
  /**
   * Module or process which created this group.
   *
   * @var string
   */
  public $source;
  /**
   * FK to saved search table.
   *
   * @var int unsigned
   */
  public $saved_search_id;
  /**
   * Is this entry active?
   *
   * @var boolean
   */
  public $is_active;
  /**
   * In what context(s) is this field visible.
   *
   * @var string
   */
  public $visibility;
  /**
   * the sql where clause if a saved search acl
   *
   * @var text
   */
  public $where_clause;
  /**
   * the tables to be included in a select data
   *
   * @var text
   */
  public $select_tables;
  /**
   * the tables to be included in the count statement
   *
   * @var text
   */
  public $where_tables;
  /**
   * FK to group type
   *
   * @var string
   */
  public $group_type;
  /**
   * Date when we created the cache for a smart group
   *
   * @var timestamp
   */
  public $cache_date;
  /**
   * Date and time when we need to refresh the cache next.
   *
   * @var timestamp
   */
  public $refresh_date;
  /**
   * IDs of the parent(s)
   *
   * @var text
   */
  public $parents;
  /**
   * IDs of the child(ren)
   *
   * @var text
   */
  public $children;
  /**
   * Is this group hidden?
   *
   * @var boolean
   */
  public $is_hidden;
  /**
   *
   * @var boolean
   */
  public $is_reserved;
  /**
   * FK to contact table.
   *
   * @var int unsigned
   */
  public $created_id;
  /**
   * FK to contact table.
   *
   * @var int unsigned
   */
  public $modified_id;
  /**
   * Class constructor.
   */
  function __construct() {
    $this->__table = 'civicrm_group';
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'saved_search_id', 'civicrm_saved_search', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'created_id', 'civicrm_contact', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'modified_id', 'civicrm_contact', 'id');
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
          'title' => ts('Group ID') ,
          'description' => 'Group ID',
          'required' => true,
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
        ) ,
        'name' => array(
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Group Name') ,
          'description' => 'Internal name of Group.',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
        ) ,
        'title' => array(
          'name' => 'title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Group Title') ,
          'description' => 'Name of Group.',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
        ) ,
        'description' => array(
          'name' => 'description',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Group Description') ,
          'description' => 'Optional verbose description of the group.',
          'rows' => 2,
          'cols' => 60,
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
          'html' => array(
            'type' => 'TextArea',
          ) ,
        ) ,
        'source' => array(
          'name' => 'source',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Group Source') ,
          'description' => 'Module or process which created this group.',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
        ) ,
        'saved_search_id' => array(
          'name' => 'saved_search_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Saved Search ID') ,
          'description' => 'FK to saved search table.',
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
          'FKClassName' => 'CRM_Contact_DAO_SavedSearch',
        ) ,
        'is_active' => array(
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Group Enabled') ,
          'description' => 'Is this entry active?',
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
        ) ,
        'visibility' => array(
          'name' => 'visibility',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Group Visibility Setting') ,
          'description' => 'In what context(s) is this field visible.',
          'maxlength' => 24,
          'size' => CRM_Utils_Type::MEDIUM,
          'default' => 'User and User Admin Only',
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'callback' => 'CRM_Core_SelectValues::groupVisibility',
          )
        ) ,
        'where_clause' => array(
          'name' => 'where_clause',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Group Where Clause') ,
          'description' => 'the sql where clause if a saved search acl',
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
        ) ,
        'select_tables' => array(
          'name' => 'select_tables',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Tables For Select Clause') ,
          'description' => 'the tables to be included in a select data',
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
        ) ,
        'where_tables' => array(
          'name' => 'where_tables',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Tables For Where Clause') ,
          'description' => 'the tables to be included in the count statement',
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
        ) ,
        'group_type' => array(
          'name' => 'group_type',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Group Type') ,
          'description' => 'FK to group type',
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
          'pseudoconstant' => array(
            'optionGroupName' => 'group_type',
            'optionEditPath' => 'civicrm/admin/options/group_type',
          )
        ) ,
        'cache_date' => array(
          'name' => 'cache_date',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => ts('Group Cache Date') ,
          'description' => 'Date when we created the cache for a smart group',
          'required' => false,
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
        ) ,
        'refresh_date' => array(
          'name' => 'refresh_date',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => ts('Next Group Refresh Time') ,
          'description' => 'Date and time when we need to refresh the cache next.',
          'required' => false,
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
        ) ,
        'parents' => array(
          'name' => 'parents',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Group Parents') ,
          'description' => 'IDs of the parent(s)',
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
        ) ,
        'children' => array(
          'name' => 'children',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Group Children') ,
          'description' => 'IDs of the child(ren)',
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
        ) ,
        'is_hidden' => array(
          'name' => 'is_hidden',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Group is Hidden') ,
          'description' => 'Is this group hidden?',
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
        ) ,
        'is_reserved' => array(
          'name' => 'is_reserved',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Group is Reserved') ,
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
        ) ,
        'created_id' => array(
          'name' => 'created_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Group Created By') ,
          'description' => 'FK to contact table.',
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ) ,
        'modified_id' => array(
          'name' => 'modified_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Group Modified By') ,
          'description' => 'FK to contact table.',
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
          'FKClassName' => 'CRM_Contact_DAO_Contact',
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
    return CRM_Core_DAO::getLocaleTableName(self::$_tableName);
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'group', $prefix, array());
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'group', $prefix, array());
    return $r;
  }
}
