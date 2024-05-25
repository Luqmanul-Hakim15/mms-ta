<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <form action="{{ route('register-post') }}" method="POST">
        @csrf
        <div>
            <label for="name">First Name</label>
            <input type="text" name="firstname" required autofocus>
        </div>
        <div>
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" required>
        </div>
        <div>
            <label for="position">Jabatan</label>
            <input type="text" name="position" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label for="usname">Username</label>
            <input type="text" name="usname" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit">Register</button>
    </form>
</body>
</html>
