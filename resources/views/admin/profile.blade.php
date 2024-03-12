@extends('admin.layouts.master')
@section('content')
    <!-- Profile Start -->
    <div class="container">
        <div class="row px-xl-5">
            <div class="container mt-5">
                <div class="card">
                    <div class="card-header">
                        <img src="{{ asset('admin/images/profile.webp') }}" width="200px" alt="Profile Image"
                            class="img-fluid rounded-circle mx-auto d-block" />
                        <h4 class="text-center my-3">{{ $admin->name }}</h4>
                        <p class="text-center">{{ $admin->email }}</p>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary mx-auto d-block" onclick="toggleForm()">
                            <i class="fa-solid fa-user-pen"></i> Modifier
                        </button>
                    </div>
                </div>
            </div>
            <div class="container mt-5 d-none" id="form-container">
                <form id="edit-form" action="{{ route('updateAdminProfile') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" class="form-control check input-name"
                            name="name"value="{{ $admin->name }}" required />
                        @if ($errors->has('name'))
                            <p class="invalid-item">
                                Saisir votre nom
                            </p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control check input-email" name="email" id="email"
                            value="{{ $admin->email }}" required />
                        @if ($errors->has('email'))
                            <p class="invalid-item">
                                Saisir votre email
                            </p>
                        @endif
                    </div>
                    <div class="btns-box text-center mt-3">
                        <button type="submit" class="btn btn-primary btn-save d-inline-block">
                            <i class="fa-solid fa-circle-check"></i> Sauvegarder
                        </button>
                        <button type="button" class="btn btn-secondary d-inline-block" onclick="toggleForm()">
                            <i class="fa-solid fa-xmark"></i> Annuler
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Profile End -->
@endsection
@section('js')
    <script>
        function toggleForm() {
            document.getElementById("form-container").classList.toggle("d-none");
        }

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
