@extends('layout.Navbar')

@section('main')
    @if (count($role) > 0)
        <!-- Modal -->
        <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" placeholder="Tên tài khoản" class="form-control" id="username">
                        <input type="text" placeholder="Email" class="form-control" id="emailuser">
                        <select name="" class="form-control mb-2" id="idRole">
                            @foreach ($role as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="button" class="btn btn-primary" id="submitUserbtn">Lưu</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="container">
        <div class="row">
            @if (count($user) > 0)
                <div class="table-responsive">
                    <table class="table table-primary">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên tài khoản</th>
                                <th scope="col">Email</th>
                                <th scope="col">Loại tài khoản</th>
                                <th scope="col">Status</th>
                                <th scope="col">Ngày tạo</th>
                                <th scope="col">Ngày cập nhật</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $key => $item)
                                <tr class="">
                                    <td scope="row">{{ ++$key }}</td>
                                    <td>
                                        <span class=" pointer" data-id="{{ $item->id }}">{{ $item->name }}</span>
                                    </td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->rolename }}</td>
                                    <td>
                                        <select name="" id="" class="form-control  pointer"
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
                                    <td>{{ $item->updated_at }}</td>
                                    <td>
                                        <button class="btn btn-danger deletebtn" data-id="{{ $item->id }}">Xóa</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
    <script>
        $(document).ready(function() {
            addUser();
            deleteUser();
        });

        function addUser() {
            $('#addUser').click(function(e) {
                e.preventDefault();
                $('#userModal').modal('show');
                $('#submitUserbtn').click(function(e) {
                    e.preventDefault();
                    var name = $('#username').val().trim();
                    var email = $('#emailuser').val().trim();
                    var idRole = $('#idRole option:selected').val();
                    if (name == '' || email == '') {
                        Swal.fire({
                            title: 'Thiếu thông tin',
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
                        })
                    } else {
                        $.ajax({
                            type: "post",
                            url: "/user",
                            data: {
                                name: name,
                                email: email,
                                idRole: idRole
                            },
                            dataType: "JSON",
                            success: function(res) {
                                if (res.check == true) {
                                    Swal.fire({
                                        position: "top-end",
                                        icon: "success",
                                        title: "Thêm tài khoản thành công",
                                        showConfirmButton: false,
                                        timer: 1500
                                    }).then(() => {
                                        window.location.reload();
                                    })
                                } else if (res.msg.name) {
                                    Swal.fire({
                                        position: "top-end",
                                        icon: "error",
                                        title: res.msg.name,
                                        showConfirmButton: false,
                                        timer: 1500
                                    })
                                } else if (res.msg.email) {
                                    Swal.fire({
                                        position: "top-end",
                                        icon: "error",
                                        title: res.msg.email,
                                        showConfirmButton: false,
                                        timer: 1500
                                    })
                                } else if (res.msg.idRole) {
                                    Swal.fire({
                                        position: "top-end",
                                        icon: "error",
                                        title: res.msg.idRole,
                                        showConfirmButton: false,
                                        timer: 1500
                                    })
                                }
                            }
                        });
                    }
                });
            });
        }

        function deleteUser() {
            $('.deletebtn').click(function(e) {
                e.preventDefault();
                var id = $(this).attr('data-id');
                Swal.fire({
                    title: "Xóa tài khoản ?",
                    text: "Hành động này không thể hoàn tác!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Xác nhận!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "post",
                            url: "/deleteUser",
                            data: {
                                id: id
                            },
                            dataType: "JSON",
                            success: function(res) {
                                if (res.check == true) {
                                    Swal.fire({
                                        title: "Đã xóa!",
                                        text: "Tài khoản đã bị xóa",
                                        icon: "success"
                                    }).then(() => {
                                        window.location.reload()
                                    })
                                }
                            }
                        });

                    }
                });


            });
        }
    </script>
@endsection
@section('user')
    <div class="btn btn-primary " id="addUser">Thêm user</div>
@endsection
