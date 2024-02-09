<div>
    <h1>{{ $count }}</h1>
 
    <button wire:click="increment">+</button>
 
    <button wire:click="decrement">-</button>


    <form>
    <label for="title">Title:</label>
 
    <input type="text" id="title" wire:model.live="title"> 
</form>
</div>
