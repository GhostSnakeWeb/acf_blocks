<?php

$template = [
	[
		'core/group',
		[
			"className" => "aw-table-wrapper"
		],
		[
			[
				'core/table'
			]
		]
	],
	[
		'acf/table-in-hero-button',
	]
];

echo '<InnerBlocks template="' . esc_attr( wp_json_encode( $template ) ) . '" />';