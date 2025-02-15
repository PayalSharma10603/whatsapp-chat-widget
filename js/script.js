function toggleChat() {
    var chatBox = document.getElementById('chat-box');
    chatBox.style.display = chatBox.style.display === 'none' ? 'block' : 'none';
}

function sendMessage() {
    var message = document.getElementById('message').value;
    var phoneNumber = "+918580407412"; // Replace with your WhatsApp number
    var whatsappUrl = "https://api.whatsapp.com/send?phone=" + phoneNumber + "&text=" + encodeURIComponent(message);
    window.open(whatsappUrl, '_blank');
}
