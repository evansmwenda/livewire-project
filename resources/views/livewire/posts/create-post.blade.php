<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <form wire:submit="save"> 
        <label for="title">Title:</label>
    
        <input type="text" id="title" wire:model="title">
    
        <button type="submit">Save</button>
    </form>
</div>
