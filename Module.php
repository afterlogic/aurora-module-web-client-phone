<?php
/**
 * @copyright Copyright (c) 2017, Afterlogic Corp.
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program. If not, see <http://www.gnu.org/licenses/>
 */

namespace Aurora\Modules\PhoneWebclient;

/**
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
		\Aurora\System\Api::checkUserRoleIsAtLeast(\EUserRole::Anonymous);
		
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
