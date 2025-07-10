  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Register Form</title>
      <!-- Bootstrap CSS CDN -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
      <div class="container mt-5">
          <div class="row justify-content-center">
              <div class="col-md-6">
                  <div class="card shadow-sm">
                      <div class="card-header text-center">
                          <h2>Register</h2>
                      </div>
                      <div class="card-body">
                          <form action={{ route('emp.store') }} method="POST" id="registerForm">
                              @csrf
                              <!-- Name Field -->
                              <div class="mb-3">
                                  <label for="name" class="form-label">Name</label>
                                  <input type="text" id="name" name="name" class="form-control"
                                      placeholder="Enter your name" required>
                              </div>
                              <!-- Email Field -->
                              <div class="mb-3">
                                  <label for="email" class="form-label">Email</label>
                                  <input type="email" id="email" name="email" class="form-control"
                                      placeholder="Enter your email" required>
                              </div>
                              <!-- Address Field -->
                              <div class="mb-3">
                                  <label for="address" class="form-label">Address</label>
                                  <textarea id="address" name="address" class="form-control" rows="3" placeholder="Enter your address" required></textarea>
                              </div>
                              <!-- Contact Field -->
                              <div class="mb-3">
                                  <label for="contact" class="form-label">Contact</label>
                                  <input type="tel" id="contact" name="contact" class="form-control"
                                      placeholder="Enter your contact number" required>
                              </div>
                              <!-- Branch Field -->
                              <div class="mb-3">
                                  <label for="branch" class="form-label">Branch</label>
                                  <input type="text" id="branch" name="branch" class="form-control"
                                      placeholder="Enter branch name" required>
                              </div>
                              <!-- position -->
                              <div class="mb-3">
                                  <label for="position" class="form-label">Position</label>
                                  <input type="text" id="position" name="position" class="form-control"
                                      placeholder="Enter branch name" required>
                              </div>
                              <!-- Submit Button -->
                              <div class="d-grid">
                                  <button type="submit" class="btn btn-primary">Register</button>
                              </div>
                          </form>
                      </div>
                      <div class="card-footer text-center">
                          <small>&copy; 2025 Your Company</small>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Bootstrap JS Bundle (including Popper) -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
      <!-- jQuery (Required for validation plugin) -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

      <!-- jQuery Validation Plugin -->
      <script src="https://cdn.jsdelivr.net/jquery.validation/1.19.5/jquery.validate.min.js"></script>
      <script>
          $(document).ready(function() {
              $('#registerForm').validate({
                  rules: {
                      name: {
                          required: true,
                          minlength: 2
                      },
                      email: {
                          required: true,
                          email: true
                      },
                      address: {
                          required: true,
                          minlength: 5
                      },
                      contact: {
                          required: true,
                          digits: true,
                          minlength: 10,
                          maxlength: 10
                      },
                      branch: {
                          required: true
                      },
                      position: {
                          required: true
                      }
                  },
                  messages: {
                      name: {
                          required: "Please enter your name",
                          minlength: "Name must be at least 2 characters"
                      },
                      email: {
                          required: "Please enter your email",
                          email: "Please enter a valid email address"
                      },
                      address: {
                          required: "Please enter your address",
                          minlength: "Address must be at least 5 characters"
                      },
                      contact: {
                          required: "Please enter your contact number",
                          digits: "Only digits are allowed",
                          minlength: "Contact must be 10 digits",
                          maxlength: "Contact must be 10 digits"
                      },
                      branch: "Please enter your branch",
                      position: "Please enter your position"
                  },
                  errorElement: 'div',
                  errorClass: 'text-danger'
              });
          });
      </script>

  </body>

  </html>
