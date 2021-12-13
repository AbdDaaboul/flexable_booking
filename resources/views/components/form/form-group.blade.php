@props(['type','label', 'name'])
<div class="flex flex-col space-y-2 mb-4">
    <label for="{{$name}}" class="sr-only">{{$label}}</label>
    <label for="{{$name}}" class="">{{ucwords($label)}}</label>
    <input id="{{$name}}" name="{{$name}}" type="{{$type}}" autocomplete="{{$name}}" value="{{($type == 'password')? '' : old($name)}}" required class="appearance-none rounded-none relative block h-12 w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="{{ucWords($label)}}">
    @error($name)
        <p class="text-red-500 text-sm mt-1">{{$message}}</p>
    @enderror
</div>