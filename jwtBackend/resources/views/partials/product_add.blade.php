

<!-- Modal -->
<div class="modal fade" id="addTaskModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> Add New Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form enctype="multipart/form-data" id="frmAddTask" action="{{route('product.store')}}" method="post">
      @csrf
         <div class="alert alert-danger" id="add-error-bag">
            <ul id="add-task-errors">
              
             
            </ul>
          </div>
            <div class="form-group">
                  <label>
                      Name
                  </label>
             <input class="form-control" id="product" name="name" required="" type="text">
                        
             </div>
             <div class="form-group">
                  <label>
                      Price
                  </label>
             <input class="form-control" id="price" name="price" required="" type="text">
                        
             </div>
             <div class="form-group">
                  <label>
                     Select Image
                  </label>
             <input class="form-control" id="image" name="image" required="" type="file">
                        
             </div>
            
             <div class="form-group">
                <label>
                    Description
                </label>
                <textarea class="form-control" rows="3" cols="3" id="description" name="description" required="" type="text"></textarea>
                        
                    </div>
                </div>
                <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="btn_add_close" data-dismiss="modal">Close</button>
        <button type="submit" id="btn-add" class="btn btn-primary">Add Product</button>
      </div>
        </div>

      </form>
    </div>
  </div>
</div>