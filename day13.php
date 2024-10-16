<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="day12.css">
    <title>Day12</title>
</head>
<body>
    
<div class="col-12"> 
<div class="col-12 col-lg-5 box p-5">

<div class="col-12">
<div class="mb-3">
  <label class="form-label">Email address</label>
  <input type="email" class="form-control" id="email" placeholder="email">
</div>
<div class="mb-3">
  <label  class="form-label">Subject</label>
  <input type="text" class="form-control" id="subject" placeholder="Subject">
</div>
<div class="mb-3">
  <label  class="form-label">Content</label>
  <textarea class="form-control" id="content" rows="3"></textarea>
</div>

<div class="mb-3 d-grid mb-3">
  <button  class="btn btn-primary" onclick="emailsend();">Send</button>
</div>

</div>
</div>

</div>
<script src="day12.js"></script>

</body>
</html>