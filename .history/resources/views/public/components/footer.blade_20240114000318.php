<div class="bg-blue-900 pt-12 relative bg-fixed bg-center bg-cover" style="background-image: url('/assets/images/4.jpg')">
    <div class="absolute w-full left-0 top-0 h-full bg-blue-900/80"></div>

    <div class="relative flex w-full justify-center text-center mb-12">
        <div>
            <p class="text-yellow-400 mb-4 tracking-wider uppercase md:pt-0 pt-12">{{ $content->form_contact_motto }}</p>
            <h1 class="lg:text-4xl mb-4 text-white md:text-3xl text-2xl font-bold">{{ $content->form_contact_title }}</h1>
            <p class="text-white text-sm">{{ $content->form_contact_description }}</p>
        </div>
    </div>
    <div class="relative px-12">
        <div class="w-full bg-white relative">
            <div class="w-full grid p-8 grid-cols-1 relative justify-center justify-items-center">
                <div class="w-full h-full relative pt-8">
                    <div id="contact_us" class="absolute -left-12 -top-12 inline-block px-8 py-4 bg-red-500 text-white">
                        <h5 class="text-xl font-bold">Hubungi Kami Sekarang</h5>
                    </div>
                    <form id="contact_form">
                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                            <div class="grid grid-cols-2 gap-6">
                                <div class="form-group">
                                    <label class="mb-2" for="name">Nama Lengkap</label>
                                    <input type="text" id="name" name="name" required placeholder="cth. Harry" class="input input-bordered w-full" />
                                </div>
                                <div class="form-group">
                                    <label class="mb-2" for="phone">Nomor Hp</label>
                                    <input type="tel" id="phone" name="phone" required placeholder="cth. +62XX-XXXX-XXXX" class="input input-bordered w-full" />
                                </div>
                                <div class="form-group">
                                    <label class="mb-2" for="email">Email</label>
                                    <input type="email" id="email" name="email" required placeholder="cth. harry@example.com" class="input input-bordered w-full" />
                                </div>
                                <div class="form-group">
                                    <label class="mb-2" for="subject">Subyek</label>
                                    <input type="text" id="subject" name="subject" required placeholder="Isikan perihal apa ?" class="input input-bordered w-full" />
                                </div>
                            </div>
                            <div class="relative">
                                <div class="form-group">
                                    <label class="mb-2" for="message">Pertanyaan Anda</label>
                                    <textarea id="message" name="message" required placeholder="cth. Bagaimana Prosedur Konsultasi Untuk Kasus Pidana Korupsi ?" class="textarea textarea-bordered h-24 w-full"></textarea>
                                </div>
                                <div class="w-full text-right">
                                    <button type="submit" class="btn bg-blue-900 btn-wide hover:bg-blue-800 text-white md:mt-0 mt-6">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="w-full bg-blue-900 p-8 mt-12 relative flex">
                    <img src="/assets/images/1.jpg" alt="HW Lawyer" class="w-full h-full absolute left-0 opacity-60 top-0 object-cover object-center">
                    <div class="w-full h-full bg-gradient-to-r from-blue-900 to-blue-900/20 absolute left-0 top-0"></div>
                    <div class="lg:w-1/2 md:w-3/4 w-full relative">
                        <h4 class="lg:text-3xl md:text-2xl text-xl font-bold text-white">{{ $content->contact_title }}</h4>
                        <p class="text-white mt-3">{{ $content->contact_description }}</p>
                        <div class="flex items-center flex-wrap gap-x-3 my-4">
                            <iconify-icon icon="heroicons:map-pin-solid" class="text-2xl text-yellow-400"></iconify-icon>
                            <label for="map_modal" class="text-white">
                                @foreach ($contact as $item)
                                    @if ($item->name == 'alamat' && $item->category == 'kontak')
                                        {{ $item->link }}
                                    @endif
                                @endforeach
                            </label>
                            <input type="checkbox" id="map_modal" class="modal-toggle" />
                            <div class="modal" role="dialog">
                                <div class="modal-box">
                                  <h3 class="font-bold text-lg">Peta Alamat</h3>
                                  <p class="py-4">This modal works with a hidden checkbox!</p>
                                  <div class="modal-action">
                                    <label for="my_modal_6" class="btn">Close!</label>
                                  </div>
                                </div>
                              </div>
                            <dialog id="mapModal" class="modal">
                                <div class="modal-box">
                                  <h3 class="font-bold text-lg">Peta Alamat</h3>
                                  <div class="modal-action">
                                    @foreach ($contact as $item)
                                        @if ($item->name == 'alamat' && $item->category == 'media')
                                            {!! $item->link !!}
                                        @endif
                                    @endforeach
                                  </div>
                                </div>
                              </dialog>
                        </div>
                        <div class="flex items-center flex-wrap gap-x-3 mb-4">
                            <iconify-icon icon="eva:email-outline" class="text-2xl text-yellow-400"></iconify-icon>
                            <span class="text-white">
                                @foreach ($contact as $item)
                                    @if ($item->name == 'email')
                                        {{ $item->link }}
                                    @endif
                                @endforeach
                            </span>
                        </div>
                        <div class="flex items-center flex-wrap gap-x-3">
                            <iconify-icon icon="ph:phone-fill" class="text-2xl text-yellow-400"></iconify-icon>
                            <span class="text-white">
                                @foreach ($contact as $item)
                                    @if ($item->name == 'telegram')
                                        {{ $item->link }}
                                    @endif
                                @endforeach
                            </span>
                        </div>
                    </div>
                    <img src="/assets/images/pak2.png" class="h-full object-cover object-center absolute right-0 bottom-0 lg:inline-block hidden" alt="Pak Harry Lawyer">
                </div>
            </div>
        </div>
    </div>
    <div class="relative md:px-24 px-12 py-32 grid lg:grid-cols-3 md:grid-cols-1 gap-6 items-center" id="footer">
        <div class="absolute w-full h-full bg-gradient-to-t from-black to-transparent"></div>
        <div class="absolute w-full bottom-0 text-center border-white text-white">
            <div class="w-3/4 border-t border-white inline-block py-6">
                <p>Copyright &copy; HW Law Firm 2023 – All Rights Reserved. Support by <a href="https://www.hayago.id" target="_blank" rel="noopener noreferrer">Hayago</a></p>
            </div>
        </div>
        <div class="relative">
            <div class="bg-[rgba(255,255,255,0.3)] backdrop-blur-md mb-5 p-6 text-center inline-block rounded-xl text-white">
                <img src="/assets/images/LOGO.png" class="w-16 inline-block" alt="Logo HWLawyer">
                <h4 class="text-3xl font-bold text-white grow">HWLawyer</h4>
            </div>
            <p class="text-sm text-white">{{ $content->footer_description }}</p>
            <div class="flex text-white text-2xl mt-3 items-center gap-x-2">
                @foreach ($contact as $item)
                    @if ($item->name != 'telegram' && $item->name != 'whatsapp' && $item->name != 'email')
                        <a href="{{ $item->link }}" target="_BLANK">
                            <iconify-icon class="text-xl" icon="mdi:{{ $item->name }}"></iconify-icon>
                        </a>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="flex gap-x-6 relative items-center" id="footer-menu">
            <div class="text-white space-y-2">
                <h5 class="text-xl font-semibold mb-3">Quick Links</h5>
                <ol class="list-none pl-5">
                    <li class="mb-2 gap-x-3 flex items-center">
                        <div class="bg-yellow-400 w-2 h-2 transform rotate-45"></div>
                        <a href="/about">Tentang Kami</a>
                    </li>
                    <li class="mb-2 gap-x-3 flex items-center">
                        <div class="bg-yellow-400 w-2 h-2 transform rotate-45"></div>
                        <a href="/#practices">Area Praktik</a>
                    </li>
                    <li class="mb-2 gap-x-3 flex items-center">
                        <div class="bg-yellow-400 w-2 h-2 transform rotate-45"></div>
                        <a href="/news">Publikasi</a>
                    </li>
                </ol>
            </div>
            <div>
                <div class="text-white space-y-2">
                    <h5 class="text-xl font-semibold mb-3">Area Praktik</h5>
                    <ol class="list-none pl-5">
                        @php $count = 0; @endphp
                        @foreach ($practices as $practice)
                            @if ($count < 4)
                                <li class="mb-2 gap-x-3 flex items-center">
                                    <div class="bg-yellow-400 w-2 h-2 transform rotate-45"></div>
                                    <a href="/practice/{{ $practice->slug }}">{{ $practice->title }}</a>
                                </li>
                                @php $count++; @endphp
                            @else
                                @break
                            @endif
                        @endforeach

                    </ol>
                </div>
            </div>
        </div>
        <div class="relative">
            <h5 class="text-xl font-semibold text-white mb-3">Konsultan</h5>
            <div class="flex items-center gap-x-3 my-4">
                <iconify-icon icon="heroicons:map-pin-solid" class="text-2xl text-yellow-400"></iconify-icon>
                <span class="text-white">
                @foreach ($contact as $item)
                    @if ($item->name == 'alamat')
                        {{ $item->link }}
                    @endif
                @endforeach
                </span>
            </div>
            <div class="flex items-center flex-wrap gap-x-3 mb-4">
                <iconify-icon icon="eva:email-outline" class="text-2xl text-yellow-400"></iconify-icon>
                <span class="text-white">
                @foreach ($contact as $item)
                    @if ($item->name == 'email')
                        {{ $item->link }}
                    @endif
                @endforeach
                </span>
            </div>
            <div class="flex items-center flex-wrap gap-x-3">
                <iconify-icon icon="ph:phone-fill" class="text-2xl text-yellow-400"></iconify-icon>
                <span class="text-white">
                @foreach ($contact as $item)
                    @if ($item->name == 'whatsapp')
                        {{ $item->link }}
                    @endif
                @endforeach
                </span>
            </div>
        </div>
    </div>
    <div class="toast toast-bottom toast-end">
        <div class="alert alert-success px-4 hidden">
            <iconify-icon icon="mingcute:check-fill"></iconify-icon>
            <span>Toast for success</span>
        </div>
        <div class="alert alert-danger bg-red-500 text-white px-4 hidden">
            <iconify-icon icon="icon-park-solid:error"></iconify-icon>
            <span>Toast for error</span>
        </div>
    </div>
    @foreach ($contact as $item)
    @if ($item->name == 'whatsapp')
        <div id="get_whatsapp" class="hidden" data-whatsapp="{{ $item->link }}">{{ $item->name }}</div>
    @endif
    @endforeach
