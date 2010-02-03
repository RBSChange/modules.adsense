<?php
// change:adsense (tag replacer)
//
//   <div change:adsense="code <value>" />

class PHPTAL_Php_Attribute_CHANGE_adsense extends ChangeTalAttribute
{
	protected function getEvaluatedParameters()
	{
		return array('code');
	}

	public function renderAdsense($params, $context)
	{
		$ad = adsense_AdService::getInstance()->getAdByCode($params['code']);
		if($ad !== null)
		{
			echo $ad->getScript();
		}
	}
}
