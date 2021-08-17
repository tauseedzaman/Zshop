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
                            <th>Phone</th>
                            <th>Product</th>
                            <th>Created_at</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->created_at->format('d-m-y') }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-warning" title="edit this row" wire:click="edit({{$order->id}})">Edit</button>
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
