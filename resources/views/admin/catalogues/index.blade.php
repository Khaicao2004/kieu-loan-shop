@extends('admin.layouts.master')

@section('title')
    Danh sách danh mục sản phẩm
@endsection

@section('content')
  <!-- start page title -->
  <div class="row">
    <div class="col-12">
        <div
            class="page-title-box d-sm-flex align-items-center justify-content-between"
        >
            <h4 class="mb-sm-0">Danh sách danh mục</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">
                        <a href="javascript: void(0);"
                            >Danh mục</a
                        >
                    </li>
                    <li class="breadcrumb-item active">
                        Danh sách
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5 class="card-title mb-0">
                    Danh sách
                </h5>
                <a href="{{route('admin.catalogues.create')}}" class="btn btn-primary mb-3">Thêm mới</a>
            </div>
            <div class="card-body">
                <table
                    id="example"
                    class="table table-bordered dt-responsive nowrap table-striped align-middle"
                    style="width: 100%"
                >
               <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên danh mục</th>
                    <th>Ảnh</th>
                    <th>Hoạt động</th>
                    <th>Ngày tạo</th>
                    <th>Ngày cập nhật</th>
                    <th>Hành động</th>
                </tr>
               </thead>
                
              <tbody>
                @foreach ($data as $item)         
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td><img src="{{\Storage::url($item->cover)}}" alt="" width="50px"></td>
                    <td>{!!$item->is_active 
                        ? '<span class="badge bg-primary">YES</span>' 
                        : '<span class="badge bg-danger">NO</span>'!!}</td>
                    <td>{{$item->created_at}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td>
                        <a href="{{route('admin.catalogues.show', $item->id)}}" class="btn btn-primary mb-3">Xem</a>
                        <a href="{{route('admin.catalogues.edit', $item->id)}}" class="btn btn-warning mb-3">Sửa</a>
                        <a href="{{route('admin.catalogues.destroy', $item->id)}}" 
                            onclick="return confirm('Chắc chắn chưa?')"
                            class="btn btn-danger mb-3">Xóa</a>
                    </td>
                </tr>
                @endforeach
              </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->
@endsection

@section('style-libs')
    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
@endsection

@section('script-libs')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!--datatable js-->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<script>
    $(document).ready(function() {
        var table = $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'copy',
                    exportOptions: {
                        columns: function(idx, data, node) {
                            return idx !== 9;
                        }
                    }
                },
                {
                    extend: 'csv',
                    exportOptions: {
                        columns: function(idx, data, node) {
                            return idx !== 9;
                        }
                    }
                },
                {
                    extend: 'excel',
                    exportOptions: {
                        columns: function(idx, data, node) {
                            return idx !== 9;
                        }
                    }
                },
                {
                    extend: 'pdf',
                    exportOptions: {
                        columns: function(idx, data, node) {
                            return idx !== 9;
                        }
                    }
                },
                {
                    text: 'PNG',
                    action: function(e, dt, node, config) {
                        html2canvas(document.querySelector('#example')).then(canvas => {
                            var link = document.createElement('a');
                            link.href = canvas.toDataURL('image/png');
                            link.download = 'table-image.png';
                            link.click();
                        });
                    }
                },
                'print'
            ],
            order: [
                [0, 'desc']
            ]
        });

        // Xóa các bộ lọc cũ và áp dụng bộ lọc mới
        $.fn.dataTable.ext.search.push(
            function(settings, data, dataIndex) {
                var minDate = $('#minDate').val();
                var maxDate = $('#maxDate').val();

                // Convert to Date objects for comparison
                var minDateObj = minDate ? new Date(minDate + 'T00:00:00') : null;
                var maxDateObj = maxDate ? new Date(maxDate + 'T23:59:59') : null;

                var createdAt = data[5] || ''; // Cột thời gian tạo
                var createdAtDate = new Date(createdAt);

                if (
                    (minDateObj === null && maxDateObj === null) ||
                    (minDateObj === null && createdAtDate <= maxDateObj) ||
                    (minDateObj <= createdAtDate && maxDateObj === null) ||
                    (minDateObj <= createdAtDate && createdAtDate <= maxDateObj)
                ) {
                    return true;
                }
                return false;
            }
        );

        $('#minDate, #maxDate').on('change', function() {
            table.draw();
        });

        // Tạo filter tìm kiếm văn bản
        $('#searchText').on('keyup', function() {
            table.search(this.value).draw();
        });
    });
</script>
@endsection