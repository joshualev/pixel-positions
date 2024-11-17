@props(['job'])

<x-panel class="flex-col">
    <div class="self-start text-sm">{{ $job->employer->name }}</div>

    <div class="py-8 text-center space-y-6">
        <h3 class="group-hover:text-blue-600 text-xl font-bold transition-colors duration-300">{{ $job->title }}</h3>
        <p class="text-sm my-4">{{ $job->salary }}</p>
    </div>

    <div class="flex justify-between items-end mt-auto">
        <div>
            @foreach($job->tags as $tag)
                <x-tag :$tag size="small"/>
            @endforeach
        </div>

        <x-employer-logo :width="42" />
    </div>
</x-panel>
