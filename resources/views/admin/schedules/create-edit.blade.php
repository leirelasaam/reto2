@php
    if (isset($schedule)) {
        $module = $schedule->module_id;
        $day = $schedule->day;
        $hour = $schedule->hour;
        $button = __('schedule.update');
        $title = "Actualización de horarios";
    } else {
        $module = "";
        $day = "";
        $hour = "";
        $button = __('schedule.create');;
        $title = "Creación de horarios";
    }
@endphp


@extends('layouts.app-admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('schedule.index_title_1') }}</div>

                <div class="card-body">
                    @if($type == 'PUT')
                        <form class="mt-2" name="create_platform" action="{{ route('admin.schedules.update', $schedule) }}"
                            method="POST" enctype="multipart/form-data">

                            @method('PUT')
                    @else
                        <form class="mt-2" name="create_platform" action="{{ route('admin.schedules.store') }}"
                            method="POST" enctype="multipart/form-data">

                            @method('POST')
                    @endif
                            @csrf

                        <h4>{{ __('schedule.schedule') }}</h4>

                        <!-- Campo para el profesor 
                        <div class="row mb-3">
                            <label for="user_id" class="col-md-4 col-form-label text-md-end">{{__('schedule.teacher')}}</label>
                            <div class="col-md-6">
                            <select name="user_id" id="user" class="form-select">
                            <option value="" selected> -- Selecciona un profesor -- </option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}" 
                                        {{ $user->id == old('user_id', $schedule->user_id ?? '') ? 'selected' : '' }}>
                                        {{ ucfirst($user->lastname . ', ' . $user->name) }}
                                    </option>
                                @endforeach
                            </select>

                            </div>
                        </div>-->

                        <!-- Campo para Módulo -->
                        <div class="row mb-3">
                            <label for="module_id" class="col-md-4 col-form-label text-md-end">{{__('schedule.module')}}</label>
                            <div class="col-md-7">
                            <select name="module_id" id="module_id" class="form-select">
                            <option value="" selected>{{__('schedule.select_teacher')}}</option>
                                    @foreach ($modules as $module)
                                        <option value="{{ $module->id }}" 
                                            {{ $module->id == old('module_id', isset($schedule) ? $schedule->module_id : '') ? 'selected' : '' }}>
                                            {{ ucfirst('('. $module->code ."-". $module->course  . ')'." " . $module->name) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Campo para Día -->
                        <div class="row mb-3">
                            <label for="day" class="col-md-4 col-form-label text-md-end">{{ __('schedule.day') }}</label>

                            <div class="col-md-6">
                                <input id="day" type="number" min = "1" max = "31" class="form-control @error('day') is-invalid @enderror" name="day" value="{{ old('day', $day) }}" required autocomplete="day" autofocus>

                                @error('day')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Campo para Hora -->
                        <div class="row mb-3">
                            <label for="hour" class="col-md-4 col-form-label text-md-end">{{ __('schedule.hour') }}</label>

                            <div class="col-md-6">
                                <input id="hour" type="number" min="1" max="6" class="form-control @error('hour') is-invalid @enderror" name="hour" value="{{ old('hour', $hour) }}" required autocomplete="hour" autofocus>

                                @error('hour')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                {{$button}}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
