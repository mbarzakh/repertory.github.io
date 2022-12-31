
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Chapter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
             

      <form id="addRub" action="rcode.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label for="validationDefault01">Rubric Name</label>
                <input type="text" name="rubName" id="validationDefault01" class="form-control" placeholder="Rubric Name">
            </div>
            <div class="form-group">
                <label>DD</label>
                <select class="custom-select custom-select-lg mb-3">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>

                <select class="custom-select custom-select-sm">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                </select>
<!--
                <select class="selectpicker" data-live-search="true">
  <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
  <option data-tokens="mustard">Burger, Shake and a Smile</option>
  <option data-tokens="frosting">Sugar, Spice and all things nice</option>
</select>
-->

<!--                <input type="text" name="rubChap" class="form-control" placeholder="Chapter">-->
            </div>
            <div class="form-group">
                <label>Category</label>
                <input type="text" name="rubCat" class="form-control" placeholder="Category">
            </div>
            <div class="form-group">
                <label>Details</label>
                <textarea class="form-control" rows="3" name="rubexp" placeholder="Explain"></textarea>
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="addRubBtn" class="btn btn-primary">Save</button>
        </div>
      </form>


    </div>
  </div>
</div>