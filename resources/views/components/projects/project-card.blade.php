@props(['project'])

<a href="/projects/{{ $project['id'] }}">
    <div class="p-6  bg-white overflow-hidden shadow sm:rounded-lg">
        <div>
            {{ $project['title'] }}
        </div>
        <div>{{ $project['description'] }}</div>
    </div>
</a>