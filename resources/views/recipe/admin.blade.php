<x-layout>
    <h1>Admin</h1>

    <div class="flex flex-col w-full">
         @unless (count($recipes) == 0)
        @foreach ($recipes as $recipe)
            <x-authenticated-card :data="$recipe" />
        @endforeach
        @else
        <p>No Recipes Yet...</p>
        @endunless
    </div>
   
</x-layout>