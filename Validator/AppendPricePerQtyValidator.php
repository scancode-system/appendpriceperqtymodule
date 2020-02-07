<?php

namespace Modules\AppendPricePerQty\Validator; 


class AppendPricePerQtyValidator
{

	public function rule($data){
		$price_fields = $this->fieldsPriceQtyPrice($data);
		$price_qtys = $this->fieldsPriceQtyQty($data);


		$rules = [];
		foreach ($price_fields as $field) {
			$rules[$field] = 'numeric|min:0|regex:/^\d+(\.\d{1,2})?$/'; 
		}
		foreach ($price_qtys as $field) {
			$rules[$field] = 'integer|min:2'; 
		}

		return $rules;
	}

	public function filterRules($data)
	{
		$price_fields = $this->fieldsPriceQtyPrice($data);

		$filters = collect([]);
		foreach ($price_fields as $field) {
			$filters->push(['rule' => [$field => ['required', 'regex:/^(R\$)?( )?([1-9]{1}[\d]{0,2}(\.[\d]{3})*(\,[\d]{0,2})?|[1-9]{1}[\d]{0,}(\,[\d]{0,2})?|0(\,[\d]{0,2})?|(\,[\d]{1,2})?)$/']], 'filter' => 'currencyFormat']);
		}

		return $filters;
	}


	private function fieldsPriceQtyPrice($data){
		$fields = collect([]);
		foreach ($data as $field => $value) {
			if(preg_match('/\b(price_qty_price_\w*)\b/', $field)){
				$fields->push($field);
			}
		}
		return $fields;
	}

	private function fieldsPriceQtyQty($data){
		$fields = collect([]);
		foreach ($data as $field => $value) {
			if(preg_match('/\b(price_qty_qty_\w*)\b/', $field)){
				$fields->push($field);
			}
		}
		return $fields;
	}


}
