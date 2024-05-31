<div>
  @if($isOpen)
    @include('livewire.modal-genre.add-genre-modal')
  @endif
  <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">hi, <span class="text-capitalize">{{ auth()->user()->username }}</span></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">genres - crud</li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4" wire:click="openModal" >
                    <div class="card-body">Tambah genre</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a href="#tablemovie" class="small text-white
                        stretched-link">{{$genres->count()}}</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">Tambah movie</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a href="/dashboard" class="small text-white
                        stretched-link">{{$movies->count()}}</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                All Genres
            </div>
            <div class="card-body overflow-scroll">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($genres as $genre)
                    <tr>
                      <th scope="row">{{$loop->iteration}}</th>
                      <td>{{$genre->name}}</td>
                      <td>{{$genre->slug}}</td>
                      <td><i wire:click="deleteGenre({{$genre->id}})" class="fa fa-trash" aria-hidden="true"></i></td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
        </div>
    </div>
  </main>

</div>
