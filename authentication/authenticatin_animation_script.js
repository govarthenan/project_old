function isAnyEmpty(divQuerySelector) {
    // Get a reference to the div containing the input fields you want to check
    const divToCheck = document.querySelector(divQuerySelector); // Change the class name as needed

    // Get all input fields inside the selected div
    const inputFields = divToCheck.querySelectorAll("input");

    // Check if any of the input fields are empty
    for (let i = 0; i < inputFields.length; i++) {
        // const input = inputFields[i];
        if (inputFields[i].value.trim() === "") {
            console.log("pass 2");
            inputFields[i].reportValidity();
            return true;
        }
    }
    return false;
}

function doNothing() { }

// elements
const CONTAINER = document.getElementById("container");
const FORWARD_TRANSITION_BUTTON = document.getElementById(
    "forward-transition-button"
);
const REVERSE_TRANSITION_BUTTON = document.getElementById(
    "reverse-transition-button"
);
const FIRST_FORM_SEGMENT_QUERY_SELECTOR = ".form-container.sign-in-container";
const PASSWORD_FIELD = document.getElementById("password");
const REPEAT_PASSWORD_FIELD = document.getElementById("password-repeated");

// Verify password and confirm password are the same

if (document.title === "Sign In") {
    FORWARD_TRANSITION_BUTTON.addEventListener("click", () => {
        CONTAINER.classList.add("right-panel-active");
    });
} else {
    FORWARD_TRANSITION_BUTTON.addEventListener("click", () => {
        let password = PASSWORD_FIELD.value;
        let repeatPassword = REPEAT_PASSWORD_FIELD.value;

        if (isAnyEmpty(FIRST_FORM_SEGMENT_QUERY_SELECTOR)) {
            doNothing();
        } else if (password !== repeatPassword) {
            alert("Passwords do not match");
        } else {
            CONTAINER.classList.add("right-panel-active");
        }
    });
}


REVERSE_TRANSITION_BUTTON.addEventListener("click", () => {
    CONTAINER.classList.remove("right-panel-active");
});
