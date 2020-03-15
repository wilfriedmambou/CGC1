<!-- Content Wrapper. Contains page content -->
<div class="col-lg-8 offset-lg-2">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row ">
        <div class="col-sm-6">
          <h1>Text Editors</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Text Editors</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-outline card-info">
          <div class="card-header">
            <h3 class="card-title">


            </h3>
            {{-- input titre  --}}
            <div class="form-group">
              <label for="title">Title</label>
              <input type="texte" value="{{$post->title}}" name="title"
                class="form-control @error('title') is-invalid @enderror" id="title" placeholder="{{$post->title}}"
                autofocus>
              @error('title')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-group">
              <input type="hidden" value="{{ $post->id }}" name="post_id" />
            </div>
            <!-- tools box -->
     
            <!-- /. tools -->
          </div>
          <!-- /.card-header -->
          <div class="card-body pad">
            <div class="">
              <label for="title">Contenu Du Post</label>
              <textarea class="textarea form-control @error('content') is-invalid @enderror"
                placeholder="Place some text here"
                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                name=content>{{$post->content}}</textarea>
              @error('content')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" name="publier" id="publier">
              <label class="form-check-label" value="{{$post->publier}}" for="publier">Publier le Post</label>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <p class="text-sm mb-0">
              Editor <a href="https://github.com/bootstrap-wysiwyg/bootstrap3-wysiwyg">Documentation and license
                information.</a>
            </p>
          </div>
        </div>
      </div>
      <!-- /.col-->
    </div>
    <!-- ./row -->
  </section>
</div>
<!-- /.content -->



<!-- Control Sidebar -->

<!-- /.control-sidebar -->
<!-- ./wrapper -->