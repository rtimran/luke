<?php
/* File autogenerated by SugarCRM in ActivitesRelationship.php / buildSidecarDashletMeta */

$coreDefs = MetaDataFiles::loadSingleClientMetadata('view','history');
$coreDefs['dashlets'][0]['filter']['module'] = array('m_CAMS');
$coreDefs['tabs'][0]['link'] = 'm_cams_activities_1_meetings';
$coreDefs['tabs'][1]['link'] = 'm_cams_activities_1_emails';
$coreDefs['tabs'][2]['link'] = 'm_cams_activities_1_calls';
$coreDefs['custom_toolbar']['buttons'][0]['buttons'][0]['params']['link'] = 'm_cams_activities_1_emails';
$viewdefs['m_CAMS']['base']['view']['history'] = $coreDefs;
