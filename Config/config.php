<?php

return [
	'name' => 'AppendPricePerQty', 
	'fields' => [],
	'sample' => [
		[
			'name' => 'price_qty_price_*',
			'observation' => 'Coluna com o preço alternativo que irá variar de acordo com a quantidade. Substituir o asterisco por um valor numerico qualquer que seja compatível com alguma coluna "price_qty_qty_*".',
			'sample_1' => '10',
			'filled' => false
		],
		[
			'name' => 'price_qty_qty_*',
			'observation' => 'Coluna com a quantidade necessária para que o preço promocional seja aplicado.',
			'sample_1' => '2',
			'filled' => false
		]
	]
];
