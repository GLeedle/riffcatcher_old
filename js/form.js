// grabbing the form and form data
const form = document.querySelector('form')
const username = document.querySelector('#username')
const first_name = document.querySelector('#firstname')
const last_name = document.querySelector('#lastname')
const email = document.querySelector('#email')
const password = document.querySelector('#password')
// grabbing the .div to display the error
const errorUserName = document.querySelector('#errorUserName')
const errorFirstName = document.querySelector('#errorFirstName')
const errorLastName = document.querySelector('#errorLastName')
const errorEmail = document.querySelector('#errorEmail')
const errorPassword = document.querySelector('#errorPassword')


form.addEventListener('submit', (e) => {

    if (username.value.trim() == '') {
        const userErrors = ('<p class="alert alert-danger p-1 mt-1">Please choose a username</p>')
        errorUserName.innerHTML = userErrors
        username.style.border = "1px solid red"
        e.preventDefault()
    }

    if (first_name.value.trim() == '') {
        const firstErrors = ('<p class="alert alert-danger p-1 mt-1">Please provide First name</p>')
        errorFirstName.innerHTML = firstErrors
        first_name.style.border = "1px solid red"
        e.preventDefault()
    }

    if (last_name.value.trim() == '') {
        const lastErrors = ('<p class="alert alert-danger p-1 mt-1">Please provide Last name</p>')
        errorLastName.innerHTML = lastErrors
        last_name.style.border = "1px solid red"
        e.preventDefault()
    }

    if (email.value.trim() == '') {
        const emailErrors = ('<p class="alert alert-danger p-1 mt-1">Please provide email address</p>')
        errorEmail.innerHTML = emailErrors
        email.style.border = "1px solid red"
        e.preventDefault()
    }

    if (password.value.trim() == '') {
        const passwordErrors = ('<p class="alert alert-danger p-1 mt-1">Please provide a Password</p>')
        errorPassword.innerHTML = passwordErrors
        password.style.border = "1px solid red"
        e.preventDefault()
    }
})
