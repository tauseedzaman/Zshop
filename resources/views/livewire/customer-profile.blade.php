<div class="media ">
    <div class="pull-left text-center" href="#!">
        <img class="media-object user-img" src="{{  (auth()->user()->photo ? config('app.url').auth()->user()->photo : 'images/avater.jpg')}}" alt="Image">
        <input type="file" name="" wire:model="photo" id="" class="form-control">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    </div>
    <div class="media-body">
        <ul class="user-profile-list">
            <li><span>Full Name:</span>{{ auth()->user()->full_name }}</li>
            <li><span>Country:</span>{{ auth()->user()->country }}</li>
            <li><span>Email:</span>{{ auth()->user()->email }}</li>
            <li><span>Phone:</span>{{ auth()->user()->phone }}</li>
            <li><span>Jioned on:</span>{{ auth()->user()->created_at->format('D d-M-Y') }}</li>
        </ul>
    </div>
</div>