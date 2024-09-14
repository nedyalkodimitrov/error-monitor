<div>
    <form wire:submit="editApp" class="col-12">
        <div class="col-12">
            <label for="appNameInput" class="form-label">Name</label>
            <input type="text" placeholder="App Name" class="form-control" wire:model="name" value="{{$app->name}}"
                   id="appNameInput">

            @error('form.name') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="col-12">
            <label for="appTechnologyInput" class="form-label">Technology</label>
            <input type="text" placeholder="App Technology" class="form-control"
                   value="{{$app->technology}}" id="appTechnologyInput" wire:model="technology">

            @error('form.technology') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="col-12">
            <label for="appDescriptionInput" class="form-label" wire:model="description">Description</label>
            <input type="text" name="technology" placeholder="App Technology" class="form-control"
                   value="{{$app->description}}" id="appDescriptionInput" wire:model.live="description">

            @error('form.description') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
</div>
