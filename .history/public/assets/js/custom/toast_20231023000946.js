export function showToast(type, msg) {
    const toast = document.querySelector('.toast');
    const successToast = toast.querySelector('.alert-success');
    const errorToast = toast.querySelector('.alert-danger');
    if(type == 'success') {
        successToast.querySelector('span').textContent = msg;
        successToast.classList.remove('hidden');
        setTimeout(() => {
            successToast.classList.add('hidden');
        }, 3000);
    } else if(type == 'error') {
        errorToast.querySelector('span').textContent = msg;
        errorToast.classList.remove('hidden');
        setTimeout(() => {
            errorToast.classList.add('hidden');
        }, 3000);
    }
}
