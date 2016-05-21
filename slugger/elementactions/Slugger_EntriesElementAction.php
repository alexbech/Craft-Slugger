<?php
namespace Craft;

class Slugger_EntriesElementAction extends BaseElementAction
{
    public function getName()
    {
        return Craft::t('Re-generate slugs');
    }

    public function isDestructive()
    {
        return true;
    }

    public function performAction(ElementCriteriaModel $criteria)
    {

        foreach ($criteria->find() as $element)
        {
          $element->slug = '';
          craft()->entries->saveEntry($element);
        }

        // Success!
        $this->setMessage( Craft::t('Slugs successfully re-generated.') );

        return true;
    }
}