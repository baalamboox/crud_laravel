@extends('../layouts/main_layout')
@section('title', 'Inicio')
@section('main_container')
    <div class="container py-5">
        <div class="row mb-3">
            <div class="col">
                <h1 class="fw-light text-center border-bottom pb-2">Contactos</h1>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col text-center">
                <a href="/register" class="btn btn-primary"><i class="fa-solid fa-user-plus me-2"></i>Crear nuevo</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="table-responsive shadow border p-3 rounded">
                    <table class="table table-striped">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Teléfono</th>
                                <th scope="col">Correo electrónico</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">
                            @foreach ($contacts as $contact)
                            <tr>
                                <th scope="row">{{ $contact->id }}</th>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->surname }}</td>
                                <td>{{ $contact->phone }}</td>
                                <td>{{ $contact->email }}</td>
                                <td class="text-center">
                                    <span class="btn btn-warning" id="btn_edit"><i class="fa-solid fa-user-pen"></i></span>
                                </td>
                                <td class="text-center">
                                    <form action="/delete/{{ $contact->id }}" method="post">
                                        @csrf
                                        @method('post')
                                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-user-minus"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('../includes/modal_update')
@endsection