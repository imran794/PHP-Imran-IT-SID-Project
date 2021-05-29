<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <main>
    <form action="id.php" method="post">
      <h1>Create Your Virtual ID Card</h1>

      <!-- NAME FIELD -->
      <div class="form-field">
        <label for="field" class="label--required">Name</label>
        <section>
          <input id="field" required type="text" name="name" placeholder="Jane Doe" />
        </section>
      </div>

      <!-- PHONE FIELD -->
      <div class="form-field">
        <label for="phone" class="label--required">Phone</label>
        <section>
          <input id="phone" name="phone" required type="tel" placeholder="(234) 234-2342" />
        </section>
      </div>

      <!-- EMAIL FIELD -->
      <div class="form-field">
        <label for="email" class="label--required">Email</label>
        <section>
          <input id="email" required type="email" name="email" placeholder="somebody@me.com" />
        </section>
      </div>
      <!-- Course FIELD -->
      <div class="form-field">
        <label for="course" class="label--required">Course</label>
        <section>
          <input type="text" name="course" placeholder="Name of Your Course" />
        </section>
      </div>

      <!-- Batch FIELD -->
      <div class="form-field">
        <label for="batch" class="label--required">Batch No</label>
        <section>
          <input type="text" name="batch" placeholder="Your Batch No" />
        </section>
      </div>



      <!-- BUTTONS -->
      <div class="form-buttons">
        <input type="submit" name="generate_id" value="Generate ID" class="a-btn--filled">
      </div>

    </form>
  </main>
</body>

</html>