<?php

namespace {

    use SilverStripe\CMS\Model\SiteTree;

    class Page extends SiteTree
    {
        private static $db = [];

        private static $has_one = [];
        
        public $alo = "RENE";

        public function getMuppet($xx) 
        {
            $xx = $xx * 15;
            return "Rene " . rand(0,10);
        }
    }
}
