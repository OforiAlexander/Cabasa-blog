<article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue format-invert">
    <header class="mb-4 lg:mb-6 not-format">
        <address class="flex items-center mb-6 not-italic">
            <div class="inline-flex items-center mr-3 text-sm text-white">
                <div>
                    <p class="text-base font-light text-gray-50">
                        The Ghana most strongest contestant king Blackk
                    </p>
                    <p class="text-base font-light text-gray-50">
                        <time pubdate datetime="2022-02-08" title="December 04, 2020 ">December 04, 2020
                        </time>
                    </p>
                </div>
            </div>
        </address>
        <h1 class="mb-4 text-3xl font-extrabold leading-tight">
            {{ $post->title }}
        </h1>
    </header>
    <x-post-blog :post="$post"/>
    <section class="not-format">
        <div class="px-6 py-4 text-gray-500">
            {{-- hashtags --}}
            <ul class="space-y-5">
                <li>&#x23;Vote4Peace</li>
                <li>&#x23;vote4Ghana</li>
                <li>&#x23;cabezanetwork</li>
            </ul>
        </div>
        <x-comment-form/>
    </section>
</article>
