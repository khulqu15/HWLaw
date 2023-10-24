import { API_DOMAIN } from '/config.js'

document.getElementById('loginForm').addEventListener('submit', function(event) {
    console.log("Form submitted");
    event.preventDefault();
    console.log("Default prevented");

    const email = document.getElementById('email_input').value
    const password = document.getElementById('password_input').value

    fetch(`/login`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            email: email,
            password: password
        }),
    })
    .then(response => response.json())
    .then(data => {
        if(data.token) {
            showToast('succes', 'Login Success!')
            localStorage.setItem('token', data.token)
            window.location.href = 'private/home'
        } else if(data.error) {
            showToast('error', data.error)
        }
    }).catch(error => {
        showToast('error', error)
    })
})

function showToast(type, msg) {
    const toast = document.querySelector('.toast')
    const successToast = toast.querySelector('.alert-success')
    const errorToast = toast.querySelector('.alert-danger')

    if(type == 'success') {
        successToast.querySelector('span').textContent = msg
        successToast.classList.remove('hidden')
        setTimeout(() => {
            successToast.classList.add('hidden')
        }, 3000)
    } else if(type == 'error') {
        errorToast.querySelector('span').textContent = msg
        errorToast.classList.add('hidden')
        setTimeout(() => {
            errorToast.classList.add('hidden')
        }, 3000)
    }

}
