<div class="row">
    <div class="col-md-12">
        <div class="dashboard-wrapper user-dashboard">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Date</th>
                        <th>Items</th>
                        <th>Total Price</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($products as $product)
                    <tr>
                        <td>#{{ $product->id }}</td>
                        <td>{{ $product->created_at->format('M d, Y') }}</td>
                        <td>1</td>
                        <td>${{ $product->amount ? $product->amount : '00' }}.00</td>
                        <td><span class="label label-primary">{{ $product->order_status }}</span></td>
                        <td><a href="{{ route('single_product',$product->id) }}" class="btn btn-default">View</a></td>
                    </tr>
                    @empty
                     <h2>No Product Found!!</h2>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>