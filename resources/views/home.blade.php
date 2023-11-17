
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="antialiased">
    <div class="flex inline-flex">
@foreach ($products as $product)
    <div class="relative m-10 flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
        <a class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl" href="Apple">
            <img class="object-cover" src="data:image/jpeg;base64,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" alt="product image" />
            <span class="absolute top-0 left-0 m-2 rounded-full bg-black px-2 text-center text-sm font-medium text-white">99% OFF</span>
        </a>
        <div class="mt-4 px-5 pb-5">
            <a href="#">
                <h5 class="text-xl tracking-tight text-slate-900">{{ $product->name }}</h5>
            </a>
            <div class="mt-2 mb-5 flex items-center justify-between">
                <p>
                    <span class="text-3xl font-bold text-slate-900">${{ $product->price }}</span>
                </p>
                <div class="flex items-center">
                    <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>

                    <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <span class="mr-2 ml-3 rounded bg-yellow-200 px-2.5 py-0.5 text-xs font-semibold">5.0</span>
                </div>
            </div>
            <a href="#" class="flex items-center justify-center rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                Add to cart</a
            >
        </div>
    </div>
        @endforeach
    </div>
</body>
</html>
