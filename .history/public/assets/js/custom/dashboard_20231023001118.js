import { showToast } from './toast.js';

document.getElementById('form_about').addEventListener('submit', function(event) {
    event.preventDefault()
    const description = document.getElementById('description_input').value
    fetch('/about', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            description: description
        })
    })
    .then(response => response.json())
    .then(data => {
        if(data.status == 'success') showToast('success', data.message)
        else showToast('error', data.message)
    }).catch(error => {
        showToast('error', error)
    })
})
