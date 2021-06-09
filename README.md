# laravel-exam

## Sujet de l'examen
Votre tâche est de modifier l'application comme suit :

### Ajouter une vue qui permet de visualiser le détail d'une seule tâche – actuellement cette vue est appelé au clic sur 'Show task', mais elle ne marche pas. Cela comprend:
- Une nouvelle vue + une nouvelle route
- Récupérer l'ID de la tâche depuis l'URL et afficher la tâche correspondante. Par exemple l'URL /task/4 affiche le détail de la tache 4.
- Afficher le titre de la tâche
- Afficher la description
- Afficher la date d'ajout (created_at dans la base de données). 
- Formatter la date comme 'le 5 juin 2020' à l'aide de la fonction '->format()' dans laravel. Astuce: '$task->created_at' retourne automatiquement une instance de Carbon: https://carbon.nesbot.com/docs/

(12 points)

### Ajouter un bouton qui, au clic, supprime la tâche
- Il faut appeler une nouvelle route + vue + controller pour la 'suppression' (La suppression aura lieu dans le controlleur, à l'aide de la méthode $task->delete(): https://laravel.com/docs/8.x/eloquent#deleting-models)
- Afficher, après la supression, une vue qui contient un message de suppression réussie.

(4 points)

### Dupliquer la vue 'index' actuelle, pour en créer une qui affiche l'ensemble des tâches comme actuellement, mais en ordre alphabetique.

(3 points)

### Rendez-le moi disponible via un Repository Git public (GitHub, Bitbucket...)

(1 point). 
