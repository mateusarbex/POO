<?php

class Container {
	public static function getBanco(){
		return new Banco('localhost', 'bd_loja', 'root', '');
	}
}