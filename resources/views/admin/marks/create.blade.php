@extends('admin.layouts.master')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Ajouter Marque</h5>
            <form action="{{ route('marks.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-2">
                    <label for="markName">Nom de marque</label>
                    <input type="text" class="form-control" name="name" id="markName" value="{{ old('name') }}"
                        placeholder="Entrer le nom de marque">
                    @if ($errors->has('name'))
                        <div class="form-text text-danger">
                            Saisir un nom valide. <i class="fa-regular fa-circle-exclamation" style="color: #e63205;"></i>
                        </div>
                    @endif
                </div>
                <div class="form-group mb-2">
                    <label for="markName">Choisir l'image</label>
                    <input style="display:none;" accept="image/*" type="file" id="img-file" name="image"
                        class="form-control">
                    <img style="width: 200px;cursor: pointer;" class="new-img-insert"
                        src='{{ asset('admin/images/upload.png') }}' />
                    @if ($errors->has('image'))
                        <div class="form-text text-danger">
                            Choisir une image de format (png/jpg/jpeg/webp)(moins de 2 mp) <i
                                class="fa-regular fa-circle-exclamation" style="color: #e63205;"></i>
                        </div>
                    @endif
                </div>
                <div class="text-center"><button type="submit" class="btn btn-primary">Ajouter <i
                            class="fa-solid fa-check"></i></button></div>
            </form>
        </div>
    </div>
@endsection
@section('js')
    <script>
        const input = document.getElementById('img-file');
        const newImgField = document.querySelector('.new-img-insert');

        newImgField.addEventListener("click", function() {
            input.click();
        });

        input.addEventListener('change', function(e) {
            const reader = new FileReader()
            reader.onload = function() {
                var src = reader.result
                $('.new-img-insert').attr("src", src);
            }
            reader.readAsDataURL(input.files[0])
        }, false);
    </script>
@endsection
