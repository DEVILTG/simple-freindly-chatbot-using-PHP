const messages = []; // variable to store messages

const chatHistory = document.querySelector('.chat-history ul');
const messageInput = document.getElementById('message-input');
const sendButton = document.getElementById('send-btn');

// add event listener to send button
sendButton.addEventListener('click', () => {
  const message = messageInput.value.trim(); // get message text
  if (message !== '') {
    messages.push(message); // add message to array
    const li = document.createElement('li'); // create new list item
    li.textContent = message; // set list item text
    chatHistory.appendChild(li); // append list item to chat history
    messageInput.value = ''; // clear message input
  }
});
