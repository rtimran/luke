<?php
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

$dictionary['rt_GSync'] = array(
    'table' => 'rt_gsync',
    'audited' => true,
    'duplicate_merge' => true,
    'fields' => array(
        'calendar_google' =>
            array(
                'readonly' => true,
                'required' => false,
                'name' => 'calendar_google',
                'vname' => 'LBL_CALENDAR_GOOGLE',
                'type' => 'bool',
                'massupdate' => 0,
                'default' => '1',
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'calculated' => false,
                'len' => '255',
                'size' => '20',
            ),
        'calendar_sugar' =>
            array(
                'readonly' => true,
                'required' => false,
                'name' => 'calendar_sugar',
                'vname' => 'LBL_CALENDAR_SUGAR',
                'type' => 'bool',
                'massupdate' => 0,
                'default' => '1',
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'calculated' => false,
                'len' => '255',
                'size' => '20',
            ),
        'calendar_meetings' =>
            array(
                'readonly' => true,
                'required' => false,
                'name' => 'calendar_meetings',
                'vname' => 'LBL_CALENDAR_MEETINGS',
                'type' => 'bool',
                'massupdate' => 0,
                'default' => '1',
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'calculated' => false,
                'len' => '255',
                'size' => '20',
            ),
        'calendar_calls' =>
            array(
                'required' => false,
                'name' => 'calendar_calls',
                'vname' => 'LBL_CALENDAR_CALLS',
                'type' => 'bool',
                'massupdate' => 0,
                'default' => '1',
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'calculated' => false,
                'len' => '255',
                'size' => '20',
            ),
        'calendar_tasks' =>
            array(
                'required' => false,
                'name' => 'calendar_tasks',
                'vname' => 'LBL_CALENDAR_TASKS',
                'type' => 'bool',
                'massupdate' => 0,
                'default' => '1',
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'calculated' => false,
                'len' => '255',
                'size' => '20',
            ),
        'contacts_google' =>
            array(
                'required' => false,
                'name' => 'contacts_google',
                'vname' => 'LBL_CONTACTS_GOOGLE',
                'type' => 'bool',
                'massupdate' => 0,
                'default' => '0',
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'calculated' => false,
                'len' => '255',
                'size' => '20',
            ),
        'contacts_sugar' =>
            array(
                'required' => false,
                'name' => 'contacts_sugar',
                'vname' => 'LBL_CONTACTS_SUGAR',
                'type' => 'bool',
                'massupdate' => 0,
                'default' => '1',
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'calculated' => false,
                'len' => '255',
                'size' => '20',
            ),
        'documents_google' =>
            array(
                'required' => false,
                'name' => 'documents_google',
                'vname' => 'LBL_DOCUMENTS_GOOGLE',
                'type' => 'bool',
                'massupdate' => 0,
                'default' => '1',
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'calculated' => false,
                'len' => '255',
                'size' => '20',
            ),
        'documents_sugar' =>
            array(
                'required' => false,
                'name' => 'documents_sugar',
                'vname' => 'LBL_DOCUMENTS_SUGAR',
                'type' => 'bool',
                'massupdate' => 0,
                'default' => '1',
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'calculated' => false,
                'len' => '255',
                'size' => '20',
            ),
        'activate_calendar' =>
            array(
                'required' => false,
                'name' => 'activate_calendar',
                'vname' => 'LBL_ACTIVATE_JOB',
                'type' => 'bool',
                'massupdate' => 0,
                'default' => '1',
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'calculated' => false,
                'len' => '255',
                'size' => '20',
            ),
        'activate_contacts' =>
            array(
                'required' => false,
                'name' => 'activate_contacts',
                'vname' => 'LBL_ACTIVATE_JOB',
                'type' => 'bool',
                'massupdate' => 0,
                'default' => '1',
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'calculated' => false,
                'len' => '255',
                'size' => '20',
            ),
        'activate_documents' =>
            array(
                'required' => false,
                'name' => 'activate_documents',
                'vname' => 'LBL_ACTIVATE_JOB',
                'type' => 'bool',
                'massupdate' => 0,
                'default' => '1',
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'calculated' => false,
                'len' => '255',
                'size' => '20',
            ),
        'activate_archive_emails' =>
            array(
                'required' => false,
                'name' => 'activate_archive_emails',
                'vname' => 'LBL_ACTIVATE_JOB',
                'type' => 'bool',
                'massupdate' => 0,
                'default' => '1',
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'calculated' => false,
                'len' => '255',
                'size' => '20',
            ),
    ),
    'relationships' => array(),
    'optimistic_locking' => true,
    'unified_search' => true,
);
if (!class_exists('VardefManager')) {
    require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('rt_GSync', 'rt_GSync', array('basic', 'team_security', 'assignable'));