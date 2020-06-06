<div class="modal fade" id="createSupplierModal" tabindex="-1" role="dialog" aria-labelledby="createSupplierLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createSupplierLabel">Crear proveedor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{ route('supplier.create') }}">
        @csrf
      <div class="modal-body">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Razón social</label>
              <input type="text" class="form-control" name="name" placeholder="Supplier name" maxlength="255" required>
            </div>
            <div class="form-group col-md-6">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" placeholder="name@supplier.com" maxlength="255" required>
            </div>
          </div>
          <div class="form-group">
            <label for="address">Dirección completa</label>
            <input type="text" class="form-control" name="address" placeholder="Calle ejemplo, 123, 08980 Barcelona" maxlength="255" required>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="phone">Teléfono</label>
              <input type="tel" class="form-control" name="phone" placeholder="93 666 66 66" required>
            </div>
            <div class="form-group col-md-6">
              <label for="cif">CIF</label>
              <input type="text" class="form-control" name="cif" maxlength="14" placeholder="A99999999" required>
            </div>
          </div>
          <input type="text" name="active" value="1" hidden>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Añadir proveedor</button>
      </div>
    </form>
    </div>
  </div>
</div>
