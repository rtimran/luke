<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

/* @var array $params here */
require __DIR__ . '/parameters.php';

$config['db']['db.options'] = [
    'driver' => $params['db_driver'],
    'host' => $params['db_host'],
    'port' => $params['db_port'],
    'dbname' => $params['db_name'],
    'user' => $params['db_user'],
    'password' => $params['db_password'],
    'charset' => $params['db_charset'],
];

$config['logdir'] = $params['logdir'];

$config['passwordHash'] = isset($params['passwordHash']) ? $params['passwordHash'] : [];

$config['ldap'] = $params['ldap'];

$config['saml'] = $params['saml'];

$config['monolog'] = $params['monolog'];
