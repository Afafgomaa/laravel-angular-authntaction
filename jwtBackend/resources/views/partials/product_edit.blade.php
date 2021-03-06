<!-- Edit Modal HTML -->
<div class="modal fade" id="editTaskModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frmEditTask" action="{{route('product.update',['id' => $product->id])}}" method="post">
            @csrf
                <div class="modal-header">
                    <h4 class="modal-title">
                        Edit Task
                    </h4>
                    <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                        ×
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" id="edit-error-bag">
                        <ul id="edit-task-errors">
                        </ul>
                    </div>
                    <div class="form-group">
                        <label>
                           Name
                        </label>
                        <input class="form-control" id="task" name="name" value="{{$product->name}}" required="" type="text">
                        
                    </div>
                    <div class="form-group">
                        <label>
                          Price
                        </label>
                        <input class="form-control" id="task" name="price" value="{{$product->price}}" required="" type="number">
                        
                    </div>
                    <div class="form-group">
                        <label>
                            Description
                        </label>
                        <input class="form-control" id="description" name="description" value="{{$product->description}}" required="" type="text">
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <input id="task_id" name="task_id" type="hidden" value="{{$product->id}}">
                        <input class="btn btn-default" data-dismiss="modal" type="button" value="Cancel">
                            <button class="btn btn-info" id="btn-edit" type="submit" value="add">
                                Update Product
                            </button>
                       
                </div>
            </form>
        </div>
    </div>
</div>