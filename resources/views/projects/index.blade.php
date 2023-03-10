<x-layout>
    <x-slot name="content">
        <div class=" bg-gray-100 dark:bg-gray-900 flex justify-center items-center py-4 sm:pt-5 sm:items-center">
            <div class="mt-6">
              @if ($category)
              <div class="flex flex-col">
                <a class="w-full items-end" href="/projects">Back to All Projects</a>
                <h1 class="text-2xl font-bold mb-4 text-center">Category: {{ $category->name }}</h1>
              </div>
              @endif
              <section class="grid grid-cols-1 md:grid-cols-2 gap-2">
                @foreach ($projects as $project)
                  <x-projects.project-card :project="$project" :showBody="false" :showExcerpt="true"/>
                @endforeach
              </section>
              @if (count($projects))
                <div class="text-xs w-full text-right">{{ count($projects) }} projects to peep.</div>
              @else
                <div>Nothing to showcase, yet.</div>
              @endif
            </div>
          </div>
    </x-slot>
</x-layout>