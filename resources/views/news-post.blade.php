<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="max-w-screen-xl flex flex-col items-center gap-5">
        <img class="max-w-sm rounded-lg" src={{ $post->image }} alt="" />
        <div class="flex justify-between items-center min-w-full">
            <a href="/authors/{{ $post->user->username }}"  class="flex items-center space-x-4 hover:underline">
                <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Jese Leos avatar" />
                <span class="font-medium dark:text-white">
                    {{ $post->user->name }}
                </span>
            </a>
            <a href="/categories/{{ $post->category->slug }}" class="bg-{{ $post->category->color }}-100 text-primary-800 text-lg font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800 hover:underline">
                {{ $post->category->type }}
            </a>
        </div>

        <section class="bg-white border border-gray-200 p-5 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 min-w-full">
            <div class="w-full flex gap-5 justify-between mb-5">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h5>
                <a href="/news" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                    <svg class="ml-2 w-4 h-4 rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    Back to News
                </a>
                
            </div>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-4 text-justify">{{ $post->content }}</p>
        </section>
    </article>
</x-layout>
