<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
<div class="bg-hero-lg bg-cover bg-base-200 bg-center min-h-screen">
  <div class="hero-content flex-col lg:flex-row-reverse">
    <div class="card flex-shrink-0 w-full max-w-sm mr-auto ml-24 mt-60">
      <div class="card-body">
        <div class="form-control">
          <input type="text" placeholder="Username" class="input input-bordered input-sm w-full max-w-xs" />
        </div>
        <div class="form-control">
          <input type="text" placeholder="Password" class="input input-bordered input-sm w-full max-w-xs" />
          <label class="label">
            <a href="#" class="label-text-alt link link-hover">Lupa Password?</a>
          </label>
        </div>
        <div class="text-white mt-6">
          <button class="btn-neutral h-10 rounded-full bg-lightcaramel w-36 font-bold ml-20">Login</button>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>