<?php
/**
 * adsense_BlockAdAction
 * @package modules.adsense.lib.blocks.lib.blocks
 */
class adsense_BlockAdAction extends website_BlockAction
{
	/**
	 * @see website_BlockAction::execute()
	 *
	 * @param f_mvc_Request $request
	 * @param f_mvc_Response $response
	 * @return String
	 */
	function execute($request, $response)
	{
		$code = $this->findParameterValue('code');
		if($code !== null)
		{
			$ad = adsense_AdService::getInstance()->getAdByCode($code);
		}
		else
		{
			$ad = $this->getDocumentParameter();
		}
		/**
		 * FIXME: je ne sais pas dans quel cas le test !$ad instanceof adsense_persistentdocument_ad est nécessaire? (dans le doute je le laisse...)
		 */
		if(!$ad instanceof adsense_persistentdocument_ad || !$ad->isPublished())
		{
			return website_BlockView::NONE;
		}

		$request->setAttribute('ad', $ad);
		if ($this->isInBackoffice())
		{
			return website_BlockView::BACKOFFICE;
		}
		return website_BlockView::SUCCESS;
	}
}