<?php
/**
 * Slugger plugin for Craft CMS
 *
 * Regenerate slugs for selected entries
 *
 * @author    Alexander Bech
 * @copyright Copyright (c) 2016 Alexander Bech
 * @link      http://vaersaagod.no
 * @package   Slugger
 * @since     1.0.0
 */

namespace Craft;

class SluggerPlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init()
    {
    }

    /**
     * @return mixed
     */
    public function getName()
    {
         return Craft::t('Slugger');
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return Craft::t('Regenerate slugs for selected entries and categories');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl()
    {
        return 'https://github.com/alexbech/Craft-Slugger/blob/master/README.md';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/alexbech/Craft-Slugger/master/releases.json';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getDeveloper()
    {
        return 'Alexander Bech';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'http://vaersaagod.no';
    }

    /**
     * @return bool
     */
    public function hasCpSection()
    {
        return false;
    }

    /**
     * Adds entry action for re-genearting slugs
     * 
     * @return array
     */
    public function addEntryActions()
    {
      $actions = array();
      if( craft()->userSession->isAdmin() )
      {
        $actions[] = craft()->elements->getAction('Slugger_Entries');
      }

      return $actions;
    }

    /**
     * Adds category action for re-genearting slugs
     * 
     * @return array
     */
    public function addCategoryActions()
    {
      $actions = array();
      if( craft()->userSession->isAdmin() )
      {
        $actions[] = craft()->elements->getAction('Slugger_Categories');
      }

      return $actions;
    }
}