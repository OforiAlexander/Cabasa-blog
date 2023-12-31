
<div
    class="mt-8 bg-gray-100 text-gray-900 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
    <img src="https://picsum.photos/300/300" alt="blog-post">
</div>
<div class="px-4 space-y-4 text-left">
    <h3 class="text-2xl font-bold leading-tight text-gray-900">
        {{ $post->title }}
    </h3>
    <p class="text-lg font-normal text-gray-500 dark:text-gray-400 line-clamp-3 lg:line-clamp-none">
        {{ $post->excerpt }}
    </p>
    <a href="{{ route('post', $post) }}"
        class="text-white bg-blue-700 justify-center hover:bg-blue-800 inline-flex items-center  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        role="button">
        Read Blog
        <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
            fill="currentColor">
            <path fill-rule="evenodd"
                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                clip-rule="evenodd" />
        </svg>
    </a>
</div>
