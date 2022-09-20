<div>
    Name : <br>
    <input type="text" wire:model.debounce.3000ms="name"> <br><br> {{-- debounce.1000ms means wait 1s, 3000ms=3s --}}

    Message : <br>
    <textarea cols="30" rows="5" wire:model="message"></textarea> <br><br>

    Marital Status : <br>
    Single <input type="radio" name="marital" value="Single" wire:model="marital_status">
    Married <input type="radio" name="marital" value="Married" wire:model="marital_status"><br><br>

    Favourite Colors : <br>
    Blue <input type="checkbox" wire:model="colors" value="Blue"><br>
    Pink <input type="checkbox" wire:model="colors" value="Pink"><br>
    Violet <input type="checkbox" wire:model="colors" value="Violet"><br>
    Orange <input type="checkbox" wire:model="colors" value="Orange"><br>
    Green <input type="checkbox" wire:model="colors" value="Green"><br><br>

   Favourite Fruit : 
    <select wire:model="fruit">
        <option value="">Choose your Favourite Fruit</option>
        <option value="Mangosteen">Mangosteen</option>
        <option value="Lychee">Lychee</option>
        <option value="Lemon">Lemon</option>
        <option value="Kiwi">Kiwi</option>
        <option value="Blueberry">Blueberry</option>
    </select>
    <hr>

    Name : {{ $name }} <br>
    Message : {{ $message }}<br>
    Marital Status : {{ $marital_status }}<br>
    Favourite Colors : 
    <ul>
        @foreach ($colors as $col)
            <li>{{ $col }}</li>
        @endforeach
    </ul><br>
    Favourite Fruit : {{ $fruit }}<br>
</div>
