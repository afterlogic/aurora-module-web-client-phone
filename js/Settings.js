'use strict';

var
	_ = require('underscore'),
	
	Types = require('%PathToCoreWebclientModule%/js/utils/Types.js')
;

module.exports = {
	SipImpi: '102',
	SipOutboundProxyUrl: '',
	SipPassword: 'user02',
	SipRealm: '192.168.0.59',
	SipWebsocketProxyUrl: 'ws://192.168.0.59:8088/ws',
	VoiceProvider: '',
	
	/**
	 * Initializes settings from AppData object sections.
	 * 
	 * @param {Object} oAppData Object contained modules settings.
	 */
	init: function (oAppData)
	{
		var oAppDataSection = oAppData['%ModuleName%'];
		
		if (!_.isEmpty(oAppDataSection))
		{
			this.SipImpi = Types.pString(oAppDataSection.SipImpi, this.SipImpi);
			this.SipOutboundProxyUrl = Types.pString(oAppDataSection.SipOutboundProxyUrl, this.SipOutboundProxyUrl);
			this.SipPassword = Types.pString(oAppDataSection.SipPassword, this.SipPassword);
			this.SipRealm = Types.pString(oAppDataSection.SipRealm, this.SipRealm);
			this.SipWebsocketProxyUrl = Types.pString(oAppDataSection.SipWebsocketProxyUrl, this.SipWebsocketProxyUrl);
			this.VoiceProvider = Types.pString(oAppDataSection.VoiceProvider, this.VoiceProvider);
		}
	}
};
