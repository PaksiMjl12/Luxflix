<div>
            <div class="modal fade show" style="display: block; background-color: rgba(0, 0, 0, 0.5);">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add New Movie</h5>
                        </div>
                        <div class="modal-body">
                            <form wire:submit.prevent="createMovie" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" wire:model="image">
                                    @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control"
                                    wire:model="title">
                                    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label>Synopsis</label>
                                    <textarea class="form-control" wire:model="synopsis"></textarea>
                                    @error('synopsis') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label>Genre</label>
                                    <select class="form-control" wire:model="genre_id">
                                        <option value="">Select a genre</option>
                                        @foreach($genres as $genre)
                                            <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('genre_id') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label>Year</label>
                                    <input type="number" class="form-control" wire:model="year">
                                    @error('year') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label>Duration</label>
                                    <input type="number" class="form-control" wire:model="duration">
                                    @error('duration') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label>Score</label>
                                    <input type="number" class="form-control" wire:model="score">
                                    @error('score') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" wire:click="closeModal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</div>
