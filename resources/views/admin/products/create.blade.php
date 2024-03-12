@extends('admin.layouts.master')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Ajouter Produit</h5>
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-2">
                    <label for="productName">Nom de produit</label>
                    <input type="text" class="form-control" name="name" id="productName" value="{{ old('name') }}"
                        placeholder="Entrer le nom de produit">
                    @if ($errors->has('name'))
                        <p class="invalid-item">
                            Entrer le nom de produit
                        </p>
                    @endif
                </div>
                <div class="form-group mb-2">
                    <label for="productEnName">Nom de produit (en anglais)</label>
                    <input type="text" class="form-control" name="en_name" id="productEnName" value="{{ old('name') }}"
                        placeholder="Entrer le nom de produit en anglais">
                    @if ($errors->has('en_name'))
                        <p class="invalid-item">
                            Entrer le nom de produit (en anglais)
                        </p>
                    @endif
                </div>
                <div class="form-group mb-2">
                    <label>Choisir catégorie</label>
                    <select class="form-select" name="category_id" required>
                        <option value="" selected disabled>Sélectionnez la catégorie</option>
                        @foreach (\App\Http\Controllers\admin\CategoryController::getAllcategories() as $category)
                            <option value="{{ $category->id }}">
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
                        <option value="0" selected>Sélectionnez la marque</option>
                        @foreach (\App\Http\Controllers\admin\MarkController::getAllMarks() as $mark)
                            <option value="{{ $mark->id }}">
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
                        <input class="form-check-input" type="checkbox" name="pub" role="switch" id="switchPromotion">
                        <label class="form-check-label" for="switchPromotion">populaire</label>
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
                            Entrer les détailes de produit
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
                    <img style="width: 200px;cursor: pointer;" class="new-img-insert"
                        src='{{ asset('admin/images/upload.png') }}' />
                    @if ($errors->has('image'))
                        <p class="invalid-item">
                            Choisir une image de format (png/jpg/jpeg/webp)(moins de 2 mp)
                        </p>
                    @endif
                </div>
                <div class="my-5">
                    <h3>Les images du produit</h3>
                    <div class="row images-place-row">
                    </div>
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
            $(".images-place-row").empty();

            // Loop through each selected file and process it
            for (const file of input.files) {
                const reader = new FileReader();
                reader.onload = function() {
                    const newImg = document.createElement('img');
                    newImg.setAttribute('class', "img-fluid");
                    // Set the data URL as the source of the new image element
                    newImg.src = reader.result;

                    // Create a new <div> for each image and append the image inside it
                    const imageDiv = document.createElement('div');
                    imageDiv.setAttribute('class', "col-md-3");
                    imageDiv.appendChild(newImg);

                    // Append the imageDiv to the .images-place-row container
                    $(".images-place-row").append(imageDiv);
                };

                // Read the current file as a data URL
                reader.readAsDataURL(file);
            }
        }, false);

        tinymce.init({
            selector: "#description,#details,#additional_information,#en_description,#en_details,#en_additional_information",
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
