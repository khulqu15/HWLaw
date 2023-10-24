import { showToast } from './toast.js'

document.getElementById('category_form').addEventListener('submit', function(e) {
    e.preventDefault()
    const id = document.getElementById('id_input').value
    const name = document.getElementById('name_input').value
    fetch('/private/news/category/store', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: {
            name: name,
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.status == 'success') {
            showToast('success', data.message)
            setTimeout(() => {
                window.location = '/private/news/categories'
            }, 2000);
        } else showToast('error', data.message)
    })
    .catch(error => {
        showToast('error', error)
    })
})
