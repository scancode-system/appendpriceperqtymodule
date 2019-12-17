<?php

return [
    'name' => 'AppendPricePerQty', 
	'fields' => [],
	'sample' => [
		[
			'name' => 'price_qty_*',
			'observation' => 'Preço promocional de acordo com a quantidade solicitada. Para configurar a quantidade troque o asterisco por um valor inteiro númerico. Caso queira adicionar mais preços promocionais criar uma nova coluna, com o mesmo titulo, mas com quantidade (*) diferente.',
			'sample_1' => '10',
			'filled' => false
		]
	]
];
