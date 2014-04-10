<?php

class ProductAdmin extends ModelAdmin {

	public static $managed_models = array(
		'ProductPage',
        'Order',
		'OptionGroup',
		'OptionItem',
		'ProductCategory'
	);
	
	static $url_segment = 'products';
	
	static $menu_title = 'Products';
	
}