<?php

return array(
	'label' => array(
		'de' => array(
			'Crewie',
			'Daten für ein Crew Member',
		),
	),
	'types' => array('content'),
	'contentCategory' => 'texts',
	'standardFields' => array('headline', 'cssID'),
	'fields' => array(
		'image' => array(
			'label' => array(
				'de' => array('Profilbild', ''),
			),
			'inputType' => 'fileTree',
			'eval' => array(
				'fieldType' => 'radio',
				'path' => 'files/content/crew',
				'filesOnly' => true,
				'extensions' => 'jpg,jpeg,png,gif,svg',
			),
		),
		'overlay' => array(
			'label' => array(
				'de' => array('Profilbild overlay', ''),
			),
			'inputType' => 'fileTree',
			'eval' => array(
				'fieldType' => 'radio',
				'path' => 'files/content/crew',
				'filesOnly' => true,
				'extensions' => 'jpg,jpeg,png,gif,svg',
			),
		),
		'name' => array(
			'label' => array(
				'de' => array('Name', 'Crewie Name'),
			),
			'inputType' => 'text',
			'eval' => array('tl_class' => 'w50'),
		),
		'email' => array(
			'label' => array(
				'de' => array('E-Mail', 'E-Mail'),
			),
			'inputType' => 'text',
			'eval' => array('tl_class' => 'w50'),
		),
		'text' => array(
			'label' => array('Text', 'Hilfetext...'),
			'inputType' => 'standardField',
			'eval' => array(
				'mandatory' => false,
			),
		),
	),
);
