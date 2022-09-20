<div>
  <div class="container pt-5">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-header">
              <h3>Contact Form</h3>
          </div>
          <div class="card-body">
            <form action="" wire:submit.prevent="submitForm">
                <div class="form-group">
                  <label for="">Name : </label>
                  <input type="text" name="name" class="form-control" wire:model="name">
                  @error('name')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="">Email : </label>
                  <input type="email" name="email" class="form-control" wire:model="email">
                  @error('email')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="">Phone : </label>
                  <input type="number" name="phone" class="form-control" wire:model="phone">
                  @error('phone')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="msg">Message :</label>
                  <textarea name="msg" class="form-control" rows="6"  wire:model="msg"></textarea>
                  @error('msg')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>
                <button class="btn btn-success" type="submit">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
