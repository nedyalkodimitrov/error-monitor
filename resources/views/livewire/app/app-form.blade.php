<div>
    <div class="form-group">
        <label for="technology">Technology</label>
        <select class="form-control" id="technology" name="technology_id" wire:change="getVersionsForTechnology">
            <option value="">Select Technology</option>
           @foreach($technologies as $technology)
               <option value="{{$technology->id}}">{{$technology->name}}</option>
           @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="version">Technology Version</label>
        <select class="form-control" id="version" name="technology_version">
            <option value="">Select Version</option>
          @foreach($versions as $version)
              <option value="{{$version->id}}">{{$version->version}}</option>
          @endforeach
        </select>
    </div>
</div>
