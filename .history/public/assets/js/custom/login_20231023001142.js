import { showToast } from './toast.js';

document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();

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
        console.log(data)
        if(data.token) {
            showToast('succes', 'Login Success!')
            localStorage.setItem('token', data.token)
            window.location.href = 'private/home'
        } else if(data.error) {
            console.log('error')
            showToast('error', data.error)
        }
    }).catch(error => {
        showToast('error', error)
    })
})
