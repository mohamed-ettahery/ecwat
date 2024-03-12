@extends('admin.layouts.master')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <h5 class="card-title fw-semibold mb-4">Catégories</h5>
                </div>
                <div class="col-6 text-end">
                    <a href="{{ route('categories.create') }}"><i class="fa-duotone fa-plus"></i> Ajouter Catégorie</a>
                </div>
            </div>
            <div class="view-table-box">
                <table class="table table-hover" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            {{-- <th scope="col">Parent</th> --}}
                            <th scope="col">Imbrication</th>
                            <th scope="col" style="width: 30%;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <th scope="row">{{ $category->id }}</th>
                                <td>{{ $category->name }}</td>
                                {{-- <td>{{ $category->parent->name != null ? $category->parent->name : 'Catégorie Principale' }} --}}
                                {{-- <td>{{ $category->parent->name ?? 'Catégorie Principale' }} --}}
                                <td>{{ \App\Http\Controllers\admin\CategoryController::getParentsTree($category, $category->name) }}
                                </td>
                                <td class="text-center">
                                    <form action="{{ route('categories.edit', $category->slug) }}" class="d-inline-block">
                                        @csrf
                                        <button type="submit" class="btn btn-success" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="modifier catégorie">
                                            <i class="fa-solid fa-pen-to-square"></i></button>
                                    </form>
                                    <form id="delete-form-{{ $category->slug }}" class="d-inline-block"
                                        action="{{ route('categories.destroy', $category->slug) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="
                                            event.preventDefault();
                                            if(confirm('êtes-vous sûr, vous voulez le supprimer définitivement ?'))
                                            document.getElementById('delete-form-{{ $category->slug }}').submit();
                                            "
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="supprimer catégorie"><i
                                                class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
