// ajax.js

function updateRecord(id, name, unit, price, expiry, inventory, image) {
    fetch('update1.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `id=${id}&name=${name}&unit=${unit}&price=${price}&expiry=${expiry}&inventory=${inventory}&image=${image}`,
    })
    .then(response => response.json())
    .then(data => {
        // Handle the response data
        console.log(data);
        // You may update your UI or perform other actions here
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
