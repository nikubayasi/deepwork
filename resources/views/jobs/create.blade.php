<x-layout>
    <x-slot name='title'>Create Job</x-slot>
    <h1 class="text-center text-2xl">Create New Job</h1>
    <form class="max-w-sm mx-auto"action="/jobs" method="POST">
        <div class="mb-5 mt-5">
            <label for="title" class="block mb-2 text-md font-medium text-white dark:text-gray-900">Title</label>
            @csrf
            <input type="text" name="title" placeholder="title" id="title"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-400  dark:placeholder-gray-800 dark:text-gray-700 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="title" value="{{ old('title') }}" required />
            @error('title')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-5">
            <label for="description"
                class="block mb-2 text-md font-medium text-white dark:text-gray-900">Description</label>
            @csrf
            <input type="text" name="description" placeholder="description"
                class="bg-gray-50 border border-gray-300 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-400  dark:placeholder-gray-800 dark:text-gray-700 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ old('description') }}" required />
            @error('description')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit"
            class="text-white mt-5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
    {{-- <form action="/jobs" method="POST">
        @csrf
        <input type="text" name="title" placeholder="title">
        <input type="text" name="description" placeholder="description">
        <button type="submit">Submit</button>
    </form> --}}

</x-layout>
