@props(['data'])

<a href="/recipe/{{$data->id}}" class="flex p-4 shadow-lg justify-between w-full">
    <h2>{{$data->name}}</h2>

    <div class="flex divide-x-2">
        <span class="px-2">{{$data->cooking_type}}</span>
        <span class="px-2">{{$data->duration}} min</span>
    </div>
</a>