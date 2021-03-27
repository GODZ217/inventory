<html>

<head>
    <title>Inventory | Register</title>
    <link href={{ asset('css/app.css') }} rel='stylesheet'/>
</head>

<body class='flex flex-col bg-gray-300 justify-between'>
    <div class='flex flex-col place-self-center justify-center bg-white p-5 mt-5 rounded-xl shadow-xl'>
        <img src='/icons/box.png' class='flex flex-center items-center w-12'/>
    </div>
    <h1 class='text-center mt-5 text-xl'>Aplikasi Sistem Inventory</h1>

    <div class='flex place-self-center justify-center items-center'>
        <form action='/register/data' method='post' class='flex flex-col place-self-center bg-white p-5 mt-5 shadow-xl rounded-xl'>
            @csrf
            <div class='flex flex-col items-center'>
                <img src='/icons/box.png' class='w-14'/>
                <h1 class='text-center mt-5 mb-5 text-xl'>Silahkan Registrasi</h1>
            </div>
            <input type='text' name='username' placeholder='Masukkan Username' class='border-b-2 border-black'/>
            <input type='password' name='password' placeholder='Masukkan Password' class='border-b-2 border-black mt-5'/>

            <div class='flex flex-row mt-4'>
                <label for='role'>Role : </label>
                <select id='role' name='role' class='bg-black text-white rounded-xl text-center place-self-start pl-2 pr-2 ml-2'>
                    <option value='admin'>Admin</option>
                    <option value='smp'>Smp</option>
                    <option value='sma'>Sma</option>
                    <option value='smk'>Smk</option>
                <select>
            </div>

            <button type='submit' class='mt-5 bg-black text-white rounded-xl'>Buat</button>
            @if(session('berhasil'))
                <p class='mt-3 text-center text-green-800'>{{ session('berhasil') }}</p>
            @endif
            <p class='mt-5'>Sudah punya akun ? login di <a href='/' class='text-blue-800'>sini</a></p>

        </form>
    </div>
    
    <div>
        <h1 class='text-center float-bottom'>Copyright© By Fajar Firdaus</h1>
    </div>
</body>

</html>
