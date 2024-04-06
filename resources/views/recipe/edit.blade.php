<x-layout>
        <x-modal>
            <h1 class="font-medium text-xl mb-2">New Recipe</h1>
            <form class="flex flex-col gap-4 w-full" method="POST" action="/recipe/{{$recipe->id}}">
                @csrf
                @method("PUT")
                <div class="flex flex-col gap-1 w-full ">
                    <label class=" font-medium">Name:</label>
                    <input class="border-2 border-slate-200 p-2" name="name" value="{{$recipe->name}}" />

                    @error('name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="flex flex-col gap-1 w-full ">
                    <label class=" font-medium">Description:</label>
                    <textarea class="border-2 resize-none h-20 border-slate-200 p-2" name="description">{{$recipe->description}}</textarea>

                    @error('description')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="flex flex-col gap-1 w-full ">
                    <label class=" font-medium">Ingredients: (seperate by comma)</label>
                    <textarea class="border-2 resize-none h-20 border-slate-200 p-2" name="ingredients" >{{$recipe->ingredients}}</textarea>

                    @error('ingredients')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="flex flex-col gap-1 w-full ">
                    <label class=" font-medium">Cooking Type:</label>
                    <input class="border-2 border-slate-200 p-2" name="cooking_type" value="{{$recipe->cooking_type}}" />

                    @error('cooking_type')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="flex flex-col gap-1 w-full ">
                    <label class=" font-medium">Duration:</label>
                    <input class="border-2 border-slate-200 p-2" name="duration" type="number" value="{{$recipe->duration}}" />

                    @error('duration')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="flex flex-col gap-1 w-full ">
                    <label class=" font-medium">Origin:</label>
                    <input class="border-2 border-slate-200 p-2" name="origin" value="{{$recipe->origin}}" />

                    @error('origin')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="flex flex-col gap-1 w-full ">
                    <label class=" font-medium">Steps: (seperate by comma)</label>
                    <textarea class="border-2 resize-none h-20 border-slate-200 p-2" name="steps" >{{$recipe->steps}}</textarea>

                    @error('steps')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>


                <button type="submit" class="text-white text-center bg-[#F8A45D] font-medium py-2.5 mt-4">Submit</button>
            </form>
        </x-modal>
</x-layout>