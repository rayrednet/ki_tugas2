<x-app-layout>
    <div class="row d-flex flex-column">
        <p class="fs-4 text-dark my-3">Dapatkan File User Lain</p>
        <hr>
        <div class="container">
            <form action="{{ route('share.file.show') }}" method="post">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> {{ $errors->all()[0] }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="form-outline mb-4">
                    <label class="form-label" for="nama">Key User</label>
                    <input type="text" id="key_akses" name="key_akses" class="form-control" placeholder="Key user yang anda terima" required />
                </div>
                <div class="justify-content-center d-flex">
                    <button type="submit" class="btn btn-primary btn-block mb-4 px-4">Submit</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
