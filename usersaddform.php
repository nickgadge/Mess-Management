<script src="https://cdn.tailwindcss.com"></script>
<div class=" bg-green-100 flex justify-center items-center h-screen">
        <div class=" bg-red-100 p-5  rounded shadow-md sm:w-full md:w-96">
            <h2 class="text-2xl font-semibold mb-6">Register</h2>
            <form action="membersbd.php" method="POST">
                <div class="mb-4">
                    <label for="uname" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" id="uname" name="uname" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Gender</label>
                    <div class="mt-1">
                        <label for="male" class="inline-flex items-center">
                            <input type="radio" id="male" name="gender" value="male" class="form-radio h-4 w-4 text-indigo-600" required>
                            <span class="ml-2">Male</span>
                        </label>
                        <label for="female" class="inline-flex items-center ml-6">
                            <input type="radio" id="female" name="gender" value="female" class="form-radio h-4 w-4 text-indigo-600" required>
                            <span class="ml-2">Female</span>
                        </label>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                </div>
                <div class="mb-4">
                    <label for="num" class="block text-sm font-medium text-gray-700">Mobile No</label>
                    <input type="number" id="num" name="num" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                </div>
                <div class="mb-4">
                    <label for="date" class="block text-sm font-medium text-gray-700">Date:</label>
                    <input type="date" id="date" name="date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                </div>
                <div class="mb-4">
                    <label for="number" class="block text-sm font-medium text-gray-700">Fees Paid</label>
                    <input type="number" id="fees" name="fees" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                </div>
                <div class="mb-4">
                    <label for="num" class="block text-sm font-medium text-gray-700">Total Fees</label>
                    <input type="number" id="fees" value="2000" name="fees" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="w-full bg-indigo-500 text-white py-2 px-4 rounded hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">Register</button>
                </div>
            </form>
        </div>
</div>