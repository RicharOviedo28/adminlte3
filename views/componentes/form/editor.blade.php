@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-info card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        CKEditor5
                        <small>Advanced and full of features</small>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool btn-sm" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool btn-sm" data-widget="remove" data-toggle="tooltip"
                            title="Remove">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <textarea id="editor1" name="editor1"
                            style="width: 100%">This is my textarea to be replaced with CKEditor.</textarea>
                    </div>
                    <p class="text-sm mb-0">Please adhere to the <a
                            href="https://ckeditor.com/ckeditor-5-builds/#classic">CKEditor</a>
                        license when using it!</p>
                </div>
            </div>
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">
                        Bootstrap WYSIHTML5
                        <small>Simple and fast</small>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool btn-sm" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-tool btn-sm" data-widget="remove" data-toggle="tooltip"
                            title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="card-body pad">
                    <div class="mb-3">
                        <textarea class="textarea" placeholder="Place some text here"
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                    <p class="text-sm mb-0">
                        Editor <a href="https://github.com/bootstrap-wysiwyg/bootstrap3-wysiwyg">Documentation and
                            license
                            information.</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('wolfsyncro/adminlte3/plugins/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('wolfsyncro/adminlte3/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        ClassicEditor
            .create(document.querySelector('#editor1'))
            .then(function (editor) {
                // The editor instance
            })
            .catch(function (error) {
                console.error(error)
            })
        // bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5({
            toolbar: {
                fa: true
            }
        })
    })

</script>
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('wolfsyncro/adminlte3/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
@endsection
