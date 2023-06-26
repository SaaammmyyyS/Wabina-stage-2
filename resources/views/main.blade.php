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
        <div class="bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
              <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">From the blog</h2>
                <p class="mt-2 text-lg leading-8 text-gray-600">Learn how to grow your business with our expert advice.</p>
              </div>
              <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                <article class="flex max-w-xl flex-col items-start justify-between">
                  <div class="flex items-center gap-x-4 text-xs">
                    <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                  </div>
                  <div class="group relative">
                    <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                      <a href="#">
                        <span class="absolute inset-0"></span>
                        Building Seamless User Experiences
                      </a>
                    </h3>
                    <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">As a skilled and innovative Frontend Developer, I specialize in transforming captivating designs into interactive and user-friendly websites.</p>
                  </div>
                  <div class="relative mt-8 flex items-center gap-x-4">
                    <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-10 w-10 rounded-full bg-gray-50">
                    <div class="text-sm leading-6">
                      <p class="font-semibold text-gray-900">
                        <a href="#">
                          <span class="absolute inset-0"></span>
                          Michael Foster
                        </a>
                      </p>
                      <p class="text-gray-600">Frontend Developer</p>
                    </div>
                  </div>
                </article>


                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="flex items-center gap-x-4 text-xs">
                      <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                    </div>
                    <div class="group relative">
                      <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                        <a href="#">
                          <span class="absolute inset-0"></span>
                          Empowering Scalable and Secure Systems
                        </a>
                      </h3>
                      <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">I specialize in architecting and implementing robust, scalable, and secure systems that power modern web applications. Proficient in programming languages such as Python, Java, and Ruby, I excel in building efficient server-side logic and APIs.</p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4">
                      <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-10 w-10 rounded-full bg-gray-50">
                      <div class="text-sm leading-6">
                        <p class="font-semibold text-gray-900">
                          <a href="#">
                            <span class="absolute inset-0"></span>
                            Dylan Hudson
                          </a>
                        </p>
                        <p class="text-gray-600">Backend Developer</p>
                      </div>
                    </div>
                  </article>

                  <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="flex items-center gap-x-4 text-xs">
                      <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                    </div>
                    <div class="group relative">
                      <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                        <a href="#">
                          <span class="absolute inset-0"></span>
                          Bridging the Gap Between Frontend and Backend
                        </a>
                      </h3>
                      <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">I possess a comprehensive skill set that spans both frontend and backend development. With expertise in HTML, CSS, JavaScript, and popular backend languages like Python, Java, and Node.js, I excel at creating end-to-end web solutions.</p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4">
                      <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-10 w-10 rounded-full bg-gray-50">
                      <div class="text-sm leading-6">
                        <p class="font-semibold text-gray-900">
                          <a href="#">
                            <span class="absolute inset-0"></span>
                            Michael Foster
                          </a>
                        </p>
                        <p class="text-gray-600">Co-Founder / CTO</p>
                      </div>
                    </div>
                  </article>

                <!-- More posts... -->
              </div>
            </div>
          </div>
        {{------------------------------------------------------- CONTENT -------------------------------------------------------}}



        {{------------------------------------------------------- FOOTER -------------------------------------------------------}}
        <x-footer></x-footer>
        {{------------------------------------------------------- FOOTER -------------------------------------------------------}}
    </body>
</html>
