<form action="{{ route("store") }}" method="POST" class="flex flex-col gap-2    ">
    @csrf
    <input type="text" name="url" placeholder="https://example.com/very/long/url"
        class="w-full p-1 rounded-md border-2 border-gray-300 focus:border-black focus:outline-none transition-all ease-out">

    @if ($errors->any())
        <div id="alert-message" class="bg-red-200 text-red-800 p-2 rounded-md">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session("success"))
        <div id="alert-message" class="bg-green-200 text-green-800 p-2 rounded-md">
            {{ session("success") }}
        </div>
    @endif

    <button type="submit"
        class='bg-black hover:bg-black/95 active:bg-black/80 transition-all ease-linear text-white w-full p-2 mx-auto rounded-lg'>
        Shorter
    </button>
</form>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        setTimeout(function() {
            let alertMessage = document.getElementById('alert-message');
            if (alertMessage) {
                alertMessage.style.transition = "opacity 0.5s ease-out";
                alertMessage.style.opacity = "0";
                setTimeout(() => alertMessage.remove(), 500);
            }
        }, 3000);
    });
</script>
