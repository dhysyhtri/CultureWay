
function copyVirtualAccount() {
    var copyText = document.getElementById("virtualAccount");
    copyText.select();
    copyText.setSelectionRange(0, 99999); 
    document.execCommand("copy");
    alert("Virtual Account berhasil disalin: " + copyText.value);
}

function confirmPayment() {
    alert('Pembayaran berhasil!');
    document.getElementById('ticket').style.display = 'block';
}
