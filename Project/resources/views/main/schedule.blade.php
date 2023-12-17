@extends('layout.Navbar')
@section('main')
<div class="modal fade" id="ModalSchedule" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm lịch học</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/action_page.php">
                    <div class="mb-3 mt-3">
                        <input type="email" class="form-control" id="addform" placeholder="Nhập lịch học"
                            name="email">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="submitbtn">Thêm</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="EditModalSchedule" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm lịch học</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/action_page.php">
                    <div class="mb-3 mt-3">
                        <input type="email" class="form-control" id="editaddform" placeholder="Nhập lịch học"
                            name="email">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="submiteditbtn">Thêm</button>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        @if (count($schedule) > 0)
            <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên loại</th>
                            <th scope="col">Status</th>
                            <th scope="col">Ngày tạo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($schedule as $key => $item)
                            <tr class="">
                                <td scope="row">{{ ++$key }}</td>
                                <td>
                                    <span class="editRolename pointer"
                                        data-id="{{ $item->id }}">{{ $item->name }}</span>
                                </td>
                                <td>
                                    <select name="" id="" class="form-control switchRole pointer"
                                        data-id="{{ $item->id }}">
                                        @if ($item->status == 0)
                                            <option value="0" selected>Đang khóa</option>
                                            <option value="1">Đang mở</option>
                                        @else
                                            <option value="0">Đang khóa</option>
                                            <option value="1" selected>Đang mở</option>
                                        @endif
                                    </select>
                                </td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    <button class="btn btn-danger deleteRolebtn"
                                        data-id="{{ $item->id }}">Xóa</button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>
<script>
    $(document).ready(function () {
        addSchedule();
    });



    function addSchedule() {
            $('#modalbtn').click(function(e) {
                e.preventDefault();
                $('#ModalSchedule').modal('show');
                $('#submitbtn').click(function(e) {
                    e.preventDefault();
                    var schedule = $('#addform').val().trim();
                    if (schedule == '') {
                        Swal.fire({
                            title: "Chưa nhập lịch học",
                            width: 600,
                            padding: "3em",
                            color: "#716add",
                            background: "#fff url(https://media.tenor.com/fjPpBbB7HaYAAAAC/mletter.gif)",
                            backdrop: `
    rgba(0,0,123,0.4)
    url("https://media.itsnicethat.com/original_images/giphy-2021-gifs-and-clips-animation-itsnicethat-02.gif")
    left top
    no-repeat
  `
                        });
                    } else {
                        $.ajax({
                            type: "post",
                            url: "/addschedule",
                            data: {
                                schedule: schedule
                            },
                            dataType: "JSON",
                            success: function(res) {
                                if (res.check == true) {
                                    Swal.fire({
                                        title: "Thêm thành công",
                                        width: 600,
                                        padding: "3em",
                                        color: "#716add",
                                        background: "#fff url(https://sweetalert2.github.io/images/trees.png)",
                                        backdrop: `
    rgba(0,0,123,0.4)
    url("https://media.itsnicethat.com/original_images/giphy-2021-gifs-and-clips-animation-itsnicethat-02.gif")
    left top
    no-repeat
  `
                                    }).then(() => {
                                        window.location.reload()
                                    })
                                }
                                if (res.msg.schedulename) {
                                    Swal.fire({
                                        title: res.msg.schedulename,
                                        width: 600,
                                        padding: "3em",
                                        color: "#716add",
                                        background: "#fff url(https://sweetalert2.github.io/images/trees.png)",
                                        backdrop: `
    rgba(0,0,123,0.4)
    url("https://media.itsnicethat.com/original_images/giphy-2021-gifs-and-clips-animation-itsnicethat-02.gif")
    left top
    no-repeat
  `
                                    });
                                }
                            }
                        });
                    }

                });
            });
        }
</script>
@endsection
@section('role')
    <button type="submit" class="btn btn-primary" id="modalbtn">Thêm</button>
@endsection