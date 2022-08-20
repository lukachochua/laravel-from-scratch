<x-layout>
    <x-setting heading="Manage Posts">
        <table class="table p-4 bg-white shadow rounded-lg w-full">
            <tbody>
                @foreach ($posts as $post)
                    <tr class="text-gray-700">
                        <td class="border-b-2 p-4 dark:border-dark-5">
                            <a href="/posts/{{ $post->slug }}">
                                {{ $post->title }}
                            </a>
                        </td>

                        <td class="border-b-2 p-4 dark:border-dark-5">
                            <a href="/admin/posts/{{ $post->id }}/edit" class="text-blue-500 hover:text-indigo-900">Edit</a>
                        </td>

                        <td class="border-b-2 p-4 dark:border-dark-5">
                            <form method="POST" action="/admin/posts/{{ $post->id }}">
                                @csrf
                                @method('DELETE')

                                <button class="text-xs text-gray-400">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-setting>
</x-layout>