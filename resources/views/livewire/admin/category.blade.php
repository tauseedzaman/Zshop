<br><br>
<div class="row">
    <div class="col-md-10 mx-auto">
        @if (session()->has('message'))
            <div class="alert alert-success"  >
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    </div>
    <div class="col-md-10 mx-auto">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add New Category</h3>
            </div>
            <form wire:submit.prevent="add_new_category">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        {{$name}}
                        <input type="text" class="form-control" id="name" wire:model="name" placeholder="Enter Name">
                        @error('name') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Description">Description</label>
                        <input type="text" wire:model.lazy="description" class="form-control" id="Description" placeholder="Enter Description">
                        @error('description') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Thumbnail">Thumbnail</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file"  class="custom-file-input" wire:model.lazy="thumbnail" id="Thumbnail">
                                <label class="custom-file-label" for="Thumbnail">Choose Thumbnail</label>
                                @error('thumbnail') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                                @if ($thumbnail)
                                    <br>Preview:<br>
                                    <img width="20%" height="20%" src="{{ $thumbnail->temporaryUrl() }}">
                                @endif
                                @if ($edit_thumbnail)
                                    <br>Old Photo Preview:<br>
                                    <img width="20%" height="20%" src="{{ config('app.url').'storage/'.$edit_thumbnail }}">
                                @endif

                                <div wire:loading wire:target="photo">Uploading...</div><br>
                                @error('photo') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">{{ $button_text }}</button>
                </div>
            </form>
        </div>
    </div>
<br><br>
<div class="col-md-10 mx-auto mt-5  ">
    <div class="card ">
        <div class="card-header">
            <h3 class="card-title text-capitalize text-success">{{ config('app.name') }} Categories</h3>
            <div class="card-tools ">
                <ul class="pagination pagination-sm float-right">
                    <li class="page-item"><a class="page-link text-warning " href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link  text-warning" href="#">1</a></li>
                    <li class="page-item"><a class="page-link text-warning" href="#">2</a></li>
                    <li class="page-item"><a class="page-link text-warning" href="#">3</a></li>
                    <li class="page-item"><a class="page-link text-warning" href="#">&raquo;</a></li>
                </ul>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Thumbnail</th>
                    <th>Created_at</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td><img width="50px" height="50px" src="{{  $category->thumbnail }}" alt="image"></td>
                        <td>{{ $category->created_at->format('d-m-y') }}</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-sm btn-warning" wire:click="edit_category({{$id}})">Edit</button>
                                <button class="btn btn-sm btn-danger" onclick="return confirm('{{ __('Are You Sure ?')  }}')" wire:click="delete_category({{$id}})">Delete</button>
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
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
