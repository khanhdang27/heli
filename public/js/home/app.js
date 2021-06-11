

function showSubjectNav(url, url_subject, certificate_id) {
    addSubjectNav(url+'/null', url_subject)

    $(document).on('click', '.certificate-nav-item', function (e) {
        e.preventDefault();
        var url = $(this).attr('href');
        addSubjectNav(url, url_subject)
    });
}

function addSubjectNav(url, url_subject) {
    $.ajax({
        type: "GET",
        url: url,
    }).done(function (response) {
        var html = '';
        $.each(response, function (key, value) {
            html += '<li class="nav-item">';
            html += '<a class="nav-link sub-item text-secondary" href="' + url_subject + "/" + key + '">' + value + '</a>';
            html += '</li>';
        });

        $("#subject-nav").html(html);
    });
}
