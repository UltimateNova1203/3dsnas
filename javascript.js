function openModal() { 
    document.querySelector('.bg-modal').style.display = 'flex';
}

function closeModal() {
    document.querySelector('.bg-modal').style.display = 'none';
}

function updateQRCode(text) {
    var element = document.getElementById("qrcode");
    var bodyElement = document.body;
    if(element.lastChild)
      element.replaceChild(showQRCode(text), element.lastChild);
    else
      element.appendChild(showQRCode(text));
}