<div class="dashboard-wrapper user-dashboard">
    <div class="media">
        <div class="pull-left">
            <img class="media-object user-img"
                src="{{ auth()->user()->photo ? config('app.url') . auth()->user()->photo : 'images/avater.jpg' }}"
                alt="Image">
            <input type="file" title="choose you profile image" name="" wire:model="photo" id="" class="form-control">
        </div>
        <div class="media-body">
            <h2 class="media-heading">Welcome {{ auth()->user()->full_name }}</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, iure, est. Sit mollitia est maxime! Eos
                cupiditate tempore, tempora omnis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim,
                nihil. </p>
        </div>
    </div>
    <div class="total-order mt-20">
        <h4>Total Orders</h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Date</th>
                        <th>Items</th>
                        <th>Total Price</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($products as $product)
                    <tr>
                        <td><a href="#!">#252125</a></td>
                        <td>Mar 25, 2016</td>
                        <td>2</td>
                        <td>$ 99.00</td>
                    </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
