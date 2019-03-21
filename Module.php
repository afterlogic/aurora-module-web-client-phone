<?php
/**
 * This code is licensed under AGPLv3 license or AfterLogic Software License
 * if commercial version of the product was purchased.
 * For full statements of the licenses see LICENSE-AFTERLOGIC and LICENSE-AGPL3 files.
 */

namespace Aurora\Modules\PhoneWebclient;

/**
 * @license https://www.gnu.org/licenses/agpl-3.0.html AGPL-3.0
 * @license https://afterlogic.com/products/common-licensing AfterLogic Software License
 * @copyright Copyright (c) 2019, Afterlogic Corp.
 *
 * @package Modules
 */
class Module extends \Aurora\System\Module\AbstractWebclientModule
{
	/***** public functions might be called with web API *****/
	/**
	 * Obtains list of module settings for authenticated user.
	 * 
	 * @return array
	 */
	public function GetSettings()
	{
		\Aurora\System\Api::checkUserRoleIsAtLeast(\Aurora\System\Enums\UserRole::Anonymous);
		
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
