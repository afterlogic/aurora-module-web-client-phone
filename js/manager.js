'use strict';

module.exports = function (oAppData) {
	require('modules/%ModuleName%/js/enums.js');

	var
		Browser = require('%PathToCoreWebclientModule%/js/Browser.js'),
		App = require('%PathToCoreWebclientModule%/js/App.js'),

		Settings = require('modules/%ModuleName%/js/Settings.js'),
		oSettings = oAppData['%ModuleName%'] || {}
	;
	
	Settings.init(oSettings);
	
	return {
		isAvailable: function (iUserRole, bPublic) {
			return !bPublic && iUserRole === Enums.UserRole.PowerUser;
		},
		getHeaderItem: function () {
			return (!Browser.ie && !App.isMobile()) ? {
				item: require('modules/%ModuleName%/js/views/PhoneView.js'),
				name: Settings.HashModuleName
			} : null;
		}
	};
};
