<div id="layoutSidenav_content">
    <main class="bg-light">
        <div class="container-fluid px-4 ">
            <h1 class="mt-4 bg-info shadow p-2 rounded">{{ config('app.name') . __(' Customers') }}</h1>
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
                    <h2 class="text-success rounded text-center shadow p-3 bg-info text-light border border-success">{{ __("
                        Customers") }}</h2>
                    <input type="search" class="form-control " wire:model="search" name="search" id="search"
                        placeholder="search for customer by name ">
                    <table class="table table-all table-hoverable">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>{{ __("Name") }}</th>
                                <th>{{ __("Email") }}</th>
                                <th>{{ __("Phone") }}</th>
                                <th>{{ __("Created_at") }}</th>
                                <th>{{ __("Actions") }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($customers as $customer)
                                <tr>
                                    <td>{{ $customer->id }}</td>
                                    <td><a class="nav-link"
                                            href="{{ route('admin.user_details', $customer->id) }}">{{ $customer->full_name }}</a>
                                    </td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ $customer->phone }}</td>
                                    <td>{{ $customer->default_shipping_address }}</td>
                                    <td>{{ $customer->created_at->diffForHumans() }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-danger" title="delete this row"
                                                onclick="return confirm('{{ __('Are You Sure ?') }}')"
                                                wire:click="delete({{ $customer->id }})">{{ __("Delete") }}</button>
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
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $customers->links() }}
                </div>
            </div>
