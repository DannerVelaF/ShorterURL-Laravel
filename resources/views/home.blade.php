<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ShorterURL</title>
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
        <style>
            .shadow {
                box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
            }

            .shadowPressed {
                box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
            }
        </style>
    </head>

    <body>
        <div class="flex items-center justify-center min-h-screen flex-col gap-5">
            <h1 class="text-center font-bold text-3xl">
                URL Shortener
            </h1>
            <div class="w-1/3 flex gap-5 flex-col">
                <div class="flex w-full p-1 bg-[#f4f4f5]">
                    <a href="{{ url("/") }}"
                        class="text-center w-full hover:cursor-pointer active:shadowPressed focus:outline-none {{ Request::is("/") ? "bg-white" : "" }}"
                        type="button">
                        Shorter URL
                    </a>
                    <a href="{{ url("/list") }}"
                        class="w-full text-center hover:cursor-pointer active:shadowPressed focus:outline-none {{ Request::is("list") ? "bg-white" : "" }}"
                        type="button">
                        List URL
                    </a>
                </div>
                @if (Request::is("/"))
                    @include($component)
                @elseif (Request::is("list"))
                    @include($component, ["urls" => $urls])
                @endif

            </div>

        </div>
    </body>

</html>
