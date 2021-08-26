<div id="layoutSidenav_content">
    <main class="bg-light">
        <div class="container-fluid px-4 ">
            <h1 class="mt-4 bg-info shadow p-2 rounded">{{ config('app.name') . __(' Categories') }}</h1>
            <div class="row">
                <div class="col mx-auto">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
            </div>
            <form class=" p-2 shadow bg-light rounded my-4 " wire:submit.prevent="add_new_category">
                <h2 class="text-success shadow p-3 bg-success text-light border border-success">{{ __("Create New Category") }}</h2>
                <div class="row mb-3">
                    <div class="col-12 mx-auto">
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control @error('name') is-invalid @enderror" wire:model.lazy="name"
                                id="inputFirstName" type="text" placeholder="Enter your first name" />
                            <label for="inputFirstName">{{ __("Category Name") }}</label>
                        </div>
                        @error('name') <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                        @enderror

                    </div>
                    <div class="col-12 mx-auto my-3">
                        <div class="form-floating">
                            <textarea class="form-control @error('description') is-invalid @enderror "
                                wire:model.lazy="description" name="description" placeholder="Category Description"
                                id="description" cols="30" rows="10"></textarea>
                            <label for="description">{{ __("Category Description") }}</label>
                        </div>
                        @error('description') <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                        @enderror

                    </div>
                </div>
                <div class="col mx-auto">
                    <div class="form-group">
                        <label for="Thumbnail">{{ __("Choose Category Thumbnail") }}</label>
                        <div class="input-grou  p">
                            <div class="custom-file">
                                <input type="file" class="form-control" wire:model.lazy="thumbnail" id="Thumbnail">
                                @error('thumbnail') <span
                                    class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                                @if ($thumbnail)
                                    <br>{{ __("Preview") }}:<br>
                                    <img width="25%" height="25%" src="{{ $thumbnail->temporaryUrl() }}">
                                @endif
                                @if ($edit_thumbnail)
                                    <br>{{ __("Old Photo Preview") }}:<br>
                                    <img width="40%" height="40%" src="{{ config('app.url') . $edit_thumbnail }}">
                                @endif

                                <div wire:loading wire:target="photo">{{ __("Uploading") }}...</div><br>
                                @error('photo') <span
                                    class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 mb-0">
                    <div class="d-grid"><button class="btn btn-success btn-block btn-lg">{{ $button_text }}</button>
                    </div>
                </div>
            </form>

            <div class="row mt-4 shadow rounded p-3">
                <div class="col mx-auto">
                    <h2 class="text-success rounded text-center shadow p-3 bg-info text-light border border-success">{{ __("All
                        Categories") }}</h2>
                    <table class="table table-all table-hoverable">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Description') }}</th>
                                <th>{{ __('Thumbnail') }}</th>
                                <th>{{ __('Created_at') }}</th>
                                <th>{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->description }}</td>
                                    <td><img width="50px" height="50px"
                                            src="{{ config('app.url') . $category->thumbnail }}" alt="image"></td>
                                    <td>{{ $category->created_at->format('d-m-y') }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-warning" title="edit this row"
                                                wire:click="edit({{ $category->id }})">{{ __("Edit") }}</button>
                                            <button class="btn btn-sm btn-danger" title="delete this row"
                                                onclick="return confirm('{{ __('Are You Sure ?') }}')"
                                                wire:click="delete({{ $category->id }})">{{ __("Delete") }}</button>
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
                    {{ $categories->links() }}
                </div>
            </div>
