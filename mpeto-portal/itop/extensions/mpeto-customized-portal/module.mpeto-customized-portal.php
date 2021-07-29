<?php
//
// iTop module definition file
//

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'mpeto-customized-portal/1.0.0',
	array(
		// Identification
		//
		'label' => 'MPETO - Customized Portal',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
			'itop-tickets/2.4.0',
			'itop-knownerror-mgmt/2.4.0',
			'itop-approval-portal/1.0.3',
			'itop-portal/2.4.0',
			'itop-portal-base/2.4.0',
			'request-module/1.0.0',
		),
		'mandatory' => false,
		'visible' => true,

		// Components
		//
		'datamodel' => array(
			'main.mpeto-customized-portal.php',
		),
		'webservice' => array(
			
		),
		'data.struct' => array(
			// add your 'structure' definition XML files here,
		),
		'data.sample' => array(
			// add your sample data XML files here,
		),
		
		// Documentation
		//
		'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
		'doc.more_information' => '', // hyperlink to more information, if any 

		// Default settings
		//
		'settings' => array(
			// Module specific settings go here, if any
		),
	)
);


?>
