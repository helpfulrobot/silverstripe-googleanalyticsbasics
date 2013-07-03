<?php

class GoogleAnalyticsSTE extends SiteTreeExtension {

	private static $main_code;

	private static $site_name;

	function GAMainCode() {
		if(Director::isLive()) {
			return Config::inst()->get("GoogleAnalyticsSTE", "main_code");
		}
	}

	function GAMainSite() {
		if(Director::isLive()) {
			return Config::inst()->get("GoogleAnalyticsSTE", "site_name");
		}
	}


}
