<x-layout>
    <div class="flex flex-col rounded-2xl w-full md:rounded-3xl shadow-lg gap-4 md:gap-8 max-w-5xl mx-auto px-8 py-8 ">
          <h1 class="text-xl md:text-3xl font-bold self-center mb-4">{{$recipe->name}}</h1>
          <div class="flex flex-col gap-1">
            <h2 class="md:text-lg font-medium">Description:</h2>
            <p class="md:text-lg">{{$recipe->description}}</p>
          </div>

          <div class="flex gap-2">
            <h2 class="md:text-lg font-medium">Duration:</h2>
            <p class="md:text-lg">{{$recipe->duration}} minutes</p>
          </div>

          <div class="flex gap-2">
            <h2 class="md:text-lg font-medium">Food Origin:</h2>
            <p class="md:text-lg">{{$recipe->origin}}</p>
          </div>

          <div class="flex gap-2">
            <h2 class="md:text-lg font-medium">Cooking Type:</h2>
            <p class="md:text-lg">{{$recipe->cooking_type}}</p>
          </div>
          
          <div class="flex flex-col gap-1">
            <h2 class="md:text-lg font-medium">Ingredients:</h2>
            <ul class="list-disc list-inside">
              @foreach (explode(", ", $recipe->ingredients) as $ingredient)
                  <li class="md:text-lg">{{ $ingredient }}</li>
              @endforeach
            </ul>
          </div>

          <div class="flex flex-col gap-1">
            <h2 class="md:text-lg font-medium">Steps:</h2>
            <ol class="list-decimal list-inside">
              @foreach (explode(", ", $recipe->steps) as $step)
                  <li class="md:text-lg">{{ $step }}</li>
              @endforeach
            </ol>
          </div>

          <div class="flex gap-2">
            <h2 class="md:text-lg font-medium">Recipe by:</h2>
            <p class="md:text-lg">{{$user}}</p>
          </div>
  </div>
</x-layout>