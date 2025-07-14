## V1
- base [4205] ok
    - Table
        membre
        catégorie objet
        objet
        image objet
        emprunt

    - Insérer données
        4 membres
        4 catégories (esthétique, bricolage, mécanique, cuisine)
        10 objets par membre à répartir sur les catégories
        10 emprunts

- pages à créer
    - Login & inscription [4127] ok
        - page (2) + css
        - fonction
            login (email + mdp)
            inscription (nom + date de naissance + genre + email + ville + mdp)
    - Liste des objets (avec date de retour si emprunt en cours) [4205]
        - page + css
        - fonction
            liste des objets 
            (nom_objet;nom_categorie,nom_membre,img_objet,date_retour)
        -base
            view v_emp_obj_categorie
            view v_emp_obj_membre
            view v_emp_obj_membre_emprunt

    - Filtre par catégorie [4205] ok

## V2
- css/design [4127]
- pages à créer
    - ajout objet [4127]
        - formulaire - get
            (nom objet, catégories, images)
            images peuvent être supprimer + image par défaut si vide
        - fonction
    - fiche objet [4127]
        - page + css
            image principale + autres images
            historique d'emprunt
        - fonction
    - critère de recherche [4205]
        - formulaire - get
            (catégorie, nom de l'objet, disponible?)
        - page de résultat
        - fonction
    - fiche membre [4205] ok
        -page
            info sur le membre
            liste des objets du membres regroupés par catégorie
        - fonction
            getMembre(id)
            getObjetMembre (idmembre)

