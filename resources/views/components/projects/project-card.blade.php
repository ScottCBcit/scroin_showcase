
@props(['project', 'showBody' => false, 'showExcerpt' => false])


<div class="p-6  bg-white overflow-hidden shadow sm:rounded-lg">
    <div class="text-xl font-bold underline">
        <a href="/projects/{{ $project->slug }}">{{ $project->title }}</a>
    </div>
    @if ($showExcerpt)
    <div class="flex flex-row items-center justify-center">
        <div class="max-w-[50px] object-coverp px-2 py-2"><img src="{{url('storage/images/thumbnail-placeholder.png')}}"></div>
        <div class="text-l font-semibold">{!! $project->excerpt !!}</div>
    </div>
    
    @endif
    @if ($showBody)
    <div>
        <img src="{{url('storage/images/project-placeholder.png')}}">
    </div>
        <div class="m-5">
            @foreach (explode('</p>', $project->body) as $paragraph)
            @if (!empty($paragraph))
                <p class="mb-5">{!! strip_tags($paragraph, '<a><b><strong><em><i><u><ul><ol><li><br>') !!}</p>
            @endif
            @endforeach
        </div>
    @endif
    <footer>
        @if ($project->category)
        <a class="font-bolder underline" href="/categories/{{ $project->category->slug }}">
            <span>Category: {{ $project->category->name }}</span>
        </a>
        @endif
    </footer>
</div>