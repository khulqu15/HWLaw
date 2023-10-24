import { showToast } from './toast.js'

document.getElementById('category_form').addEventListener('submit', function(e) {
    e.preventDefault()
    const id = document.getElementById('id_input').value
    const name = document.getElementById('name_input').value
    fetch('/private/news/category/store', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        }
    })
})
