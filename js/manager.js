'use strict';

module.exports = function (oAppData) {
	var App = require('%PathToCoreWebclientModule%/js/App.js');
	
	if (App.getUserRole() === Enums.UserRole.NormalUser)
	{
		require('modules/%ModuleName%/js/enums.js');

		var
			Browser = require('%PathToCoreWebclientModule%/js/Browser.js'),
			App = require('%PathToCoreWebclientModule%/js/App.js'),

			Settings = require('modules/%ModuleName%/js/Settings.js'),
			oSettings = oAppData['%ModuleName%'] || {}
		;

		Settings.init(oSettings);

		return {
			getHeaderItem: function () {
				return (!Browser.ie && !App.isMobile()) ? {
					item: require('modules/%ModuleName%/js/views/PhoneView.js'),
					name: Settings.HashModuleName
				} : null;
			}
		};
	}
	
	return null;
};
