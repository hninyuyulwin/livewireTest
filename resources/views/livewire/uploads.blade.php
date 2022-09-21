<div>
  <section style="padding-top: 60px;">
    <style>
      nav svg {
        height: 20px;
      }
    </style>
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="card">
            <div class="card-header">
              <h3>File Upload</h3>
            </div>
            <div class="card-body">
              @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
              @endif
              <form wire:submit.prevent="fileUpload" id="form-upload" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" name="title" class="form-control" wire:model="title">
                  @error('title')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="filename">File Name</label>
                  <input type="file" name="filename" class="form-control" wire:model="filename">
                  @error('filename')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <button type="submit" class="btn btn-success">Upload</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="card">
            <div class="card-header">
              <h3>Showing List</h3>
            </div>
            <div class="card-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>File</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($files as $file)
                  <tr>
                    <td>{{ $file->id }}</td>
                    <td>{{ $file->title }}</td>
                    <td>
                      <img src="{{ Storage::url($file->filename) }}" width="150" alt="">
                    </td>
                  </tr>
                  @endforeach                  
                </tbody>
              </table>
              {{ $files->links() }}
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
