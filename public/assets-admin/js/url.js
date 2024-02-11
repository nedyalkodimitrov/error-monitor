var baseUrl = 'http://127.0.0.1:8000';
var baseAdminUrl = baseUrl + '/admin';


var createApp = baseAdminUrl + '/api/app/create';
var editApp = baseAdminUrl + '/api/app/edit';
var deleteApp = baseAdminUrl + '/api/app/delete';

var baseAppUrl = baseAdminUrl + '/apps';
var editAppVersion = baseUrl + '/api/app/version/edit';
var deleteAppVersion = baseUrl + '/api/app/version/delete';



function generateCreateAppVersionUrl(appId) {
    return baseAppUrl + '/' + appId + '/version';
}

function generateAppVersionUrl(appId, versionId) {
    return generateCreateAppVersionUrl(appId) + '/' + versionId;
}

