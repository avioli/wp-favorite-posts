<?php 
/**
	Admin Page Framework v3.8.10 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/wp-favorite-posts>
	Copyright (c) 2013-2016, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
class WPFavoritePostsAdminPageFramework_Link_network_admin_page extends WPFavoritePostsAdminPageFramework_Link_admin_page {
    public function __construct($oProp, $oMsg = null) {
        parent::__construct($oProp, $oMsg);
        if ($this->_shouldSetPluginActionLinks()) {
            remove_filter('plugin_action_links_' . plugin_basename($this->oProp->aScriptInfo['sPath']), array($this, '_replyToAddSettingsLinkInPluginListingPage'), 20);
            add_filter('network_admin_plugin_action_links_' . plugin_basename($this->oProp->aScriptInfo['sPath']), array($this, '_replyToAddSettingsLinkInPluginListingPage'));
        }
    }
    protected $_sFilterSuffix_PluginActionLinks = 'network_admin_plugin_action_links_';
}
