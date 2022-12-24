<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar contacto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form_update" method="post">
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
                            <button type="submit" class="btn btn-warning"><i class="fa-solid fa-user-pen me-2"></i>Actualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>