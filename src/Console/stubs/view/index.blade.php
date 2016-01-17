@extends('admin::layout.box')

@section('boxContent')
    <table class="ui compact celled padded striped table checkboxs">
        <thead>
            <tr>
                <th width="1"></th>
                <th width="1">
                    <div class="ui fitted toggle checkbox tableToggleSelect">
                        <input type="checkbox">
                    </div>
                </th>
                <th>Başlık</th>
                <th width="142" class="right aligned">@lang('admin.theadDate')</th>
                <th width="1"></th>
            </tr>
        </thead>
        <tbody id="listVeri">
            @foreach($rows as $key => $row)
                <tr id="row-{!! $key !!}">
                    <td>@include('admin::helper.table.order')</td>
                    <td>@include('admin::helper.table.toggle')</td>
                    <td class="title">
                        {!! $row['name'] !!}
                    </td>
                    <td class="right aligned">@include('admin::helper.table.date')</td>
                    <td>
                        <div class="ui icon buttons small">
                            @include('admin::helper.table.status')
                            @include('admin::helper.box.button_list')
                        </div>
                        <div class="destroy data">
                            <input name="id" value="{!! $row['id'] !!}" type="hidden">
                            <input name="row_id" value="#row-{!! $key !!}" type="hidden">
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="ui right floated">
        {!! $rows->render() !!}
    </div>
@stop