@extends('admin.layouts.master')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Ajouter Catégorie</h5>
            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="mb-3">
                        <label for="parentCategory" class="form-label">Catégorie principale</label>
                        <select class="form-select" name="parent_id" id="parentCategory" required>
                            <option value="0" selected disabled>Sélectionnez la catégorie parent</option>
                            <option value="0">principale</option>
                            @foreach ($categories as $categorie)
                                <option value="{{ $categorie->id }}">
                                    {{-- {{ !$categorie->parent_id ? '💎 ' . $categorie->name : $categorie->parent->name . ' ➤ ' . $categorie->name }} --}}
                                    {{ !$categorie->parent_id ? '💎 ' . $categorie->name : \App\Http\Controllers\admin\CategoryController::getParentsTree($categorie, $categorie->name, '➤') }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nom de catégorie</label>
                        <input type="text" name="name" class="form-control" placeholder="saisir le nom">
                        @if ($errors->has('name'))
                            <div class="form-text text-danger">
                                Saisir un nom valide. <i class="fa-regular fa-circle-exclamation"
                                    style="color: #e63205;"></i>
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nom de catégorie (en anglais)</label>
                        <input type="text" name="en_name" class="form-control" placeholder="saisir le nom">
                        @if ($errors->has('en_name'))
                            <div class="form-text text-danger">
                                Saisir un nom valide (en anglais). <i class="fa-regular fa-circle-exclamation"
                                    style="color: #e63205;"></i>
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Choisir l'image (optional)</label>
                        <input type="file" name="image" accept="image/*" id="img-file" class="form-control">
                        <div class="new-img-box"></div>
                        @if ($errors->has('image'))
                            <div class="form-text text-danger">
                                Choisir une image valide. <i class="fa-regular fa-circle-exclamation"
                                    style="color: #e63205;"></i>
                            </div>
                        @endif
                    </div>
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa-regular fa-badge-check"></i> Ajouter</button>
            </form>
        </div>
    </div>
@endsection
@section('js')
    <script>
        const input = document.getElementById('img-file');
        input.addEventListener('change', function(e) {
            const reader = new FileReader()
            reader.onload = function() {
                var src = reader.result
                const imgElement = `<img src="${src}" alt="" />`;
                $('.new-img-box').html(imgElement);
            }
            reader.readAsDataURL(input.files[0])
        }, false);
    </script>
@endsection
