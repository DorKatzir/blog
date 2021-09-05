@props(['trigger'])

<div x-data="{ show:false }" @click.away="show = false">
    {{-- Trigger --}}            
    <div @click="show = !show" class="">
        {{ $trigger }}
    </div>

    {{-- Links --}}
    <div x-show="show" class="py-2 absolute font-semibold bg-gray-100 mt-2 rounded-xl z-50 min-w-full w-max" style="display:none">
        {{ $slot }}
    </div>

</div>