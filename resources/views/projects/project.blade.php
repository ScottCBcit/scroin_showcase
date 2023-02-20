<x-layout>
    <x-slot name="content">
          <div class="p-6  bg-grey-100 overflow-hidden">
            <a href="/projects">Back to Projects</a>
            <div class="flex flex-col justify-center items-center max-w-screen-xl">
            <x-projects.project-card :project="$project" :showBody="true" :showExcerpt="false"/>
            </div>
        </div>
    </x-slot>
</x-layout>