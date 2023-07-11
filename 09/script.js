document.querySelector('form').addEventListener('submit', (e) => {
    e.preventDefault()
    var userId = document.getElementById("userId").value;
    var name = document.getElementById("name").value;
    var password = document.getElementById("password").value;
    var email = document.getElementById("email").value;

    if (userId.length < 5 || userId.length > 12) 
      return alert("User ID must be between 5 and 12 characters.");
    if (!/^[a-zA-Z\s]+$/.test(name) || name.length < 15) 
      return alert("Name must only contain alphabets and should be at least 15 characters long.");
    if (!/(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()]).{8,}/.test(password)) 
      return alert("Password must be eight characters long and include at least one uppercase letter, one special character, and alphanumeric characters.");
    if (!/^[\w.-]+@[a-zA-Z_-]+?(?:\.[a-zA-Z]{2,6})+$/.test(email)) 
      return alert("Invalid email address.");
    alert("Registration form submitted successfully.");
})