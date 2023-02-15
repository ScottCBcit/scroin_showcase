<x-layout>
    <x-slot name="content">
        <div class="flex flex-col ">
            <div class="text-left mt-4 mb-4 p-4">
              <a href="/projects">Back to Projects</a>
            </div>
            <div class="flex-1 items-center justify-center text-center">
              Display Project details and links
              <x-projects.project-card :project="$project" />
            </div>
          </div>
    </x-slot>
</x-layout>