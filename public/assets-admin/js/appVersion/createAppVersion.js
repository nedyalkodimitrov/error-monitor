$('#addAppVersionForm').submit(function (e) {
    e.preventDefault();
    createAppVersion();
});


function createAppVersion() {
    let form = document.getElementById("addAppVersionForm");
    let formData = new FormData(form);
    let version = $("#appVersion").val();
    let appId = $("#appId").val();
    formData.append("appId", appId);
    formData.append("version", version);

    let url =  generateCreateAppVersionUrl(appId);
    let method = "POST";

    var result = ajaxRequest (method,url, formData);
    console.log(result);

    $("#appVersionContainer").append(
        ' <li class="list-group-item list-group-item-action"><a href=>' + result.version + '</a></li>'
    );


}


