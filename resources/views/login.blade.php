<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeeplyWell</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">

<div class="w-full max-w-md p-8 space-y-6 bg-white shadow-md rounded-lg">
    <h2 class="text-2xl font-medium text-center text-gray-700">Login !</h2>
    <div>
        <img src="{{asset('flower.png')}}" alt="Workflow" class="mx-auto h-12 w-auto">
    </div>

    <form action="/login" method="POST">
        @csrf
        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-600">Email Address</label>
            <input type="email" id="email" name="email" value="{{old("email")}}"
                   class="w-full px-4 py-2 mt-2 border rounded-md focus:ring-blue-500 focus:border-blue-500 outline-none">
        </div>
        <x-forms-eror name="email"/>

        <!-- Password -->
        <div class="mt-4">
            <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
            <input type="password" id="password" name="password" required
                   class="w-full px-4 py-2 mt-2 border rounded-md focus:ring-blue-500 focus:border-blue-500 outline-none">
        </div>
        

        <!-- Login Button -->
        <button type="submit"
                class="w-full px-4 py-2 mt-4 text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none">
            Login
        </button>
    </form>

</div>

</body>
</html>
