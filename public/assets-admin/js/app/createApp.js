$('#createVersionBtn').on("click",function (e) {
    let form = document.getElementById("addAppVersionForm");
    let formData = new FormData(form);

    let url = generateCreateAppVersionUrl(formData.get("appId"));
    let method = "POST";

    var result = ajaxRequest(url, method, formData);

    $("#appVersionContainer").append(
        ' <li class="list-group-item list-group-item-action"><a href=>' + msg.version + '</a></li>'
    );

});


