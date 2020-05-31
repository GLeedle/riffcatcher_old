const form = document.querySelector('form')

const userName = document.querySelector('#username')
const errorUserName = document.querySelector('[data-username]')

const password = document.querySelector('#password')
const errorPassword = document.querySelector('[data-password]')

const submitBtn = document.querySelector('#submit')

function processForm(e) {

    let fieldFocus = undefined
    submitBtn.setAttribute('disabled', true)

    if (userName.value.trim() == '') {
        fieldFocus = username
        errorUserName.classList.add('error')
        userName.style.border = "1px solid red"
    } else {
        errorUserName.classList.remove('error')
        userName.style.border = "1px solid #c9c9c9"
    }

    if (password.value.trim() == '') {
        errorPassword.classList.add('error')
        password.style.border = "1px solid red"
        if (fieldFocus == undefined) {
            fieldFocus = password
        }
    } else {
        errorPassword.classList.remove('error')
        password.style.border = "1px solid #c9c9c9"
    }

    fieldFocus != undefined ? fieldFocus.focus() : null

    if (fieldFocus != undefined) {
        e.preventDefault()
        fieldFocus.focus()
    }

    submitBtn.removeAttribute('disabled')

}

form.addEventListener('submit', (e) => {
    processForm(e)
})
