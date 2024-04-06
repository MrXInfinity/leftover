<x-layout>
        <x-modal>
            <h1 class="font-medium text-xl mb-2">Login</h1>
            <form class="flex flex-col gap-4 w-full" method="post" action="/login">
                @csrf
                <div class="flex flex-col gap-1 w-full ">
                    <label class=" font-medium">Email:</label>
                    <input class="border-2 border-slate-200 p-2" name="email" type="email" value="{{old('email')}}" />

                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="flex flex-col gap-1 w-full">
                    <label class=" font-medium">Password:</label>
                    <input class="border-2 border-slate-200 p-2" name="password" type="password" />

                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <button type="submit" class="text-white text-center bg-[#F8A45D] font-medium py-2.5 mt-4">Submit</button>
            </form>
        </x-modal>
</x-layout>