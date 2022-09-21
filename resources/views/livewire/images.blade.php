<div>
  <div class="container" style="padding-top: 60px;">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-header">
            <h3>Upload Multiple Images</h3>
          </div>
          <div class="card-body">
            @if (session('message'))
              <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <form id="multi-upload" enctype="multipart/form-data">
              <div class="form-group">
                <label for="filename">Upload File </label>
                <input type="file" name="filename" class="form-control" multiple wire:model="images">
              </div>
              <button wire:click.prevent="multiUpload" type="submit" class="btn btn-success">Upload</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>