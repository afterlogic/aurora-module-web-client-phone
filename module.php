<?php

class PhoneWebclientModule extends AApiModule
{
	/***** public functions might be called with web API *****/
	/**
	 * Obtaines list of module settings for authenticated user.
	 * 
	 * @return array
	 */
	public function GetSettings()
	{
		\CApi::checkUserRoleIsAtLeast(\EUserRole::Anonymous);
		
		return array(
			'SipImpi' => '102', // AppData.User.SipImpi
			'SipOutboundProxyUrl' => '', // AppData.User.SipOutboundProxyUrl
			'SipPassword' => 'user02', // AppData.User.SipPassword
			'SipRealm' => '192.168.0.59', // AppData.User.SipRealm
			'SipWebsocketProxyUrl' => 'ws://192.168.0.59:8088/ws', // AppData.User.SipWebsocketProxyUrl
			'VoiceProvider' => '' // AppData.User.VoiceProvider
		);
	}
	/***** public functions might be called with web API *****/
}
