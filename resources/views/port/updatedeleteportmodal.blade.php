<div id="myModal"class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="model-id"></h4>
      </div>
      <div class="modal-body">
        <form method="POST"  class="form-horizontal" role="modal">
         {{csrf_field()}}
          <div class="form-group">
            <label class="control-label col-sm-2"for="id">ID</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="pid" disabled>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2"for="title">Port</label>
            <div class="col-sm-10">
            <input type="name" class="form-control" id="t">
            </div>
          </div>
          
        </form>
                {{-- Form Delete Post --}}
        <div class="deleteContent">
          Are You sure want to delete <span class="title"></span>?
           <input type="text" name="id" class="poid" hidden="true"> 
           <input type="text" name="port_name" class="poname" hidden="true" >           
        </div>

      </div>
      <div class="modal-footer">

        <button type="button" class="btn actionBtn " data-dismiss="modal">
          <span id="footer_action_button" class="glyphicon"></span>
        </button>

        <button type="button" class="btn btn-warning" data-dismiss="modal">
          <span class="glyphicon glyphicon"></span>close
        </button>

      </div>
    </div>
  </div>
</div>