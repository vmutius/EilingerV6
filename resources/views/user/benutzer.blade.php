@extends('layouts.user_dashboard')

@section('content')
<section class="home-section">
    <div class="text">Dashboard</div>
    <div class="home-content">
        <div class="shadow p-3 mb-5 bg-body rounded">
            <h1 class="text-center fs-4">Benutzer</h1>
            <div class="card-body">
                @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                  </div><br />
                @endif
                  <form method="post" action="{{ route('user.update', Auth::user()->id) }}">
                      <div class="form-group">
                          @csrf
                          @method('PATCH')
                          <label for="name">Name</label>
                          <input type="text" class="form-control" name="name" value="{{ $user->lastname }}"/>
                      </div>
                      <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" name="email" value="{{ $user->firstname }}"/>
                      </div>
                      <div class="form-group">
                          <label for="phone">Phone</label>
                          <input type="tel" class="form-control" name="phone" value="{{ $user->username }}"/>
                      </div>
                      <div class="form-group">
                          <label for="password">Password</label>
                          <input type="text" class="form-control" name="password" value="{{ $user->password }}"/>
                      </div>
                      <button type="submit" class="btn btn-block btn-danger">Update User</button>
                  </form>
              </div>
                
        </div>
    </div>
</section>
@endsection
