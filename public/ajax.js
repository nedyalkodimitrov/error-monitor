function ajaxRequest(type, url, data){
    let messege = 0;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: type,
        url: url,
        async: false,
        processData: false,
        contentType: false,
        data: data,
    }).done(function (msg) {
        messege =  msg;
    });
    return messege;

}

