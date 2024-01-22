function asyncAjax(type, url, data) {
    return new Promise(function (resolve, reject) {

        $.ajax({
            type: type,
            url: url,
            async: true,
            processData: false,
            contentType: false,
            dataType: "json",
            data: data,
        }).done(function (msg) {
            resolve(msg);

        }).fail(function (jqXHR, textStatus, errorThrown) {

            reject(jqXHR, textStatus, errorThrown);
        });
    });
}

// Example usage:
