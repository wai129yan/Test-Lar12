<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    No
                </th>

                <th scope="col" class="px-6 py-3">
                    Title
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Edit
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($todos as $key => $todo)
                <tr class="border-b border-gray-200 dark:border-gray-700">
                    <th scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">

                        {{ $todos->firstItem() + $key }}
                    </th>

                    <td class="px-6 py-4">
                        {{ $todo->title }}
                    </td>
                    <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                        {{ $todo->description }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $todo->is_completed ? 'Completed' : 'Not Completed' }}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ route('todos.edit', $todo) }}"
                            class="inline-block w-20 text-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>

                        <form action="{{ route('todos.destroy', $todo) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="w-20 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $todos->links('pagination::tailwind') }}
</div>
