<?php
namespace Craft;

class Slugger_CategoriesElementAction extends BaseElementAction
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

        foreach ($criteria->find() as $category)
        {
          $category->slug = '';
          craft()->categories->saveCategory($category);
        }

        // Success!
        $this->setMessage( Craft::t('Slugs successfully re-generated.') );

        return true;
    }
}