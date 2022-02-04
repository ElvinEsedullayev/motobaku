@extends('back\layouts\master')
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
                <a href="{{route('admin.user.index')}}" class="btn btn-danger btn-xs float-right"><i class="fas fa-undo"></i> Geri Dön</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('admin.user.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                   @include('back\layouts\partials\errors')
                   @include('back\layouts\partials\alert')
                @csrf
             
                <div class="card-body">
                <div class="form-group">
                    <label for="">Ad Soyad</label>
                    <input type="text" class="form-control" id="" value="{{old('name',$user->name)}}" name="name">
                  </div>
                  <div class="form-group">
                    <label for="">Email addres</label>
                    <input type="email" class="form-control" id="" value="{{old('email',$user->email)}}" name="email">
                  </div>
                  <div class="form-group">
                    <label for="">Şifrə</label>
                    <input type="password" class="form-control" id=""  name="password">
                  </div>
                  <div class="form-group">
                    <label for="">İxtisas</label>
                    <input type="text" class="form-control" id="" value="{{old('specialty',$user->detail->specialty)}}" name="specialty">
                  </div>
                <div class="form-group">
                    <label for="">Adres</label>
                    <input type="text" class="form-control" id="" value="{{old('adress',$user->detail->adress)}}" name="adress">
                  </div>
                   <div class="form-group">
                    <label for="">Status</label>
                    <select name="status" id="" class="form-control">
                      <option @if($user->detail->status == 'admin') selected @endif value="admin">Admin</option>
                      <option @if($user->detail->status == 'user') selected @endif value="user">User</option>
                    </select>
                  </div>
                <div class="form-group">
                  <label>Telefon</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="text" name="phone" value="{{old('phone',$user->detail->phone)}}" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                  </div>
                </div>
              <div class="form-group">
                  <label>Tarix:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="date" name="birthday" value="{{old('birthday',$user->detail->birthday)}}" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                  <div class="form-group">
                    @if($user->detail->image != null)
                    <img src="{{asset('uploads/users/'.$user->detail->image)}}" style="width: 120px; height: 100px; margin-bottom: 10px;" alt="">
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
              <textarea id="summernote" name="about" class="form-control">{{old('about',$user->detail->about)}}</textarea>
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