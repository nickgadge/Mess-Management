<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <title>Vite App</title> -->
  </head>
  <body>
    <div class="min-h-screen py-10" style="background-image: linear-gradient(115deg, #9F7AEA, #FEE2FE)">
      <div class="container mx-auto">
        <div class="flex flex-col lg:flex-row w-10/12 lg:w-8/12 bg-white rounded-xl mx-auto shadow-lg overflow-hidden">
          <div class="w-full lg:w-1/2 ---flex flex-col items-center justify-center p-12 bg-no-repeat bg-cover bg-center" style="background-image: url('mess2.jpg');">
            <!-- <h1 class="text-white text-3xl mb-3">Welcome</h1>
            <div>
              <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suspendisse aliquam varius rutrum purus maecenas ac <a href="#" class="text-purple-500 font-semibold">Learn more</a></p>
            </div> -->
          </div>
          <div class="w-full lg:w-1/2 py-16 px-12">
            <h2  class="text-3xl mb-4">Register</h2>
            <p class="mb-4">
              Create your account. It’s free and only take a minute
            </p>
            <form action="registerbd.php" method="post" onsubmit="return checkdata();">
              <div class="grid gap-5">
                <input type="text" name="mname" placeholder="Mess Name" required class="border border-gray-400 py-1 px-2 w-full">
               <!-- <input type="text" pl aceholder="Surname" class="border border-gray-400 py-1 px-2"> -->
              </div>
              <div class="mt-5">
                <input type="email" name="email" placeholder="Email" required class="border border-gray-400 py-1 px-2 w-full">
              </div>
              <div class="mt-5">
                <input type="password" id="p1" name="p1" placeholder="Password" required class="border border-gray-400 py-1 px-2 w-full">
              </div>
              <div class="mt-5">
                <input type="password" id="p2" name="p2" placeholder="Confirm Password" required class="border border-gray-400 py-1 px-2 w-full">
              </div>
              <div class="mt-5">
                <!-- <input type="checkbox" class="border border-gray-400">
                <span>
                  I accept the <a href="#" class="text-purple-500 font-semibold">Terms of Use</a> &  <a href="#" class="text-purple-500 font-semibold">Privacy Policy</a> 
                </span> -->
              </div>
              <div class="mt-5">
                <input type="submit" value="Register Now" class="w-full bg-purple-500 py-3 text-center text-white">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script> 
    function checkdata(){
    var x = document.getElementById("p1").value;
            var y = document.getElementById("p2").value;
            if (x != y) {
                alert("Both Passwords Must Be Same...");
                valid = false;
                return (valid);
                }
            }
</script>
  </body>
</html>