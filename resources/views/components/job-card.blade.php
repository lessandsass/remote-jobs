@props(['job'])

<x-panel
    class="flex flex-col text-center"
>

    <div class="self-start text-sm transition-colors duration-300">Laracasts</div>

    <div class="py-8">
        <h3 class="group-hover:text-blue-600 font-bold transition-colors duration-1000">Video Producer</h3>
        <p>Full Time - From $60,000</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach($job->tags as $tag)
                <x-tag :$tag size="small">Backend</x-tag>
            @endforeach
        </div>

        <x-employer-logo width="42" />
    </div>

</x-panel>
