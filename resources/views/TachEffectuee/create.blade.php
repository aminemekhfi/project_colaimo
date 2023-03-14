@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <h2>Tache effectuée</h2><br>
    <div class="container-md">
            
        <form action="{{ route('TachEffectuee.store') }}" method="POST">
            @csrf 
            <div>
                <label>{{ __('CodeTache') }}</label>
                <div>
                    <input type="number" name="CodeTache" class="form-control mb-1 @error('CodeTache') is-invalid @enderror">
                </div>
                @error('CodeTache')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('DateTache') }}</label>
                <div>
                    <input type="date" name="DateTache" class="form-control mb-1 @error('DateTache') is-invalid @enderror">
                </div>
                @error('DateTache')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>Departement</label>
                <select name="Depar" id="Depar" class="form-select mb-1 @error('Depar') is-invalid @enderror">
                    
                    <option value="Administratif et Financier">
                        Administratif et Financier
                    </option>
                    <option value="Commercial">
                        Commercial
                    </option>
                    <option value="Ressources Humaines">
                        Ressources Humaines
                    </option>
                    <option value="Fabrication">
                        Fabrication
                    </option>
                    <option value="Maintenance">
                        Maintenance
                    </option>
                    <option value="Production">
                        Production
                    </option>
                    <option value="Qualite">
                        Qualite
                    </option>
                    <option value="Developpement et Recherche">
                        Developpement et Recherche
                    </option>
                    <option value="Informatique">
                        Informatique
                    </option>
                    @error('Depar')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                    @enderror
                </select>
               
        </div>
        <label>Service</label>
        <div class="d-flex align-items-baseline">
                <select name="Service" id="Service" class="form-select mb-1 @error('Service') is-invalid @enderror">
                    <option value=""></option>@error('Service')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                    @enderror
                </select>     

            <button  id="ajouter-service" type="submit" class="btn btn-primary">
                <i class='bx bxs-comment-add nav_icon'></i>
            </button>
        </div>
    <script>
    
    
        $(function() {
            // Tableau associatif pour faire correspondre chaque département à ses services correspondants
        //    var ajout =  prompt("Entrez le nom du nouveau service pour le département '" + Depar + "' :");
        
            var departementServices = {
                'Administratif et Financier':['Achat','Controle de Gestion','Comptabilite','Approvisionnem','Tresorerie','Audit Interne',],
                'Commercial': ['admin des ventes', 'gestion des ventes', 'marketing',],
                'Ressources Humaines': ['prestation sociales', 'paie', 'médical',],
                'Fabrication':['Conditionnement','Laboratoire','Ordonnancement','Process',],
                'Maintenance':['Maint Industrielle','Maint Parc Auto','Traveaux Neufs','Ordonnancement',],
                'Production':['Collect Lait','Vulgarisation','Fabrication AB',],
                'Qualite':['Controle MP et EM','Gestion Qualite','Hygiene',],
                'Developpement et Recherche':['Dvlp Nouveau','Recherche',],
                'Informatique':['Developpement','Maintenance',],
            };
    
            // Fonction pour mettre à jour les options du select pour les services
            function updateServiceOptions() {
            // Récupérer la valeur sélectionnée dans le select pour les départements
                var Depar  = $('#Depar').val();
    
            // Vider les options existantes du select pour les services
                $('#Service').empty();
    
            // Ajouter les options correspondantes au département sélectionné
                $.each(departementServices[Depar], function(index, Service) {
                    $('#Service').append('<option value="' + Service + '">' + Service + '</option>');
                });
            }
            // Mettre à jour les options du select pour les services au chargement de la page
            updateServiceOptions();
    
            // Mettre à jour les options du select pour les services à chaque changement dans le select pour les départements
            $('#Depar').change(function() {
                updateServiceOptions();
            });
            // Fonction pour afficher une boîte de dialogue pour ajouter un nouveau service
            function ajouterService() {
                // Récupérer la valeur sélectionnée dans le select pour les départements
                var Depar = $('#Depar').val();
    
                // Afficher une boîte de dialogue pour saisir le nom du nouveau service
                var nouveauService = prompt("Entrez le nom du nouveau service pour le département '" + Depar + "' :");
    
                // Ajouter le nouveau service à la liste des services pour le département sélectionné
    
                if (nouveauService != null && nouveauService != '') {
                    departementServices[Depar].push(nouveauService);
                    updateServiceOptions();
                }
    
            }
            // Ajouter un écouteur d'événements pour le bouton "Ajouter un service"
            $('#ajouter-service').click(function() {
                ajouterService();
            });
        });
    
    </script>
            <div>
                <label>{{ __('TacheEffec') }}</label>
                <div>
                    <input type="date" name="TacheEffec" class="form-control mb-1 @error('TacheEffec') is-invalid @enderror">
                </div>
                @error('TacheEffec')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Commantaire') }}</label>
                <div>
                    <textarea name="Commantaire"class="form-control mb-1 @error('Commantaire') is-invalid @enderror" id="Commantaire" cols="30" rows="10"></textarea>
                    
                </div>
                @error('Commantaire')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
      
            <button class="btn btn-success mt-1" type="submit">Créer</button>

        </div>
        </form>
    </div>
</div>
@endsection
