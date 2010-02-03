<?php
/**
 * adsense_AdScriptDocumentElement
 * @package modules.adsense.persistentdocument.import
 */
class adsense_AdScriptDocumentElement extends import_ScriptDocumentElement
{
    /**
     * @return adsense_persistentdocument_ad
     */
    protected function initPersistentDocument()
    {
    	return adsense_AdService::getInstance()->getNewDocumentInstance();
    }
    
    /**
	 * @return f_persistentdocument_PersistentDocumentModel
	 */
	protected function getDocumentModel()
	{
		return f_persistentdocument_PersistentDocumentModel::getInstanceFromDocumentModelName('modules_adsense/ad');
	}
}