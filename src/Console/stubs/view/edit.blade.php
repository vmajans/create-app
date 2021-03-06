@extends('admin::layout.box')

@section('boxContent')
    <form id="form" data-action="{!! route_action('update') !!}" class="ui form">
        <div class="ui button submit transition hidden"></div>
        <input name="_token" value="{{ csrf_token() }}" type="hidden">
        <input name="id" value="{!! $row['id'] !!}" type="hidden">

    </form>
@stop

@section('jsCode')
    @parent
    <script>
        $(document).ready(function() {
            App.form.validate('#form', {
                /**/
            });
        });
    </script>
@stop