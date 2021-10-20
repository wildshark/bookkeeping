<!-- Modal -->
<div class="modal fade" id="incomeModalCenter">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">New Grant</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form action="index.php" method="post">
                <div class="modal-body">
                    <!--form-->
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="date" name="date" class="form-control">
                            </div>
                            <div class="col-sm-6 mt-2 mt-sm-0">
                                <input type="text" name='ref' value="<?=time()?>" class="form-control" placeholder="Ref">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12 mt-12 mt-sm-0">
                                <select name='category' id="inputState" class="form-control">
                                   <?=category($_income)?>
                                </select>
                            </div>
                        </div> 
                        <br>   
                        <div class="row">
                            <div class="col-sm-12">
                                <input type="text" name="details" class="form-control" placeholder="Details">
                            </div>
                        </div> 
                        <br>   
                        <div class="row">
                            <div class="col-sm-6 mt-2 mt-sm-0">
                                <select name='type' id="inputState" class="form-control">
                                    <option selected>Bank</option>
                                    <option>Cash</option>
                                    <option>Momo</option>
                                </select>
                            </div>
                            <div class="col-sm-6 mt-2 mt-sm-0">
                                <input type="text" name="amt" class="form-control" placeholder="0.00">
                            </div>
                        </div>
                    <!--/form-->
                </div>
                                                   
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="_submit" value="transaction-income" class="btn btn-primary">Save</button>
                </div>
            </form>     
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="expensesModalCenter">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">New Grant</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form action="index.php" method="post">
                <div class="modal-body">
                    <!--form-->
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="date" name="date" class="form-control">
                            </div>
                            <div class="col-sm-6 mt-2 mt-sm-0">
                                <input type="text" name='ref' value="<?=time()?>" class="form-control" placeholder="Ref">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12 mt-12 mt-sm-0">
                                <select name='category' id="inputState" class="form-control">
                                   <?=category($_expenses)?>
                                </select>
                            </div>
                        </div> 
                        <br>   
                        <div class="row">
                            <div class="col-sm-12">
                                <input type="text" name="details" class="form-control" placeholder="Details">
                            </div>
                        </div> 
                        <br>   
                        <div class="row">
                            <div class="col-sm-6 mt-2 mt-sm-0">
                                <select name='type' id="inputState" class="form-control">
                                    <option selected>Bank</option>
                                    <option>Cash</option>
                                    <option>Momo</option>
                                </select>
                            </div>
                            <div class="col-sm-6 mt-2 mt-sm-0">
                                <input type="text" name="amt" class="form-control" placeholder="0.00">
                            </div>
                        </div>
                    <!--/form-->
                </div>
                                                   
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="_submit" value="transaction-expenses" class="btn btn-primary">Save</button>
                </div>
            </form>     
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">New Grant</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form action="index.php" method="post">
                <div class="modal-body">
                    <!--form-->
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="date" name="date" class="form-control">
                            </div>
                            <div class="col-sm-6 mt-2 mt-sm-0">
                                <input type="text" name='ref' value="<?=time()?>" class="form-control" placeholder="Ref">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <input type="text" name="details" class="form-control" placeholder="Details">
                            </div>
                        </div> 
                        <br>   
                        <div class="row">
                            <div class="col-sm-6 mt-2 mt-sm-0">
                                <select name='type' id="inputState" class="form-control">
                                    <option selected>Bank</option>
                                    <option>Cash</option>
                                    <option>Momo</option>
                                </select>
                            </div>
                            <div class="col-sm-6 mt-2 mt-sm-0">
                                <input type="text" name="amt" class="form-control" placeholder="0.00">
                            </div>
                        </div>
                    <!--/form-->
                </div>
                                                   
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="_submit" value="add-grant" class="btn btn-primary">Save</button>
                </div>
            </form>     
        </div>
    </div>
</div>