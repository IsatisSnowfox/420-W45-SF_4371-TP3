# Travail Pratique 3 - Travail sur serveur Web
## Description du projet
Travail pratique consistant à mettre en place deux serveurs web Apache, chacun aillant leur propre base de donnée et serveur php.

Un serveur proxy nginx sert pour le balancement de charge entre les deux serveurs.
## Explication du fonctionnement
Lorsque le serveur nginx reçoit une demande de ressource (lorsque l'utilisateur se connecte au site web), il va lire la liste des serveurs dans son fichier de configuration (serveur et serveur2 dans notre cas) et va rediriger la demande de l'utilisateur au prochain serveur (selon le principe de ronde robine dans notre, cas. C'est à dire qu'il va les faire un à un).

Ensuite le serveur apache (httpd) va utiliser le serveur PHP pour interpréter les fichiers php (et éventuellement se connecter au serveur MariaDB) et les traduire en html. Le serveur apache va ensuite servir le fichier html au client.
## Liste des commandes
Toutes les commandes ```docker compose``` doivent être lancées dans le dossier contenant le fichier docker-compose.yaml 
 - **Lancement du projet** : ```docker compose up -d --build```
 
 La commande build le projet et le lance en mode détaché (vous n'aurez pas )
 - **Consultation des logs** : ```docker compose logs```

 La commande affiche les logs du serveur. Pour avoir les logs qui s'affichent en continu sans avoir besoin de retaper la commande, vous pouvez utiliser l'option -f
 - **Consultation des ports ouverts** : ```ss -tnap```

 La commande affiche les ports ouverts en tcp utilisées par les applications (-u à la place de -t pour udp). 

 L'option -a sert à afficher les ports écoutés et non écoutés.
 L'option -n sert à afficher les valeurs numériques plutôt que lisible par l'humain.
 L'option -p sert à afficher les processus qui utilisent les ports.
 
 - **Nettoyage des conteneurs** : ```docker compose down```

 La commande sert à arrêter et supprimer les conteneurs lancés avec docker compose.
 
 Si pour une raison quelconque certains conteneurs n'ont pas été supprimés, vous pouvez utiliser la commande ```docker compose rm```s
