<?php
 // created: 2017-09-19 11:48:09
$layout_defs["Cases"]["subpanel_setup"]['cases_mv_srvreq_1'] = array (
  'order' => 100,
  'module' => 'mv_SrvReq',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CASES_MV_SRVREQ_1_FROM_MV_SRVREQ_TITLE',
  'get_subpanel_data' => 'cases_mv_srvreq_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
