import { showToast } from './toast'

let custom_name = false
let custom_category = false

document.getElementById('name_input_toggle').addEventListener('click', function(e) {
    e.preventDefault()
    custom_name = !custom_name
    if(custom_name) {
        document.getElementById('name_input_select').classList.add('hidden')
        document.getElementById('name_input_input').classList.remove('hidden')
    }
})
