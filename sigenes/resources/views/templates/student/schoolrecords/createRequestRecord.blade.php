@extends('layouts.generals.main_template')

@section('body_page')

    <div class="container-fluid" data-ng-controller="schoolrecordController">
    	<div data-ng-init="init()"></div>

        @include('templates.student.schoolrecords.partials.noteRecord')
        @include('templates.student.schoolrecords.partials.inputsRecord')
        <br>
        @include('templates.student.schoolrecords.partials.infoStudentRecord')
        @include('templates.student.schoolrecords.partials.records')

    </div>

@endsection