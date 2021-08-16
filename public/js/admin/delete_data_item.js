function itemDelete(url) {

    var choose = confirm('Do you want delete item?');

    if (choose) {
        axios.delete(url, {}).then(response => {
            console.log('response :>> ', response);
            if (response.status == 200) {
                console.log(response.message)
                // alert(response.message);
                location.reload();
            } else {
                alert(response.message);
            }
        })
    }
}