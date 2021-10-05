function itemDelete(url) {

    console.log(url);
    var choose = confirm('Do you want delete item?');

    if (choose) {
        axios.delete(url, {}).then(response => {
            if (response.status == 200) {
                location.reload();
            }
        }).catch(error => {
            alert('delete is invalid');
        });
    }
}