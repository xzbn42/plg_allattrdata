<?php
defined('_JEXEC') or die();

class plgJshoppingProductsAllattrdata extends JPlugin
{
	public function onJshopProductGetAttribValueAfter(&$product, &$attr_obj)
	{
		$attr_obj['query']=preg_replace("/V.image/", "V.image, PA.*", $attr_obj['query']);
		$attr_obj['query']=preg_replace("/WHERE/", "WHERE PA.count>0 AND ", $attr_obj['query']);
	}
}