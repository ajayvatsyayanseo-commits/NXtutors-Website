@extends('super.layouts.app')
@section('title','Super Admin Login')

@section('content')
<style>
  /* Scoped to the login screen. The layout's <main> pays p-4; we take it back
     so the panel can bleed to the window edges and centre what's inside it. */
  .sa-auth{
    margin: -1.5rem;
    padding: 2rem 1.5rem;
    min-height: calc(100vh - 56px);
    display: grid;
    place-items: center;
    background:
      radial-gradient(900px 500px at 85% -10%, rgba(246,195,74,.14), transparent 60%),
      linear-gradient(165deg, #0d1626 0%, #131e33 55%, #0b1220 100%);
  }
  .sa-auth__card{
    width: 100%;
    max-width: 400px;
    background: #fff;
    border-radius: 18px;
    padding: 32px 30px;
    box-shadow: 0 24px 60px rgba(3, 9, 20, .45);
  }
  .sa-auth__brand{
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 22px;
  }
  .sa-auth__mark{
    display: grid;
    place-items: center;
    width: 42px;
    height: 42px;
    border-radius: 12px;
    background: linear-gradient(150deg, #1f6feb, #4c8dff);
    color: #fff;
    font-weight: 800;
    letter-spacing: -.02em;
  }
  .sa-auth__name{ font-weight: 800; line-height: 1.1; color: #0f172a; }
  .sa-auth__role{ font-size: 12px; color: #64748b; letter-spacing: .06em; text-transform: uppercase; }

  .sa-auth__h{ font-size: 22px; font-weight: 700; color: #0f172a; margin: 0 0 4px; }
  .sa-auth__lead{ font-size: 14px; color: #64748b; margin: 0 0 20px; }

  .sa-auth .form-label{ font-size: 13px; font-weight: 600; color: #334155; }
  .sa-auth .form-control{
    padding: 11px 13px;
    border-radius: 10px;
    border: 1px solid #dbe2ea;
    background: #f8fafc;
  }
  .sa-auth .form-control:focus{
    background: #fff;
    border-color: #4c8dff;
    box-shadow: 0 0 0 4px rgba(76, 141, 255, .16);
  }
  .sa-auth .btn-login{
    width: 100%;
    padding: 11px;
    border: 0;
    border-radius: 10px;
    font-weight: 700;
    color: #0b1220;
    background: linear-gradient(180deg, #f6c34a, #eda92f);
    transition: filter .18s ease, transform .18s ease;
  }
  .sa-auth .btn-login:hover{ filter: brightness(1.06); transform: translateY(-1px); }
  .sa-auth__foot{ margin-top: 18px; font-size: 12px; color: #94a3b8; text-align: center; }

  @media (max-width: 480px){
    .sa-auth{ padding: 1.25rem 1rem; }
    .sa-auth__card{ padding: 26px 20px; }
  }
</style>

<div class="sa-auth">
  <div class="sa-auth__card">

    <div class="sa-auth__brand">
      <span class="sa-auth__mark">NX</span>
      <div>
        <div class="sa-auth__name">NXTutors</div>
        <div class="sa-auth__role">Super Admin</div>
      </div>
    </div>

    <h1 class="sa-auth__h">Sign in</h1>
    <p class="sa-auth__lead">Login to manage all access.</p>

    @if($errors->any())
      <div class="alert alert-danger py-2 px-3 small">{{ $errors->first() }}</div>
    @endif

    <form method="POST" action="{{ route('super.login.post') }}">
      @csrf

      <div class="mb-3">
        <label class="form-label" for="email">Email</label>
        <input type="email" id="email" name="email" class="form-control"
               value="{{ old('email') }}" autocomplete="username" autofocus required>
      </div>

      <div class="mb-3">
        <label class="form-label" for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control"
               autocomplete="current-password" required>
      </div>

      <div class="form-check mb-4">
        <input class="form-check-input" type="checkbox" name="remember" id="remember">
        <label class="form-check-label small" for="remember">Keep me signed in</label>
      </div>

      <button type="submit" class="btn-login">Login</button>
    </form>

    <p class="sa-auth__foot">Authorised access only.</p>
  </div>
</div>
@endsection
