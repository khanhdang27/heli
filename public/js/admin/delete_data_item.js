
$('#delete-item').click(function () {
    const url = $(this).val();
    var choose = confirm('Do you want delete item?');

    if (choose) {
        axios.delete(url, {}).then(response => {
            if (response.status == 200) {
                location.reload();
            } else {
                alert(response.message);
            }
        })
    }
})
