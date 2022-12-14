@if (session('status'))
    <div class="fixed top-28 rounded bg-white shadow flex items-center justify-center p-12 z-50 left-1/2 -translate-x-1/2 w-[clamp(12em,40vw,40em)]"
        id="message-toaster">
        <i class="absolute top-4 right-4 text-gray cursor-pointer"
            style="font-variant: small-caps;">close</i>
        <span class="text-center @if(session('status')['type'] == 'green') text-green-600 @else text-red-300 @endif capitalize">{{ session('status')['message'] }}</span>
    </div>
    <script>
        const script = document.getElementById('message-toaster');
        const cls = script.querySelector('i');
        cls.onclick = () => script.remove();
        setTimeout(() => {
            script?.remove();
        }, 3000);
    </script>
@endif
