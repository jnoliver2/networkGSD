<?php

global $project;
$project = 'mysite';

global $databaseConfig;
$databaseConfig = array(
	"type" => 'MySQLDatabase',
	"server" => 'localhost',
	"username" => 'gatewayd_db',
	"password" => 'qC76T8R!3UF)',
	"database" => 'gatewayd_db',
	"path" => '',
);

// Set the site locale
i18n::set_locale('en_US');
Director::set_environment_type('dev');
Member::add_extension('Member_Extension');
