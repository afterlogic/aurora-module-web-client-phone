'use strict';

var Ajax = require('%PathToCoreWebclientModule%/js/Ajax.js');

module.exports = {
	send: function (sMethod, oParameters, fResponseHandler, oContext) {
		Ajax.send('Twilio', sMethod, oParameters, fResponseHandler, oContext);
	}
};