<div>
    <form id="editAppVersionForm" class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit version</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="col-12">
                <div class="col-12">
                    <label for="appVersion" class="form-label">Version</label>
                    <input type="text" name="appVersion" wire:model="appVersionName" id="appVersion" class="form-control">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" id="createVersionBtn" class="btn btn-primary" wire:click="updateApp">Edit Version</button>
        </div>
    </form>
</div>
