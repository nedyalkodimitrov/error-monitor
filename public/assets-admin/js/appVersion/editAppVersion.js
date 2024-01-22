$('#editAppVersionForm').submit(function (e) {
    e.preventDefault();
    let formData = new FormData(e.target);

    console.log(
        formData.get('appVersion'));

    let appId = $("#appId").val();
    let appVersionId = $("#versionId").val();

    let result =  $.ajax({
        method: 'POST',
        url: generateAppVersionUrl(appId, appVersionId),
        data: {
            _method: 'PUT',
            _token: '{{ csrf_token() }}',
            "test": "test",
        },
        // other settings
    });

    console.log(result);

    // var result = asyncAjax("PUT", generateAppVersionUrl(appId, 2), {_method: "PUT", "test": "test"}).then(function (result) {
    //     console.log(result);
    //
    // }).catch(function (result) {
    //     console.log(result);
    // });
    //
    // console.log(result);
    //
    // if (result.success === true) {
    //     $("#title-version").text(formData.get('appVersion'));
    // }


});



