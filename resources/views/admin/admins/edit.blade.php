@extends('admin.layouts.master')
@section('content')
    <div class='card'>
        <div class='card-body'>
            <h5 class="card-title fw-semibold mb-4">Modifier Produit</h5>
            <form action="{{ route('admins.update', $admin->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-2">
                    <label for="adminName">Nom de l'admin</label>
                    <input type="text" class="form-control" name="name" id="adminName"
                        value="{{ old('name', $admin->name) }}" placeholder="Entrer le nom de admin">
                    @if ($errors->has('name'))
                        <p class="invalid-item">
                            Entrer le nom de l'admin
                        </p>
                    @endif
                </div>
                <div class="form-group mb-2">
                    <label for="adminEmail">Email de l'admin</label>
                    <input type="email" class="form-control" name="email" id="adminEmail"
                        value="{{ old('email', $admin->email) }}" placeholder="Entrer le email de admin">
                    @if ($errors->has('email'))
                        <p class="invalid-item">
                            Entrer mail de l'admin
                        </p>
                    @endif
                </div>
                <div class="text-center"><button type="submit" class="btn btn-primary mt-3">Confirmer les modifications <i
                            class="fa-solid fa-check"></i></button></div>
            </form>
        </div>
    </div>
@endsection
