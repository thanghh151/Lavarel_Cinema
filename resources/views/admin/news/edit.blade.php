<form action="admin/news/edit/{!! $value['id'] !!}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="editNews{!! $value['id'] !!}" tabindex="-1" aria-labelledby="news_title" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="news_title">{!! $value['name'] !!}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tiêu đề</label>
                                    <input class="form-control" type="text" value="{!! $value['title'] !!}" name="title">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group file-uploader">
                                    <label for="example-text-input" class="form-control-label">Hình ảnh</label>
                                    <input type='file' name='Image' class="form-control image-news">
                                    @if(strstr($value['image'],"https") == "")
                                        <img style="width: 300px"
                                             src="https://res.cloudinary.com/{!! $cloud_name !!}/image/upload/{!! $value['image'] !!}.jpg"
                                             class="img_news"
                                             alt="user1">
                                    @else
                                        <img style="width: 300px"
                                             src="{!! $value['image'] !!}"
                                             class="img_news"alt="user1">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nội dung</label>
                                    <textarea class="form-control" name="contents" id="editor">{!! $value['content'] !!}</textarea>
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
