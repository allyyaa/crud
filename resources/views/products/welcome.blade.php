@extends('products.layout')
@section('content')
<style>
/* Add this CSS to your existing stylesheet or create a new one */

/* Styling for the Google login button */
.btn-google {
  background-color: #dd4b39;
  color: #ffffff;
  border: none;
  border-radius: 0.5rem;
  padding: 10px 20px;
  font-size: 1.2rem;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: background-color 0.3s ease;
}

.btn-google:hover {
  background-color: #c53727; /* Darken the background color on hover */
}

.btn-google i {
  margin-right: 10px;
}

/* Styling for the form labels */
.form-label {
  color: #495057;
}

/* Styling for the form input fields */
.form-control {
  border-radius: 0.5rem;
}

/* Styling for the Remember Password checkbox */
.form-check-label {
  color: #495057;
}

/* Styling for the Login button */
.btn-primary {
  background-color: #508bfc;
  border: none;
  border-radius: 1rem;
  font-size: 1.2rem;
}

.btn-primary:hover {
  background-color: #406bd2; /* Darken the background color on hover */
}

</style>
<section>
  <div class="container py-5 h-100">
    <div class="container d-flex align-items-center justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Sign in</h3>

            <div class="form-outline mb-4">
              <input type="email" id="typeEmailX-2" class="form-control form-control-lg" />
              <label class="form-label" for="typeEmailX-2">Email</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="typePasswordX-2" class="form-control form-control-lg" />
              <label class="form-label" for="typePasswordX-2">Password</label>
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label class="form-check-label" for="form1Example3"> Remember password </label>
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>

            <hr class="my-4">

            <a href="{{ route('google.redirect') }}" class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
              type="submit"><i class="fab fa-google me-2"></i> Sign in with google</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
