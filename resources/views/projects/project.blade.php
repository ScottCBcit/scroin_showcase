<x-layout>
    <x-slot name="content">
          <div class="p-6  bg-grey-100 overflow-hidden">
            <a href="/projects">Back to Projects</a>
            <x-projects.project-card :project="$project" :showBody="true"/>
        </div>
    </x-slot>
</x-layout>