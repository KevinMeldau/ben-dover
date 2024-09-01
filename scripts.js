// scripts.js
document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    // Extract form data
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    // Display form data for demonstration purposes
    alert(`Thank you, ${name}! We have received your message and will get back to you at ${email} soon.`);

    // Clear the form fields
    document.getElementById('contact-form').reset();
});
