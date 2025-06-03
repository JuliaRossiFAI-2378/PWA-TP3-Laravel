<div>
    <a {{ $attributes->merge(['class' => 'flex justify-center items-center text-center inline-block px-5 py-1.5 rounded-md text-sm leading-normal transition ease-in-out duration-150']) }}>
        {{ $slot }}
    </a>
</div>