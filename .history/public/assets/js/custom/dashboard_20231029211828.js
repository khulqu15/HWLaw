import { showToast } from './toast.js';

document.getElementById('form_about').addEventListener('submit', function(event) {
    event.preventDefault()
    const description = document.getElementById('description_input').value
    const year = document.getElementById('year_input').value
    const cases = document.getElementById('cases_input').value
    const vission = document.getElementById('vission_input').value
    const mission = document.getElementById('mission_input').value
    fetch('/private/about', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            description: description,
            year: year,
            completed_case: cases,
            vission: vission,
            mission: mission,
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


document.getElementById('image1_input').addEventListener('change', uploadImageCallback)
document.getElementById('image2_input').addEventListener('change', uploadImageCallback)

document.getElementById('image1_input').addEventListener('change', function(event) {
    if (event.target.files && event.target.files[0]) {
        let reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('image1_preview').src = e.target.result;
            document.getElementById('image1_preview').classList.remove('hidden');
        }
        reader.readAsDataURL(event.target.files[0]);
    }
})

document.getElementById('image2_input').addEventListener('change', function(event) {
    if (event.target.files && event.target.files[0]) {
        let reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('image2_preview').src = e.target.result;
            document.getElementById('image2_preview').classList.remove('hidden');
        }
        reader.readAsDataURL(event.target.files[0]);
    }
})

function uploadImageCallback(event) {
    const image1Input = document.querySelector('#image1_input')
    const image2Input = document.querySelector('#image2_input')
    const formData = new FormData()
    if(image1Input.files[0]) formData.append('image1', image1Input.files[0])
    if(image2Input.files[0]) formData.append('image2', image2Input.files[0])
    fetch('/private/about/upload_image', {
        method: 'POST',
        body: formData,
    })
    .then(response => response.json())
    .then(data => {
        if(data.status == 'success') {
            showToast('success', data.message)
            image1Input.value = ''
            image2Input.value = ''
        }
        else showToast('error', data.message)
    }).catch(error => {
        showToast('error', error)
    })
}
