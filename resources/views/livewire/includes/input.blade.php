<div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <div class="bg-gray-100 flex">
        <div class="flex-col flex ml-auto mr-auto items-center lg:w-2/3 md:w-3/5">
            <div class="mt-2 flex flex-col lg:w-1/2 w-8/12">
                <div
                    class="flex flex-wrap  w-full mb-4 relative bg-gray-50 border-2 border-blue-800 items-center rounded pr-10">
                    <div class="flex -mr-px justify-center w-15 p-4">
                        <span
                            class="flex items-center leading-normal bg-gray-50 px-3 border-0 rounded rounded-r-none text-2xl text-gray-600">
                            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-black">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                              </svg>                              
                        </span>
                    </div>
                    <input type="text"  wire:model.live='search'
                        class="flex-shrink flex-grow leading-normal w-px flex-1 border-0 h-10 rounded-md border-grey-light  rounded-l-none px-3 self-center relative  font-roboto text-base placeholder:text-sm outline-none"
                        placeholder="Search Post" />
                </div>
                
            </div>
        </div>

    </div>
</div>