<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
<div class="bg-hero-rgs bg-cover bg-base-200 bg-center min-h-screen md-flex">
    <div class="pt-36 justify-center">
    <div class="bg-white p-8 rounded-lg shadow-2xl w-96 mx-auto">
        <center>
            <h2 class="text-4xl text-caramel font-bold mb-4 ">JOUDOC</h2>
            <h2 class="text-xl mb-4 font-bold mb-1">Sign Up</h2>
            <p class="mb-5 text-greymon">Please fill in this form to create an account</p>
        
        <form>
            <div class="mb-4">
                <input type="text" id="full-name" name="full-name" placeholder="Full Name" class="border rounded-md px-3 py-2 w-full focus:outline-none focus:ring focus:border-blue-300" required>
            </div>
            <div class="mb-4">
                <input type="text" id="citizenship" name="citizenship" placeholder="Citizenship" class="border rounded-md px-3 py-2 w-full focus:outline-none focus:ring focus:border-blue-300" required>
            </div>
            <div class="mb-4">
                <input type="text" id="nip-nidn-nidk" name="nip-nidn-nidk" placeholder="NIP/NIDN/NIDK" class="border rounded-md px-3 py-2 w-full focus:outline-none focus:ring focus:border-blue-300" required>
            </div>
            <div class="mb-4">
                <input type="text" id="affiliation" name="affiliation" placeholder="Affiliation" class="border rounded-md px-3 py-2 w-full focus:outline-none focus:ring focus:border-blue-300" required>
            </div>
            <div >
                <button type="submit" class="btn rounded-full bg-lightcaramel w-36">Register</button>
            </div>
        </form>
    </center>
    </div>
</div>
</div>
</div>
</body>
</html>