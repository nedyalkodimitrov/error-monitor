<div>
    <form wire:submit="addAppVersion" id="addAppVersionForm">
        <div class="modal-body">
            <div class="col-12">
                <label for="appVersionInput" class="form-label">Version</label>
                <input type="text" placeholder="App Version" class="form-control" id="appVersion" wire:model="app_version">
                @error('form.app_version') <span class="error">{{ $message }}</span> @enderror

                <input type="text" id="appId" value="{{$app->id}}" hidden>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Create Version</button>
        </div>
    </form>
</div>
