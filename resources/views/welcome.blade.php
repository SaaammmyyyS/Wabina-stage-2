<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Stage 2</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body>

        {{------------------------------------------------------- HEADER -------------------------------------------------------}}
        <x-header></x-header>

        {{------------------------------------------------------- HEADER -------------------------------------------------------}}



        {{------------------------------------------------------- CONTENT -------------------------------------------------------}}
        <div class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0">
          <div class="absolute inset-0 -z-10 overflow-hidden">
            <svg class="absolute left-[max(50%,25rem)] top-0 h-[64rem] w-[128rem] -translate-x-1/2 stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]" aria-hidden="true">
              <defs>
                <pattern id="e813992c-7d03-4cc4-a2bd-151760b470a0" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
                  <path d="M100 200V.5M.5 .5H200" fill="none" />
                </pattern>
              </defs>
              <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
                <path d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z" stroke-width="0" />
              </svg>
              <rect width="100%" height="100%" stroke-width="0" fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)" />
            </svg>
          </div>
          <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
            <div class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
              <div class="lg:pr-4">
                <div class="lg:max-w-lg">
                  <h1 class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Python</h1>
                </div>
              </div>
            </div>
            <div class="-ml-12 -mt-12 p-12 lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
              <img class="w-[48rem] max-w-none rounded-xl ring-1 ring-gray-400/10 sm:w-[30rem]" src="{{ asset('images/python-logo.png') }}" alt="">
            </div>
            <div class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
              <div class="lg:pr-4">
                <div class="max-w-xl text-base leading-7 text-gray-700 lg:max-w-lg">
                  <p>Python is a versatile and powerful high-level programming language that emphasizes code readability and simplicity. Developed by Guido van Rossum and first released in 1991, Python has gained immense popularity due to its clean syntax, extensive standard library, and vibrant community support.</p>
                  <ul role="list" class="mt-8 space-y-8 text-gray-600">
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.5 17a4.5 4.5 0 01-1.44-8.765 4.5 4.5 0 018.302-3.046 3.5 3.5 0 014.504 4.272A4 4 0 0115 17H5.5zm3.75-2.75a.75.75 0 001.5 0V9.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0l-3.25 3.5a.75.75 0 101.1 1.02l1.95-2.1v4.59z" clip-rule="evenodd" />
                      </svg>
                      <span><strong class="font-semibold text-gray-900">Readability and Simplicity: </strong>Python's clean and easy-to-understand syntax promotes code readability, making it easier for developers to write and maintain code. This feature significantly reduces the time and effort required for debugging and enhances collaboration among team members.</span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                      </svg>
                      <span><strong class="font-semibold text-gray-900">Extensive Ecosystem and Community Support: </strong>Python offers an extensive collection of tools that accelerate development and streamline tasks.</span>
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="mt-1 h-5 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M4.632 3.533A2 2 0 016.577 2h6.846a2 2 0 011.945 1.533l1.976 8.234A3.489 3.489 0 0016 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234z" />
                        <path fill-rule="evenodd" d="M4 13a2 2 0 100 4h12a2 2 0 100-4H4zm11.24 2a.75.75 0 01.75-.75H16a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75h-.01a.75.75 0 01-.75-.75V15zm-2.25-.75a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 00.75-.75V15a.75.75 0 00-.75-.75h-.01z" clip-rule="evenodd" />
                      </svg>
                      <span><strong class="font-semibold text-gray-900">Cross-Platform Compatibility and Portability: </strong>Python is designed to be highly portable and compatible across different platforms, including Windows, macOS, and Linux.</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      {{------------------------------------------------------- CONTENT -------------------------------------------------------}}



      {{------------------------------------------------------- FOOTER -------------------------------------------------------}}
        <x-footer></x-footer>
      {{------------------------------------------------------- FOOTER -------------------------------------------------------}}
    </body>
</html>
