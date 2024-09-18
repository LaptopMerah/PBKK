<li>
    <a {{ $attributes }}
        class="{{ $isActive ? 'text-white bg-blue-700 md:bg-transparent md:text-blue-700' : 'text-gray-900' }} block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
        aria-current="{{$isActive ? 'page' : false }}">
        {{ $slot }}
    </a>
</li>
