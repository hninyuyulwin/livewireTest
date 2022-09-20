<div>
    <button type="button" wire:click="sumtwoNumber(150,528)">Sum</button><br><br>
    Type Message : <br>
    <textarea wire:keydown.enter="getMessage($event.target.value)" cols="30" rows="5"></textarea><br><br>
    
    <form wire:submit.prevent="getSum">
        Num 1 : <input type="text" wire:model="num1"><br><br>
        Num 2 : <input type="text" wire:model="num2"><br><br>
        <button type="submit">Submit</button>
    </form><br>
    <hr>
    Sum Result : {{ $sum }} <br>
    Message : {{ $message }}
</div>