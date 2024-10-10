<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-8 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Belajar Laravel untuk Pengembangan Aplikasi Hebat</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Dari instalasi hingga fitur-fitur canggih, pelajari bagaimana Laravel dapat membantu kamu membangun aplikasi web yang cepat dan scalable dengan mudah.</p>
                <a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    Mulai Belajar Sekarang
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex gridcols">
                <img src="{{ asset('webiste-mockup.png') }}" alt="mockup">
            </div>                
        </div>
        <div class="container grid grid-cols-1 gap-8 px-4 py-12 mx-auto lg:grid-cols-2">
            <div class="flex flex-col items-center max-w-lg mx-auto text-center">
                <h2 class="text-3xl font-semibold tracking-tight text-gray-800 dark:text-white">
                    Web development
                </h2>
    
                <p class="mt-3 text-gray-500 dark:text-gray-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure ex cupiditate corrupti aliquam eum vel consequuntur hic culpa unde natus officia enim est impedit consequatur aut, voluptatem minima repellat non!</p>
    
                <a href="#" class="inline-flex items-center justify-center w-full px-5 py-2 mt-6 text-white transition-colors duration-300 bg-blue-600 rounded-lg sm:w-auto hover:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    Start now
                </a>
            </div>
    
            <div class="flex flex-col items-center max-w-lg mx-auto text-center">
                <h2 class="text-3xl font-semibold tracking-tight text-gray-800 dark:text-white">
                    Mobile development
                </h2>
    
                <p class="mt-3 text-gray-500 dark:text-gray-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure ex cupiditate corrupti aliquam eum vel consequuntur hic culpa unde natus officia enim est impedit consequatur aut, voluptatem minima repellat non!</p>
    
                <a href="#" class="inline-flex items-center justify-center w-full px-5 py-2 mt-6 text-gray-700 transition-colors duration-300 transform bg-white border border-gray-200 rounded-lg dark:bg-gray-900 dark:border-gray-700 hover:bg-gray-100 dark:text-white sm:w-auto dark:hover:bg-gray-800 dark:ring-gray-700 focus:ring focus:ring-gray-200 focus:ring-opacity-80">
                    Start now
                </a>
            </div>
        </div>
    </section>
</x-layout>