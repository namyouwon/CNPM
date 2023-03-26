<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
              <div class="card card-success">
                    <div class="card-header">
                    <h3 class="card-title">Assign Task for Janitor</h3>
                    </div>
                    <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                        <label for="titletask">Tiêu đề công việc</label>
                        <input type="text" class="form-control" id="titletask" name="titletask" placeholder="Nhập tiêu đề">
                        </div>
                        <div class="form-group">
                        <label for="name">Janitor thực hiện</label>
                        <select id="name" name="name" class="form-control" style="width: 100%;">
                        <option selected="selected">Nguyen Van A</option>
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="time">Chọn thời gian</label>
                        <select id="time" name="time" class="form-control" style="width: 100%;">
                            <option selected="selected">Ca 1 (6h->10h)</option>
                            <option>Ca 2 (12h->16h)</option>
                            <option>Ca 3(18h->22h)</option>
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="object1">Chọn MCP</label>
                        <select id="object1" name="object1" class="form-control" style="width: 100%;">
                        <option selected="selected">MCP 1</option>
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="object2">Chọn xe đẩy</label>
                        <select id="object2" name="object2" class="form-control" style="width: 100%;">
                        <option selected="selected">Troller 1</option>
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="description">Nội dung thực hiện</label>
                        <br>
                        <textarea name="description" id="description" cols="30" rows="10" placeholder="Nhập nội dung" style="width: 100%;"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-sm-10"></div>
                            <div class="col-sm-2">
                              <button type="submit" class="btn btn-success" style="width: 100%;">Assign</button>
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