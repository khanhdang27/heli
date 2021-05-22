
$('.delete-item').click(function () {
    const url = $(this).data('url');
    if (confirm('Do you want delete item?')) {
        axios.delete(url).then(response => {
            location.reload();
        })
    }
})