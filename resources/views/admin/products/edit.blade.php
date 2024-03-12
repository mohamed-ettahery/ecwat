@extends('admin.layouts.master')
@section('content')
    <div class='card'>
        <div class='card-body'>
            <h5 class="card-title fw-semibold mb-4">Modifier Produit</h5>
            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group mb-2">
                    <label for="productName">Nom de produit</label>
                    <input type="text" class="form-control" name="name" id="productName"
                        value="{{ old('name', $product->name) }}" placeholder="Entrer le nom de produit">
                    @if ($errors->has('name'))
                        <p class="invalid-item">
                            Entrer le nom de produit
                        </p>
                    @endif
                </div>
                <div class="form-group mb-2">
                    <label for="productEnName">Nom de produit (en anglais)</label>
                    <input type="text" class="form-control" name="en_name" id="productEnName"
                        value="{{ old('en_name', $product->en_name) }}" placeholder="Entrer le nom de produit (en anglais)">
                    @if ($errors->has('en_name'))
                        <p class="invalid-item">
                            Entrer le nom de produit (en anglais)
                        </p>
                    @endif
                </div>
                <div class="form-group mb-2">
                    <label>Choisir catégorie</label>
                    <select class="form-select" name="category_id" required>
                        <option value="" disabled>Sélectionnez la catégorie</option>
                        @foreach (\App\Http\Controllers\admin\CategoryController::getAllcategories() as $category)
                            <option value="{{ $category->id }}" @if ($product->category_id == $category->id) selected @endif>
                                {{ !$category->parent_id ? '💎 ' . $category->name : \App\Http\Controllers\admin\CategoryController::getParentsTree($category, $category->name, '➤') }}
                            </option>
                        @endforeach
                    </select>
                    @if ($errors->has('category_id'))
                        <p class="invalid-item">
                            choisir catégorie
                        </p>
                    @endif
                </div>
                <div class="form-group mb-2">
                    <label>Choisir la marque</label>
                    <select class="form-select" name="mark_id" required>
                        <option value="0">Sélectionnez la marque</option>
                        @foreach (\App\Http\Controllers\admin\MarkController::getAllMarks() as $mark)
                            <option value="{{ $mark->id }}" @if ($product->mark_id == $mark->id) selected @endif>
                                {{ $mark->name }}
                            </option>
                        @endforeach
                    </select>
                    @if ($errors->has('mark_id'))
                        <p class="invalid-item">
                            choisir la marque
                        </p>
                    @endif
                </div>
                <div class="form-group mb-2">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="pub" role="switch" id="switchpub"
                            {{ $product->pub ? 'checked' : '' }}>
                        <label class="form-check-label" for="switchpub">populaire</label>
                    </div>
                </div>
                <div class="form-group mb-2">
                    <label>La Description</label>
                    <textarea name="description" id="description" cols="30" rows="10"></textarea>
                    @if ($errors->has('description'))
                        <p class="invalid-item">
                            Entrer la description de produit
                        </p>
                    @endif
                </div>
                <div class="form-group mb-2">
                    <label>La Description (en anglais)</label>
                    <textarea name="en_description" id="en_description" cols="30" rows="10"></textarea>
                    @if ($errors->has('en_description'))
                        <p class="invalid-item">
                            Entrer la description de produit (en anglais)
                        </p>
                    @endif
                </div>
                <div class="form-group mb-2">
                    <label>Détails</label>
                    <textarea name="details" id="details" cols="30" rows="10"></textarea>
                    @if ($errors->has('details'))
                        <p class="invalid-item">
                            Entrer les détailes de produit
                        </p>
                    @endif
                </div>
                <div class="form-group mb-2">
                    <label>Détails (en anglais)</label>
                    <textarea name="en_details" id="en_details" cols="30" rows="10"></textarea>
                    @if ($errors->has('en_details'))
                        <p class="invalid-item">
                            Entrer les détailes de produit (en anglais)
                        </p>
                    @endif
                </div>
                <div class="form-group mb-2">
                    <label>Informations Complémentaires</label>
                    <textarea name="additional_information" id="additional_information" cols="30" rows="10"></textarea>
                    @if ($errors->has('additional_information'))
                        <p class="invalid-item">
                            Entrer les informations complémentaires de produit
                        </p>
                    @endif
                </div>
                <div class="form-group mb-2">
                    <label>Informations Complémentaires (en anglais)</label>
                    <textarea name="en_additional_information" id="en_additional_information" cols="30" rows="10"></textarea>
                    @if ($errors->has('en_additional_information'))
                        <p class="invalid-item">
                            Entrer les informations complémentaires de produit (en anglais)
                        </p>
                    @endif
                </div>
                <div class="form-group mb-2">
                    <label>Choisir Document(PDF*)</label>
                    <input type="hidden" name="old_doc" value="{{ $product->document }}">
                    <input type="file" accept="application/pdf" class="form-control" name="document[]" multiple>
                    @if ($errors->has('documents'))
                        <p class="invalid-item">
                            Attacher le(s) document(s)
                        </p>
                    @endif
                </div>
                <div class="form-group mb-2">
                    <label>Choisir les images</label>
                    <input style="display:none;" accept="image/*" type="file" multiple id="img-file" name="image[]"
                        class="form-control">
                    <input type="hidden" name="old_img" value="{{ $product->image }}">
                    {{-- <img style="width: 200px;cursor: pointer;" class="new-img-insert"
                        src="{{ asset('uploads/products/' . $product->image) }}" /> --}}
                    <div class="row">
                        <div class="col-md-3">
                            <img style="width: 200px;cursor: pointer;" class="new-img-insert"
                                src='{{ asset('admin/images/upload.png') }}' />
                        </div>
                    </div>
                    @if ($errors->has('image'))
                        <p class="invalid-item">
                            Choisir une image de format (png/jpg/jpeg/webp)(moins de 2 mp)
                        </p>
                    @endif
                </div>
                <div class="my-5">
                    <h3>Les images du produit</h3>
                    <div class="row images-place-row">
                        @foreach (explode(',', $product->image) as $image)
                            <div class="col-md-3">
                                <img src="{{ asset('uploads/products/' . $image) }}" alt="" class="img-fluid">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="text-center"><button type="submit" class="btn btn-primary">Confirmer les modifications <i
                            class="fa-solid fa-check"></i></button></div>
            </form>>
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

        tinymce.init({
            selector: "#description,#details,#additional_information,#en_description,#en_details,#en_additional_information",
            setup: function(editor) {
                editor.on('init', function() {
                    // editor.setContent(document.getElementById('details').value);
                    tinymce.get("description").setContent(`{!! $product->description !!}`);
                    tinymce.get("details").setContent(`{!! $product->details !!}`);
                    tinymce.get("additional_information").setContent(`{!! $product->additional_information !!}`);
                    tinymce.get("en_description").setContent(`{!! $product->en_description !!}`);
                    tinymce.get("en_details").setContent(`{!! $product->en_details !!}`);
                    tinymce.get("en_additional_information").setContent(`{!! $product->en_additional_information !!}`);
                    $('.tox-notifications-container').hide();
                });
            },
            plugins: "anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss",
            toolbar: "undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat",
            tinycomments_mode: "embedded",
            tinycomments_author: "Author name",
            mergetags_list: [{
                    value: "First.Name",
                    title: "First Name"
                },
                {
                    value: "Email",
                    title: "Email"
                },
            ],
        });
    </script>
@endsection
