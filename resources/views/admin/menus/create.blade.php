
@extends('admin.app')
@section('head')
<script src={{ url('ckeditor/ckeditor.js') }}></script>
@endsection
@section('content')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Them ten danh muc</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm" action="" method="POST">
              <div class="card-body">

                <div class="form-group">
                  <label for="menu">Tên danh mục</label>
                  <input type="text" name="name" class="form-control" id="menu" placeholder="Tên danh mục">
                </div>

                <div class="form-group">
                  <label for="menu">Danh mục </label>
                  <select class="form-control" name="parent_id" >
                    <option value="0">Danh mục cha</option>
                    @foreach ($menus as $menu)
                      <option value="{{$menu->id}}">{{$menu->name}}</option> 
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label for="menu">Mo ta </label>
                  <textarea name="description" class="form-control"></textarea>
                </div>
                
                <div class="form-group">
                  <label for="menu">Mo ta chi tiết</label>
                  <textarea name="content" class="form-control"></textarea>
                </div>
                
                <div class="form-group">
                  <label for="menu">Kich hoạt</label>
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="active" value="1" id="active" checked="">
                      <label class="form-check-label">Yes</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="active" id="no_active" value="0">
                      <label class="form-check-label">No</label>
                    </div>
                  </div>
                </div>


              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Tạo danh mục</button>
              </div>
              @csrf
            </form>
          </div>
          <!-- /.card -->
          </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  @endsection
  @section('footter')
  <script>
    CKEDITOR.replace( 'content' );
    </script>
  @endsection