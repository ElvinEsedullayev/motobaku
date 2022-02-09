@extends('back.layouts.master')
@section('title','Slider')
@section('css')
  <link rel="stylesheet" href="{{asset('back')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('back')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('back')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  @endsection
@section('content')

 
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Slider Tablosu</h3>
                @include('back.layouts.partials.errors')
                   @include('back.layouts.partials.alert')
              </div>
              
              <div class="card-body">
                <a href="{{route('admin.slider.store')}}" class="btn btn-info"><i class="fas fa-plus"></i> Slider Yarat</a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sıra N</th>
                    <th>Şəkil</th>
                    <th>Başlıq</th>
                    <th>Alt Başlıq</th>
                    <th>İşləmlər</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($sliders as $slider)
                  <tr>
                    <td>{{$loop->index +1}}</td>
                    <td><img style="width: 100px;" src="{{asset($slider->image)}}" alt=""></td>
                    <td>{{$slider->title1}}</td>
                    <td>{{$slider->title2}}</td>
                    <td>
                      <a href="{{route('admin.slider.edit',$slider->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                      <a href="{{route('admin.slider.delete',$slider->id)}}" class="btn btn-danger"  data-toggle="tooltip" data-placement="top" title="Sil" onclick="return confirm('Silmək İstədyinizə Əminsiniz?')"><i class="fas fa-trash-alt"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </table>
              </div>
              <!-- /.card-body -->
            </div>
  
@endsection
@section('js')
<script src="{{asset('back')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('back')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('back')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('back')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection