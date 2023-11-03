// Function to validate the form before submission
function validateForm() {
    // Get the values of old_password and new_password fields
    let oldPassword = document.getElementById('old_password').value;
    let newPassword = document.getElementById('new_password').value;

    console.log(oldPassword, newPassword);

    // Check if old_password is provided and new_password is empty
    if (oldPassword !== '' && newPassword === '') {
        console.log('New Password is required when Old Password is provided.');
        return false; // Prevent form submission
        // document.getElementById('new_password').setAttribute('required', 'required');
    }

    // Check if old_password and new_password are the same
    if (oldPassword === newPassword) {
        alert('Old Password and New Password should be different.');
        return false; // Prevent form submission
    }

    // If validation passes, allow form submission
    return true;
}

// Attach the validateForm function to the form's onsubmit event
let form = document.getElementById('edit_form');
if (form) {
    form.onsubmit = validateForm;
}

