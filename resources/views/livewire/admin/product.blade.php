<div id="layoutSidenav_content">
    <main class="bg-light">
        <div class="container-fluid px-4 ">
            <h1 class="mt-4 bg-info shadow p-2 rounded">{{ config('app.name') . __(' Products') }}</h1>
            <div class="row">
                <div class="col mx-auto">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
            </div>
         
            <form class=" p-2 shadow bg-light rounded my-4 " wire:submit.prevent="add_new_product">
                <h2 class="text-success shadow p-3 bg-success text-light border rounded border-success">Create New Porduct</h2>

                <div class="row mb-3">

                    <div class="col-12 mx-auto my-2">
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control @error('name') is-invalid @enderror" wire:model.lazy="name"
                                id="p_name" type="text" placeholder="Enter Product Name" />
                            <label for="p_name">Product Name</label>
                        </div>
                        @error('name') <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-12 mx-auto my-2">
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control @error('Weight') is-invalid @enderror" wire:model.lazy="weight"
                                id="Weight" type="number" placeholder="Enter Product Weight" />
                            <label for="p_name">Product Weight <small class="text-success">kg's</small></label>
                        </div>
                        @error('weight') <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                      <div class="col-12 mx-auto my-2">
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control @error('price') is-invalid @enderror" wire:model.lazy="price"
                                id="price" type="number" placeholder="Enter Product Price" />
                            <label for="price">Product Price</label>
                        </div>
                        @error('price') <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-12 mx-auto my-2">
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control @error('Stock') is-invalid @enderror" wire:model.lazy="stock"
                                id="Stock" type="number" placeholder="Enter Product Stock" />
                            <label for="Stock">Product Stock</label>
                        </div>
                        @error('stock') <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-12 mx-auto my-2">
                        <div class="form-floating">
                            <textarea class="form-control @error('description') is-invalid @enderror "
                                wire:model.lazy="description" name="description" placeholder="Product Description"
                                id="description" cols="30" rows="10"></textarea>
                            <label for="description">Product Description</label>
                        </div>
                        @error('description') <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                        <div class="form-group col-12 mx-auto my-2">
                            <select class="form-control form-control-lg @error('category') is-invalid @enderror"
                                wire:model.lazy="category">
                                <option selected> {{ $category != '' ? $category : ' -- Choose Product Category -- ' }}</option>
                                @forelse ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @empty
                                    <option value="" class="text-warning">{{ __('No head Found!') }}</option>
                                @endforelse
                            </select>
                            @error('category') <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                </div>

                <div class="col mx-auto">
                    <div class="form-group">
                        <label for="Thumbnail">Choose Product Thumbnail</label>
                        <div class="input-grou p">
                            <div class="custom-file">
                                <input type="file" class="form-control" wire:model.lazy="thumbnail" id="Thumbnail">
                                @error('thumbnail') <span
                                    class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                                    <div wire:loading wire:target="thumbnail">Uploading...</div><br>
                                    @if ($thumbnail)
                                    <br>Preview:<br>
                                    <img width="25%" height="25%" src="{{ $thumbnail->temporaryUrl() }}">
                                @endif
                                @if ($edit_thumbnail)
                                    <br>Old Photo Preview:<br>
                                    <img width="40%" height="40%" src="{{ config('app.url') . $edit_thumbnail }}">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col mx-auto">
                    <div class="form-group">
                        <label for="Thumbnail">Choose Product Image</label>
                        <div class="input-grou p">
                            <div class="custom-file">
                                <input type="file" class="form-control" wire:model.lazy="image" id="image">
                                @error('image') <span
                                    class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                                    <div wire:loading wire:target="image">Uploading...</div><br>
                                    @if ($image)
                                    <br>Preview:<br>
                                    <img width="25%" height="25%" src="{{ $image->temporaryUrl() }}">
                                @endif
                                @if ($edit_image)
                                    <br>Old image Preview:<br>
                                    <img width="40%" height="40%" src="{{ config('app.url') . $edit_image }}">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                


                <div class="mt-4 mb-0">
                    <div class="d-grid"><button class="btn btn-success btn-block btn-lg">{{ $button_text }}</button>
                    </div>
                </div>
            </form>

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
                    <h2 class="text-success rounded text-center shadow p-3 bg-info text-light border border-success">All
                        Products</h2>
                    <table class="table table-all table-hoverable">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Name</th>
                                <th>Weight</th>
                                <th>Stock</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Thumbnail</th>
                                <th>Created_at</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($products as $Product)
                                <tr>
                                    <td>{{ $Product->id }}</td>
                                    <td>{{ $Product->name }}</td>
                                    <td>{{ $Product->weight }}</td>
                                    <td>{{ $Product->stock }}</td>
                                    <td>{{ $Product->description }}</td>
                                    <td>{{ $Product->category_id }}</td>

                                    <td><img width="50px" height="50px"
                                            src="{{ config('app.url') . $Product->image }}" alt="image"></td>

                                    <td><img width="50px" height="50px"
                                            src="{{ config('app.url') . $Product->thumbnail }}" alt="image"></td>
                                    <td>{{ $Product->created_at->format('d-m-y') }}</td>

                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-warning" title="edit this row"
                                                wire:click="edit({{ $Product->id }})">Edit</button>
                                            <button class="btn btn-sm btn-danger" title="delete this row"
                                                onclick="return confirm('{{ __('Are You Sure ?') }}')"
                                                wire:click="delete({{ $Product->id }})">Delete</button>
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
                                    <td class="text-warning">{{ __('Null') }}</td>
                                    <td class="text-warning">{{ __('Null') }}</td>
                                    <td class="text-warning">{{ __('Null') }}</td>
                                    <td class="text-warning">{{ __('Null') }}</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    {{ $products->links() }}
                </div>
            </div>
            <br>
