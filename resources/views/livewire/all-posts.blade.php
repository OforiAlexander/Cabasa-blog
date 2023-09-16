<form class="w-full">

    @if (session('success'))
        <div class="bg-green-600 rounded-md text-white font-light text-sm px-6 py-4 mx-4 my-4">{{ session('success') }}
        </div>
    @endif {{-- flash message for success of post --}}


    <div class="mb-6 text-left">
        <label for="title" class="font-semibold text-lg text-gray-800 my-2 block">
            Blog Title
        </label>
        <div class="mt-4">
            <input type="text" name="title" required wire:model='title'
                class="border border-gray-400 rounded-md px-6 py-2 w-full text-sm text-gray-800"
                placeholder="Blog Header/Title">

            @error('title')
                @include('components.error-message')
            @enderror
        </div>
    </div>

    <div class="mb-6 text-left">
        <div>
            <label for="note" class="font-semibold text-lg text-gray-800">
                Short Note
            </label>
            <span class="group">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 group/span inline h-6 text-gray-700 cursor-pointer animate-pulse">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <small class="text-gray-100 bg-gray-900 rounded bg-opacity-80 px-3 py-1">Write a short captivating note
                    for the blog </small>
            </span>

        </div>
        <div class="mt-2">
            <textarea name="excerpt" id="excerpt" required wire:model='excerpt'
                class="resize-none border border-gray-400 rounded-md px-6 py-2 w-full text-sm text-gray-800 placeholder:text-lg placeholder:text-gray-700 placeholder-italic"></textarea>

            @error('excerpt')
                @include('components.error-message')
            @enderror
        </div>
    </div>

    <div class="mb-6 text-left">
        <label for="description" class="font-semibold text-lg text-gray-800 my-2 block">
            Description
        </label>
        <div class="mt-4">
            <input type="text" name="description" required wire:model='description'
                class="border border-gray-400 rounded-md px-6 py-2 w-full text-sm text-gray-800"
                placeholder="Description">


            @error('description')
                @include('components.error-message')
            @enderror

        </div>
    </div>

    <div class="mb-6 text-left">
        <label for="body" class="font-semibold text-lg text-gray-800 my-2 block">
            Body
        </label>
        <div class="mt-4">
            <textarea required name="body" required wire:model='body'
                class="appearance-none w-full text-sm text-gray-800 border tracking-wide border-gray-400 rounded py-3 px-4 mb-3 leading-5 focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none"
                id="body"></textarea>

            @error('body')
                @include('components.error-message')
            @enderror
        </div>
    </div>


    <div class="mb-6 text-left">
        <div>
            <label for="hash_tag" class="font-semibold text-lg text-gray-800">
                Hash Tags
            </label>
            <span class="group">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 group/span inline h-6 text-gray-700 cursor-pointer animate-pulse">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <small class="text-gray-100 bg-gray-900 rounded bg-opacity-80 px-3 py-1">Write a short captivating note
                    for the blog </small>
            </span>

        </div>
        <div class="mt-2">
            <textarea name="hash_tag" id="hash_tag" required wire:model='hash_tag'
                class="resize-none border border-gray-400 rounded-md px-6 py-2 w-full text-sm text-gray-800 placeholder:text-lg placeholder:text-gray-700 placeholder-italic"></textarea>

            @error('hash_tag')
                @include('components.error-message')
            @enderror
        </div>
    </div>

    {{-- <button wire:navigate wire:click.prevent='index'
        class="text-white bg-blue-700 justify-center hover:bg-blue-900 transition-all duration-200 inline-flex items-center  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
        role="button">
        Post Blog
        <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
            fill="currentColor">
            <path fill-rule="evenodd"
                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                clip-rule="evenodd" />
        </svg>
    </button> --}}

    <button wire:click.prevent='create' type="submit"
        class="text-gray-900 border-b border-b-gray-800 hover:bg-gray-300 space-x-4 justify-center transition-all duration-200 rounded-lg text-sm px-8 py-2 shadow-sm"
        role="button">
        Publish Post
    </button>
</form>
