<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination Project</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">

        <div class="row">
            <div class="col-md-12 fs-2 pagSiz">Pagination Page Project</div>
        </div>

        <div class="pagShow">
            <?= $users[0]->lastPage() . " / " . $users[0]->currentPage() . " - " . $users[0]->total() . " öğe bulundu"; ?>
        </div>
        <table class="table table-dark table-striped w-75 ">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Age</th>
            </tr>
        </thead>
        <tbody>
            
        <?php $sayi = 1; ?>
            @foreach($users[0] as $user)
                <tr>
                <th scope="row">{{ $sayi++ }}</th>
                <td class="col-md-4">{{ $user->name }}</td>
                <td class="col-md-6">{{ $user->email }}</td>
                <td class="col-md-2 ">{{ $user->age }}</td>
                </tr>          
            @endforeach
        </tbody>
        <tr>
            <td class="col-md-6 text-center" colspan="3"></td>
            <td class="col-md-6 text-center pag">
                @if(isset($users[2]))
                    <a href="{{ $users[2] }}" id="geri">Geri</a>
                @endif
                
                @if(isset($users[1]))
                    <a href="{{ $users[1] }}" id="ileri">İleri</a>
                @endif
            </td>
        </tr>
        </table>

    </div>


    <script src="bootstrap.bundle.min.js"></script>

</body>
</html>