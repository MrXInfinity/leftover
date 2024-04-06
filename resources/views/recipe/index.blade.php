<x-layout>
  <x-search />

    <div class="flex flex-col md:grid md:grid-cols-2 gap-4 w-full">

          @unless(count($recipes) == 0)
          @foreach($recipes as $recipe)
          <x-card :data="$recipe" />
          @endforeach

          @else
          <p>No Recipes Yet...</p>
          @endunless

  </div>
</x-layout>