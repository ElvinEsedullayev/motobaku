@extends('back.layouts.master')
@section('title','Ayarlar guncelle')
@section('css')
  <link rel="stylesheet" href="{{asset('back')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
   <link rel="stylesheet" href="{{asset('back')}}/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="{{asset('back')}}/plugins/simplemde/simplemde.min.css">
  @endsection
@section('content')
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ayarlar Form</h3>
                
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('admin.setting.update',$setting->id)}}" method="POST" enctype="multipart/form-data">
                   @include('back.layouts.partials.errors')
                   @include('back.layouts.partials.alert')
                @csrf
             
                <div class="card-body">
                <div class="form-group">
                    <label for="">Başlıq</label>
                    <input type="text" class="form-control" id="" value="{{old('title',$setting->title)}}" name="title">
                  </div>
                  <div class="form-group">
                    <label for="">Müəllif</label>
                    <input type="text" class="form-control" id="" value="{{old('title',$setting->author)}}" name="author">
                  </div>
                  <div class="form-group">
                    <label for="">Açar Sözlər</label>
                    <input type="text" class="form-control" id=""  name="keyword" value="{{old('title',$setting->keyword)}}">
                  </div>
                  <div class="form-group">
                    
                    @if($setting->logo != null)
                    <img src="{{asset($setting->logo)}}" style="width: 120px; height: 100px; margin-bottom: 10px;" alt="">
                    @endif
                    
                    <label for="exampleInputFile">Logo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="logo" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Sekil Sec</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    
                    @if($setting->foot_logo != null)
                    <img src="{{asset($setting->foot_logo)}}" style="width: 120px; height: 100px; margin-bottom: 10px;" alt="">
                    @endif
                    
                    <label for="exampleInputFile">Alt Logo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="foot_logo" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Sekil Sec</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    
                    @if($setting->favicon != null)
                    <img src="{{asset($setting->favicon)}}" style="width: 120px; height: 100px; margin-bottom: 10px;" alt="">
                    @endif
                    
                    <label for="exampleInputFile">Favicon</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="favicon" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Sekil Sec</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="form-group">
                   <div class="card-body">
              <textarea id="summernote" name="description" class="form-control">{{$setting->description}}</textarea>
            </div>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-block">Yenilə</button>
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