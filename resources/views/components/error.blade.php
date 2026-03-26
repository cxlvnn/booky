@props([
    'name' => 'required'
])

@error($name)
    <div>
        <p class="text-xs pl-2 py-1 text-red-500">{{ $message }}</p>
    </div>
@enderror