</div>

<script>
document.getElementById('contact_form').addEventListener('submit', function(e) {
    e.preventDefault()
    let whatsappElement = document.getElementById('get_whatsapp');
    let whatsappLink = whatsappElement.getAttribute('data-whatsapp');

    const form = {
        'name': document.getElementById('name').value,
        'email': document.getElementById('email').value,
        'phone': document.getElementById('phone').value,
        'subject': document.getElementById('subject').value,
        'message': document.getElementById('message').value,
    }

    fetch('/client/add/', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(form)
    })
    .then(response => response.json())
    .then(data => {
        if(data.success) {
            showToast('success', 'Data berhasil dikirim')
            sendToWhatsApp(form, whatsappLink)
        }
        else showToast('error', 'Server Error')
    }).catch(error => {
        showToast('error', error)
    })
})

function sendToWhatsApp(data, whatsappLink) {
    const message = `
        Name: ${data.name}
        Email: ${data.email}
        Phone: ${data.phone}
        Subject: ${data.subject}
        Message: ${data.message}
    `;

    const encodedMessage = encodeURIComponent(message);
    const whatsappUrl = `https://wa.me/${whatsappLink}?text=${encodedMessage}`;

    window.open(whatsappUrl, '_blank');
}


function showToast(type, msg) {
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

</script>
