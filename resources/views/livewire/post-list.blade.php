<x-app-layout>
    @include('livewire.includes.input')    {{-- table --}}
    <div class="max-w-7xl px-4 py-6 mx-auto">

        <table class="w-10/12 border-collapse block md:table px-4 mx-auto">

            {{-- table head starts --}}
            <thead class="block md:table-header-group">
                <tr
                    class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                    <th
                        class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                        Blog Title</th>
                    <th
                        class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                        Actions</th>
                </tr>
            </thead>

            {{-- table body starts --}}
            <tbody class="block md:table-row-group">
                @foreach ($posts as $post)
                    <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">

                        <td
                            class="p-2 md:border md:border-grey-500 text-left block md:table-cell cursor-pointer hover:text-blue-800">
                            <span class="inline-block w-1/3 md:hidden font-bold">Name</span>{{ $post->title }}
                        </td>

                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                            <span class="inline-block w-1/3 md:hidden font-bold md:space-x-4">Actions</span>
                            <button
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 border border-blue-500 rounded">Edit</button>
                            <button
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-4 border border-red-500 rounded">Delete</button>
                            <button onclick="location.href='{{ route('posts') }}'"
                                class="bg-green-400 hover:bg-green-600 text-white font-bold py-1 px-4 border border-green-400 rounded">New
                                Post</button>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="max-w-7xl text-white mx-auto bg-black bg-opacity-80 px-6 py-2 rounded-lg">{{ $posts->links() }}</div>
</x-app-layout>
