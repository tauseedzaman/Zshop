<div class="col-lg-6 col-md-offset-3">
    @if (session()->has('message'))
        <div class="alert alert-success"  >
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <form wire:submit.prevent="add_subscriber" class="input-group subscription-form">
        <input type="email" autocomplete="email" name="email" class="form-control" wire:model="email" placeholder="Enter Your Email Address">
        <span class="input-group-btn">
            <button class="btn btn-main" type="submit">Subscribe Now!</button>
        </span>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </form><!-- /input-group -->
</div><!-- /.col-lg-6 -->
