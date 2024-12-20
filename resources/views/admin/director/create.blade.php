<form action="admin/director/create" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="director" tabindex="-1" aria-labelledby="director_title" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="director_title">Thêm mới đạo diễn</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tên đạo diễn</label>
                                    <input class="form-control" type="text" value="" name="name"
                                           placeholder="Nhập tên đạo diễn...">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Quốc gia</label>
                                    <input class="form-control" type="text" value="" name="national"
                                           placeholder="Nhập quốc gia...">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Ngày sinh</label>
                                    <input class="form-control" type="date" value="" name="birthday" placeholder=""
                                           min="1900-01-01" max="2100-01-01">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group file-uploader">
                                    <label for="example-text-input" class="form-control-label">Hình ảnh</label>
                                    <input type='file' name='Image' class="form-control image-director">
                                    <img style="width: 300px" src="" class="img_direc d-none" alt="user1">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="conditions" class="form-control-label">Giới thiệu</label>
                                    <textarea class="form-control" name="contents" id="conditions"
                                              placeholder="Nhập giới thiệu đạo diễn..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-success">Lưu</button>
                </div>

            </div>
        </div>
    </div>
</form>
