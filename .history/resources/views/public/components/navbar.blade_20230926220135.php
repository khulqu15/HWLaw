<div class="fixed top-0 w-full bg-base-100">
    <div class="w-full bg-red-400 py-2 px-8 text-white flex items-center justify-between">
        <div class="flex items-center">
            <iconify-icon icon="mdi:call"></iconify-icon>
            <span class="text-sm">+021-7997973 <span class="hidden lg:inline-block">| Harry 0895-3960-0495</span></span>
        </div>
        <div class="flex items-center gap-x-2">
            <iconify-icon class="text-xl" icon="ic:baseline-facebook"></iconify-icon>
            <iconify-icon class="text-xl" icon="mdi:youtube"></iconify-icon>
            <iconify-icon class="text-xl" icon="ri:instagram-fill"></iconify-icon>
        </div>
    </div>
    <div class="flex items-center py-4 px-8 justify-between">
        <div class="normal-case text-xl flex gap-x-2 items-center">
            <img src="/assets/images/banner/icon/01.png" alt="Logo HW Lawyer" class="w-10">
            <span class="font-bold">HW LAWYER</span>
        </div>
        <div class="hidden lg:inline-block">
            <div class="flex items-center gap-x-1">
                <div class="btn bg-base-100 hover:bg-base-200 px-4 py-2 border-0">About</div>
                <div class="btn bg-base-100 hover:bg-base-200 px-4 py-2 border-0">Our Team</div>
                <div class="btn bg-base-100 hover:bg-base-200 px-4 py-2 border-0">Practice</div>
                <div class="dropdown dropdown-hover dropdown-end">
                    <label tabindex="0" class="btn bg-base-100 hover:bg-base-200 px-4 py-2 border-0 m-1">Update</label>
                    <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a>News</a></li>
                        <li><a>Article</a></li>
                        <li><a>Press Release</a></li>
                        <li><a>SIP-R</a></li>
                        <li><a>Legal Consultation</a></li>
                        <li><a>Legal Insight</a></li>
                    </ul>
                  </div>
                <div class="btn bg-base-100 hover:bg-base-200 px-4 py-2 border-0">Career</div>
            </div>
        </div>
        <div class="lg:hidden inline-block">
            <button id="menu_btn" class="btn bg-red-400 transition-all hover:bg-red-500 text-white text-2xl p-2">
                <iconify-icon icon="jam:menu"></iconify-icon>
            </button>
        </div>
    </div>
    <div class="lg:hidden inline-block w-full">
        <div id="menu_md" class="box-border invisible transition-all w-full block shadow-xl relative py-4 px-8 bg-base-100">
            <ul class="w-full">
                <li class="bg-base-100 rounded-lg hover:bg-base-200 px-4 py-2 border-0 w-full"><a href="">About</a></li>
                <li class="bg-base-100 rounded-lg hover:bg-base-200 px-4 py-2 border-0 w-full"><a href="">Our Team</a></li>
                <li class="bg-base-100 rounded-lg hover:bg-base-200 px-4 py-2 border-0 w-full"><a href="">Practice</a></li>
                <li id="menu_program" class="bg-base-100 rounded-lg hover:bg-base-200 px-4 py-2 border-0 w-full">Update</li>
                <ul class="pl-3 ml-4 w-full box-border invisible transition-all">
                    <li class="w-full bg-base-100 py-2 px-4 hover:bg-base-200 w-full border-0"><a>News</a></li>
                    <li class="w-full bg-base-100 py-2 px-4 hover:bg-base-200 w-full border-0"><a>Article</a></li>
                    <li class="w-full bg-base-100 py-2 px-4 hover:bg-base-200 w-full border-0"><a>Press Release</a></li>
                    <li class="w-full bg-base-100 py-2 px-4 hover:bg-base-200 w-full border-0"><a>SIP-R</a></li>
                    <li class="w-full bg-base-100 py-2 px-4 hover:bg-base-200 w-full border-0"><a>Legal Consultation</a></li>
                    <li class="w-full bg-base-100 py-2 px-4 hover:bg-base-200 w-full border-0"><a>Legal Insight</a></li>
                </ul>
                <li class="bg-base-100 rounded-lg hover:bg-base-200 px-4 py-2 border-0 w-full"><a href="">Career</a></li>
            </ul>
        </div>
    </div>
</div>

<script>
let open_menu = false
let open_program_menu = false
$(document).ready(function() {
    $('#menu_btn').on('click', function() {
        open_menu = !open_menu
        if(open_menu) $('#menu_md').removeClass('invisible')
        else $('#menu_md').addClass('invisible')
    })
    $('#menu_program').on('click', function() {
        open_program_menu = !open_program_menu
        if(open_program_menu) $('#menu_md').removeClass('invisible')
        else $('#menu_md').addClass('invisible')
    })
})
</script>
