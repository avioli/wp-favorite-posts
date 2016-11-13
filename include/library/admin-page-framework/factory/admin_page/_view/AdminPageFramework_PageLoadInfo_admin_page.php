<?php 
/**
	Admin Page Framework v3.8.10 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/wp-favorite-posts>
	Copyright (c) 2013-2016, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
class WPFavoritePostsAdminPageFramework_PageLoadInfo_admin_page extends WPFavoritePostsAdminPageFramework_PageLoadInfo_Base {
    private static $_oInstance;
    private static $aClassNames = array();
    public static function instantiate($oProp, $oMsg) {
        if (in_array($oProp->sClassName, self::$aClassNames)) {
            return self::$_oInstance;
        }
        self::$aClassNames[] = $oProp->sClassName;
        self::$_oInstance = new WPFavoritePostsAdminPageFramework_PageLoadInfo_admin_page($oProp, $oMsg);
        return self::$_oInstance;
    }
    public function _replyToSetPageLoadInfoInFooter() {
        if ($this->oProp->isPageAdded()) {
            add_filter('update_footer', array($this, '_replyToGetPageLoadInfo'), 999);
        }
    }
}
