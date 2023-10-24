document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault()

    const email = document.getElementById('email').value
    const password = document.getElementById('password').value

    fetch('/login', {
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
    const toast = document.getElementById('toast')

}
