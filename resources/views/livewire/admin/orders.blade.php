<div id="layoutSidenav_content">
    <main class="bg-light">
        <div class="container-fluid px-4 ">
            <h1 class="mt-4 bg-info shadow p-2 rounded">{{ config('app.name') . __(' Orders') }}</h1>
            <div class="row">
                <div class="col mx-auto">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="row mt-4 shadow rounded p-3">
                <div class="col mx-auto">
                    <h2 class="text-success rounded text-center shadow p-3 bg-info text-light border border-success">All Orders</h2>
                    <table class="table table-all table-hoverable">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Client</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Product</th>
                            <th>Status</th>
                            <th>Created_at</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td><a href="{{ route('admin.user_details',$order->user_id) }}" class="nav-link">{{ $order->user->full_name }}</a></td>
                                <td>{{ $order->shipping_address }}</td>
                                <td>{{ $order->order_email }}</td>
                                @foreach ($order->details as $pro)
                                  <td><a href="{{ route('single_product',$pro->product_id) }}">{{ $pro->product_id }}</a></td>
                                @endforeach
                                <td><span class="bg-info p-1 ">{{ $order->order_status }}</span></td>
                                <td>{{ $order->created_at->format('d-m-y') }}</td>
                                <td>
                                    {{-- <div class="btn-group">
                                        <select name="status" wre:model="status" id="">
                                            <option value="" selected>Status</option>
                                            <option value="1">Porcessing</option>
                                            <option value="2">completed</option>
                                            <option value="3">Canncel</option>
                                        </select> --}}
                                        <button class="btn btn-sm btn-danger" title="delete this row" onclick="return confirm('{{ __('Are You Sure ?')  }}')" wire:click="delete({{$order->id}})">Delete</button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-warning">{{ __('Null') }}</td>
                                <td class="text-warning">{{ __('Null') }}</td>
                                <td class="text-warning">{{ __('Null') }}</td>
                                <td class="text-warning">{{ __('Null') }}</td>
                                <td class="text-warning">{{ __('Null') }}</td>
                                <td class="text-warning">{{ __('Null') }}</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    {{ $orders->links() }}
                </div>
            </div>
