@props(['job'])

<x-panel
    class="flex flex-col text-center"
>

    <div class="self-start text-sm transition-colors duration-300">{{ $job->employer->name }}</div>

    <div class="py-8">
        <h3 class="group-hover:text-blue-600 font-bold transition-colors duration-1000">{{ $job->title }}</h3>
        <p class="text-sm mt-4">{{ $job->salary }}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach($job->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach
        </div>

        <x-employer-logo width="42" />
    </div>

</x-panel>
