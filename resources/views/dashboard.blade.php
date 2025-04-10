<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gestion des Societés</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.2/font/bootstrap-icons.min.css">
        <style>
            .navbar {
                background-color: #0275d8;
            }

            .navbar-brand {
                color: white;
            }

            .header {
                background-color: #028484;
                color: white;
                padding: 10px;
                font-weight: bold;
                display: flex;
                align-items: center;
                justify-content: flex-start;
            }

            .header img {
                height: 40px;
                margin-right: 10px;
            }

            .top-bar {
                background-color: #730000;
                padding: 10px;
                display: flex;
                flex-wrap: wrap;
                justify-content: space-around;
                align-items: center;
            }

            .top-bar div {
                text-align: center;
                color: white;
                font-size: 14px;
                flex: 1;
                min-width: 120px;
            }

            .top-bar i {
                font-size: 30px;
                display: block;
                margin-bottom: 5px;
            }

            .user-info {
                text-align: right;
                padding: 10px;
                background-color: #028484;
                color: white;
            }
        </style>
    </head>

    <body>



        <div class="container mt-3">
            
            <div class="row mb-3 align-items-center">
                <div class="col-md-8">
                    <p class="mb-0">Liste des entreprises</p>
                </div>
                <div class="col-md-4 text-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEnregistrement">
                        Nouveau
                    </button>
                </div>
                
            </div>
            



            <table class="table table-bordered text-center">
                <thead class="table-primary">
                    <tr>
                        <th>Nom de l'entreprise</th>
                        <th>Responsable</th>
                        <th>Adresse</th>
                        <th>Telephone</th>
                        <th>Url du site</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($societes as $key => $value)
                        <tr>
                            <td>{{ $value->NomSociete }}</td>
                            <td>{{ $value->Logo }}</td>
                            <td>{{ $value->Adresse }}</td>
                            <td>{{ $value->Telephone }}</td>
                            <td>{{ $value->url_site }}</td>
                            <td class="action-icons">
                                <a data-bs-toggle="modal" data-bs-target="#modalEnregistrements{{ $value->id }}"
                                    class="btn btn-sm btn-primary mx-1"><i class="bi bi-pencil"></i></a>
                                <a href="{{ url('societes/' . $value->id . '/destroy') }}"
                                    class="btn btn-sm btn-danger mx-1"><i class="bi bi-trash"></i></a>

                            </td>



                        </tr>
                        
                        <div class="modal fade" id="modalEnregistrements{{ $value->id }}" tabindex="-1"
                            aria-labelledby="modalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalLabel">MODIFIER UNE SOCIÉTÉ</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="societeForm" action="{{ url('societes/' . $value->id . '/update') }}"
                                            method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" id="societe_id" name="id">
                                            <!-- Champ caché pour update -->

                                            <div class="mb-3">
                                                <label for="nom_entreprise" class="form-label">Nom de
                                                    l'entreprise</label>
                                                <input type="text" class="form-control" id="nom_entreprise"
                                                    name="NomSociete" required value="{{ $value->NomSociete }}">
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <label for="adresse" class="form-label">Adresse</label>
                                                    <input type="text" class="form-control" id="adresse"
                                                        name="Adresse" required value="{{ $value->Adresse }}">
                                                </div>
                                                <div class="col">
                                                    <label for="telephone" class="form-label">Téléphone</label>
                                                    <input type="number" class="form-control" id="telephone"
                                                        name="Telephone" required value="{{ $value->Telephone }}">
                                                </div>
                                            </div>
                                            <div class="mb-3 mt-3">
                                                <label for="Logo" class="form-label">Responsable</label>
                                                <input type="text" class="form-control" id="Logo"
                                                    name="Logo" required value="{{ $value->Logo }}">
                                            </div>
                                            <div class="mb-3 mt-3">
                                                <label for="url_site" class="form-label">URL du site</label>
                                                <input type="text" class="form-control" id="url_site"
                                                    name="url_site" required value="{{ $value->url_site }}">
                                            </div>
                                            
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Annuler</button>
                                                <button type="submit" class="btn btn-primary">Valider</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <tr>
                        <td class="fw-bolder">Total : {{ count($societes) }}</td>
                       



                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Modal d'enregistrement -->
        <div class="modal fade" id="modalEnregistrement" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">FICHE D'ENREGISTREMENT DE SOCIETE</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('societes') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="nom_entreprise" class="form-label">Nom de l'entreprise</label>
                                <input type="text" class="form-control" id="nom_entreprise" name="NomSociete"
                                    required>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="adresse" class="form-label">Adresse</label>
                                    <input type="text" class="form-control " id="adresse" name="Adresse"
                                        required>
                                </div>
                                <div class="col">
                                    <label for="telephone" class="form-label">Téléphone</label>
                                    <input type="number" class="form-control " id="telephone" name="Telephone"
                                        required>
                                </div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="Logo" class="form-label">Responsable</label>
                                <input type="text" class="form-control" id="Logo" name="Logo">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="url_site" class="form-label">URL du site</label>
                                <input type="text" class="form-control" id="url_site" name="url_site">
                            </div>

                            <!-- Déplace le bouton ici -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Annuler</button>
                                <button type="submit" class="btn btn-primary">Valider</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            document.getElementById('ajouterFamilleBtn').addEventListener('click', function() {
                // Code pour ajouter une famille sans fermer le modal
                let familleInput = document.getElementById('famille');
                let nouvelleFamille = prompt('Veuillez entrer une nouvelle famille:');
                if (nouvelleFamille) {
                    let option = document.createElement('option');
                    option.textContent = nouvelleFamille;
                    familleInput.appendChild(option);
                    familleInput.value = nouvelleFamille; // Sélectionner la nouvelle famille
                }
            });
        </script>
    </body>

    </html>


</x-app-layout>
