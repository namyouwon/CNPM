<script>
        function chooseFile(fileInput) {
            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#image').attr('src', e.target.result);
                }
                reader.readAsDataURL(fileInput.files[0]);
            }
        }
    </script>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
              <div class="card card-success">
                    <div class="card-header">
                    <h3 class="card-title">Add Equipment</h3>
                    </div>
                    <div class="card-body">
                        <form>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="choose_picture">Choose picture</label>
                                    <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="" class="custom-file-input" id="imageFile" onchange="chooseFile(this)"
                                        accept="image/gif, image/jpeg, image/png">
                                        <label class="custom-file-label" for="choose_picture">Choose file</label>
                                    </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-8">
                                            <img src="" alt="" id="image" width="380" height="380">
                                        </div>
                                        <div class="col-sm-1"></div>
                                    </div>
                                    <div class="form-group">
                                        <label><h3>Nhân viên</h3></label>
                                        <div class="row">

                                            <select class="form-control select2" style="width: 90%;">
                                                <option selected="selected">Nhân viên 1</option>
                                                <option>Nhân viên 1</option>
                                                <option>Nhân viên 2</option>
                                                <option>Nhân viên 3</option>
                                                <option>Nhân viên 4</option>
                                                <option>Nhân viên 5</option>
                                                <option>Nhân viên 6</option>
                                            </select>
                                            <button type="button" class="btn" data-card-widget="collapse" style="width: 5%;">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="add_name_equip">Thiết bị</label>
                                        <input type="text" class="form-control" id="add_name_equip" placeholder="Nhập tên thiết bị">
                                    </div>
                                    <strong>Thông số kỹ thuật</strong>
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Trọng lượng</label>
                                            <input type="text" class="form-control" id="add_weight_equip" placeholder="Nhập trọng lượng">
                                        </div>    
                                        </div>
                                        <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Nhà sản xuất</label>
                                            <input type="text" class="form-control" id="add_nsx_equip"placeholder="Nhập nhà sản xuất">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Dung tích</label>
                                            <input type="text" class="form-control" id="add_v_equip" placeholder="Nhập dung tích">
                                        </div>    
                                        </div>
                                        <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Xuất xứ</label>
                                            <input type="text" class="form-control" id="add_origin_equip" placeholder="Nhập xuất xứ">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="add_name_equip">Kích thước khung</label>
                                        <input type="text" class="form-control" id="add_khung_equip" placeholder="Nhập kích thước khung">
                                    </div>
                                    <div class="form-group">
                                        <label   label for="add_name_equip">Kích thước thùng chứa</label>
                                        <input type="text" class="form-control" id="add_thungchua_equip" placeholder="Nhập kích thước thùng chứa">
                                    </div>
                                    <div class="form-group">
                                        <label><h3>MCP</h3></label>
                                        <div class="row">
                                            <select class="form-control select2" style="width: 90%;">
                                                <option selected="selected">MCP 1</option>
                                                <option>MCP 1</option>
                                                <option>MCP 2</option>
                                                <option>MCP 3</option>
                                                <option>MCP 4</option>
                                                <option>MCP 5</option>
                                                <option>MCP 6</option>
                                            </select>
                                            <button type="button" class="btn" data-card-widget="collapse" style="width: 5%;">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10"></div>
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-primary" style="width: 100%;">Save</button>
                            </div>
                        </div>
                        @csrf
                        </form>
                    </div>
              </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>