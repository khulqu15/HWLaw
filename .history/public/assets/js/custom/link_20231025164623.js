import { showToast } from './toast.js'

let custom_name = false
document.getElementById('name_input_toggle').addEventListener('click', function(e) {
    e.preventDefault()
    custom_name = !custom_name
    if(custom_name) {
        document.getElementById('name_input_select').classList.add('hidden')
        document.getElementById('name_input_text').classList.remove('hidden')
    } else {
        document.getElementById('name_input_select').classList.remove('hidden')
        document.getElementById('name_input_text').classList.add('hidden')
    }
})

let custom_category = false
document.getElementById('category_input_toggle').addEventListener('click', function(e) {
    e.preventDefault()
    custom_category = !custom_category
    if(custom_category) {
        document.getElementById('category_input_select').classList.add('hidden')
        document.getElementById('category_input_text').classList.remove('hidden')
    } else {
        document.getElementById('category_input_select').classList.remove('hidden')
        document.getElementById('category_input_text').classList.add('hidden')
    }
})

document.getElementById('link_form').addEventListener('submit', function(e) {
    e.preventDefault()
    let name = ''
    let category = ''
    const link = document.getElementById('link_input').value

    if(custom_name) name = document.getElementById('name_input_text'),value
    else name = document.getElementById('name_input_select'),value

    if(custom_category) category = document.getElementById('category_input_text'),value
    else category = document.getElementById('category_input_select'),value
})
