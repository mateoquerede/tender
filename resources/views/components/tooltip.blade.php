<div class="relative flex flex-col items-center group">
    {{ $elemento }}

    <div class="absolute bottom-0 flex flex-col items-center hidden mb-6 group-hover:flex">
        <span class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-white dark:bg-gray-800 rounded-md shadow-lg">
            {{ $contenido }}
        </span>
        <div class="w-3 h-3 -mt-2 rotate-45 bg-white dark:bg-gray-800"></div>
    </div>
</div>
