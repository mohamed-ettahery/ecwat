@extends('admin.layouts.master')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <h5 class="card-title fw-semibold mb-4">Marques</h5>
                </div>
                <div class="col-6 text-end">
                    <a href="{{ route('marks.create') }}"><i class="fa-duotone fa-plus"></i> Ajouter Marque</a>
                </div>
            </div>
            <div class="view-table-box">
                <table class="table table-hover" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Date de création</th>
                            <th scope="col" style="width: 30%;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($marks as $mark)
                            <tr>
                                <th scope="row">{{ $mark->id }}</th>
                                <td>
                                    <img src="{{ asset('uploads/marks/' . $mark->image) }}" alt=""
                                        style="width: 100px;">
                                </td>
                                <td>{{ $mark->name }}</td>
                                <td>{{ $mark->created_at }}</td>
                                <td class="text-center">
                                    <form action="{{ route('marks.edit', $mark->id) }}" class="d-inline-block">
                                        @csrf
                                        <button type="submit" class="btn btn-success" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="modifier marque">
                                            <i class="fa-solid fa-pen-to-square"></i></button>
                                    </form>
                                    <form id="delete-form-{{ $mark->id }}" class="d-inline-block"
                                        action="{{ route('marks.destroy', $mark->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="
                                        event.preventDefault();
                                        if(confirm('êtes-vous sûr, vous voulez le supprimer définitivement ?'))
                                        document.getElementById('delete-form-{{ $mark->id }}').submit();
                                        "
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="supprimer marque"><i
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
