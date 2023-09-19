@extends('admin.layout.app')

@section('title')
    {{ $role->name ?? 'Show Role' }}
@endsection

@section('header')
<div class="page-header-content d-lg-flex">
    <div class="d-flex">
        <h4 class="page-title mb-0">
            Home - <span class="fw-normal">Role</span>
        </h4>
        <a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
        </a>
    </div>
    <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="page_header">
        <div class="d-sm-flex align-items-center mb-3 mb-lg-0 ms-lg-3">
            <a href="{{ route('roles.index') }}" class="btn btn-outline-primary btn-labeled btn-labeled-start rounded-pill">
                <span class="btn-labeled-icon bg-primary text-white rounded-pill">
                    <i class="ph-arrow-circle-left"></i>
                </span>
                Back
            </a>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">{{ __('Show') }} Role</h5>
        </div>
        <div class="card-body">
            <div class="form-group mb-3">
                <strong>Name:</strong>
                {{ $role->name }}
            </div>
            <div class="form-group mb-3">
                <strong>Guard Name:</strong>
                {{ $role->guard_name }}
            </div>
            <div class="form-group">
                <strong>Permissions:</strong>
                <div class="row">
                    @foreach($permissionGroup as $key => $permissions)
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <p class="fw-semibold">{{ ucfirst($key) }}</p>
                                <div class="border px-3 pt-3 pb-2 rounded">
                                    <div class="row">
                                        @foreach($permissions as $permission)
                                        <div class="col-md-6">
                                            <label class="form-check mb-2">
                                                <input 
                                                    type="checkbox" 
                                                    class="form-check-input form-check-input-secondary" 
                                                    name="permission[]" 
                                                    value="{{ $permission['id'] }}" 
                                                    @if(isset($permission['exist'])) {{ $permission['exist'] }} @endif>
                                                <span class="form-check-label">{{ ucfirst($permission['name']) }}</span>
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection