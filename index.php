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
        window.fbApp = initializeApp(firebaseConfig);
        window.fbAuth = getAuth(window.fbApp);
        console.log(window.fbAuth)

        const btnRegister = document.getElementById('btnRegister');
        btnRegister.addEventListener('click', async ()=> {
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            try {
                const userCredential = await createUserWithEmailAndPassword(window.fbAuth, email, password);
                console.log(userCredential)
            } catch (error) {
                console.error(error);
            }
        })
          
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
    <button id="btnRegister">Registrar-se</button>
</body>
</html>