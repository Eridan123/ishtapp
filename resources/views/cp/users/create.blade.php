@extends('admin.layouts.app')

@section('content')

    @subheader
        Пользователи
    @endsubheader

    @content
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Portlet-->
                <div class="m-portlet">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Создать
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    {!! Form::model($user, ['route' => 'users.store', 'enctype' => 'multipart/form-data', 'class' => 'm-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed']) !!}
                        @include('admin.users.form', $user)
                    {!! Form::close() !!}
                    <!--end::Form-->
                </div>
                <!--end::Portlet-->
            </div>
        </div>
    @endcontent

@endsection

@section('scripts')
@endsection
