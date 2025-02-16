<div class="w-full">
    <h2 class="text-xl font-bold mb-4">Lista de URLs Acortadas</h2>
    <ul class="list-disc pl-5">
        @foreach ($urls as $url)
            <li>
                <a href="{{ $url->url }}" target="_blank" class="text-blue-500">
                    http://127.0.0.1:8000/{{ $url->short_url }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
