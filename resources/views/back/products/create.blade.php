@extends('back.layouts.master')
@section('title','User Create')
@section('css')
  <link rel="stylesheet" href="{{asset('back')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
   <link rel="stylesheet" href="{{asset('back')}}/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="{{asset('back')}}/plugins/simplemde/simplemde.min.css">
  @endsection
@section('content')

            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">User Form</h3>
                <a href="{{route('admin.product.index')}}" class="btn btn-danger btn-xs float-right"><i class="fas fa-undo"></i> Geri Dön</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('admin.product.create')}}" method="POST" enctype="multipart/form-data">
                  @include('back.layouts.partials.errors')
                   @include('back.layouts.partials.alert')
                @csrf
             
                <div class="card-body">
                <div class="form-group">
                    <label for="">Başlıq</label>
                    <input type="text" class="form-control" id="" placeholder="Başlıq" name="title">
                  </div>
                  <div class="form-group">
                    <label for="">Qiymət</label>
                    <input type="price" class="form-control" id="" placeholder="Qiymət" name="price">
                  </div>
                  <div class="form-group">
                    <label for="">Endirim Qİyməti</label>
                    <input type="text" class="form-control" id="" placeholder="Endirim Qİyməti" name="selling_price">
                  </div>
                <div class="form-group">
                    <label for="">Sku</label>
                    <input type="text" class="form-control" id="" placeholder="Sku" name="sku">
                  </div>
               
                
                   <div class="form-group">
                    <label for="">Status</label>
                    <select name="status" id="" class="form-control">
                      <option value="aktiv">Aktiv</option>
                      <option value="passiv">Passiv</option>
                    </select>
                  </div>
                <div class="form-group">
                    <label for="">Meta Başlıq</label>
                    <input type="text" class="form-control" id="" placeholder="Meta Basşlıq" name="meta_title">
                  </div>
                  <div class="form-group">
                    <label for="">Meta Açar</label>
                    <input type="text" class="form-control" id="" placeholder="Meta Açar" name="meta_keyword">
                  </div>
                  <div class="form-group">
                    <label for="">Meta Açıqlama</label>
                    <input type="text" class="form-control" id="" placeholder="Meta Açıqlama" name="meta_description">
                  </div>
                  <div class="form-group">
                    <label for="">Kiçik Açıqlama</label>
                    <input type="text" class="form-control" id="" placeholder="Kiçik Açıqlama" name="small_description">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Səkil</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Sekil Sec</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="form-group">
                   <div class="card-body">
              <textarea id="summernote" name="description" class="form-control">Açıqlama</textarea>
            </div>
                </div>
               
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-block">Yarat</button>
                </div>
              </form>
            </div>
@endsection
@section('js')
<!-- Select2 -->
<script src="{{asset('back')}}/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->

<script src="{{asset('back')}}/plugins/moment/moment.min.js"></script>
<script src="{{asset('back')}}/plugins/inputmask/jquery.inputmask.min.js"></script>

<script src="{{asset('back')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="{{asset('back')}}/plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>

<script>
  $(function () {
  
    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
   
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
 
</script>
@endsection