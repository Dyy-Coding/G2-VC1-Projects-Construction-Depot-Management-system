
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-12 col-lg-12 col-xl-8">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-4 text-center">

            <h3 class="mb-5">Login</h3>

            <form action="/users/login" method="post">
              <div class="form-outline mb-3">
                <label class="form-label" for="email">Email</label>
                <input type="email" id="email" placeholder="Enter email..." name="email" class="form-control form-control-lg" required />
              </div>

              <div class="form-outline mb-4">
                <label class="form-label" for="pwd">Password</label>
                <input type="password" id="pwd" placeholder="Enter password..." name="password" class="form-control form-control-lg" required />
              </div>

              <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
