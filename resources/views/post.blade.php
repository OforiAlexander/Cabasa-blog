<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog-CABEZA</title>

    <link
      defer
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css"
      rel="stylesheet"
    />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body class="bg-gray-800 text-gray-50 font-Roboto">
    <section>
      <div
        style="
          background-image: url('/assert/hero_blog.JPG');
          background-position: 65% 35%;
          background-size: cover;
          background-repeat: no-repeat;
          width: 100%;
          height: 80vh;
        "
      >
        <div class="bg-black bg-opacity-50 w-full h-full">
          <div class="py-6 flex flex-col items-center justify-center">
            <div class="w-full py-12">
              <div class="w-1/2 mx-auto">
                <div
                  onclick="location.href='{{ route('welcome') }}'"
                  class="py-4 px-4 text-2xl font-semibold font-Roboto cursor-pointer hover:text-gray-200 transition-all duration-200"
                >
                  <svg
                    class="inline w-8"
                    viewBox="0 0 24 24"
                    style="fill: rgba(255, 255, 255, 1)"
                  >
                    <path
                      d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z"
                    ></path>
                  </svg>
                  CABEZA NETWORK
                </div>
                <!-- content -->
                <div class="bg-black bg-opacity-50 w-full py-2"></div>
              </div>
            </div>

            <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-gray-900 antialiased">
              <div class="flex justify-between px-4 mx-auto max-w-screen-xl">
                <x-posts-content :post="$post"/>
              </div>
            </main>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
