<div class="modal fade" id="createProductsModal" tabindex="-1" role="dialog" aria-labelledby="createProductLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createProductLabel">Crear Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{ route('product.create') }}">
        @csrf
      <div class="modal-body">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="name">Nombre de producto</label>
            <input type="text" class="form-control" name="name" placeholder="Product name" maxlength="255" required>
          </div>
          <div class="form-group col-md-6">
            <label for="id_supplier">Proveedor</label>
            <select name="id_supplier" class="form-control">
              @foreach ($suppliers as $supplier)
                <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="price">Precio</label>
              <input type="number" step="0.01" min="0" class="form-control" name="price" placeholder="5.99" required>
            </div>
            <div class="form-group col-md-6">
              <label for="active">Estado de producto</label>
              <select name="active" class="form-control">
                <option selected value="1">Activar</option>
                <option value="0">Desactivar</option>
              </select>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Añadir producto</button>
      </div>
    </form>
    </div>
  </div>
</div>
