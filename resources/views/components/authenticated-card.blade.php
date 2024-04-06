@props(['data'])

<div  class="flex p-4 shadow-lg justify-between">
    <h2>{{$data->name}}</h2>

    <div class="flex divide-x-2">
        <span class="px-2">{{$data->cooking_type}}</span>
        <span class="px-2">{{$data->duration}} min</span>
    </div>

    <div class="flex items-center divide-x-2">
        <a href="/recipe/{{$data->id}}" class="px-2">
            <img src="/svg/link.svg" alt="View Image" class="h-4 w-4" />
        </a>
        <a href="recipe/{{$data->id}}/edit" class="px-2">
            <img src="/svg/edit.svg" alt="View Image" class="h-4 w-4" />
        </a>
        <form method="POST" action="recipe/{{$data->id}}" >
            @csrf
            @method("DELETE")
            <button type="submit" class="px-2">
            <img src="/svg/trash.svg" alt="View Image" class="h-4 w-4" />
        </button>
        </form>
        
    </div>


</div>