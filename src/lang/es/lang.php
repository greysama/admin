<?php

return [
	'404'      => 'Pagina no encontrada.',
	'auth'     => [
		'title'          => 'Ingreso',
		'username'       => 'Usuario',
		'password'       => 'Contraseña',
		'login'          => 'Ingresar',
		'logout'         => 'Salir',
		'wrong-username' => 'Usuario Incorrecto',
		'wrong-password' => 'o Contraseña Incorrecta'
	],
	'ckeditor' => [
		'upload'        => [
			'success' => 'File was uploaded: \\n- Size: :size kb \\n- width/height: :width x :height',
			'error'   => [
				'common'              => 'Unable to upload the file.',
				'wrong_extension'     => 'File ":file" has wrong extension.',
				'filesize_limit'      => 'Maximum allowed file size is :size kb.',
				'imagesize_max_limit' => 'Width x Height = :width x :height \\n The maximum Width x Height must be: :maxwidth x :maxheight',
				'imagesize_min_limit' => 'Width x Height = :width x :height \\n The minimum Width x Height must be: :minwidth x :minheight',
			]
		],
		'image_browser' => [
			'title'    => 'Insert image from server',
			'subtitle' => 'Choose image to insert',
		],
	],
	'table'    => [
		'new-entry'      => 'Nueva Entrada',
		'edit'           => 'Editar',
		'delete'         => 'Borrar',
		'delete-confirm' => 'Esta seguro que desea borrar esta entrada?',
		'delete-error'   => 'Error borrando la entrada. Recuerde borrar todas las entradas relacionadas primero.',
		'moveUp'         => 'Subir',
		'moveDown'       => 'Bajar',
		'filter'         => 'Mostrar entradas similares',
		'filter-goto'    => 'Mostrar',
		'save'           => 'Guardar',
		'cancel'         => 'Cancelar',
		'download'       => 'Descarga',
		'all'            => 'Todo',
		'processing'     => '<i class="fa fa-5x fa-circle-o-notch fa-spin"></i>',
		'loadingRecords' => 'Cargando...',
		'lengthMenu'     => 'Mostrar _MENU_ entradas',
		'zeroRecords'    => 'No se encontraron coincidencias.',
		'info'           => 'Mostrando _START_ a _END_ de _TOTAL_ entradas',
		'infoEmpty'      => 'Mostrando 0 a 0 de 0 entradas',
		'infoFiltered'   => '(filtradas de _MAX_ entradas)',
		'infoThousands'  => ',',
		'infoPostFix'    => '',
		'search'         => 'Buscar: ',
		'emptyTable'     => 'No se pudo encontrar informacion en sistema',
		'paginate'       => [
			'first'    => 'Primero',
			'previous' => '&larr;',
			'next'     => '&rarr;',
			'last'     => 'Último'
		]
	],
	'select'   => [
		'nothing'  => 'Nada seleccionado',
		'selected' => 'seleccionado'
	]
];