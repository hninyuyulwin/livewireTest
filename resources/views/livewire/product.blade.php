<div>
    Title : <input type="text" wire:model="title"><br><br>
    Name : <input type="text" wire:model="name"><br><br>

    <hr>

    <h3>Title : {{ $title }}</h3>
    <h3>Name : {{ $name }}</h3>

    <h3>Lifecycle hook method</h3>
    @foreach ($infos as $info)
        <h4>{{ $info }}</h4>
    @endforeach


</div>
