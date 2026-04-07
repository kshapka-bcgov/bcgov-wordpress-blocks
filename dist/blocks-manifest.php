<?php
// This file is generated. Do not modify it manually.
return array(
	'sample-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'bcgov-wordpress-blocks/sample-block',
		'version' => '0.0.1',
		'title' => 'Sample Block',
		'category' => 'widgets',
		'icon' => 'media-document',
		'description' => 'Plugin containing blocks intended to be used with the Design System WordPress Theme suite of products.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false,
			'align' => array(
				'wide',
				'full'
			),
			'anchor' => true,
			'color' => array(
				'text' => true,
				'background' => true,
				'gradients' => false
			),
			'typography' => array(
				'fontSize' => true
			),
			'spacing' => array(
				'padding' => true,
				'margin' => true
			)
		),
		'textdomain' => 'bcgov-wordpress-blocks',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js'
	)
);
