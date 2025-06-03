@props(['postImage' => null, 'link' => '#'])

<a href="{{ $link }}" class="group">
    <div 
        class="flex flex-col rounded-lg bg-[#3366CC] w-[20rem] lg:w-[30rem] min-h-96 max-h-96 mb-6 overflow-y-auto custom-scroll
               border-2 border-transparent
               shadow-sm shadow-transparent
               transition duration-300 ease-in-out
               group-hover:border-[#FFBBCC]
               group-hover:shadow-lg group-hover:shadow-[#33CCBB]
               group-hover:scale-105
               transform"
    >
        @if($postImage)
            <img src="{{ $postImage }}" class="rounded-t-md h-40 object-cover w-full">
        @endif

        <h2 class="font-bold text-2xl text-center px-4 pt-4 text-[#FFCC11]">
            {{ $postTitle }}
        </h2>

        <div class="text-center p-4 text-white">
            <p>
                {{ $postContent }}
            </p>
        </div>
    </div>
</a>
