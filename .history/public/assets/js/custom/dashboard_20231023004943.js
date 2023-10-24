import { showToast } from './toast.js';

document.getElementById('form_about').addEventListener('submit', function(event) {
    event.preventDefault()
    const description = document.getElementById('description_input').value
    const year = document.getElementById('year_input').value
    const case = document.getElementById('case_input').value
    const vission = document.getElementById('vission_input').value
    const mission = document.getElementById('mission_input').value
    fetch('private/about', {
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
