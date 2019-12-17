<?php

namespace Modules\AppendPricePerQty\Services;


class AppendPricePerQtyService {
	
	public function fields(){
		return config('appendpriceperqty.fields');
	}

	public function sample(){
		return config('appendpriceperqty.sample');
	}

}
