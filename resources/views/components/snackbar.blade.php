@if(session()->has("message"))
    <div id="flash-message" class="fixed flex bottom-4 left-4 bg-white shadow-xl gap-4 items-center px-6 py-3 transform">
        <span>{{session("message")}}</span>
        <img src="/svg/x-mark.svg" alt="X Mark Icon" class="h-4 w-4" />
    </div>
@endif