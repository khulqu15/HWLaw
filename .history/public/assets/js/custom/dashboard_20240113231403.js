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


document.getElementById('form_content').addEventListener('submit', function(event) {
    event.preventDefault();

    const aboutMotto = document.getElementById('about_motto').value;
    const aboutTitle = document.getElementById('about_title').value;
    const aboutDescription = document.getElementById('about_description').value;
    const aboutPointTitle = document.getElementById('about_point_title').value;
    const aboutPointDescription = document.getElementById('about_point_description').value;
    const areaMotto = document.getElementById('area_motto').value;
    const areaTitle = document.getElementById('area_title').value;
    const areaDescription = document.getElementById('area_description').value;
    const newsMotto = document.getElementById('news_motto').value;
    const newsTitle = document.getElementById('news_title').value;
    const videoMotto = document.getElementById('video_motto').value;
    const videoTitle = document.getElementById('video_title').value;
    const formContactMotto = document.getElementById('form_contact_motto').value;
    const formContactTitle = document.getElementById('form_contact_title').value;
    const formContactDescription = document.getElementById('form_contact_description').value;
    const contactTitle = document.getElementById('contact_title').value;
    const contactDescription = document.getElementById('contact_description').value;
    const footerDescription = document.getElementById('footer_description').value;

    const formData = {
        about_motto: aboutMotto,
        about_title: aboutTitle,
        about_description: aboutDescription,
        about_point_title: aboutPointTitle,
        about_point_description: aboutPointDescription,
        area_motto: areaMotto,
        area_title: areaTitle,
        area_description: areaDescription,
        news_motto: newsMotto,
        news_title: newsTitle,
        video_motto: videoMotto,
        video_title: videoTitle,
        form_contact_motto: formContactMotto,
        form_contact_title: formContactTitle,
        form_contact_description: formContactDescription,
        contact_title: contactTitle,
        contact_description: contactDescription,
        footer_description: footerDescription
    };
    fetch('/private/content', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(formData)
    })
    .then(response => response.json())
    .then(data => {
        if(data.status == 'success') showToast('success', data.message)
        else showToast('error', data.message)
    }).catch(error => {
        showToast('error', error)
    })
});

document.getElementById('cover_image_input').addEventListener('change', uploadImageCallback)
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
