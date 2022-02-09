@extends('back.layouts.master')
@section('title','Slider Update')
@section('css')
  <link rel="stylesheet" href="{{asset('back')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
   <link rel="stylesheet" href="{{asset('back')}}/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="{{asset('back')}}/plugins/simplemde/simplemde.min.css">
  @endsection
@section('content')

            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Slider Form</h3>
                <a href="{{route('admin.slider.index')}}" class="btn btn-danger btn-xs float-right"><i class="fas fa-undo"></i> Geri Dön</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('admin.slider.update',$slider->id)}}" method="POST" enctype="multipart/form-data">
                  @include('back.layouts.partials.errors')
                   @include('back.layouts.partials.alert')
                @csrf
             
                <div class="card-body">
                <div class="form-group">
                    <label for="">Başlıq</label>
                    <input type="text" class="form-control" id="" value="{{old('title1',$slider->title1)}}" name="title1">
                  </div>
                 <div class="form-group">
                    <label for="">Alt Başlıq</label>
                    <input type="text" class="form-control" id="" value="{{old('title2',$slider->title2)}}" name="title2">
                  </div>
                  <div class="form-group">
                    <label for="">Sloqan</label>
                    <input type="text" class="form-control" id="" value="{{old('slogan',$slider->slogan)}}" name="slogan">
                  </div>
                  <div class="form-group">
                    <label for="">Video</label>
                    <input type="text" class="form-control" id="" value="{{old('video',$slider->video)}}" name="video">
                  </div>
                 <div class="form-group">
                   @if($slider->small_image != null)
                   <img src="{{asset($slider->small_image)}}" width="100" alt="">
                   @endif
                    <label for="exampleInputFile">Kiçik Şəkil</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="small_image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Sekil Sec</label>
                      </div>
                    </div>
                  </div>
                  <input type="hidden" name="old_image" value="{{$slider->image}}">
                  <input type="hidden" name="old_smallimage" value="{{$slider->small_image}}">
                  <div class="form-group">
                     @if($slider->image != null)
                   <img src="{{asset($slider->image)}}" width="100" alt="">
                   @endif
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