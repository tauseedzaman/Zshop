<div class="contact-form col-md-6 " >
    @if (session()->has('success'))
        <div id="mail-success" class="alert alert-success">
            <p class="text-primary text-capitalize">Thank you For Contacting us. </p>
        </div>

    @endif
    <form id="contact-form" wire:submit.prevent="add_contact_us_request" role="form">

        <div class="form-group">
            <input type="text" placeholder="Your Name" class="form-control" wire:model.lazy="name" name="name" id="name">

        @error('name')
        <div id="" class="text-danger">
            {{$message}}
        </div>
        @enderror
        </div>

        <div class="form-group">
            <input type="email" placeholder="Your Email" class="form-control" name="email" wire:model.lazy="email" id="email">

        @error('email')
        <div id="" class="text-danger">
            {{$message}}
        </div>
            @enderror
        </div>

        <div class="form-group">
            <input type="text" placeholder="Subject" class="form-control" wire:model.lazy="subject" name="subject" id="subject">

        @error('subject')
        <div id="" class="text-danger">
            {{$message}}
        </div>
            @enderror
        </div>

        <div class="form-group">
            <textarea rows="6" placeholder="Message" class="form-control" wire:model.lazy="message" name="message" id="message"></textarea>

        @error('message')
        <div id="" class="text-danger">
            {{$message}}
        </div>
        @enderror
        </div>




        <div id="cf-submit">
            <input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
        </div>

    </form>
</div>

