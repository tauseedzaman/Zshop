<div id="layoutSidenav_content">
    <main class="bg-light">
        <div class="container-fluid px-4 ">
            <h1 class="mt-4 bg-info shadow p-2 rounded">{{ config('app.name') . __(' FAQ\'s') }}</h1>
            <div class="row">
                <div class="col mx-auto">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
            </div>
            <form class=" p-2 shadow bg-light rounded my-4 " wire:submit.prevent="add_new_faq">
                <h2 class="text-success shadow p-3 bg-success text-light border border-success">Create New FAQ's</h2>
                <div class="row mb-3">
                    <div class="col-12 mx-auto">
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control @error('question') is-invalid @enderror" wire:model.lazy="question"
                                id="question" type="text" placeholder="Enter Question" />
                            <label for="inputFirstName">Question</label>
                        </div>
                        @error('question') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror

                    </div>
                    <div class="col-12 mx-auto my-3">
                        <div class="form-floating">
                            <textarea class="form-control @error('answer') is-invalid @enderror "
                                wire:model.lazy="answer" name="answer" placeholder="Answer"
                                id="answer" cols="30" rows="10"></textarea>
                            <label for="answer">Answer</label>
                        </div>
                        @error('answer') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror

                    </div>
                </div>
                <div class="mt-4 mb-0">
                    <div class="d-grid"><button
                            class="btn btn-success btn-block btn-lg">{{  $button_text }}</button></div>
                </div>
            </form>

            <div class="row mt-4 shadow rounded p-3">
                <div class="col mx-auto">
                    <h2 class="text-success rounded text-center shadow p-3 bg-info text-light border border-success">All FAQ's</h2>
                    <table class="table table-all table-hoverable">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Created_at</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($faqs as $faq)
                            <tr>
                                <td>{{ $faq->id }}</td>
                                <td>{{ $faq->question }}</td>
                                <td>{{ $faq->answer }}</td>
                                <td>{{ $faq->created_at->format('d-M-Y') }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-warning" title="edit this row" wire:click="edit({{$faq->id}})">Edit</button>
                                        <button class="btn btn-sm btn-danger" title="delete this row" onclick="return confirm('{{ __('Are You Sure ?')  }}')" wire:click="delete({{$faq->id}})">Delete</button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-warning">{{ __('Null') }}</td>
                                <td class="text-warning">{{ __('Null') }}</td>
                                <td class="text-warning">{{ __('Null') }}</td>
                                <td class="text-warning">{{ __('Null') }}</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    {{ $faqs->links() }}
                </div>
            </div>
