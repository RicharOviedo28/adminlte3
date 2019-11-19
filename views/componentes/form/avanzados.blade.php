@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Select2</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Minimal</label>
                        <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Alabama</option>
                            <option>Alaska</option>
                            <option>California</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Disabled</label>
                        <select class="form-control select2" disabled="disabled" style="width: 100%;">
                            <option selected="selected">Alabama</option>
                            <option>Alaska</option>
                            <option>California</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Multiple</label>
                        <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                            style="width: 100%;">
                            <option>Alabama</option>
                            <option>Alaska</option>
                            <option>California</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Disabled Result</label>
                        <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Alabama</option>
                            <option>Alaska</option>
                            <option disabled="disabled">California (disabled)</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
            the plugin.
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Input masks</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Date masks:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                            </div>
                            <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                            </div>
                            <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>US phone mask:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-phone"></i></span>
                            </div>
                            <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Intl US phone mask:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-phone"></i></span>
                            </div>
                            <input type="text" class="form-control"
                                data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>IP mask:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-laptop"></i></span>
                            </div>
                            <input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Color & Time Picker</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Color picker:</label>
                        <input type="text" class="form-control my-colorpicker1">
                    </div>
                    <div class="form-group">
                        <label>Color picker with addon:</label>
                        <div class="input-group my-colorpicker2">
                            <input type="text" class="form-control">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-square"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="bootstrap-timepicker">
                        <div class="form-group">
                            <label>Time picker:</label>
                            <div class="input-group">
                                <input type="text" class="form-control timepicker">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Date picker</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Date range:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-calendar"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control float-right" id="reservation">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Date and time range:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                            </div>
                            <input type="text" class="form-control float-right" id="reservationtime">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Date range button:</label>
                        <div class="input-group">
                            <button type="button" class="btn btn-default float-right" id="daterange-btn">
                                <i class="fa fa-calendar"></i> Date range picker
                                <i class="fa fa-caret-down"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">iCheck - Checkbox &amp; Radio Inputs</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>
                            <input type="checkbox" class="minimal" checked>
                        </label>
                        <label>
                            <input type="checkbox" class="minimal">
                        </label>
                        <label>
                            <input type="checkbox" class="minimal" disabled>
                            Minimal skin checkbox
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            <input type="radio" name="r1" class="minimal" checked>
                        </label>
                        <label>
                            <input type="radio" name="r1" class="minimal">
                        </label>
                        <label>
                            <input type="radio" name="r1" class="minimal" disabled>
                            Minimal skin radio
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            <input type="checkbox" class="minimal-red" checked>
                        </label>
                        <label>
                            <input type="checkbox" class="minimal-red">
                        </label>
                        <label>
                            <input type="checkbox" class="minimal-red" disabled>
                            Minimal red skin checkbox
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            <input type="radio" name="r2" class="minimal-red" checked>
                        </label>
                        <label>
                            <input type="radio" name="r2" class="minimal-red">
                        </label>
                        <label>
                            <input type="radio" name="r2" class="minimal-red" disabled>
                            Minimal red skin radio
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            <input type="checkbox" class="flat-red" checked>
                        </label>
                        <label>
                            <input type="checkbox" class="flat-red">
                        </label>
                        <label>
                            <input type="checkbox" class="flat-red" disabled>
                            Flat green skin checkbox
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            <input type="radio" name="r3" class="flat-red" checked>
                        </label>
                        <label>
                            <input type="radio" name="r3" class="flat-red">
                        </label>
                        <label>
                            <input type="radio" name="r3" class="flat-red" disabled>
                            Flat green skin radio
                        </label>
                    </div>
                </div>
                <div class="card-footer">
                    Many more skins available. <a href="http://fronteed.com/iCheck/">Documentation</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('wolfsyncro/adminlte3/plugins/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('wolfsyncro/adminlte3/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('wolfsyncro/adminlte3/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('wolfsyncro/adminlte3/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js') }}"></script>
<script src="{{ asset('wolfsyncro/adminlte3/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('wolfsyncro/adminlte3/plugins/colorpicker/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ asset('wolfsyncro/adminlte3/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ asset('wolfsyncro/adminlte3/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('wolfsyncro/adminlte3/plugins/iCheck/icheck.min.js') }}"></script>
<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', {
            'placeholder': 'dd/mm/yyyy'
        })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', {
            'placeholder': 'mm/dd/yyyy'
        })
        //Money Euro
        $('[data-mask]').inputmask()

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            format: 'MM/DD/YYYY h:mm A'
        })
        //Date range as a button
        $('#daterange-btn').daterangepicker({
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                        'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate: moment()
            },
            function (start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                    'MMMM D, YYYY'))
            }
        )

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        })
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass: 'iradio_minimal-red'
        })
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        })

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        //Timepicker
        $('.timepicker').timepicker({
            showInputs: false
        })
    })

</script>
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('wolfsyncro/adminlte3/plugins/daterangepicker/daterangepicker-bs3.css') }}">
<link rel="stylesheet" href="{{ asset('wolfsyncro/adminlte3/plugins/iCheck/all.css') }}">
<link rel="stylesheet" href="{{ asset('wolfsyncro/adminlte3/plugins/colorpicker/bootstrap-colorpicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('wolfsyncro/adminlte3/plugins/timepicker/bootstrap-timepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('wolfsyncro/adminlte3/plugins/select2/select2.min.css') }}">
@endsection
