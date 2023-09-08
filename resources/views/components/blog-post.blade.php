@props(['posts'])

<section class="bg-gray-200 antialiased">
    <div class="max-w-screen-xl px-4 py-8 mx-auto lg:px-6 sm:py-16 lg:py-24">
        <div class="max-w-full mx-auto text-center">
            <h2 class="text-5xl font-bold leading-tight tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                Lastest Blog
            </h2>
            <div class="grid grid-cols-1 mt-12 text-center sm:mt-16 gap-x-20 gap-y-12 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($posts as $post)
                    <div class="space-y-4 text-left">
                        <x-welcome-blog-content :post='$post'/>
                    </div>
                    @endforeach
            </div>
        </div>


    </div>
</section>
