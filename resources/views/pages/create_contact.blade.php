@extends('../layouts/main_layout')
@section('title', 'Crear contacto')
@section('main_container')
    <div class="container py-5">
        <div class="row mb-5">
            <div class="col">
                <h1 class="fw-light text-center border-bottom pb-2">Crear nuevo contacto</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <form action="/create" method="post" class="shadow border p-5 rounded">
                    @csrf
                    @method('post')
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="Nombre" required>
                        <label for="name_contact" class="form-label"><i class="fa-solid fa-font me-2"></i>Nombre</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="surname_contact" name="surname_contact" placeholder="Apellido" required>
                        <label for="surname_contact" class="form-label"><i class="fa-solid fa-font me-2"></i>Apellido</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="phone_contact" name="phone_contact" placeholder="Teléfono" required>
                        <label for="phone_contact" class="form-label"><i class="fa-solid fa-square-phone-flip me-2"></i>Teléfono</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email_contact" name="email_contact" placeholder="Correo electrónico" required>
                        <label for="email_contact" class="form-label"><i class="fa-solid fa-at me-2"></i>Correo electrónico</label>
                    </div>
                    <div class="text-end mt-4">
                        <div class="btn-group">
                            <a href="/" class="btn btn-secondary"><i class="fa-solid fa-xmark me-2"></i>Cancelar</a>
                            <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk me-2"></i>Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection