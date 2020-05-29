const form = document.querySelector('form')

const first = document.querySelector('#firstname')
const error_first = document.querySelector('[data-first]')

const last = document.querySelector('#lastname')
const error_last = document.querySelector('[data-last]')

const address = document.querySelector('#address')
const error_address = document.querySelector('[data-address]')

const city = document.querySelector('#city')
const error_city = document.querySelector('[data-city]')

const state = document.querySelector('#state')
const error_state = document.querySelector('[data-state]')

const product = document.querySelector('#product')
const error_product = document.querySelector('[data-product]')

const quantity = document.querySelector('#quantity')
const error_quantity = document.querySelector('[data-quantity]')

const contact = document.querySelectorAll('[name="contact"]')
const error_contact = document.querySelector('[data-contact]')

const terms = document.querySelectorAll('[name="terms"]')
const error_terms = document.querySelector('[data-terms]')

const submitBtn = document.querySelector('#submit')

const errorDisplay = document.querySelector('[data-errors]')
const errors = []

function processForm(e) {

    let fieldFocus = undefined
    submitBtn.setAttribute('disabled', true)

    if (first.value.trim() == '') {
        fieldFocus = first
        error_first.classList.add('error')
        errors.push('Please fill in the First name field')
        first.style.border = "1px solid red"
    } else {
        error_first.classList.remove('error')
        first.style.border = "1px solid #c9c9c9"
    }

    if (last.value.trim() == '') {
        error_last.classList.add('error')
        errors.push('Please fill in the Last name field')
        if (fieldFocus == undefined) {
            fieldFocus = last
        }
        last.style.border = "1px solid red"
    } else {
        error_last.classList.remove('error')
        last.style.border = "1px solid #c9c9c9"
    }

    if (address.value.trim() == '') {
        error_address.classList.add('error')
        errors.push('Please fill in the Address field')
        if (fieldFocus == undefined) {
            fieldFocus = address
        }
        address.style.border = "1px solid red"
    } else {
        error_address.classList.remove('error')
        address.style.border = "1px solid #c9c9c9"
    }

    if (city.value.trim() == '') {
        error_city.classList.add('error')
        errors.push('Please fill in the city field')
        if (fieldFocus == undefined) {
            fieldFocus = city
        }
        city.style.border = "1px solid red"
    } else {
        error_city.classList.remove('error')
        city.style.border = "1px solid #c9c9c9"
    }

    if (state.value.trim() == '') {
        error_state.classList.add('error')
        errors.push('Please choose a state')
        if (fieldFocus == undefined) {
            fieldFocus = state
        }
        state.style.border = "1px solid red"
    } else {
        error_state.classList.remove('error')
        state.style.border = "1px solid #c9c9c9"
    }

    if (product.value.trim() == '') {
        error_product.classList.add('error')
        errors.push('Please choose a product')
        if (fieldFocus == undefined) {
            fieldFocus = product
        }
        product.style.border = "1px solid red"
    } else {
        error_product.classList.remove('error')
        product.style.border = "1px solid #c9c9c9"
    }

    if (quantity.value.trim() == '') {
        error_quantity.classList.add('error')
        errors.push('Please choose a quantity')
        if (fieldFocus == undefined) {
            fieldFocus = quantity
        }
        quantity.style.border = "1px solid red"
    } else {
        error_quantity.classList.remove('error')
        quantity.style.border = "1px solid #c9c9c9"
    }

    let check = false
    contact.forEach(item => {
        if (item.checked) {
            check = true
            error_contact.classList.remove('error')
        }
    })

    if (check == false) {
        errors.push('Please let us know if we may contact you')
        error_contact.classList.add('error')
        if (fieldFocus == undefined) {
            fieldFocus = contact
        }
    }

    if (!terms.checked ) {
        error_terms.classList.add('error')
        errors.push('Please accept Terms and Conditions')
        if (fieldFocus == undefined) {
            fieldFocus = terms
        }
    } else {
        error_terms.classList.remove('error')
    }

    fieldFocus != undefined ? fieldFocus.focus() : null

    if (fieldFocus != undefined) {
        e.preventDefault()
        fieldFocus.focus()
    }

    submitBtn.removeAttribute('disabled')


    if (errors.length > 0) {
        let output = '<ul>'
        for (let index = 0; index < errors.length; index++) {

            output += `<li>${errors[index]}</li>`
        }

        errorDisplay.innerHTML = output
        errorDisplay.style.display = 'block'
        errors.length = 0
        e.preventDefault()
    }
}

form.addEventListener('submit', (e) => {
    processForm(e)
})