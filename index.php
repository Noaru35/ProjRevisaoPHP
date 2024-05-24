<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO LIST</title>

    <script type="module">
        // Import the functions you need from the SDKs you need
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.1/firebase-app.js";
        import { getAuth, createUserWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/10.12.1/firebase-auth.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
            apiKey: "AIzaSyAZIfxpsAPTxoDy-aPFyxE-Yc37PWjxcOg",
            authDomain: "hwloginauth.firebaseapp.com",
            projectId: "hwloginauth",
            storageBucket: "hwloginauth.appspot.com",
            messagingSenderId: "395724065660",
            appId: "1:395724065660:web:25494fe97f03389efc72f9",
            measurementId: "G-6HTSQYCFX9"
        };

        // Initialize Firebase
        window.app = initializeApp(firebaseConfig);
        window.fbAuth = getAuth(window.app);

            createUserWithEmailAndPassword(window.fbAuth, "vinicius.s.bastos55@gmail.com", "123456789")
            .then((userCredential) => {
                //sign in
                var user = userCredential.user;
                console.log(user);
            })
            .catch((error) => {
                var errorCode = error.code;
                var errorMessage = error.message;
                console.log(errorMessage);
            });
    </script>

</head>

<body>
    <h1>LOGIN: TODO LIST</h1>
    <?php
        include 'src/main.php'    ?>

    <label for="email">Email</label><br>
    <input type="email" id="email" name="email"><br>
    <label for="password">Password</label><br>
    <input type="password" id="password" name="password"><br>
    <button id="btnLogin">Login</button><button id="btnRegUser">Registrar Usuario</button>
</body>
</html>