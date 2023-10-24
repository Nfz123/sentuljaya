@extends('layouts.siode.app')
@section('title', 'Update permission')
@section('content')

@section('content')

    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <h5>
                    Editing permission.</h5>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('permissions.update', $permission->id) }}">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input value="{{ $permission->name }}" type="text" class="form-control" name="name"
                        placeholder="Name" required>

                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                <button type="submit" class="btn bg-gradient-primary btn-sm">Save permission</button>
                <a href="{{ route('permissions.index') }}" class="btn bg-gradient-secondary btn-sm">Back</a>
            </form>
        </div>
        <div class="card-footer">

        </div>
    </div>


@endsection
