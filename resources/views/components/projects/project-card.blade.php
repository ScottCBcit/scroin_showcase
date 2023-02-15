
@props(['project', 'showBody' => false])


<div class="p-6  bg-white overflow-hidden shadow sm:rounded-lg">
    <div class="text-xl font-bold underline">
        <a href="/projects/{{ $project->id }}">{{ $project->title }}</a>
    </div>
    <div class="text-l font-semibold">{!! $project->excerpt !!}</div>
    @if ($showBody)
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