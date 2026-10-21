# Session 06 - Défi : publier et dépublier

La route posts.publication apparaît dans route:list avec le verbe PATCH : oui / non
oui
Le bouton affiche « Publier » sur un brouillon et « Dépublier » sur un article publié : oui / non
oui
published_at est rempli à la publication et vidé à la dépublication : oui / non
oui
Le nouveau test passe et php artisan test est vert : oui / non
oui

Pourquoi PATCH et pas PUT ni GET pour ce bouton ?
PATCH modifie une partie de la ressource (un seul champ ici) ; PUT remplace l'ensemble des champs du formulaire. Un GET ne doit jamais modifier de données.