<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propriétairte<main>
    <div class="container" style="margin-top: 80px">
         <h2>Liste des entreprises</h2>
         <div class="row">
             <div class="col">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Prenom</th>
                    <th scope="col">Nom</th>
                      <th scope="col">Adresse</th>
                        <th scope="col">Date de naissance</th>
                        <th scope="col">Lieu de naissance</th>
                        <th scope="col">Nationalité</th>
                    </tr>
                  </thead>
                    <tbody>
                        @foreach ($proprietaires as $proprietaire)
                        <tr>
                          <th scope="row">{{ $proprietaire->id }}</th>
                          <td>{{ $proprietaire->nom }}</td>
                          <td>{{ $proprietaire->prenom }}</td>
                          <td>{{ $proprietaire->lieu_naissance }}</td>
                          <td>{{ $proprietaire->adresse }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
             </div>
         </div>
     </div>
</main></title>
</head>
<body>
    
</body>
</html>